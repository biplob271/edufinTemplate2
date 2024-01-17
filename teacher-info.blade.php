@extends('frontend.layouts.main')
@section('page-content')




<div class="primeitworld_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">শিক্ষকবৃন্দ</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="adminListWrap">		
				@foreach($Teacher as $teacher)
					<div class="adminListItem_col">
						<div class="adminListItem">
							<div class="image">
																<img src="/uploads/{{$teacher->image}}" />
														</div>                    
							<h3 class="name"> {{$teacher->name}}  </h3>            <h4 class="desg">{{$teacher->designation}} </h4>      <a href="/admin/{{$teacher->id}}" class="link">বিস্তারিত</a>
						</div>
					</div>
				@endforeach         
        	</div>   
       	 </div>
    </div>
</div>


@endsection