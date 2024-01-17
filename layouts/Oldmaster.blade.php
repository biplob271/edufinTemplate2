                                        @php
                                            $Setting=App\Models\Setting::get()->first();
                                        @endphp  
                                        

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="/">
<title>Home | EduFin | A CMS BY CODERSYS</title>  
      
      
<link rel="icon" href="/assets/img/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon" />       

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<link rel="stylesheet" href="/assets/css/style_red.css">
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='bootstrap-css'  href='/assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='/assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='/assets/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='menu-css'  href='/assets/css/menu.css' type='text/css' media='all' />
<link rel='stylesheet' id='stylesheet-css'  href='/assets/css/stylesheet.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='/assets/css/style.css' type='text/css' media='all' />
<script type='text/javascript' src='/assets/js/jquery.js'></script>
<script type='text/javascript' src='/assets/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>

<style>
   
body {
	width:100%;
	font-family: SolaimanLipiNormal;
	background: url() no-repeat top center;
	font-size: 17px}


.main_website{
	background:#ffffff;
	border-radius:2px;
}
.scrool_1{
	padding:5px;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
	color:#fff;
	font-size:17px;
	text-align:left;
	padding-left:10px;
}	
.catagory_title{
    padding: 7px;
	color:#fff;
	margin-bottom:10px!important;
	font-size:18px;
	font-weight:400;
	margin:0;
	overflow:hidden;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
}	
.catagory_title_5{
    padding: 7px;	
	margin-top:5px!important;
	color:#fff;
	font-size:18px;
	font-weight:400;
	margin:0;
	overflow:hidden;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
}
.social-link ul li a i {
	color: #fff;
	font-size: 16px;
	font-weight: 300;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
	text-align: center;
	width: 33px;
	height: 33px;
	line-height: 33px;
	background:#245406;
}	
.section_2{ 
	background:#609513;
	padding:10px;
}

.root{
	padding:10px;
}								
.root_01{  
	color:#fff;
	font-size:16px;
}
.root_02{
	text-align:right;
	color:#fff;	
	font-size:17px;
}
.root_02 a{
	color:#000;
	font-weight:800;
	text-decoration:none;
}
.root_02 a:hover{
	color:#fff;
}	
.facebook_title{
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
	padding:10px;
	margin-bottom:5px;
}
.fb-root{
	margin-bottom:5px;
}
.facebook_title a{
	color:#fff;
	font-size:16px;
	
}
.contact_us_hadding{
	color:#fff;
	font-size:20px;
	font-weight:;
	text-decoration:none;
	padding:7px;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
}

/*Widget Title=========*/
    .widget_area{ margin:5px 0px 5px 0px;}
    .widget_area li{margin:2px 0px 5px 0px;}
    .widget_area h3{
	padding: 7px;
	color:#fff;
	margin-bottom:10px!important;
	font-size:16px;
	text-align:left;
	margin:0;
	overflow:hidden;
	background: #138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #7bde13, #a91700);
}
    #bs-example-navbar-collapse-1 {
    background-color: #609513;
    font-size: 16px;
    }
    #nav .navbar-default .navbar-nav > li > a{color: #FFFFFF;
        padding: 7px 20px 7px 20px;}
   .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important; 
       margin: 0px;
       background-color: #74010D;}
#nav .navbar-collapse {padding: 0px; border-bottom : 2px solid #74010D;}


	  /* Goto Top============================ */
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #013C57; /* Set a background color */
    color: #fff; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

            
    #myBtn:hover {
    background-color: #013C57; /* Add a dark-grey background on hover */
        opacity: 0.5;
}
		</style>
		


		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>








    </head>

	
	<body>
	    

	
	<!----------__________header start___________------------>
	
	<section class="section_1">
		<div class="container  card main_website">
			
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 logo">
					<a href="/"><img src="/uploads/{{$Setting->image}}" alt="Logo" width="100%"></a>
				</div>
			</div>
            @include('frontend.layouts.sections.nav')
            @yield('slider')
         


            @yield('page-content')














            
</div>
				
                </div>
    
            </div>	
        </section>
        


	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</button> 
			 
			 <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>				
					
					
	<section class="section_2">
		<div class="container">
			<div class="root">
				<div class="row ">	
					<div class="col-lg-4 col-md-4 col-sm-4 root_01">
						© All rights reserved © 2023 Edufin</div>
					<div class="col-lg-4 col-md-4 col-sm-4 social-link">
						<ul>
							<li><a href="/" target="_blank"> <i class="fa fa-facebook" target="_blank"></i></a></li>
							<li><a href="/" target="_blank"> <i class="fa fa-twitter""></i></a></li>
							<li><a href="/" target="_blank"> <i class="fa fa-google-plus""></i></a></li>
							<li><a href="/" target="_blank"> <i class="fa fa-youtube""></i></a></li>
							<li><a href="/"><i class="fa fa-rss" target="_blank"></i></a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 root_02">
						Design & Developed BY <a href='http://codersys.com' target='_blank' title='Mobile : 09613-247034'>CoderSys.Com</a>					</div>
				</div>	
			</div>
		</div>	
	</section>
				
				<script type='text/javascript' src='/assets/js/embed.min.js'></script>
	
	
	
	

							
			
	
	</body>
</html>
<!-- Page generated by LiteSpeed Cache 5.2 on 2023-10-15 17:34:18 -->