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
                       
				 <!--	<div class="feature-pic set-bg" data-setbg="img/feature/3.jpg" style="background-image: url(&quot;img/feature/3.jpg&quot;);">
                          <div class="feature-pic set-bg" img src="asset('/img/{{$post->imge_name}}')" alt="">-->
                    
                                                                    
                           
                     <div class="feature-pic set-bg">
                         <img src="{{asset('img')}}/{{$post->imge_name}}" class="card-img-top" alt="...">
                                  
                                  
                                  

              
     
                            <div class="rent-notic"> <a href="{{route('details',$post->id)}}"> FOR {{$post->name}}</a></div>
					        	</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>305 North Palm Drive</h5>
								<p><i class="fa fa-map-marker"></i>  {{$post->description}} <br>    Beverly Hills, CA 90210</p>
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
							<a href="#" class="room-price">$2,500/month</a>
						</div>
					</div>
                  </div>
     
			</div>

	

        
        
        
        
        
        
        
        
        	<!-- sidebar -->
			<!--	<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg" data-setbg="img/author.jpg" style="background-image: url(&quot;img/author.jpg&quot;);"></div>
						<div class="author-info">
							<h5>Gina Wesley</h5>
							<p>Real Estate Agent</p>
						</div>
						<div class="author-contact">
							<p><i class="fa fa-phone"></i>(567) 666 121 2233</p>
							<p><i class="fa fa-envelope"></i>ginawesley26@gmail.com</p>
						</div>
					</div>
					<div class="contact-form-card">
						<h5>Do you have any question?</h5>
						<form>
							<input type="text" placeholder="Your name">
							<input type="text" placeholder="Your email">
							<textarea placeholder="Your question"></textarea>
							<button>SEND</button>
						</form>
					</div>
					<div class="related-properties">
						<h2>Related Property</h2>
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="img/feature/1.jpg" style="background-image: url(&quot;img/feature/1.jpg&quot;);">
								<div class="sale-notic">FOR SALE</div>
							</div>
							<div class="rp-info">
								<h5>1963 S Crescent Heights Blvd</h5>
								<p><i class="fa fa-map-marker"></i>Los Angeles, CA 90034</p>
							</div>
							<a href="#" class="rp-price">$1,200,000</a>
						</div>
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="img/feature/2.jpg" style="background-image: url(&quot;img/feature/2.jpg&quot;);">
								<div class="rent-notic">FOR Rent</div>
							</div>
							<div class="rp-info">
								<h5>17 Sturges Road, Wokingham</h5>
								<p><i class="fa fa-map-marker"></i> Newtown, CT 06470</p>
							</div>
							<a href="#" class="rp-price">$2,500/month</a>
						</div>
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="img/feature/4.jpg" style="background-image: url(&quot;img/feature/4.jpg&quot;);">
								<div class="sale-notic">FOR SALE</div>
							</div>
							<div class="rp-info">
								<h5>28 Quaker Ridge Road, Manhasset</h5>
								<p><i class="fa fa-map-marker"></i>28 Quaker Ridge Road, Manhasset</p>
							</div>
							<a href="#" class="rp-price">$5,600,000</a>
						</div>
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="img/feature/5.jpg" style="background-image: url(&quot;img/feature/5.jpg&quot;);">
								<div class="rent-notic">FOR Rent</div>
							</div>
							<div class="rp-info">
								<h5>Sofi Berryessa 750 N King Road</h5>
								<p><i class="fa fa-map-marker"></i>Sofi Berryessa 750 N King Road</p>
							</div>
							<a href="#" class="rp-price">$1,600/month</a>
						</div>
					</div>
        </div>-->
        
        
 @endsection

</body>
</html>
    