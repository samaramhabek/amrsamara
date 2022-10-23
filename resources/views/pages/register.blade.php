<html><head>
    
    </head>
    <body>
          @extends('layout.master')
        <br>
        <br>
        @section('content')
        
        
        
        
        
        
        
        
        
        <form class="row g-3" method="POST" action="register">
	{{csrf_field()}}
	<div class="contact-form-card">
						<h5>enter your new account</h5>
						<form>
							<input name="name" type="text" placeholder="Your name">
							<input name="email" type="text" placeholder="Your email">
                            <input name="pass" type="number" placeholder="Your password">
							
							 <div class="col-12">
              <button type="submit" class="btn btn-primary">register</button>
  </div>
						</form>
					</div>

	
</form>
        
        
        
        
        
        
        
        
        
        
               @endsection

</body>
</html>