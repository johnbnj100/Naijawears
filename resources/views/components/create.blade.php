<x-header :count="$count" />

<form action="{{ route('ankarastore') }}" method="POST" enctype="multipart/form-data" style="margin-top: 14vh; margin-bottom: 14vh; text-align: center;">
@csrf

<div style="display: flex; justify-content: center; align-items: center;">
<div class="main">
<div class="" style="margin-top: 30px;" >
<input type="text"  class="name" value="" placeholder="Name" name="name" style="">
</div>

<div class="" style="margin-top: 30px;" >
<input type="text"  class="name" value="" placeholder="Number" name="number" style="">
</div>

<div class="" style="margin-top: 30px;" >
    <input type="text" class="name" value="" placeholder="Price" name="price">
</div>

<div style="margin-top: 30px;">
<input type="file" class="image" value="" placeholder="image" name="image[]">
</div>

<div style="margin-top: 30px;">
<textarea value="" class="description" rows="10" cols="10" placeholder="Description" name="description"></textarea>
</div>

<button style="margin:5vh 0; background:#005555; outline:none; border:1px solid white; border-radius: 10px; width: 15vh; height: 8vh; color: white;">Upload</button>

</div>
</div>
</form>


<!-- Create Forms -->

<div class="create" style="text-align: center; margin: 30px 0px;">
<button class="adire" style="background:#005555; border-radius: 10px; border:1px solid white; outline:none;"><a href="{{ route('createadire') }}" style="color: white;"> Adire </a></button>
<button class="lace" style="background:#005555; border-radius: 10px; border:1px solid white; outline:none;"><a href="{{ route('createlace') }}" style="color: white;"> Lace </a></button>
</div>

<x-footer/>
