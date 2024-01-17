@extends('frontend.layouts.main')
@section('page-content')








<div class="codersys_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">সাম্প্রতিক খবর</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
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
    </div>
</div>

@endsection