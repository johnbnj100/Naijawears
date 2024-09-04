<x-header :count="$count" />

<div class="featured-page">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="section-heading">
          <h1 style="font-family: monospace; color:black;"><i class="fa fa-shopping-cart"> C a r t </i></h1>
          <div class="line-dec"></div>
        </div>
      </div>

      <div class="featured container no-gutter">
        <div class="row posts">
          @foreach ($cart as $carts)
            <div id="1" class="item high col-md-4">
              <a href="#">
                <div class="featured-item shadow" style="margin-top:20px;">
                    @php
                        $image = explode('|', $carts->image);
                    @endphp
                    @foreach ($image as $item)
                        <img src="{{URL::to($item)}}">
                    @endforeach
                  <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$carts['price']}}</h4>
                  <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                </div>
                <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
                </div>
                
              </a>
              <div style="">
                <h6 id="quantity" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; border-radius:13px; font-weight:bold; outline-color:aqua; text-align:center;">Quantity of Yards: <element style="color:brown;">{{ $carts->quantity }}</element></h6>
              </div>
              <div style="">
                <h6 id="quantity" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; border-radius:13px; font-weight:bold; outline-color:aqua; text-align:center;">Subtotal: <element style="color:brown;"><?php echo "N" .number_format($carts['quantity'] * $carts['price']); ?></element></h6>
              </div>
              
              <form method="POST" action="/cart/{{$carts->id}}" style="text-align:center;">
                @csrf
                @method('DELETE')
                <button style="outline:none; border:1px solid white; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align: center; margin-top:20px; font-weight:bold; background:darkred; color:white; padding:10px 25px; border-radius:20px;">
                  <i class="fa fa-trash" style="font-weight:bold;"> Remove </i></button>
               </form>
            </div>
          
             
              @endforeach    
                
              </div> 
            </div> 
      </div>
    </div>

        </div>
      </div>  
    </div>
    <form action="/total" method="POST" enctype="multipart/form-data" style="margin-top: 2vh; text-align: center;">
      @csrf 
   <?php
    $totalprice = 0;
    foreach($cart as $carts){
     $totalprice += $carts['price'] * $carts['quantity'];
    }
   ?> 
   <div class="display:flex; w">
   <label style="font-weight:bold; font-size:20px; "> Total Cart Price:</label> 
   <input type="text" name="total" style="outline:none; width:100px; border:none; font-size:20px; text-align: center; font-weight:bold; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" value="<?php echo "N" .number_format($totalprice); ?>" />
   </div>
    <div style="padding:40px; text-align:center; display:flex; justify-content:center; align-items:center;">
    <button style="cursor:pointer; padding:7px 80px; text-align:center; outline:none; background-image: url('/assets/ankara/green2.jpg'); border:1px solid white; border-radius: 10px; height: 8vh; color: white; margin:0vh 0 5vh 0; font-weight:bold;"> PROCEED </button>
    </form>
  </div>
  </div>
   </div>         
    
               
</div>


<x-footer/>
