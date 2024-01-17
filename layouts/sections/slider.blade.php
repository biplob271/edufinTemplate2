	
	<!----------__________slider start___________------------>	
			
						
    <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="slider">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
								
								<div class="carousel-inner">
									
									<div class="item active">
												<!-- Post Image Code Start--> 
										<a href="#">
										<img width="1000" height="300" src="/uploads/{{$Slider[1]->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								</a>
										<!-- Post Image Code Close-->
									
									</div>
									@foreach($Slider as $slider)
									<div class="item">
												<!-- Post Image Code Start--> 
										<a href="#">
										<img width="1000"  height="300" src="/uploads/{{$slider->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								</a>
										<!-- Post Image Code Close-->
										
									</div>
									@endforeach
								</div>
								
							 <!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
								 </a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								 </a>
							</div>
					</div>

				</div>
			</div>
		