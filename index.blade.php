
@extends('frontend.layouts.main')

@section('slider')
@include('frontend.layouts.sections.slider')
@endsection

@section('page-content')

@php
$Post=App\Models\Post::all();

$SCount=App\Models\Studentfile::count();
$TCount=App\Models\Teacher::where('category','teacher')->count();


@endphp
<div class="primeitworlHomedPage">

<section class="sliderSection">
        <div class="heroSlider owl-carousel">
		    @foreach($Slider as $slider)
			<div class="slideItem">
                    <img src="/uploads/{{$slider->image}}" alt="">
            </div>
			@endforeach      
		</div>
</section>
    <section class="heroFeaturesSection">
        <div class="container">
            <div class="heroFeaturesInner">
                <div class="row g-0">
                    <div class="col-md-3 col-6 heroFeatureItem">
                            <div class="heroFeatureItemInner">
                                <div class="image"><img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/08/student-male.png"></div>
                                <div class="cont">
                                    <h3><span class="counter">{{$SCount}}</span><i> +</i></h3>
                                    <p>শিক্ষার্থী</p>
                                </div>
                            </div>
                        </div><div class="col-md-3 col-6 heroFeatureItem">
                            <div class="heroFeatureItemInner">
                                <div class="image"><img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/08/teacher.png"></div>
                                <div class="cont">
                                    <h3><span class="counter">{{$TCount}}</span><i> +</i></h3>
                                    <p>শিক্ষক</p>
                                </div>
                            </div>
                        </div><div class="col-md-3 col-6 heroFeatureItem">
                            <div class="heroFeatureItemInner">
                                <div class="image"><img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/08/classroom.png"></div>
                                <div class="cont">
                                    <h3><span class="counter">10</span><i> +</i></h3>
                                    <p>শ্রেণী কক্ষ</p>
                                </div>
                            </div>
                        </div><div class="col-md-3 col-6 heroFeatureItem">
                            <div class="heroFeatureItemInner">
                                <div class="image"><img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/08/conference-background-selected.png"></div>
                                <div class="cont">
                                    <h3><span class="counter">8</span><i> +</i></h3>
                                    <p>বিভাগ</p>
                                </div>
                            </div>
                        </div>                </div>
            </div>
        </div>
    </section>



<section class="mujibCorner" style="padding: 30px 0;">
    <div class="container">
        <a style="display: block; max-width: 900px; margin: 0 auto;" href="/"><img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/09/gggggggggggggggg.jpg"></a>
    </div>
