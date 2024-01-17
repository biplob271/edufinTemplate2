


@extends('frontend.layouts.main')
@section('page-content')

<div class="codersys_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">ভিডিও গ্যালারি</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="videoGallery">
                <div class="row">

						@foreach($Gallery as $gallery)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                            <div class="videoItem">
                                <a class="thumb" href="{{route('SingleVideo', $gallery->id)}}">
                                    <img src="https://dhsbirganj.edu.bd/wp-content/uploads/2023/08/maxresddddefault.jpg" alt="মুখস্থ না করে, হাজার হাজার শব্দ মনে রাখুন ৩টি কৌশলে">
                                    <span class="icon"><i class="fa fa-play"></i></span>
                                </a>
                                <h4 class="heading"><a href="{{route('SingleVideo', $gallery->id)}}">{{$gallery->title}}</a></h4>
                            </div>

                        </div>
						@endforeach		
                          
                </div>
                 
            </div>
        </div>
    </div>
</div>


@endsection