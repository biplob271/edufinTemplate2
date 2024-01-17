

@extends('frontend.layouts.main')
@section('page-content')

@if(!isset($data))
    echo "no data found";
@endif

<div class="codersys_page">
    <div class="pageHeader">
        <div class="container narrow">
            <h1 class="heading">শিক্ষকের প্রোফাইল</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container narrow">
            <div class="adminProfile">
                <h1 class="name">{{$data->name}}</h1>
                <div class="profile">
                                            <div class="proImage"><img src="/uploads/{{$data->image}}"></div>
                                        <div class="proDetails">
                        <ul>
                            <li class="name"><span class="hd">ফুল নাম</span><span class="sp">:</span><span class="vl">{{$data->name}}</span></li>                            <li><span class="hd">পদবী</span><span class="sp">:</span><span class="vl">{{$data->qualification}}</span></li>                            <li><span class="hd">শিক্ষাগত যোগ্যতা</span><span class="sp">:</span><span class="vl">{{$data->qualification}}</span></li>                            <li><span class="hd">ইমেইল</span><span class="sp">:</span><span class="vl">myemail@gmail.com</span></li>                            <li><span class="hd">মোবাইল</span><span class="sp">:</span><span class="vl">{{$data->mobile}}</span></li>                            <li><span class="hd">ঠিকানা</span><span class="sp">:</span><span class="vl">{{$data->address}}</span></li>                        </ul>
                    </div>
                </div> 
            </div>
            <div class="relatedPosts">
                <h3 class="widgetTitle">অন্যান্য শিক্ষক</h3>
                <div class="adminListWrap">
                                            <div class="adminListItem_col">
                            <div class="adminListItem">
                                <div class="image">
                                                                            <img src="/uploads/{{$data->image}}">
                                                                    </div>                    
                                <h3 class="name">মেহেদী মাহবুব</h3>                                <h4 class="desg">রোল নাম্বার: সহকারী শিক্ষক</h4>                                <a href="{{$data->id}}" class="link">বিস্তারিত</a>
                            </div>
                        </div>
                                            <div class="adminListItem_col">
                            <div class="adminListItem">
                                <div class="image">
                                                                            <img src="/uploads/{{$data->image}}">
                                                                    </div>                    
                                <h3 class="name">প্রিয়াঙ্কা দেব</h3>                                <h4 class="desg">রোল নাম্বার: সহকারী শিক্ষক</h4>                                <a href="{{$data->id}}" class="link">বিস্তারিত</a>
                            </div>
                        </div>
                                            <div class="adminListItem_col">
                            <div class="adminListItem">
                                <div class="image">
                                                                            <img src="/uploads/{{$data->image}}">
                                                                    </div>                    
                                <h3 class="name">বিজিত দেব রায়</h3>                                <h4 class="desg">রোল নাম্বার: সহকারী শিক্ষক</h4>                                <a href="{{$data->id}}" class="link">বিস্তারিত</a>
                            </div>
                        </div>
                                            <div class="adminListItem_col">
                            <div class="adminListItem">
                                <div class="image">
                                                                            <img src="/uploads/{{$data->image}}">
                                                                    </div>                    
                                <h3 class="name">নাহিদা আক্তার</h3>                                <h4 class="desg">রোল নাম্বার: সিনিয়র শিক্ষক</h4>                                <a href="{{$data->id}}" class="link">বিস্তারিত</a>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</div>




@endsection






