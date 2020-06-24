<script>
    $(document).ready(function(){
        // for Course Selection
        $("input[name='course-type']").click(function () {
            $('#h-course').css('display', ($(this).val() === 'h_course') ? 'inline-flex':'none');
            $('#r-course').css('display', ($(this).val() === 'r_course') ? 'inline-flex':'none');
        });
        
        // For Legal Gurdian
        $("input[name='l_guardian']").click(function () {
            var l_guardian_val = $(this).val();
            var l_guardian_html = `<div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">12.a. Legal Guardian's Name <span style="color:red"><b> * </b></span></label>
                                        <input name="g_name" value="{{old("g_name")}}" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">12.b. Legal Guardian's Relationship <span style="color:red"><b> * </b></span></label>
                                        <input name="g_relation" value="{{old("g_relation")}}" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">12.b. Legal Guardian's Pincode <span style="color:red"><b> * </b></span></label>
                                        <input name="l_pincode" value="{{old("l_pincode")}}" type="number" class="form-control" required>
                                    </div>
                                </div>`;
            if (l_guardian_val == 'yes') {
                $("#l_guardian_div").html(l_guardian_html);
                $("#l_guardian_div").show();
            } else {
                $("#l_guardian_div").html('');
                $("#l_guardian_div").hide();                
            }
        });
        
        // For Honours Course Compulsary Subject selection
        $(".h-comp-sub-s").change(function(){                                     		
            $(".h-comp-sub-s").prop('checked',false);    
            $(this).prop('checked',true);
        });
        
        $("input.r-ele-sub:checkbox").click(function() {
            var bol = $("input.r-ele-sub:checkbox:checked").length >= 2;     
            $("input.r-ele-sub:checkbox").not(":checked").attr("disabled",bol);
        });


        // For Regular Course Compulsary Subject selection
        $(".r-comp-sub-s").change(function(){                                     		
            $(".r-comp-sub-s").prop('checked',false);    
            $(this).prop('checked',true);
        });
        // $("#mil").css('display', "none");
        // $("#mil_ch").click(function () {
        // 	$('#mil').css('display', ($(this).val() ==='MIL') ? 'inline-flex': '');
        // });
        // $("#mil").css('display', "none");
        // $("#mil_chk").click(function () {
        // 	$('#mil').css('display', ($(this).val() ==='MIL') ? 'inline-flex': '');
        // });

        // Subject Adding Added By Saddam
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper   		= $(".subjects"); //Fields wrapper
        var add_button      = $("#add"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ 
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<div class="form-row col-md-12 subjects">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group mb-2">
                                                    <label for="hs-sub6-mark">20.a. Subject${x} Name <span style="color:red"><b> * </b></span></label>
                                                    <input name="subject_name[]" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="form-group mb-2">
                                                    <label for="hs-sub6--mark">20.b. Full Mark <span style="color:red"><b> * </b></span></label>
                                                    <input name="full_marks[]" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="form-group mb-2">
                                                    <label for="hs-sub6-mark">20.c. Mark Scored <span style="color:red"><b> * </b></span></label>
                                                    <input name="marks_scored[]" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6 remove_field">
                                                <div class="form-group mb-2 mt-3">
                                                    <br>
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>`); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })

        // var i = 1;
        
    });

    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
        }

        function myTest() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
        }		



        function getCheckedGroupBoxes(data) {
            if (data == 'MIL') {
                var html = `<select name="mil_language" required>
                                    <option value="">Select Language</option>
                                    <option value="Assamese">Assamese</option>
                                    <option value="Hindi">Hindi</option>
                                </select>`;
                $("#mil_div").html(html);
                $("#mil_div").show();
            }else{
                $("#mil_div").html('');
                $("#mil_div").hide();
            }
        }		

        function getCHonorsLang(data) {
            if (data == 'MIL') {
                var html = `<select name="mil_language" required>
                                    <option value="">Select Language</option>
                                    <option value="Assamese">Assamese</option>
                                    <option value="Hindi">Hindi</option>
                                </select>`;
                $("#mil_div_honors").html(html);
                $("#mil_div_honors").show();
            }else{
                $("#mil_div_honors").html('');
                $("#mil_div_honors").hide();
            }
        }	

</script>