
                 
@include('frontend.layouts.header')
@include('frontend.layouts.sections.nav')
     
              <!--================================
                                     Result-view Page-Start
                               ===============================-->
                              
                 <style>
                        .result-content {
                            margin-left: 20%;
                            margin-right: 20%;
                            text-align: center;
                        }
                </style>             
<div class="row">
	<div class="download_page">										
		<div class="col-lg-10 col-md-10 col-sm-10">                              

       
            <div class="container results_padding">
               



                            <div class="result-page">
                                <div class="container">
                                    <div class="col-lg-12 col-md-12">
                                    
                                        <div class="result-content">
                                        
                                            <form class="themesbazar" action="{{route('resultView')}}" method="post">
                                                @csrf
                                                <input type="text" placeholder="Find Your Registration, Example : 20221001" value="" name="rej_no" required>
                                                <input type="hidden" name="post_type" value="results" />     
                                                
                                                <button type="submit"><i class="fa fa-search"></i>  Submit </button>
                                            
                                            </form>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
            </div>                


 
 
 
 
        
                             <!--================================
                                     Result-Page-End
                               ===============================-->

</br>
        </div>

    </div>
</div>
                               
 @include('frontend.layouts.footer')