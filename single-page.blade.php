

@extends('frontend.layouts.main')
@section('page-content')





<div class="codersys_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">বিস্তারিত খবর</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="pageContent">
                <h1 class="title">{{$Data->title}}</h1>
				@if(!empty($Data->image))
                                    <div class="thumb"><img width="750" height="390" src="/uploads/{{$Data->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" fetchpriority="high"></div>
                               
				@endif				
								
				{!!html_entity_decode($Data->description)!!}
            </div>
            <div class="relatedPosts">
                <h3 class="widgetTitle">সংশ্লিষ্ট আরো খবর</h3>
                <div class="row">
                                            <div class="col-sm-4">
                            <div class="newsItem">
                                <div class="img"><img src="/uploads/{{$Data->image}}" alt="{{$Data->title}}"></div>
                                <h4 class="heading"><a href="#">চুয়েট কুয়েট ও রুয়েটে সম্মিলিত ভর্তি পরীক্ষা ৬ আগস্ট</a></h4>
                                <p>চট্টগ্রাম প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয় (চুয়েট), খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয় (কুয়েট) এবং রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়ের (রুয়েট) স্নাতক প্রথমবর্ষ সমন্বিত ভর্তি পরীক্ষার অংশ…</p>
                                <a class="readMore" href="#">বিস্তারিত..... </a>
                            </div>
                        </div>
                                            <div class="col-sm-4">
                            <div class="newsItem">
                                <div class="img"><img src="/uploads/{{$Data->image}}" alt="{{$Data->title}}"></div>
                                <h4 class="heading"><a href="#">স্কুলগুলোতে  শুরু হচ্ছে ‘ক্ষুদে ডাক্তার কার্যক্রম</a></h4>
                                <p>এটি শুরু হবে আগামী ২০ আগস্ট। চলবে ২৬ আগস্ট পর্যন্ত। স্বাস্থ্য অধিদপ্তর ও প্রাথমিক শিক্ষা অধিদপ্তরের যৌথ উদ্যোগ দেশের সব প্রাথমিক ও মাধ্যমিক বিদ্যালয় এবং…</p>
                                <a class="readMore" href="#">বিস্তারিত..... </a>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</div>





@endsection










