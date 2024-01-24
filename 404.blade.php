
                 
@extends('frontend.layouts.main')

@section('page-content')
</br>
              

 <p style="text-align:center; margin-top : 20px">{{$msg}}</p>



</br>

<div class="h-100 d-flex align-items-center justify-content-center">
  <div style="background:red">
  <a
    name=""
    id=""
    class="btn btn-success"
    href="{{route('EditLicense')}}"
    role="button"
    >Add New License</a>
  </div>
</div>


  

</br>
@endsection