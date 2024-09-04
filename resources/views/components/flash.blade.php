 @if (session()->has('message'))
<div class="container">
  <div class="" id="result" onload="show()">
    <p class="flash" style="">
        {{session('message')}} </i>
    </p>
  </div>
</div>
@endif

<script>
    setTimeout(function show(){
        $("#result").fadeOut();
    }, 5000);
  </script>
  

{{$slot}}