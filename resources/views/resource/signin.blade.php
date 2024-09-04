<x-header :count="$count" />

<form action="/signin/authenticate" method="POST" enctype="multipart/form-data" style=" margin-top: 13vh; margin-bottom: 11vh; text-align: center;">
@csrf

<div style="display: flex; justify-content: center; align-items: center;">
<div class="main" style="width:100%;">
<h4 style="text-align:center; font-weight:bold; color: black; padding:30px 0px 0px 0px; font-family: cursive;"> SIGN IN </h4>

<div class="" style="margin-top: 30px;">
<input type="text"  class="name" value="{{old('email')}}" placeholder="Email" name="email" style="color: black;" required>
@error('email')
<p style="color:brown; text-align:center;">{{$message}}</p>
@enderror
</div>

<div class="" style="margin-top: 30px;">
<input type="text"  class="name" value="" placeholder="Password" name="password" style="color: black;" required>
@error('password')
<p style="color:brown; text-align:center;" >{{$message}}</p>
@enderror
</div>
<p style="text-align: center; color: black; padding:20px 0px 0px 0px;">Don't have an account? <element><a href="{{ route('signup') }}" style="color:#005555;"> Sign Up</a></element></p>
<p style=" color: white; text-decoration:underline; padding:20px 0;"><a href="#" style="color:#005555;"> Forgot Password? </a></p>
<button style="cursor:pointer; outline:none; margin:0vh 0 5vh 0; background-image: url('/assets/ankara/green2.jpg'); border:1px solid white; border-radius: 10px; width: 15vh; height: 8vh; color: white; font-weight:bold;">Submit</button>

</div>
</div>
</form>


<x-footer/>
