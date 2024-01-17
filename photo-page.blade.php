


@extends('frontend.layouts.main')
@section('page-content')

<div class="primeitworld_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">ফটোগ্যালারি</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="photoGalleryWrap">
              	<div class="row">
							@foreach($Gallery as $gallery)


								<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
									<div class="galleryItem">
										<a class="photoGallery photo_icon" href="{{route('SinglePhoto', $gallery->id)}}">
											<i class="fas fa-camera"></i>
											<img src="/uploads/{{$gallery->image}}">
										</a>
										<h3 class="title"><a href="{{route('SinglePhoto', $gallery->id)}}">{{$gallery->title}}</a></h3>
									</div>
								</div>
							@endforeach
                </div>
                 
            </div>
        </div>
    </div>
</div>




@endsection
