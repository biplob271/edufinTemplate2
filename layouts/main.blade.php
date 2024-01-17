                                        @php
                                            $Setting=App\Models\Setting::get()->first();
                                            $Post=App\Models\Post::all();
                                            $navSinfo=App\Models\Category::get();
											$Notice=App\Models\Notice::get();
                                        @endphp  
                                        
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Debipur-High-School-Logo.png" type="image/png">  

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<title>প্রচ্ছদ -  {{$Setting->site_name}}</title>
	

<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://cdn.codersys.com/edufin/tem2/css/style.min.css?ver=6.4.2' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='codersys-bootstrap-css' href='https://cdn.codersys.com/edufin/tem2/css/bootstrap.min.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet'  id='animate-css' href='https://cdn.codersys.com/edufin/tem2/css/animate.min.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-magnific-popup-css' href='https://cdn.codersys.com/edufin/tem2/css/magnific-popup.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-owl.carousel-css' href='https://cdn.codersys.com/edufin/tem2/css/owl.carousel.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-fontawesome-css' href='https://cdn.codersys.com/edufin/tem2/css/fontawesome.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-slick-css' href='https://cdn.codersys.com/edufin/tem2/css/slick.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-slick-theme-css' href='https://cdn.codersys.com/edufin/tem2/css/slick-theme.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='codersys-style-css' href='https://cdn.codersys.com/edufin/tem2/css/codersys-style.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='https://cdn.codersys.com/edufin/tem2/css/style.css?ver=6.4.2' type='text/css' media='all' />
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>

	<style type="text/css">
		.ajax-calendar{
			position:relative;
		}

		#bddp_ac_widget th {
		background: none repeat scroll 0 0 #2cb2bc;
		color: #FFFFFF;
		font-weight: normal;
		padding: 5px 1px;
		text-align: center;
		 font-size: 16px;
		}
		#bddp_ac_widget {
			padding: 5px;
		}
		
		#bddp_ac_widget td {
			border: 1px solid #CCCCCC;
			text-align: center;
		}
		
		#my-calendar a {
			background: none repeat scroll 0 0 #008000;
			color: #FFFFFF;
			display: block;
			padding: 6px 0;
			width: 100% !important;
		}
		#my-calendar{
			width:100%;
		}
		
		
		#my_calender span {
			display: block;
			padding: 6px 0;
			width: 100% !important;
		}
		
		#today a,#today span {
			   background: none repeat scroll 0 0 #2cb2bc !important;
			color: #FFFFFF;
		}
		#bddp_ac_widget #my_year {
			float: right;
		}
		.select_ca #my_month {
			float: left;
		}

	</style>
	<style id="wpforms-css-vars-root">
				:root {
					--wpforms-field-border-radius: 3px;
--wpforms-field-background-color: #ffffff;
--wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
--wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
--wpforms-label-color: rgba( 0, 0, 0, 0.85 );
--wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
--wpforms-label-error-color: #d63637;
--wpforms-button-border-radius: 3px;
--wpforms-button-background-color: #066aab;
--wpforms-button-text-color: #ffffff;
--wpforms-field-size-input-height: 43px;
--wpforms-field-size-input-spacing: 15px;
--wpforms-field-size-font-size: 16px;
--wpforms-field-size-line-height: 19px;
--wpforms-field-size-padding-h: 14px;
--wpforms-field-size-checkbox-size: 16px;
--wpforms-field-size-sublabel-spacing: 5px;
--wpforms-field-size-icon-size: 1;
--wpforms-label-size-font-size: 16px;
--wpforms-label-size-line-height: 19px;
--wpforms-label-size-sublabel-font-size: 14px;
--wpforms-label-size-sublabel-line-height: 17px;
--wpforms-button-size-font-size: 17px;
--wpforms-button-size-height: 41px;
--wpforms-button-size-padding-h: 15px;
--wpforms-button-size-margin-top: 10px;

				}
			</style>    <style>
        body{ font-family: var(--ff5); }
            </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="home page-template page-template-codersys-templates page-template-pitw-home page-template-codersys-templatespitw-home-php page page-id-6 wp-embed-responsive" >
