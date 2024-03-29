

@extends('frontend.layouts.main')
@section('page-content')




<div class="codersys_page">
    <div class="pageHeader">
        <div class="container narrow">
            <h1 class="heading">{{$data->title}}</h1>
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
                            <li class="name"><span class="hd">ফুল নাম</span><span class="sp">:</span><span class="vl"> {{$data->name}} </span></li>                            <li><span class="hd">রোল নাম্বার</span><span class="sp">:</span><span class="vl">{{$data->roll}}</span></li>                            <li><span class="hd">পিতার নাম</span><span class="sp">:</span><span class="vl">{{$data->father_name}}</span></li>                            <li><span class="hd">মাতার নাম</span><span class="sp">:</span><span class="vl">{{$data->mother_name}}</span></li>                                                        <li><span class="hd">অভিভাবকের ইমেইল</span><span class="sp">:</span><span class="vl">Myemailid@gmail.com</span></li>                            <li><span class="hd">অভিভাবকের মোবাইল</span><span class="sp">:</span><span class="vl">{{$data->guardian_mobile}}</span></li>                            <li><span class="hd">ঠিকানা</span><span class="sp">:</span><span class="vl">{{$data->present_address}}</span></li>                        </ul>
                    </div>
                </div> 
            </div>
            <div class="relatedPosts">
                <h3 class="widgetTitle">অন্যান্য শিক্ষার্থী</h3>
                <div class="adminListWrap">
                @php 
                     $Students=App\Http\Controllers\Admin\StudentController::classWiseStudent($data->class)  
                @endphp 
                     @foreach($Students as $student)
                        <div class="adminListItem_col">
                            <div class="adminListItem">
                                <div class="image">
                                                                            <img src="/uploads/{{$student->image}}">
                                                                    </div>                    
                                <h3 class="name">{{$student->name}} </h3>                                <h4 class="desg">{{$student->roll}}</h4>                                <a href="{{$data->id}}" class="link">বিস্তারিত</a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>



@endsection