</section>
    <section class="aboutSection">
        <div class="container">
            <div class="aboutSecInner">
                <div class="aboutImage">
                    <div class="mainImg"><img src="/uploads/{{$block1->image}}"></div>
                    <div class="brnImg"><img src="/uploads/{{$Setting->image}}"></div>
                </div>            
                <div class="aboutContent">
                    <div class="aboutContentInner">
                        <h4 class="subTitle">আমাদের সম্পর্কে</h4>
                        <h3 class="title">{{$Setting->site_name}} এ স্বাগতম</h3>
						{!!html_entity_decode($block1->description)!!}
						
						<div class="aboutSecBtn"><a class="pitwBtn" href="/about-us/">আরও পড়ুন</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teachersSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="speechWrap">
                        <div class="speechInner">
                            <div class="imageCard">
                                <img src="/uploads/{{$block2->image}}" alt="{{$block2->name}}">
                                <h4 class="name">{{$block2->name}}</h4>
                                <h5 class="deg">{{$block2->designation}}</h5>
                            </div>
                            <div class="contentCard">
                                <h2 class="title">প্রধান শিক্ষকের বাণী</h2>
                                <div class="hd_bar"></div>
								{!!html_entity_decode($block2->description)!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="adminsWrap">
                        <h2 class="title">শিক্ষকবৃন্দ</h2>
                        <div class="adminSlider">
							@foreach($Teacher as $teacher)
								<div class="adminItem">
									<div class="image">
										<img src="/uploads/{{$teacher->image}}" />
									</div>                    
									<h3 class="name"><a href="/admin/{{$teacher->id}}">{{$teacher->name}}</a></h3><h4 class="desg">{{$teacher->designation}}</h4>                           
								</div>
							@endforeach

                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="managingCommitteeSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="speechWrap light">
                        <div class="speechInner">
                            <div class="imageCard">
                                <img src="/uploads/{{$block3->image}}" alt="{{$block3->name}}">
                                <h4 class="name">{{$block3->name}}</h4>
                                <h5 class="deg">{{$block3->designation}}</h5>
                            </div>
                            <div class="contentCard">
                                <h2 class="title">সভাপতির বাণী</h2>
                                <div class="hd_bar"></div>
                                {!!html_entity_decode($block3->description)!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="adminsWrap">
                        <h2 class="title light">ম্যানেজিং কমিটি</h2>
                        <div class="adminSlider">

								@foreach($Committee as $committee)
									<div class="adminItem light">
										<div class="image">
											<img src="/uploads/{{$committee->image}}" />
										</div>                    
										<h3 class="name"><a href="/admin/{{$committee->id}}">{{$committee->name}}</a></h3>                                <h4 class="desg">{{$committee->designation}}</h4>                            
									</div>

								@endforeach

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="noticeSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="directLinks">
                        <div class="drLinkItem">
                                <a class="drLink"href="#">
                                    <div class="icon"><i class="fas fa-users"></i></div>
                                    <h3>শিক্ষার্থীদের তালিকা</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/administration/teacher">
                                    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                    <h3>আমাদের শিক্ষকরা</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/notice">
                                    <div class="icon"><i class="fas fa-border-all"></i></div>
                                    <h3>নোটিশ</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/page/routine">
                                    <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                                    <h3>ক্লাস রুটিন</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/page/result">
                                    <div class="icon"><i class="fas fa-bolt"></i></div>
                                    <h3>ফলাফল</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/gallery/photo">
                                    <div class="icon"><i class="fas fa-photo-video"></i></div>
                                    <h3>ফটো গ্যালারি</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/gallery/video">
                                    <div class="icon"><i class="fas fa-photo-video"></i></div>
                                    <h3>ভিডিও গ্যালারি</h3>
                                </a>
                            </div><div class="drLinkItem">
                                <a class="drLink"href="/blog">
                                    <div class="icon"><i class="fas fa-newspaper"></i></div>
                                    <h3> সাম্প্রতিক খবর</h3>
                                </a>
                            </div>                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pitwLatestTabWrap">
                        <ul class="pitwTabs">
                            <li class="tab active"><a href="#notice-tab" class="tabLink">নোটিশ</a></li>
                            <li class="tab"><a href="#routine-tab" class="tabLink">রুটিন</a></li>
                            <li class="tab"><a href="#result-tab" class="tabLink">ফলাফল</a></li>
                        </ul>
                        <div class="tabsContents">
                            <div id="notice-tab" class="latestTabItem">
                                <div class="preloader" ><div class="loader"></div></div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tabContentList">
                                                 @foreach($Notice as $item)
                                                <div class="tabContentItem">
                                                    <date>
                                                        <span>১৩</span>
                                                        <span>সেপ্টেম্বর</span>
                                                    </date>
                                                    <h3><a href="{{$item->id}}">{{$item->title}}</a><a class="more_button" href="{{$item->id}}">নোটিশ দেখুন</a></h3>
                                                                              
                                                </div>
                                                @endforeach
                                                                                            
                                        </div>
                                    </div>
                                    <div class="card-footer"><a class="pitwBtn" href="/notice">আরো নোটিশ</a></div>
                                </div>
                            </div>
                            <div id="routine-tab" class="latestTabItem" style="display: none;"> 
                                <div class="preloader" ><div class="loader"></div></div> 
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tabContentList">
                                                         
                                                @foreach($Notice as $item)
                                                        <div class="tabContentItem">
                                                            <date>
                                                                <span>২৩</span>
                                                                <span>আগস্ট</span>
                                                            </date>
                                                            <h3><a href="{{$item->id}}">{{$item->title}}</a><a class="more_button" href="{{$item->id}}">রুটিন দেখুন</a></h3>
                                                                                    
                                                        </div>
                                                @endforeach                                         
                                                             
                                         </div>
                                    </div>
                                </div>
                                <div class="card-footer"><a class="pitwBtn" href="/routine">আরো রুটিন</a></div>
                            </div>
                            </div>
                            <div id="result-tab" class="latestTabItem" style="display: none;"> 
                                <div class="preloader" ><div class="loader"></div></div> 
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tabContentList">
                                                
                                        @foreach($Notice as $item)
                                                <div class="tabContentItem">
                                                    <date>
                                                        <span>২৭</span>
                                                        <span>আগস্ট</span>
                                                    </date>
                                                    <h3><a href="{{$item->id}}">{{$item->title}}</a><a class="more_button" href="{{$item->id}}">ফলাফল দেখুন</a></h3>
                                                                              
                                                </div>
                                         @endforeach                                                   
                                        </div>
                                    </div>
                                    <div class="card-footer"><a class="pitwBtn" href="/result">আরো ফলাফল</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="studentsStatisticsSection">
        <div class="container">
            <div class="sectionTitle">
                <h2>শ্রেণি ও লিঙ্গভিত্তিক শিক্ষার্থীর তথ্য</h2>
                <div class="hd_bar"></div>
            </div>
            <div class="studentsStatistics">
                <div class="studentStatItem">
                        <div class="studentStatItemInner">
                            <h3>ষষ্ঠ শ্রেণি</h3>
                            <ul>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon.png">
                                    <div class="std">
                                        <span class="hd">মোট শিক্ষার্থী</span><span class="st">১২০</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon2.png">
                                    <div class="std">
                                        <span class="hd">ছেলে শিক্ষার্থী</span><span class="st">৬৫</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon3.png">
                                    <div class="std">
                                        <span class="hd">মেয়ে শিক্ষার্থী</span><span class="st">৫৫</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><div class="studentStatItem">
                        <div class="studentStatItemInner">
                            <h3>সপ্তম শ্রেণি</h3>
                            <ul>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon.png">
                                    <div class="std">
                                        <span class="hd">মোট শিক্ষার্থী</span><span class="st">১১৫</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon2.png">
                                    <div class="std">
                                        <span class="hd">ছেলে শিক্ষার্থী</span><span class="st">৬০</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon3.png">
                                    <div class="std">
                                        <span class="hd">মেয়ে শিক্ষার্থী</span><span class="st">৫৫</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><div class="studentStatItem">
                        <div class="studentStatItemInner">
                            <h3>অষ্টম শ্রেণি</h3>
                            <ul>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon.png">
                                    <div class="std">
                                        <span class="hd">মোট শিক্ষার্থী</span><span class="st">১০৯</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon2.png">
                                    <div class="std">
                                        <span class="hd">ছেলে শিক্ষার্থী</span><span class="st">৫৯</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon3.png">
                                    <div class="std">
                                        <span class="hd">মেয়ে শিক্ষার্থী</span><span class="st">৫০</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><div class="studentStatItem">
                        <div class="studentStatItemInner">
                            <h3>নবম শ্রেণি</h3>
                            <ul>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon.png">
                                    <div class="std">
                                        <span class="hd">মোট শিক্ষার্থী</span><span class="st">১০০</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon2.png">
                                    <div class="std">
                                        <span class="hd">ছেলে শিক্ষার্থী</span><span class="st">৫০</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon3.png">
                                    <div class="std">
                                        <span class="hd">মেয়ে শিক্ষার্থী</span><span class="st">৫০</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><div class="studentStatItem">
                        <div class="studentStatItemInner">
                            <h3>দশম শ্রেণি</h3>
                            <ul>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon.png">
                                    <div class="std">
                                        <span class="hd">মোট শিক্ষার্থী</span><span class="st">৯৮</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon2.png">
                                    <div class="std">
                                        <span class="hd">ছেলে শিক্ষার্থী</span><span class="st">৫১</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://cdn.codersys.com/edufin/tem2/img/student-icon3.png">
                                    <div class="std">
                                        <span class="hd">মেয়ে শিক্ষার্থী</span><span class="st">৪৭</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                

            </div>
        </div>
    </section>
    <section class="videoSection">
        <div class="container">
            <div class="sectionTitle">
                <h2>ভিডিও গ্যালারি</h2>
                <div class="hd_bar"></div>
            </div>
            <div class="videosLists">
                <div class="videoSlider owl-carousel">
                     
						@foreach($Video as $video)
						<div class="videoItem">
                            <a class="thumb" href="{{route('SingleVideo', $video->id)}}">
                                <img src="/uploads//images/slider-img-2-1705507212.jpg" alt="{{$video->title}}">
                                <span class="icon"><i class="fa fa-play"></i></span>
                            </a>
                            <h4 class="heading"><a href="{{route('SingleVideo', $video->id)}}">{{$video->title}}</a></h4>
                        </div>
                                          
						@endforeach
						
						
						
                 </div>
            </div>
        </div>
    </section>
    <section class="newsSection">
        <div class="container">
            <div class="sectionTitle">
                <h2> সাম্প্রতিক খবর </h2>
                <div class="hd_bar"></div>
            </div>
            <div class="newsLists">
                <div class="row">
                @foreach($Post as $post)
                        <div class="col-sm-4">
                            <div class="newsItem">
                                <div class="img"><img src="/uploads/{{$post->image}}" alt="{{$post->title}}"></div>
                                <h4 class="heading"><a href="/blog/{{$post->id}}">{{$post->title}}</a></h4>
                                {!! html_entity_decode(Illuminate\Support\Str::words($post->description, 60))!!}
                                <a class="readMore" href="/blog/{{$post->id}}">বিস্তারিত..... </a>
                            </div>
                        </div>
                @endforeach	
                        
                      
                       
            </div>
            </div>
        </div>
    </section>

</div>				   
							
@endsection				