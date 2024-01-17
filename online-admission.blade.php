

@include('frontend.layouts.header')
@include('frontend.layouts.sections.nav')

<!-- Main Container Starts -->
<div class="container px-md-0 main-container">
    <h3 class="main-heading2 mt-0">অনলাইন ভর্তি</h3>
    <p><br></p><h4 class="page_hadding" style="overflow-wrap: break-word; font-family: SolaimanLipiNormal; font-weight: 700; color: rgb(2, 15, 116); margin: 0px 0px 15px; font-size: 22px; border-bottom: 1px solid rgb(185, 185, 185); border-top: 1px solid rgb(185, 185, 185); padding-bottom: 10px; padding-top: 10px; text-align: center;">ভর্তি তথ্য</h4><p style="overflow-wrap: break-word; text-align: justify; font-family: SolaimanLipiNormal; font-size: 17px;"></p><p style="overflow-wrap: break-word; text-align: justify; font-family: SolaimanLipiNormal; font-size: 17px;">এতদ্বারা দাখিল নবম শ্রেনীতে ভর্তি ইচ্ছুক শিক্ষার্থীদের জানানো যাচ্ছে যে, আগামী ১৫.১২.২০২২ইং থেকে ২৫.১২.২০২২ তারিখের মধ্য মঙ্গলকান্দি ইসলামিয়া কামিল (এমএ) মাদ্রাসায় নবম শ্রেণীতে নতুন ছাত্র/ছাত্রীদের ভর্তি কার্যক্রম চলবে। যারা জেএসসি পরীক্ষায় ২.০ পেয়েছে কেবল তারাই আবেদন করতে পারবে। আগ্রহীরা অনলাইনে ভর্তি ফরম পূরণ করে&nbsp; সরাসরি অফিসে ভর্তি ফি জমা দিয়ে ভর্তি</p><p style="overflow-wrap: break-word; text-align: justify; font-family: SolaimanLipiNormal; font-size: 17px;">নিশ্চিত করতে হবে।</p><p style="overflow-wrap: break-word; text-align: justify; font-family: SolaimanLipiNormal; font-size: 17px;">ভর্তি ফি : ১৫০০ টাকা</p><p style="overflow-wrap: break-word; text-align: justify; font-family: SolaimanLipiNormal; font-size: 17px;">অধ্যক্ষ<br>ইসলামিয়া কামিল মাদ্রাসা।<br>তিতাস,কুমিল্লা।<br></p>

    <div class="box2 form-box">
        <div class="tabs-panel tabs-product">
         
                    <form action="{{route('studentStore')}}" class="form-horizontal frm-submit-data" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf       
                                                <div class="headers-line mt-3"><i class="fas fa-school"></i> Academic Details</div>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Class <span class="required">*</span></label>
                                    <select name="class" class='form-control' data-plugin-selectTwo onchange='getSectionByClass(this.value)'>
                                        <option value="" selected="selected">Select</option>

                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                        <option value="9">Nine</option>
                                        <option value="10">Ten</option>
                                    </select>
                                        <span class="error"></span>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Board Registration</label>
                                    <input type="text" name="board_rej" class='form-control' />
                                           
                                    <span class="error"></span>
                                </div>
                        </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="admission_date">Admission Date</label>
                                    <input type="text" class="form-control" data-plugin-datepicker name="admission_date" readonly value="2023-10-22" id="admission_date" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>

                         </div>
                        

                        <div class="headers-line mt-3"><i class="fas fa-user-graduate"></i> Student Details</div>
                        <div class="row">
                            <div class="col-md-4 mb-sm">
                                <div class="form-group">
                                    <label class="control-label">Name English <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="name_en" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-sm">
                                <div class="form-group">
                                    <label class="control-label">Name Bangla</label>
                                    <input type="text" class="form-control" name="name_bn" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-sm">
                                <div class="form-group">
                                    <label class="control-label">Gender</label>
                                    <select name="gender" class='form-control' data-plugin-selectTwo >
                                        <option value="" selected="selected">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                         </div>

                      

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_no">Student Mobile No</label>
                                    <input type="text" name="student_mobile" class="form-control" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthday">Birthday</label>
                                    <input type="text" class="form-control" data-plugin-datepicker name="birthday"  value="" id="datepicker" autocomplete="on" />
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-sm">
                                <div class="form-group">
                                    <label class="control-label">Religion</label>
                                    <select name="religion" class='form-control' data-plugin-selectTwo >
                                        <option value="" selected="selected">Select</option>
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="others">Others</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Present Address</label>
                                    <textarea class="form-control" name="present_address" rows="2" placeholder="Enter Present Address"></textarea>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Permanent Address</label>
                                    <textarea class="form-control" name="permanent_address" rows="2" placeholder="Enter Permanent Address"></textarea>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                                               

                        <!--custom fields details-->
                        <div class="row" id="customFields">
                          

                        <div class="row">
                            <div class="col-md-12 mb-sm">
                                <div class="form-group">
                                    <label for="message">Student Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="student_photo" class="custom-file-input" id="photoFile" accept=".jpg,.jpeg,.png,.bmp" onchange="changeCustomUploader(this)">
                                        <label class="custom-file-label" for="photoFile">Choose Photo file...</label>
                                    </div>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="headers-line mt-3"><i class="fas fa-user-tie"></i> Guardian Details</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Guardian Name</label>
                                    <input type="text" class="form-control" name="guardian_name" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Relation</label>
                                    <input type="text" name="guardian_relation" class="form-control" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                                               
                  
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Guardian Mobile No</label>
                                    <input type="text" class="form-control" name="guardian_mobile_no" value="" autocomplete="off" />
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="headers-line mt-3"><i class="far fa-file-archive"></i> Upload Documents</div>
                        <div class="form-group">
                            <label for="message">Upload Documents</label>
                            <div class="custom-file">
                                <input type="file" name="upload_documents" class="custom-file-input" id="documentFile" onchange="changeCustomUploader(this)">
                                <label class="custom-file-label" for="documentFile">Choose file...</label>
                            </div>
                            <span class="error"></span>
                        </div>
                        

                        <button type="submit" class="btn btn-1" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"><i class="fas fa-plus-circle"></i> Submit</button>
                    </form></div>
            </div>
        </div>
 
    </div>
</div>			
		
	@include('frontend.layouts.footer')