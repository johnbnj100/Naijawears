<x-header :count="$count" />
<div class="featured-page">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="section-heading">
            <h1 style="font-family: monospace; color:black;"><i class="fa fa-shopping-cart"> L a c e </i></h1>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div id="filters" class="button-group" style="font-family: monospace" >
            <div class="section-heading">
            <button class="btn btn-primary" data-filter="*"><i class="fa fa-check"></i> All Products <div class="line-dec mx-auto"></div></button>
            <button class="btn btn-primary" data-filter=".new"><i class="fa fa-area-chart"></i> Newest <div class="line-dec mx-auto"></div></button>
            <button class="btn btn-primary" data-filter=".low"><i class="fa fa-arrow-down"></i> Low <div class="line-dec mx-auto"></div></button>
            <button class="btn btn-primary" data-filter=".high"><i class="fa fa-arrow-up"></i> High <div class="line-dec mx-auto"></div></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  <div class="featured container no-gutter">
    <div class="row posts">
    @foreach ($lace1 as $laces1)
        <div id="1" class="item high col-md-4">
          <a href="/products3/{{$laces1['id']}}">
            <div class="featured-item shadow">
                @php
                    $image = explode('|', $laces1->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces1['price']}}</h4>
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
         </div>
        @endforeach

    @foreach ($lace2 as $laces2)
        <div id="1" class="item high new col-md-4">
          <a href="/products3/{{$laces2['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces2->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces2['price']}}</h4>
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
         </div>
        @endforeach

         @foreach ($lace3 as $laces3)
        <div id="2" class="item low new col-md-4">
            <a href="/products3/{{$laces3['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces3->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces3['price']}}</h4>
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
          </div>
          @endforeach

          @foreach ($lace4 as $laces4)
          <div id="3" class="item high col-md-4">
            <a href="/products3/{{$laces4['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces4->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces4->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace5 as $laces5)
         <div id="4" class="item low col-md-4">
          <a href="/products3/{{$laces5['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces5->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces5->price}}</h4>
              <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
            </div>
            <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
            </div>
          </a>
        </div>
        @endforeach

        @foreach($lace6 as $laces6)
        <div id="5" class="item new col-md-4">
          <a href="/products3/{{$laces6['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces6->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces6->price}}</h4>
              <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
            </div>
            <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
            </div>
          </a>
        </div>
        @endforeach

        @foreach($lace7 as $laces7)
         <div id="6" class="item high col-md-4">
          <a href="/products3/{{$laces7['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces7->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces7->price}}</h4>
              <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
            </div>
            <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
            </div>
          </a>
        </div>
        @endforeach


        @foreach($lace8 as $laces8)
         <div id="7" class="item low col-md-4">
          <a href="/products3/{{$laces8['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces8->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces8->price}}</h4>
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
        </div>
        @endforeach

        @foreach($lace9 as $laces9)
        <div id="8" class="item new col-md-4">
            <a href="/products3/{{$laces9['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces9->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces9->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace10 as $laces10)
         <div id="9" class="item low col-md-4">
          <a href="/products3/{{$laces10['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $laces10->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces10->price}}</h4>
              <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
            </div>
            <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
            </div>
          </a>
        </div>
        @endforeach


        @foreach($lace11 as $laces11)
        <div id="10" class="item high col-md-4">
            <a href="/products3/{{$laces11['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces11->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces11->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace12 as $laces12)
          <div id="11" class="item low col-md-4">
            <a href="/products3/{{$laces12['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces12->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces12->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace13 as $laces13)
          <div id="12" class="item new col-md-4">
            <a href="/products3/{{$laces13['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces13->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces13->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace14 as $laces14)
          <div id="13" class="item new col-md-4">
            <a href="/products3/{{$laces14['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces14->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces14->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-image: url('/assets/ankara/green.jpg');">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace15 as $laces15)
          <div id="14" class="item high col-md-4">
            <a href="/products3/{{$laces15['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces15->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces15->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach

          @foreach($lace16 as $laces16)
          <div id="15" class="item low col-md-4">
            <a href="/products3/{{$laces16['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $laces16->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$laces16->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center; background-color:#005555;">
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
                  <h4 class="text-center" style="color:gold;"><i class="fa fa-star"></i></h4>
              </div>
              <span class="pt-2" style="font-family: monospace; display: flex; justify-content: center; align-items: center; font-weight: bold; color: black;"> BUY NOW </span>
              </div>
            </a>
          </div>
          @endforeach
    </div>
</div>


<div class="page-navigation">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li><a href="{{ route('allproducts') }}">1</a></li>
          <li><a href="{{ route('adire') }}">2</a></li>
          <li class="current-page"><a href="{{ route('lace') }}">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Featred Page Ends Here -->


<x-footer/>
