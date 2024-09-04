<x-header/>

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
                  <div style="display: flex; justify-content: center; align-items: center; background-image: url('/assets/ankara/green.jpg');">
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                    <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                </div>
                <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
                </div>
              </a>
              {{--  form --}}
              <form method="POST" action="/subtotal" enctype="multipart/form-data" style="text-align:center;">
                @csrf
                <div style="text-align:center;">
                <label style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> Quantity of Yards: </label>
                <?php 
                foreach ($quantity as $quantity1); 
                $totalquantity = $quantity1->sum('quantity'); 
                  
                ?>
                <input name="quantity" type="text" placeholder="Input" class="quantity-text" id="quantity" value="{{ $carts->quantity }}" style="font-family:fantasy; border-radius:13px; border:1px solid grey; outline-color:aqua; text-align:center;">
                </div>
                <?php 
                foreach ($pricelist as $prices1); 
                $firstprice = $prices1->sum('price');    
                ?>
                <input name="price" type="text" placeholder="Input" class="quantity-text" id="quantity" value="<?php echo $firstprice; ?>" style="display:none; font-family:fantasy; border-radius:13px; border:1px solid grey; outline-color:aqua; text-align:center;">
              <div style="padding:10px 0px;">
               <p style="text-align: center;"><a href="#" style="font-weight:bold; background:darkred; color:white; padding:10px 25px; border-radius:13px;">Delete</a></p>
             </div> 
            </div> 
            @endforeach
        </div>
      </div>  
    </div>
    <div style="padding:50px;">
      <h5 style="text-align:center;"> Total: N<?php
       $total = $totalquantity * $firstprice;
       echo $total;
        ?></h5>
    <button style="border:1px solid white; cursor:pointer; width:100%; font-weight:bold; outline:none; background:aqua; color:white; padding:10px 1px; border-radius:13px;"> PROCEED </button>
    </form>
  </div>
  </div>
              

               
</div>


<x-footer/>
