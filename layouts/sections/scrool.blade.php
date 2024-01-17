			   
						
			<!----------__________ scrool start ___________------------>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 scrool">							
					<div class="col-lg-2 col-md-2 col-sm-2 scrool_1">
						ঘোষনা					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 scrool_2">
						<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
						@foreach($Notice as $notice)		
							<i class="fa fa-stop-circle"></i> <a href="/notice/{{$notice->id}}">{{$notice->title}}</a>
						@endforeach						
						</marquee>
					</div>
				</div>
			</div>	
			
			<!-----------------scrool close ------------------>
			
			