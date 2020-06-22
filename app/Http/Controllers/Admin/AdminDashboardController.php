<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DataTables;
class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function studentListTable()
    {   
        return view('admin.studentlist');
    }

    public function studentList()
    {
        return datatables()->of(User::where('status', 2)->orderBy('created_at', 'DESC')->get())
        ->addIndexColumn()
        ->addColumn('action', function($row){
            $btn = '<a href="'.route('admin.show', ['id' => encrypt($row->id)]).'" class="btn btn-primary">View</a>
                    <a href="'.route('admin.edit', ['id' => encrypt($row->id)]).'" class="btn btn-warning" target="_blank">Edit</a> 
            ';
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function show($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $single_student = User::where('id', $id)->first();
        return view('admin.show', compact('single_student'));
    }

    public function edit($aId)
    {
        try {
            $id = decrypt($aId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        
        $single_student = User::where('id', $id)->first();
        return view('admin.update', compact('single_student'));
    }
}
