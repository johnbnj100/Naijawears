<x-header :count="$count" />
@if (Auth::user())
<div class="single-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h1>Products</h1>
            <div class="line-dec"></div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="product-slider">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li>
                @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" id="products">
                @endforeach
                </li>
                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            
          </div>
        </div>
        <div class="col-md-6" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          <div class="right-content">
            <span style="font-family:monospace; color:white; background:#005555; padding:4px 10px; font-size:20px; border-radius: 10px; font-weight:bold;"> {{$lace['name']}} </span>
            <h6 style="color:black;"> Price - <element style="color:brown;">N{{$lace['price']}}</element> per yard</h6>
            <p>{{$lace['description']}}<p>
            <span> <element style="background-image: url('/assets/ankara/green2.jpg'); color:white; border-radius:8px; padding:5px; "> {{$lace['number']}}</element> left on stock </span>
          
            
              {{-- Form --}}

              <form method="POST" action="/delivery" enctype="multipart/form-data">
              @csrf
              <label for="quantity">Quantity of Yards:</label>
              <input name="price" type="text" class="quantity-text" id="quantity" value="{{$lace['price']}}" style="display:none;">
              <input name="image" type="text" class="quantity-text" id="quantity" value="{{$lace->image}}" style="display:none;">
              
              <input name="quantity" type="quantity" class="quantity-text" id="quantity" value="" placeholder="Yards">
              <br>
              <br>
              <button name="submit" style="cursor:pointer; border:1px solid white; background-image: url('/assets/ankara/green2.jpg'); padding:8px 47px; border-radius: 10px; font-weight:bold; color:white; outline:none;"> ADD TO CART </button>
              </form>
            

            <div style="display: flex; align-items:center;">
                <p> Ratings: </p>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:grey;"><i class="fa fa-star"></i></h4>
            </div>

              <div style="">
              <span style="color:white; background:#005555; padding:7px; font-weight:bold; border-radius:10px;"> PROMOTIONS </span>
              <p style="margin-top:-10px;"> Call 08115368571 to place your order. </p>
              </div>


            <div class="down-content">
              <div class="categories">
                <h6>Category: <span><a href="/allproducts">{{$lace->name}}</a></span></h6>
              </div>
              <div class="share">
                <h6>Share: <span><a href="#"><i class="fa fa-facebook" style="background-image: url('/assets/ankara/green.jpg');"></i></a>
                <a href="#"><i class="fa fa-linkedin" style="background-image: url('/assets/ankara/green.jpg');"></i></a>
                <a href="#"><i class="fa fa-twitter" style="background-image: url('/assets/ankara/green.jpg');"></i></a></span></h6>
              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
<div class="single-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h1>Products</h1>
            <div class="line-dec"></div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="product-slider">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li>
                @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" id="products">
                @endforeach
                </li>
                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <li>
                  @php
                    $image = explode('|', $lace->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" >
                @endforeach
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            
          </div>
        </div>
        <div class="col-md-6" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          <div class="right-content">
            <span style="font-family:monospace; color:white; background:#005555; padding:4px 10px; font-size:20px; border-radius: 10px; font-weight:bold;"> {{$lace['name']}} </span>
            <h6 style="color:black;"> Price - <element style="color:brown;">N{{$lace['price']}}</element> per yard</h6>
            <p>{{$lace['description']}}<p>
            <span> <element style="background-image: url('/assets/ankara/green2.jpg'); color:white; border-radius:8px; padding:5px; "> {{$lace['number']}}</element> left on stock </span>
          
            
              {{-- Form --}}

              <form method="POST" action="/delivery" enctype="multipart/form-data">
              @csrf
              <label for="quantity">Quantity of Yards:</label>
              <input name="price" type="text" class="quantity-text" id="quantity" value="{{$lace['price']}}" style="display:none;">
              <input name="image" type="text" class="quantity-text" id="quantity" value="{{$lace->image}}" style="display:none;">
              
              <input name="quantity" type="quantity" class="quantity-text" id="quantity" value="" placeholder="Yards">
              <br>
              <br>
              <button name="submit" style="cursor:pointer; border:1px solid white; background-image: url('/assets/ankara/green2.jpg'); padding:8px 47px; border-radius: 10px; font-weight:bold; color:white; outline:none;"> ADD TO CART </button>
              </form>
            

            <div style="display: flex; align-items:center;">
                <p> Ratings: </p>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:grey;"><i class="fa fa-star"></i></h4>
            </div>

              <div style="">
              <span style="color:white; background:#005555; padding:7px; font-weight:bold; border-radius:10px;"> PROMOTIONS </span>
              <p style="margin-top:-10px;"> Call 08115368571 to place your order. </p>
              </div>


            <div class="down-content">
              <div class="categories">
                <h6>Category: <span><a href="/allproducts">{{$lace->name}}</a></span></h6>
              </div>
              <div class="share">
                <h6>Share: <span><a href="#"><i class="fa fa-facebook" style="background:#005555;"></i></a>
                <a href="#"><i class="fa fa-linkedin" style="background:#005555;"></i></a>
                <a href="#"><i class="fa fa-twitter" style="background:#005555;"></i></a></span></h6>
              </div>
                
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endauth

  <!-- Similar Starts Here -->
  <div class="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="section-heading">
            <h1 style=" font-family: monospace, cursive, poppins; "> You may also like </h1>
            <div class="line-dec"></div>
          </div>
        </div> 

        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            @foreach ($ankara as $ankaras)
            <a href="single-product.html">
              <div class="featured-item">
                @php
                    $image = explode('|', $ankaras->image);
                    @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" style="">
                @endforeach
                <h4 class="text-center"> <i class="fa fa-shopping-cart"></i> Price - N{{$ankaras->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center;  background:#005555;">
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                </div>
                <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Similar Ends Here -->

<x-footer/>
