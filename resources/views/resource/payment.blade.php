<x-header :count="$count" />

<div style="margin-top:13vh; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <h5 style=" padding:4px; font-weight:bold; text-align:center; "> LOCATIO<element style=" border-bottom:4px solid darkgreen; border-radius: 5px;">N & D</element>ELIVERY</h5>             
    <h6 style="color:gray; text-align:center;"> CHOOSE YOUR LOCATION & DELIVERY INFORMATION </h6> 
    
    <form action="/payments" method="POST" enctype="multipart/form-data" style="margin-top: 2vh; text-align: center;">
        @csrf        
        <div style="display: flex; justify-content: center; align-items: center;">
        <div class="main" style="width:100%;">
        <div style="margin-top: 30px;">
        <input type="text"  class="name" value="" placeholder="Full Name" name="name" style="color: black;" required>
        </div>
        
        <div class="" style="margin-top: 30px;">
        <input type="text"  class="name" value="" placeholder="Email" name="email" style="color: black;" required>
        </div>

        <div class="" style="margin-top: 30px;">
            <select class="name" onchange="toggleLGA(this);" id="state" name="state" value="state">
                <option value="" selected="selected" style="color:grey;"> State </option>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="AkwaIbom">AkwaIbom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="FCT">FCT</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nasarawa">Nasarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamafara</option>
            </select>
        </div>

        <div class="" style="margin-top: 30px;">
            <select name="city" id="lga" class="name select-lga" required>
                <option value="" selected="selected" style="color:grey;"> Select LGA </option>
            </select>
        </div>

        <div class="" style="margin-top: 30px;">
            <input type="text"  class="name" value="" placeholder="Address" name="address" style="color: black;" required>
        </div>

        <div class="" style="margin-top: 30px;">
            <input type="text"  class="name" value="" placeholder="Apartment/Suite" name="apartment" style="color: black;">
        </div>
        
        <div class="" style="margin-top: 30px;">
            <input type="text" class="name" value="" placeholder="Phone" name="phone" style=" color: black;" required>
        </div>

       <br>
       <button style="cursor:pointer; outline:none; margin:0vh 0 5vh 0; background-image: url('/assets/ankara/green2.jpg'); border:1px solid white; border-radius: 10px; width: 25%; height: 8vh; color: white; font-weight:bold;">Pay now</button>

        </div>
        </div>
        </form>
</div>
        
<x-footer/>