<div class="PrimeItWorld_site_wrap">
<header class="PrimeItWorld__header">
    <div class="headerNoticeBox">
        <div class="container">
            <div class="headerNotice">
                <div class="headerNoticHeading"><span>নোটিশ:</span></div>
                <div class="headerNoticContent">
                    <marquee direction="left" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
                    @foreach($Notice as $notice)		
					
                            <a href="/notice/{{$notice->id}}"><span>১৩ সেপ্টেম্বর, ২০২৩</span>{{$notice->title}}</a>
						@endforeach		

                                                 
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="headerTopBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="headerContact">
                        <a href="tel:{{$Setting->phone}}" title="Phone" target="_blank" rel="noopener noreferrer"><i class="fas fa-phone"></i> {{$Setting->phone}}</a><a href="mailto:{{$Setting->email}}" title="Email" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope-open"></i> {{$Setting->email}}</a>                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                    <ul class="headerSocial">
                        <li class="sclIcon"><a href="" title="Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li><li class="sclIcon"><a href="" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li><li class="sclIcon"><a href="" title="Insatragram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>                        <li class="apply_button"><a href="/admission">Apply Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="headerMain">
        <div class="container">
            <div class="headerMainInner">
                <div class="headerLogo">
                    <div class="textLogo">
                        <div class="schoolLogo">
                            <a href="/"><img src="/uploads/{{$Setting->image}}" alt="/uploads/{{$Setting->site_name}}"></a>
                        </div>
                        <div class="schoolName">
                            <h3>{{$Setting->site_name}}</h3>
                            <h4>{{$Setting->site_name}}</h4>
                        </div>
                        <div class="govtLogo">
                            <img src="https://cdn.codersys.com/edufin/tem2/img/govtlogo.png" alt="">
                        </div>
                    </div>                    
                </div>
                <a id="toggle_mobile_menu" class="toggle_mobile_menu"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
    <nav class="PrimeItWorld_nav main-nav-wrap">
        <div class="container"><ul id="menu-nav-menu" class="navMenu"><li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-31"><a href="/" aria-current="page">প্রচ্ছদ</a></li>
<li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237"><a href="#">প্রতিষ্ঠান সম্পর্কে</a>
<ul class="sub-menu">
	<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="/pages/block1">প্রতিষ্ঠান পরিচিতি</a></li>
	<li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="/pages/block2">সভাপতির বাণী</a></li>
	<li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="/pages/block3">প্রধান শিক্ষকের বাণী</a></li>
</ul>
</li>
<li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42"><a href="#">প্রশাসন</a>
<ul class="sub-menu">
	<li id="menu-item-181" class="menu-item menu-item-type-post_type_archive menu-item-object-teacher menu-item-181"><a href="/administration/teacher">শিক্ষকবৃন্দ</a></li>
	<li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-division menu-item-75"><a href="/administration/committee">ম্যানেজিং কমিটি</a></li>
	<li id="menu-item-72" class="menu-item menu-item-type-taxonomy menu-item-object-division menu-item-72"><a href="/administration/staff">কর্মকর্তা কর্মচারী</a></li>
	
</ul>
</li>
<li id="menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43"><a href="#">শিক্ষার্থীদের তথ্য</a>
<ul class="sub-menu">

@foreach($navSinfo as $item)
	<li id="menu-item-209" class="menu-item menu-item-type-taxonomy menu-item-object-class menu-item-209"><a href="/student/class={{$item->slug}}">{{$item->name_bn}}</a></li>
	
 @endforeach   
    
</ul>
</li>
<li id="menu-item-34" class="menu-item menu-item-type-post_type_archive menu-item-object-notice menu-item-34"><a href="/notice">নোটিশ</a></li>
<li id="menu-item-49" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-49"><a href="#">ভর্তি</a>
<ul class="sub-menu">
	<li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254"><a href="#">ভর্তির তথ্য</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="/admission/">অনলাইন ভর্তি</a></li>

</ul>
</li>
<li id="menu-item-40" class="menu-item menu-item-type-post_type_archive menu-item-object-routine menu-item-40"><a href="/page/routine">রুটিন</a></li>
<li id="menu-item-320" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-320"><a href="#">রেজাল্ট</a>
<ul class="sub-menu">
	<li id="menu-item-321" class="menu-item menu-item-type-post_type_archive menu-item-object-results menu-item-321"><a href="/page/result">পরীক্ষার/শ্রেণী ভিত্তিক</a></li>
	<li id="menu-item-322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-322"><a href="#">রেজাল্ট সার্চ</a></li>
</ul>
</li>
<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="/blog">সাম্প্রতিক খবর</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-44"><a href="#">গ্যালারি</a>
<ul class="sub-menu">
	<li id="menu-item-159" class="menu-item menu-item-type-post_type_archive menu-item-object-video menu-item-159"><a href="/gallery/video">ভিডিও গ্যালারি</a></li>
	<li id="menu-item-160" class="menu-item menu-item-type-post_type_archive menu-item-object-photo menu-item-160"><a href="/gallery/photo">ফটোগ্যালারি</a></li>
