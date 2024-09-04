<x-header :count="$count" />
<div class="featured-page">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="section-heading">
            <h1 style="font-family: monospace; color:black;"><i class="fa fa-shopping-cart"> A d i r e </i></h1>
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
    @foreach ($adire1 as $adires1)
        <div id="1" class="item high col-md-4">
          <a href="/products2/{{$adires1['id']}}">
            <div class="featured-item shadow">
                @php
                    $image = explode('|', $adires1->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires1['price']}}</h4>
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

    @foreach ($adire2 as $adires2)
        <div id="1" class="item high new col-md-4">
          <a href="/products2/{{$adires2['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires2->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires2['price']}}</h4>
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

         @foreach ($adire3 as $adires3)
        <div id="2" class="item low new col-md-4">
            <a href="/products2/{{$adires3['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires3->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires3['price']}}</h4>
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

          @foreach ($adire4 as $adires4)
          <div id="3" class="item high col-md-4">
            <a href="/products2/{{$adires4['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires4->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
                @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires4->price}}</h4>
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

          @foreach($adire5 as $adires5)
         <div id="4" class="item low col-md-4">
          <a href="/products2/{{$adires5['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires5->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires5->price}}</h4>
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

        @foreach($adire6 as $adires6)
        <div id="5" class="item new col-md-4">
          <a href="/products2/{{$adires6['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires6->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires6->price}}</h4>
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

        @foreach($adire7 as $adires7)
         <div id="6" class="item high col-md-4">
          <a href="/products2/{{$adires7['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires7->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires7->price}}</h4>
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


        @foreach($adire8 as $adires8)
         <div id="7" class="item low col-md-4">
          <a href="/products2/{{$adires8['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires8->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires8->price}}</h4>
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

        @foreach($adire9 as $adires9)
        <div id="8" class="item new col-md-4">
            <a href="/products2/{{$adires9['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires9->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires9->price}}</h4>
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

          @foreach($adire10 as $adires10)
         <div id="9" class="item low col-md-4">
          <a href="/products2/{{$adires10['id']}}">
            <div class="featured-item shadow">
            @php
                    $image = explode('|', $adires10->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
              <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires10->price}}</h4>
              <div style="display: flex; justify-content: center; align-items: center; bbackground-color:#005555;">
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


        @foreach($adire11 as $adires11)
        <div id="10" class="item high col-md-4">
            <a href="/products2/{{$adires11['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires11->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires11->price}}</h4>
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

          @foreach($adire12 as $adires12)
          <div id="11" class="item low col-md-4">
            <a href="/products2/{{$adires12['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires12->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires12->price}}</h4>
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

          @foreach($adire13 as $adires13)
          <div id="12" class="item new col-md-4">
            <a href="/products2/{{$adires13['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires13->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires13->price}}</h4>
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

          @foreach($adire14 as $adires14)
          <div id="13" class="item new col-md-4">
            <a href="/products2/{{$adires14['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires14->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires14->price}}</h4>
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

          @foreach($adire15 as $adires15)
          <div id="14" class="item high col-md-4">
            <a href="/products2/{{$adires15['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires15->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires15->price}}</h4>
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

          @foreach($adire16 as $adires16)
          <div id="15" class="item low col-md-4">
            <a href="/products2/{{$adires16['id']}}">
              <div class="featured-item shadow">
              @php
                    $image = explode('|', $adires16->image);
                @endphp
                @foreach ($image as $item)
                    <img src="{{URL::to($item)}}">
            @endforeach
                <h4 class="text-center"><i class="fa fa-shopping-cart"></i> Price - N{{$adires16->price}}</h4>
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
          <li class="current-page"><a href="{{ route('adire') }}">2</a></li>
          <li><a href="{{ route('lace') }}">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Featred Page Ends Here -->


<x-footer/>
