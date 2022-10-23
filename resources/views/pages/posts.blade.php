
    
            @extends('layout.master')
        <br>
        <br>
        @section('content')

<div class="row">
        
    
<div class="container">
			<form class="filter-form" method="post" action="search">
				 @csrf
				
				<select name="myselect" id="selectid">
					<option   value="City">State</option>
                      <option name="sale" value="sale">sale</option>
                     <option name="rent" value="rent">RENT</option>
				</select>
				<button class="site-btn fs-submit" type="submit">SEARCH</button>
			</form>
		</div>

@foreach($posts as $post)


	<!-- feature section -->






 <div class="col-lg-4 col-md-6">
    
					<!-- feature -->
          
                     <div class="container">
                                <div class="row">
				<div class="feature-item">
                       
				 <!--	<div class="feature-pic set-bg" data-setbg="img/feature/3.jpg" style="background-image: url(&quot;img/feature/3.jpg&quot;);">
                          <div class="feature-pic set-bg" img src="asset('/img/{{$post->imge_name}}')" alt="">-->
                    <div class="rent-notic" "feature-pic set-bg"> <a href="{{route('details',$post->id)}}"> FOR {{$post->name}}</a></div>
                                                                    
                           
                     <div class="feature-pic set-bg">
                         <img src="{{asset('img')}}/{{$post->imge_name}}" class="card-img-top" alt="...">
                                  
                                  
                                  <br>
                         <br>

              <br>
     
                          <!--  <div class="rent-notic"> <a href="{{route('details',$post->id)}}"> FOR {{$post->name}}</a></div>-->
					        	</div>
						<div class="feature-text">
							<div class="text-center feature-title">
                                <br>
                                <br>
								<h5>this house is for {{$post->name}}</h5>
							<!--	<p><i class="fa fa-map-marker"></i>  {{$post->description}} <br>  </p>-->
							</div>
						<!--	<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
										<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>-->
								<div class="room-info">
									<div class="rf-left">
										<!--<p><i class="fa fa-user"></i> Gina Wesley</p>-->
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i>{{$post->created_at}}</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">${{$post->price}}dollars</a>
						</div>
					</div>
                  </div>
     
</div>

	


                        

@endforeach
@endsection

    

