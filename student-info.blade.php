@extends('frontend.layouts.main')
@section('page-content')





<div class="primeitworld_page">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">৬ষ্ঠ শ্রেণীর শিক্ষার্থী</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="adminListWrap">		
				@foreach($Student as $student)
					<div class="adminListItem_col">
						<div class="adminListItem">
							<div class="image">
																<img src="/uploads/{{$student->image}}" />
														</div>                    
							<h3 class="name"> {{$student->name}}  </h3>            <h4 class="desg">রোল নাম্বার: {{$student->roll}} </h4>      <a href="{{$student->id}}" class="link">বিস্তারিত</a>
						</div>
					</div>
				@endforeach         
        	</div>   
       	 </div>
    </div>
</div>




@endsection