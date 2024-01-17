										@php
                                            $navSinfo=App\Models\Category::get();
                                        @endphp  


<!----------__________menu start___________------------>
			
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="" id="nav">
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=		"#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
					<div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-74" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-74 active"><a title="প্রচ্ছদ" href="/">প্রচ্ছদ</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a title="প্রশাসন" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">প্রশাসন <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu" >
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-113" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a title="শিক্ষকবৃন্দ" href="/administration/teacher">শিক্ষকবৃন্দ</a></li>

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-112" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112"><a title="ম্যানেজিং কমিটি" href="/administration/committee">ম্যানেজিং কমিটি</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-107" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-107"><a title="কর্মকর্তা কর্মচারী" href="/administration/staff">কর্মকর্তা কর্মচারী</a></li>

						</ul>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99 dropdown"><a title="শিক্ষার্থীদের তথ্য" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">শিক্ষার্থীদের তথ্য <span class="caret"></span></a>
							<ul role="menu" class=" dropdown-menu" >
								@foreach($navSinfo as $item)
								<li itemscope="itemscope"  class="menu-item menu-item-type-taxonomy menu-item-object-category"><a title="৬ষ্ঠ শ্রেণী" href="/student/class={{$item->slug}}">{{$item->name_bn}}</a>
								</li>
								@endforeach
							</ul>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97 dropdown"><a title="ভর্তি" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ভর্তি <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu" >
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a title="ভর্তি তথ্য" href="/online-admission">অনলাইন ভর্তি</a></li>
							
						</ul>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a title="ডাউনলোড" href="/page/download">ডাউনলোড</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a title="রুটিন" href="/page/routine">রুটিন</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98 dropdown"><a title="ফলাফল" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ফলাফল <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu" >
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a title="একক ফলাফল" href="/result/individual">একক ফলাফল</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="ক্লাসের ফলাফল" href="/result/group">ক্লাসের ফলাফল</a></li>
						</ul></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a title="নোটিশ" href="/notice">নোটিশ</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a title="ব্লগ" href="/blog">ব্লগ</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98 dropdown"><a title="গ্যালারী" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">গ্যালারী <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu" >
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a title="ফটোগ্যালারী" href="/gallery/photo">ফটোগ্যালারী</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="ভিডিও গ্যালারী" href="/gallery/video">ভিডিও গ্যালারী</a></li>
						</ul>
						</li>

						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a title="যোগাযোগ" href="/contact-us">যোগাযোগ</a></li>
						</ul>
					</div>						
				</div>
			</nav>
		</div>
	</div>
</div>