</ul>
</li>
<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="/contact-us">যোগাযোগ</a></li>
</ul></div>    </nav>
    <div id="mobile-menu-overlay"> <a class="toggle_mobile_menu"><i class="fa-solid fa-xmark"></i></a></div>
    <div class="mobile_navigation">
        <div class="navigarionHeader">
            <a class="logo" href="/"><img src="/uploads/{{$Setting->image}}" alt="{{$Setting->site_name}}"></a>
            <h3>{{$Setting->site_name}}</h3>
        </div>
        
        <div class="mobileNavigation"><ul id="menu-nav-menu-1" class="mobile_nav_menu"><li id="menu-item-31"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item"><a href="/">প্রচ্ছদ</a></li>
<li id="menu-item-237"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">প্রতিষ্ঠান সম্পর্কে</a><span></span>
<ul class="sub-menu">
	<li id="menu-item-32"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/pages/block1">প্রতিষ্ঠান পরিচিতি</a></li>
	<li id="menu-item-238"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/pages/block2">সভাপতির বাণী</a></li>
	<li id="menu-item-239"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/pages/block3">প্রধান শিক্ষকের বাণী</a></li>
</ul>
</li>
<li id="menu-item-42"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">প্রশাসন</a><span></span>
<ul class="sub-menu">
	<li id="menu-item-181"  class="menu-item menu-item-type-post_type_archive menu-item-object-teacher"><a href="/administration/teacher">শিক্ষকবৃন্দ</a></li>
	<li id="menu-item-75"  class="menu-item menu-item-type-taxonomy menu-item-object-division"><a href="/administration/committee">ম্যানেজিং কমিটি</a></li>
	<li id="menu-item-72"  class="menu-item menu-item-type-taxonomy menu-item-object-division"><a href="/administration/staff">কর্মকর্তা কর্মচারী</a></li>

</ul>
</li>
<li id="menu-item-43"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">শিক্ষার্থীদের তথ্য</a><span></span>
<ul class="sub-menu">
@foreach($navSinfo as $item)
	<li id="menu-item-209" class="menu-item menu-item-type-taxonomy menu-item-object-class menu-item-209"><a href="/student/class={{$item->slug}}">{{$item->name_bn}}</a></li>
	
 @endforeach   
</ul>
</li>
<li id="menu-item-34"  class="menu-item menu-item-type-post_type_archive menu-item-object-notice"><a href="/notice">নোটিশ</a></li>
<li id="menu-item-49"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">ভর্তি</a><span></span>
<ul class="sub-menu">
	<li id="menu-item-254"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">ভর্তির তথ্য</a></li>
	<li id="menu-item-253"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/admission">অনলাইন ভর্তি</a></li>
	
</ul>
</li>
<li id="menu-item-40"  class="menu-item menu-item-type-post_type_archive menu-item-object-routine"><a href="/page/routine">রুটিন</a></li>
<li id="menu-item-320"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">রেজাল্ট</a><span></span>
<ul class="sub-menu">
	<li id="menu-item-321"  class="menu-item menu-item-type-post_type_archive menu-item-object-results"><a href="/page/result">পরীক্ষার/শ্রেণী ভিত্তিক</a></li>
	<li id="menu-item-322"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">রেজাল্ট সার্চ</a></li>
</ul>
</li>
<li id="menu-item-48"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/blog">সাম্প্রতিক খবর</a></li>
<li id="menu-item-44"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-children"><a href="#">গ্যালারি</a><span></span>
<ul class="sub-menu">
	<li id="menu-item-159"  class="menu-item menu-item-type-post_type_archive menu-item-object-video"><a href="/gallery/video">ভিডিও গ্যালারি</a></li>
	<li id="menu-item-160"  class="menu-item menu-item-type-post_type_archive menu-item-object-photo"><a href="/gallery/photo">ফটোগ্যালারি</a></li>
</ul>
</li>
<li id="menu-item-33"  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact-us">যোগাযোগ</a></li>
</ul></div>        <div class="navigationFooter">
            <ul class="headerSocial">
                <li class="sclIcon"><a href="" title="Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li><li class="sclIcon"><a href="" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li><li class="sclIcon"><a href="" title="Insatragram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>                <li class="apply_button"><a href="#">Apply Now</a></li>
            </ul>
        </div>
    </div>
</header>
   


    @yield('page-content')









