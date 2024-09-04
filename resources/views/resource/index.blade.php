<x-header :count="$count" />
<x-layer/>

{{--Ankara --}}

<div class="featured-items" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="section-heading">
            <h1 style="text-align: center; font-family: monospace, cursive, poppins; color:#005555; "> A n k a r a </h1>
            <div class="line-dec mx-auto"></div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            @foreach ($ankara as $ankaras)
            <a href="/products/{{$ankaras['id']}}">
              <div class="featured-item">
                @php
                    $image = explode('|', $ankaras->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" style="" class="img">
                @endforeach
                <h4 class="text-center"> <i class="fa fa-shopping-cart"></i> Price - N{{$ankaras->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
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


{{--Adire --}}
<div class="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="section-heading">
            <h1 style="text-align: center; font-family: monospace, cursive, poppins; color:#005555; "> A d i r e </h1>
            <div class="line-dec mx-auto"></div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            @foreach ($adire as $adires)
            <a href="/products2/{{$adires['id']}}">
              <div class="featured-item">
                @php
                    $image = explode('|', $adires->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" class="img">
                @endforeach
                <h4 class="text-center"> <i class="fa fa-shopping-cart"></i> Price - N{{$adires->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
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



{{--Lace --}}
<div class="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="section-heading">
            <h1 style="text-align: center; font-family: monospace, cursive, poppins; color:#005555; ">L a c e </h1>
            <div class="line-dec mx-auto"></div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            @foreach ($lace as $laces)
            <a href="/products3/{{$laces['id']}}">
              <div class="featured-item">
                @php
                    $image = explode('|', $laces->image)
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}" style="" class="img">
                @endforeach
                <h4 class="text-center"> <i class="fa fa-shopping-cart"></i> Price - N{{$laces->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
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

<x-layer2/>
  <x-flash/>
<x-footer/>
