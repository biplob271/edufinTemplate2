
@extends('frontend.layouts.main')
@section('page-content')



<div class="codersys_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">সর্বশেষ রুটিন</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="pitwNoticeTable">
                <div class="pitwTableHeader">
                    <div class="tableItem">
                        <div class="heading"><span>শিরোনাম</span></div>
                        <div class="date"><span>তারিখ</span></div>
                        <div class="view"><span>ভিউ</span></div>
                        <div class="download"><span>ডাউনলোড</span></div>
                    </div>
                </div>
                <div class="pitwTableBody">
                     @foreach($Doc as $doc)
                    <div class="tableItem">
                        <div class="tablcol heading"><span>{{$doc->title}}</span></div>
                        <div class="tablcol date"><span>২৩ আগস্ট, ২৩</span></div>
                        <div class="tablcol view"><a href="/notice/{{$doc->id}}" class="viewBtn"><i class="fa fa-eye"></i> দেখুন</a></div>
                        <div class="tablcol download">
                                                            <a href="/notice/{{$doc->id}}" class="downloadBtn">ডাউনলোড</a>
                        </div>
                    </div>
                    @endforeach
                    
                    
                                    </div>
                 
            </div>
        </div>
    </div>
</div>











@endsection