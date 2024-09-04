<x-header :count="$count" />

<form action="/signup-store" method="POST" enctype="multipart/form-data" class="myform">
@csrf

<div style="display: flex; justify-content: center; align-items: center;">
<div class="main" style=" width:100%;">
<h4 style="text-align:center; font-weight:bold; color: #000000; padding:30px 0px 0px 0px; font-family: cursive;"> SIGN UP </h4>
<div style="margin-top: 30px;" >
<input type="text"  class="name" value="" placeholder="Full Name" name="name" style="color: black;" required>
@error('name')
    <p style="text-align:center; color:brown;">{{ $message }}</p>
@enderror
</div>

<div class="" style="margin-top: 30px;">
<input type="text"  class="name" value="" placeholder="Email" name="email" style="color: black;" required>
@error('email')
<p style="text-align:center; color:brown;">{{ $message }}</p>
@enderror
</div>

<div class="" style="margin-top: 30px;">
<input type="text"  class="name" value="" placeholder="Password" name="password" style="color: black;" required>
@error('password')
<p style="text-align:center; color:brown;">{{ $message }}</p>
@enderror
</div>

<div class="" style="margin-top: 30px;">
<input type="text"  class="name" value="" placeholder="Confirm Password" name="password_confirmation" style="color: black;" required>
@error('password_confirmation')
<p style="text-align:center; color:brown;">{{ $message }}</p>
@enderror
</div>

<div class="" style="margin-top: 30px;">
<input type="text" class="name" value="" placeholder="Phone number" name="phone" style=" color: black;" required>
@error('phone')
<p style="text-align:center; color:brown;">{{ $message }}</p>
@enderror
</div>
<p style="text-align: center; color: black; padding:20px 0px 0px 0px;">Already have an account? <element><a href="{{ route('signin') }}" style="color:#005555;"> Sign In</a></element></p>
<button style="cursor:pointer; outline:none; margin:0vh 0 5vh 0; background-image: url('/assets/ankara/green2.jpg'); border:1px solid white; border-radius: 10px; width: 15vh; height: 8vh; color: white; font-weight:bold;">Submit</button>

</div>
</div>
</form>


<x-footer/>
