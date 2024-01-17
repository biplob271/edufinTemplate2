@php 

$paper1=App\Http\Controllers\IndexController::calculateGrade($data->bangla);
$paper2=App\Http\Controllers\IndexController::calculateGrade($data->english);
$paper3=App\Http\Controllers\IndexController::calculateGrade($data->math);
$paper4=App\Http\Controllers\IndexController::calculateGrade($data->accounting);
$paper5=App\Http\Controllers\IndexController::calculateGrade($data->business_studies);
$paper6=App\Http\Controllers\IndexController::calculateGrade($data->general_science);
$paper7=App\Http\Controllers\IndexController::calculateGrade($data->religious_study);

$totalCG=  $paper1['cg']+ $paper2['cg']+ $paper3['cg']+ $paper4['cg']+ $paper5['cg']+ $paper6['cg']+ $paper7['cg'];
$cgpa=round($totalCG/7, 2);


      $a=$paper1['cg'];
	  $b=$paper2['cg'];
	  $c=$paper3['cg'];
	  $d=$paper4['cg'];
	  $e=$paper5['cg'];
	  $f=$paper6['cg'];
	  $g=$paper7['cg'];
	  
	  if($a==0){ $aa="FAILED"; }
	  elseif($b==0){ $aa="FAILED"; }
	  elseif($c==0){ $aa="FAILED"; }
	  elseif($d==0){ $aa="FAILED"; }
	  elseif($e==0){ $aa="FAILED"; }
	  elseif($f==0){ $aa="FAILED"; }
	  elseif($g==0){ $aa="FAILED"; }
	  else {$aa="PASSED";}

@endphp



@include('frontend.layouts.header')
@include('frontend.layouts.sections.nav')
   
   <!--================================
                                     Result-view Page-Start
                               ===============================-->
                               <section class="result-view-page">
            <div class="container results_padding">
               

    <!-- the loop -->

   
    	
	 <div class="row">
                    <div class="col-lg-12 col-md-12">
										
                        <div class="sec-content">
                            <h1 class="sec-title">
                              Students Result View - Annual Examination                            </h1>
                            <div class="secIcon">
                                <img src="https://themesbazar.net/eschool/wp-content/themes/ESchool/assets/images/heading-line.png" alt="">
                            </div>
                        </div>
						                    </div>
                </div>


	
                <div class="row">
                    <div class="col-lg-12">
                        <div class="result-viewContent">
                            <div class="table-responsive">
                                <table class="table ">
                                   
                                    <tbody class="view-result">
                                        <tr>
                                            <td> Roll </td>
                                            <td> {{$student->id}} </td>
                                            <td> Name </td>
                                            <td> {{$student->name}} </td>
                                              
                                        </tr>
                            
                                        <tr>
                                            <td> Registration </td>
                                            <td> {{$data->rej_no}} </td>
                                            <td>  Class </td>
                                            <td> {{$student->class}} </td>
                                              
                                        </tr>
                                        <tr>
                                            <td> Group  </td>
                                            <td> {{$student->class}} </td>
                                            <td> Exam Name </td>
                                            <td> Annual Examination </td>
                                              
                                        </tr>

                            
                
                                        <tr>
                                            <td> GPA </td>
                                            <td> <strong> @php    if($aa == 'FAILED'){ echo "0.00";}else{ echo $cgpa;} @endphp</strong> </td>
											<td> Result </td>
                                            <td> <strong> {{$aa}} </strong> </td>
                                          
                                        </tr>
                
                
                                 
       
       
                                    </tbody>
                                </table>
                           </div>

                           						   <h1 class="grade-title">  
                              Grade sheet                            </h1>

                           <div class="table-responsive">
                            <table class="table">
                              <thead class="viw-top">
                                    <tr>
                                      <th scope="col"> Code </th>
                                     <th scope="col"> Subject Name </th>
                                     <th scope="col"> Grade/Number </th>
                                     <th scope="col"> Letter Grade </th>
                                     <th scope="col"> Grade Point </th>
                                     
                                    </tr>
                                </thead> 
                                <tbody class="view-result">
                                   					
                              

                               			
									<tr>
                                        <td> 01 </td>
                                        <td> Bangla </td>
                                        <td> {{$data->bangla}} </td>    
                                        <td> {{ $paper1['lg']}} </td> 
                                        <td> {{ $paper1['cg']}} </td> 

                                    </tr>
                                     
    									
									<tr>
                                        <td> 02 </td>
                                        <td> English </td>
                                        <td>{{$data->english}} </td>  
                                        <td> {{ $paper2['lg']}} </td> 
                                        <td> {{ $paper2['cg']}} </td>                               
                                    </tr>
                                     
    									
									<tr>
                                        <td> 03 </td>
                                        <td> Mathematics </td>
                                        <td> {{$data->math}} </td>  
                                        <td> {{ $paper3['lg']}} </td> 
                                        <td> {{ $paper3['cg']}} </td>                               
                                    </tr>
                                     
    									
									<tr>
                                        <td> 04 </td>
                                        <td> Accounting </td>
                                        <td> {{$data->accounting}}</td>  
                                        <td> {{ $paper4['lg']}} </td> 
                                        <td> {{ $paper4['cg']}} </td>                              
                                    </tr>
                                     
    									
									<tr>
                                        <td> 05 </td>
                                        <td> Business Studies </td>
                                        <td> {{$data->business_studies}} </td>
                                        <td> {{ $paper5['lg']}} </td> 
                                        <td> {{ $paper5['cg']}} </td>                                    
                                    </tr>
                                     
    									
									<tr>
                                        <td> 06 </td>
                                        <td> General Science </td>
                                        <td> {{$data->general_science}} </td>   
                                        <td> {{ $paper6['lg']}} </td> 
                                        <td> {{ $paper6['cg']}} </td>                             
                                    </tr>
                                     
    									
									<tr>
                                        <td> 07 </td>
                                        <td> Religious Studies </td>
                                        <td> {{$data->religious_study}} </td> 
                                        <td> {{ $paper7['lg']}} </td> 
                                        <td> {{ $paper7['cg']}} </td>                             
                                    </tr>
                                     
                                           
                                   
                          
            
            
                             
   
   
                                </tbody>
                            </table>
        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
                       </div>
					           
                        </div>
						
						<div style="text-align: center; font-style: italic;">Published Date :  </div>
						
                    </div>
                </div>
				
				
				
    <!-- end of the loop -->

    
 
            </div>
        </section>
  
                             <!--================================ -->



 @include('frontend.layouts.footer')