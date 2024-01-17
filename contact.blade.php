

@extends('frontend.layouts.main')
@section('page-content')




<div class="primeitworldPage">
    <div class="pageHeader">
        <div class="container narrow">
            <h1 class="heading">যোগাযোগ</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container narrow">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact_content_wrap">
                        <div class="contactSectionTitle">
                            <h2>যোগাযোগ করুন</h2>
                            <!-- <div class="hd_bar"></div> -->
                        </div>
                        <div class="contact_info">
                            <div class="item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="cont">
                                        <h4>কার্যালয়</h4>
                                        <p>  {{$Setting->address}}</p>
                                    </div>
                                </div><div class="item">
                                    <i class="fas fa-phone"></i>
                                    <div class="cont">
                                        <h4>ফোন নাম্বার</h4>
                                        <p>{{$Setting->phone}}</p>
                                    </div>
                                </div><div class="item">
                                    <i class="far fa-envelope-open"></i>
                                    <div class="cont">
                                        <h4>ইমেইল</h4>
                                        <p>{{$Setting->email}}</p>
                                    </div>
                                </div>                        </div>
                        <div class="social_contact ">
                            <ul>
                                <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li><li><a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li><li><a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>                        
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact_form_wrap">
                        <div class="contactSectionTitle">
                            <h2>আমাদের বার্তা পাঠান</h2>
                            <!-- <div class="hd_bar"></div> -->
                        </div>
                        <div class="contact_form"><div class="wpforms-container wpforms-container-full wpforms-render-modern" id="wpforms-171"><form id="wpforms-form-171" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="171" method="post" enctype="multipart/form-data" action="/contact-us/" data-token="8770011f03b1b7df2190231fa82f0e10" novalidate="novalidate"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-hidden" id="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</div><div class="wpforms-field-container"><div id="wpforms-171-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-171-field_0" aria-hidden="false">Name <span class="wpforms-required-label" aria-hidden="true">*</span></label><input type="text" id="wpforms-171-field_0" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][0]" placeholder="আপনার নাম" aria-errormessage="wpforms-171-field_0-error" required=""></div><div id="wpforms-171-field_1-container" class="wpforms-field wpforms-field-email wpforms-one-half wpforms-first" data-field-id="1"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-171-field_1" aria-hidden="false">Email <span class="wpforms-required-label" aria-hidden="true">*</span></label><input type="email" id="wpforms-171-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="আপনার ইমেইল" spellcheck="false" aria-errormessage="wpforms-171-field_1-error" required=""></div><div id="wpforms-171-field_5-container" class="wpforms-field wpforms-field-text wpforms-one-half" data-field-id="5"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-171-field_5" aria-hidden="false">Phone <span class="wpforms-required-label" aria-hidden="true">*</span></label><input type="text" id="wpforms-171-field_5" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][5]" placeholder="আপনার ফোন নাম্বার" aria-errormessage="wpforms-171-field_5-error" required=""></div><div id="wpforms-171-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-171-field_3" aria-hidden="false">Subject <span class="wpforms-required-label" aria-hidden="true">*</span></label><input type="text" id="wpforms-171-field_3" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][3]" placeholder="ম্যাসেজের বিষয়" aria-errormessage="wpforms-171-field_3-error" required=""></div><div id="wpforms-171-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-171-field_2" aria-hidden="false">Message <span class="wpforms-required-label" aria-hidden="true">*</span></label><textarea id="wpforms-171-field_2" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][2]" placeholder="আপনার ম্যাসেজ..." aria-errormessage="wpforms-171-field_2-error" required=""></textarea></div></div><!-- .wpforms-field-container --><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="171"><input type="hidden" name="wpforms[author]" value="2"><input type="hidden" name="wpforms[post_id]" value="353"><button type="submit" name="wpforms[submit]" id="wpforms-submit-171" class="wpforms-submit pitwBtn" data-alt-text="Sending..." data-submit-text="ম্যাসেজ পাঠান" aria-live="assertive" value="wpforms-submit">ম্যাসেজ পাঠান</button><img src="https://dhsbirganj.edu.bd/wp-content/plugins/wpforms/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="Loading"></div></form></div>  <!-- .wpforms-container --></div>
                    </div>
                </div>
            </div>
            <div class="google_map">
                <iframe src="https://www.google.com/maps/embed?pb=" width="" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
                    
			
@endsection