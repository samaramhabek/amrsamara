
    
      @extends('layout.master')
        
       @section('content')
        <div class="row">
    //   <!--@Foreach($users as $user)
        
   <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text">{{$user->email}}</p>
    <a href="#" class="btn btn-primary">show posts</a>
  </div>
</div>
@endforeach	-->
               
               @Foreach($users as $user)
        
             
             <div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="{{asset('img/feature/2.jpg')}}" style="background-image: url(&quot;img/feature/2.jpg&quot;);">
							<div class="sale-notic">FOR SALE</div>
                            

                               
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>305 North Palm Drive</h5>
								<p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
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
										<p><i class="fa fa-user"></i> {{$user->name}}</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$4,500,000</a>
						</div>
					</div>
                @endforeach	
                 
              
             </div>

 @endsection

    
      
      
