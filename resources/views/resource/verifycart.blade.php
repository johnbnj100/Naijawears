<x-header :count="$count" />
<!-- Banner Starts Here -->

           
  <!-- Banner Ends Here -->

  <form method="POST" enctype="multipart/form-data" action="/total">
    @csrf
<div class="amounts" style="margin-top: 50px;">
<h4 style="margin-right:10px; font-family: font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> Total: </h4>
  
  <input type="text" value="{{ $usertotals }}" name="total" style="width: 50%; border-radius:15px; height:5vh; outline:none; padding:20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
  
  <button style="cursor:pointer; border:1px solid white; background-image: url('/assets/ankara/green2.jpg'); padding:10px; color:white; font-weight:bold; border-radius:18px; outline:none; margin-left:10px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> PROCEED </button>
    </div>
  </form>
  <div style="text-align:center;">
    <ul style="text-align:center; list-style:none; padding:10px;">
    <li><h5 style="font-family:font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> All orders are shipped out within 1-2 business days to your Location. </h5></li>
    <li><h5 style="font-family:font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> Discounts will be calculated at Delivery point. </h5></li>
  </ul>
  <p style="padding:10px;"> By proceeding to the next step you confirm that you agree with the <element style="color:orange; text-decoration:underline;"><a href="#">Terms & Conditions.</a></element>
  </div>

  



<x-footer/>      
                
                
                
                
                
                
                
                
                
                
                
                
                
