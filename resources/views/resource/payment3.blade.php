<x-header :count="$count" />

<div style="margin-top:13vh;">
    <h5 style="color:black; text-align:center; font-weight:bolder;">PA<element style=" border-bottom:4px solid darkgreen; border-radius: 5px;">YME</element>NT </h5>
    <h6 style="color:gray; text-align:center;"> Pay via bank transfer using internet banking. </h6>      
    <div style="display: flex; justify-content: center; align-items: center;">
    <div class="main" style="width:100%;">

    <form action="/payments2" method="POST" enctype="multipart/form-data" style="margin-top: 2vh; text-align: center;">
    @csrf  
    <div style="margin-top: 30px;">
    <input type="text"  class="name" value="" placeholder="Account Name" name="name" style="color: black;" required>
    </div>
    @foreach ($totalcart as $totalcarts)
    <div class="" style="margin-top: 30px;">
        <input type="text"  class="name" value="{{ $totalcarts->total }}" placeholder="Amount" name="amount" style="color: black; font-weight:bold;" required>
    </div>

    <div class="" style="margin-top: 30px; display:flex; align-items:center; justify-content:center; ">
    
    @endforeach
    </div>
    <button data-target="#test" class="morphbutton big-button" style="cursor:pointer; outline:none; margin:0vh 0 5vh 0; background-image: url('/assets/ankara/green2.jpg'); border:1px solid white; border-radius: 10px; width: 25%; height: 8vh; color: white; font-weight:bold;">Pay now</button>

<div id="test" class="morphbutton-content" style="border-radius:10px; margin-top:30px; background:lightgray; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
    <div style="display:flex; justify-content:space-around; align-items:center; padding:20px 0px; background-image: url('/assets/ankara/green2.jpg');">
     <h2 class=" text-black" style="font-family: monospace; font-weight:bolder;"> PAYMENT </h2>
     <button type="button" class="fa fa-close" id="close" style="padding:5px; outline: none; background:lightgreen; border:1px solid lightgreen; border-radius:6px;"></button>
     </div>
     <div style="background:lightgrey;">
     <p style="padding:5px 0px 0px 0px;" class="info1"> Proceed to your mobile banking/internet banking app to complete your bank transfer.</p>
     
     <p style="" class="info2"> Please make a bank transfer to the Account <br>and use the following information:</p>
     <ul style="list-style:none; text-align:center; padding:10px;">
        @foreach ($totalcart as $totalcarts)
         <li style=""><element style="font-weight:bold;">Amount:</element> {{ $totalcarts->total }} </li>
         @endforeach
         <li><element style="font-weight:bold;">Bank Name:</element>: KEYSTONE BANK </li>
         <li><element style="font-weight:bold;">Account No:</element>: 6042860266</li>
     </ul>
     <p style=""><element style="font-weight:bold;"> Transaction expires on </element> </p>
     </div>
     <button style="cursor:pointer; outline:none; margin:0vh 0 5vh 0; background-image: url('/assets/ankara/green2.jpg'); border:1px solid lightgray; border-radius: 10px; width: 25%; height: 8vh; color: white; font-weight:bold;">CONFIRM</button>
    </div>
    </form>
     </div>
     </div>

     <x-footer/>