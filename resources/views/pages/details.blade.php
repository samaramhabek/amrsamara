<html><head>
    
    </head>
    <body>
          @extends('layout.master')
        <br>
        <br>
        @section('content')
    

        
        
   
                     <div class="container">
                                <div class="row">
                                    
                                                                  
                                    
      
                                    
                                    
				<div class="feature-item">
                    
                     <div class="rent-notic" style="background-color:#30caa0"> <a href="{{route('details',$post->id)}}" style="color:#000"> FOR {{$post->name}}</a></div>
                       
				 <!--	<div class="feature-pic set-bg" data-setbg="img/feature/3.jpg" style="background-image: url(&quot;img/feature/3.jpg&quot;);">
                          <div class="feature-pic set-bg" img src="asset('/img/{{$post->imge_name}}')" alt="">-->
                    
                                                                    
                           
                     <div class="feature-pic set-bg">
                         <img src="{{asset('img')}}/{{$post->imge_name}}" style="height: 270px; width:500px;  margin-bottom: 30px;" class="card-img-top"  alt="...">
                                  
					        	</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>305 North Palm Drive</h5>
								<p><i class="fa fa-map-marker"></i>  {{$post->description}} <br>   {{$post->address}}</p>
                                <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
										<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">${{$post->price}}dollars</a>
						</div>
                    
                    
                    
                    
                    
					</div>
                                    
                                    
                                    
                                    <div id="accordion" class="plan-accordion">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link active collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">First Floor: <span>660 sq ft</span>	<i class="fa fa-angle-down"></i></button>
								</div>
								<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
									<div class="panel-body">
										<img src="{{asset('img/plan-sketch.jpg')}}" alt="">
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Second Floor:<span>610 sq ft.</span>	<i class="fa fa-angle-down"></i>
									</button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
									<div class="panel-body">
										<img src="{{asset('img/plan-sketch.jpg')}}" alt="">
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingThree">
									<button class="panel-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Third Floor :<span>580 sq ft</span>	<i class="fa fa-angle-down"></i>
									</button>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
									<div class="panel-body">
										<img src="{{asset('img/plan-sketch.jpg')}}" alt="">
									</div>
								</div>
							</div>
						</div>
                                    
                  </div>
                         
                         
                         
                         
     
			</div>
        
        
            @endsection

</body>
</html>