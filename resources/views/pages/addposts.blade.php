 //   
        
      @extends('layout.master')
        
       @section('content')
  <!-- <div class="card" style="width: 18rem;">
 <h4> <img src="..." class="card-img-top" alt="..."> add imge </h4>
  <div class="card-body">
    <h5 class="card-title">add post</h5>
    <p class="card-text">entre description</p>
    <a href="#" class="btn btn-primary">save post</a>
  </div>
</div>-->
<form class="row g-3"  method="Post" action="store">
     @csrf
  <div class="col-md-6">
    <label for="inputname" class="form-label" >type of house</label>
    <input name="name" type="text" class="form-control" id="inputname">
      <span style="color:red">@error('name'){{$message}}@enderror</span>
  </div>
  <div class="col-md-6">
    <!--  <div class="col-md-6">
    <label for="inputname" class="form-label" >name of user</label>
    <input name="nameuser" type="text" class="form-control" id="inputname">
  </div>-->
    <label for="input" class="form-label">description</label>
    <input name= description type="text" class="form-control" id="inputdescription">
      
  </div>
    <div class="col-md-6">
    <label for="inputprice"  class="form-label" >price</label>
    <input name="price" type="number" class="form-control" id="inputname">
        <span style="color:red">@error('price'){{$message}}@enderror</span>
  </div>
  <div class="col-12">
    <label for="input" class="form-label">enter image for house</label>
     <br>
     <img  id="imageHolder" src=" " alt="add image" height="300" width="300"/>
                                    <br>
     <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                    <br>
      
      
        <div id="empty_image"> </div>
                                
   <input id="inp_img" name="img" type="hidden" value="">
                                        <br><br>
      
      
      
      
      
  </div>
  <div class="col-12">
    <label for="input" class="form-label">Address </label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
       <span style="color:red">@error('address'){{$message}}@enderror</span>
  </div>

  <div class="col-md-4">
    <label for="inputname" class="form-label">State</label>
    <select id="inputname" class="form-select">
      <option selected>sale</option>
      <option>RENT</option>
    </select>
  </div>
 
  <div class="col-12">
   <button type="submit" class="btn btn-primary">ADD POST</button>
  </div>
</form>

<script>
 
  function fileChange(e) {
 
     document.getElementById('inp_img').value = '';
 
     for (var i = 0; i < e.target.files.length; i++) { 
     
        var file = e.target.files[i];
 
        if (file.type == "image/jpeg" || file.type == "image/png") {
 
           var reader = new FileReader();  
           reader.onload = function(readerEvent) {
 
              var image = new Image();
              image.onload = function(imageEvent) { 
 
                 var max_size = 600;
                 var w = image.width;
                 var h = image.height;
                   
                 if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                 } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }
               
                 var canvas = document.createElement('canvas');
                 canvas.width = w;
                 canvas.height = h;
                 canvas.getContext('2d').drawImage(image, 0, 0, w, h);
                 if (file.type == "image/jpeg") {
                    var dataURL = canvas.toDataURL("image/jpeg", 1.0);
                 } else {
                    var dataURL = canvas.toDataURL("image/png");    
                 }
                 document.getElementById('inp_img').value += dataURL + '|';
              }
              image.src = readerEvent.target.result;
           }
           reader.readAsDataURL(file);
           
            readURL(this);

        } else {
           document.getElementById('inp_files').value = ''; 
           alert('Please only select images in JPG or PNG format.');   
           return false;
        }
     }
 
  }
 
  document.getElementById('inp_files').addEventListener('change', fileChange, false); 
         
</script>    
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageHolder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

 @endsection