<footer class="PrimeItWorld_footer">
    <div class="footerTop">
        <div class="container">
            <div class="footerWidgetArea">
                <div class="footerWidget footerWidget1">
                    <h3 class="widgetHeading">যোগাযোগের ঠিকানা</h3>
                    <ul class="footerContact">
                        <li><i class="fas fa-phone"></i> <a href="tel:{{$Setting->phone}}" title="Phone" target="_blank" rel="noopener noreferrer">{{$Setting->phone}}</a></li><li><i class="far fa-envelope-open"></i> <a href="mailto:{{$Setting->email}}" title="Email" target="_blank" rel="noopener noreferrer">{{$Setting->email}}</a></li><li><i class="fas fa-map-marker-alt"></i> <a href="#" title="Address" target="_blank" rel="noopener noreferrer">{{$Setting->address}}</a></li>                    </ul>
                </div>
                <div class="footerWidget footerWidget2">
                    <h3 class="widgetHeading">সরাসরি লিঙ্ক</h3>
                    <div class="footerWidgetMenu"><ul id="menu-footer-menu-1" class="footerMenu"><li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="/pages/block1">আমাদের সম্পর্কে</a></li>
<li id="menu-item-50" class="menu-item menu-item-type-post_type_archive menu-item-object-notice menu-item-50"><a href="/notice">নোটিশ</a></li>
<li id="menu-item-51" class="menu-item menu-item-type-post_type_archive menu-item-object-routine menu-item-51"><a href="/page/routine">রুটিন</a></li>
<li id="menu-item-52" class="menu-item menu-item-type-post_type_archive menu-item-object-result menu-item-52"><a href="/page/result">ফলাফল</a></li>
<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="/contact-us">যোগাযোগ</a></li>
</ul></div>                </div>
                <div class="footerWidget footerWidget3">
                    <h3 class="widgetHeading">গুরুত্বপূর্ণ লিঙ্ক</h3>
                    <div class="footerWidgetMenu footerWidgetMenu2"><ul id="menu-footer-menu-2" class="footerMenu footerMenu2"><li id="menu-item-58" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58"><a href="https://bangladesh.gov.bd/index.php">জাতীয় তথ্য বাতায়ন</a></li>
<li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64"><a href="https://www.bangabhaban.gov.bd/">রাষ্ট্রপতির কার্যালয়</a></li>
<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="https://pmo.gov.bd/">প্রধানমন্ত্রীর কার্যালয়</a></li>
<li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55"><a href="https://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>
<li id="menu-item-56" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56"><a href="https://dpe.portal.gov.bd/">প্রাথমিক শিক্ষা অধিদপ্তর</a></li>
<li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57"><a href="https://www.dshe.gov.bd/">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
<li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59"><a href="https://banbeis.gov.bd/">শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো</a></li>
<li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-60"><a href="https://www.educationboardresults.gov.bd/">শিক্ষা বোর্ডের ফলাফল</a></li>
<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="https://bteb.gov.bd/">কারিগরি শিক্ষা বোর্ড</a></li>

</ul></div>                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container">
            <div class="footerBottomInner">
                <p class="copyright"><i class="fa fa-copyright"></i> ২০২4 <a href="/">{{$Setting->site_name}}</a> সর্বস্বত্ব সংরক্ষিত</p>                
                <p class="developer">
                    <span>Developed By:</span>
                    <a href="https://codersys.com/"><img src="https://codersys.com/assets/img/logo.jpg" alt="CoderSys"></a>
                </p>
            </div>
        </div>
    </div>
</footer>
<p class="topbutton"><i class='fa-solid fa-chevron-up'></i></p>
</div>
		<div class='asp_hidden_data' id="asp_hidden_data" style="display: none !important;">
			<svg style="position:absolute" height="0" width="0">
				<filter id="aspblur">
					<feGaussianBlur in="SourceGraphic" stdDeviation="4"/>
				</filter>
			</svg>
			<svg style="position:absolute" height="0" width="0">
				<filter id="no_aspblur"></filter>
			</svg>
		</div>
		<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery-3.6.0.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery-migrate-3.4.0.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/bootstrap.min.js?ver=5.0.1"></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/owl.carousel.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery.magnific-popup.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/slick.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/jquery.bootstrap.newsbox.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/counterup.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/waypoints.min.js?ver=1.0.0" ></script>
<script type="text/javascript" src="https://cdn.codersys.com/edufin/tem2/js/codersys-js.js?ver=1.0.0"></script>
<style></style>
</body>
</html>

