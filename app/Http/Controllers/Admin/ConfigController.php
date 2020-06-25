<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gallery;
use App\Notification;
use Intervention\Image\Facades\Image;

class ConfigController extends Controller
{
    public function addGalleryForm()
    {
        return view('admin.gallery.add_gallery');
    }

    public function addGallery(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/gallery/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).uniqid().".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);

            //Product Thumbnail
            $destination = base_path().'/public/gallery/thumb';
            $img = Image::make($image->getRealPath());
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination.'/'.$image_name); 

            Gallery::create([
                'image' => $image_name,
            ]);
        }

        return redirect()->back()->with('message','Image Uploaded Successfully');
    }


    public function galleryList()
    {
        $gallery = Gallery::orderBy('id','desc')->paginate(20);
        return view('admin.gallery.gallary_list',compact('gallery'));
    }

    public function galleryDelete($id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->back();
    }

    public function addNotificationForm()
    {
        return view('admin.notification.add_notification');
    }

    public function addNotification(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'pdf' => 'required|mimes:pdf,PDF|max:1024',
        ]);

        $notification= new Notification();

        $notification->title  = $request->input('title');
        if($request->hasfile('pdf'))
        {
            $extension = $request->file('pdf')->getClientOriginalExtension();
            $filename = md5(date('now').time()).uniqid().".".$extension;
            $fullPath = $filename;

            $request->file('pdf')->move(
                base_path() . '/public/notification/', $filename
            );
            $notification->pdf = $fullPath;
        }
        if ($notification->save())
        {
            return redirect()->back()->with('message','Image Uploaded Successfully');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function notificationList()
    {
        $notifications = Notification::orderBy('id','desc')->paginate(20);
        return view('admin.notification.notification_list',compact('notifications'));
    }

    public function notificationDelete($id)
    {
        Notification::where('id',$id)->delete();
        return redirect()->back();
    }
}
