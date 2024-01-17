


@extends('frontend.layouts.main')
@section('page-content')

<div class="primeitworldPage">
    <div class="pageHeader">
        <div class="container">
            <h1 class="heading">আমাদের সম্পর্কে</h1>
        </div>
    </div>
    <div class="defautlPageContent">
        <div class="container">
            <div class="pageContent">
                                    <div class="thumb"><img width="300" height="200" src="/uploads/{{$Data->image}}"></div>
                                
                                    {!!html_entity_decode($Data->description)!!}
            </div>
        </div>
    </div>
</div>

@endsection