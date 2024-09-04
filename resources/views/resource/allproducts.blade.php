<x-header :count="$count" />
<div class="featured-page">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="section-heading">
            <h1 style="font-family: monospace; color:black;"><i class="fa fa-shopping-cart"> A n k a r a </i></h1>
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
    @foreach ($ankara0 as $ankaras0)
        <div id="1" class="item high col-md-4">
          <a href="/products/{{$ankaras0['id']}}">
            <div class="featured-item shadow">
                @php
                    $image = explode('|', $ankaras0->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras0['price']}}</h4>
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

    @foreach ($ankara as $ankaras)
        <div id="1" class="item new col-md-4">
          <a href="/products/{{$ankaras['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras['price']}}</h4>
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

         @foreach ($ankara1 as $ankaras1)
        <div id="2" class="item low col-md-4">
            <a href="/products/{{$ankaras1['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras1->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras1['price']}}</h4>
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

          @foreach ($ankara2 as $ankaras2)
          <div id="3" class="item high new col-md-4">
            <a href="/products/{{$ankaras2['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras2->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras2->price}}</h4>
                <div style="display: flex; justify-content: center; align-items: center;  background-color:#005555;">
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

          @foreach($ankara3 as $ankaras3)
         <div id="4" class="item low col-md-4">
          <a href="/products/{{$ankaras3['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras3->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras3->price}}</h4>
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

        @foreach($ankara4 as $ankaras4)
        <div id="5" class="item new col-md-4">
          <a href="/products/{{$ankaras4['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras4->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras4->price}}</h4>
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

        @foreach($ankara5 as $ankaras5)
         <div id="6" class="item low col-md-4">
          <a href="/products/{{$ankaras5['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras5->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras5->price}}</h4>
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


        @foreach($ankara6 as $ankaras6)
         <div id="7" class="item low col-md-4">
          <a href="/products/{{$ankaras6['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras6->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras6->price}}</h4>
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

        @foreach($ankara7 as $ankaras7)
        <div id="8" class="item new low col-md-4">
            <a href="/products/{{$ankaras7['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras7->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras7->price}}</h4>
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

          @foreach($ankara8 as $ankaras8)
         <div id="9" class="item low col-md-4">
          <a href="/products/{{$ankaras8['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $ankaras8->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras8->price}}</h4>
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


        @foreach($ankara9 as $ankaras9)
        <div id="10" class="item high new col-md-4">
            <a href="/products/{{$ankaras9['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras9->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras9->price}}</h4>
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

          @foreach($ankara10 as $ankaras10)
          <div id="11" class="item low col-md-4">
            <a href="/products/{{$ankaras10['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras10->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras10->price}}</h4>
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

          @foreach($ankara11 as $ankaras11)
          <div id="12" class="item new col-md-4">
            <a href="/products/{{$ankaras11['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras11->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras11->price}}</h4>
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

          @foreach($ankara12 as $ankaras12)
          <div id="13" class="item new col-md-4">
            <a href="/products/{{$ankaras12['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras12->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras12->price}}</h4>
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

          @foreach($ankara13 as $ankaras13)
          <div id="14" class="item high col-md-4">
            <a href="/products/{{$ankaras13['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras13->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras13->price}}</h4>
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

          @foreach($ankara14 as $ankaras14)
          <div id="15" class="item low col-md-4">
            <a href="/products/{{$ankaras14['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $ankaras14->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$ankaras14->price}}</h4>
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
          <li class="current-page"><a href="{{ route('allproducts') }}">1</a></li>
          <li><a href="{{ route('adire') }}">2</a></li>
          <li><a href="{{ route('lace') }}">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Featred Page Ends Here -->


<x-footer/>
