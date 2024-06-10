
<x-master1 title="id" > 
    {{-- <div class="cart-hotel">


          <div class="p-imag" >
    <div class="pre-imag">   <img src="{{asset('storage/' .$produit['image'])}}" alt="" class="cart-img"> </div>  
    <div class="sous-imag"> 
           <dsiv class="im1"> <img src="{{asset('storage/' .$produit['image'])}}" alt="" class="cart-img1">
            <img src="{{asset('storage/' .$produit['image'])}}" alt="" class="cart-img2"></div><div class="im2">
            <img src="{{asset('storage/' .$produit['image'])}}" alt="" class="cart-img3">
            <img src="{{asset('storage/' .$produit['image'])}}" alt="" class="cart-img4">
    </div></div></div> <div class="info"> <div class="sinfo">
            <h2 class="cart-ptitle"><span class="tit"><i class="fa-solid fa-hotel"> </i>{{$produit['Nom_hotel']}}</span> <span id="star"> @for($i=0;$i<3;$i++) <i class="fa-solid fa-star"></i> @endfor</span><span  id="star2" > @for($j=3;$j<5;$j++) <i class="fa-solid fa-star"></i> @endfor</span></h2>
            <p class="cart-pdescription"><a href="#">{{$produit['description_hotel']}}</a></p>
           <div class="cart-price"><span>par personne, à partir de </span> <span class="prix">{{$produit['id']}}DH</span>  </div>
           <a  href="{{ route('hotel.show' , $produit->id)}}" class="stretched-link"></a>
          </div>
          <div class="btres" id="r"><a class="breserver">Réserver</a></div>

</div>
      --}}

         <head>
           
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
           <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
         </head>
         <body>
          
      
        
          <div class="landing-page">
            <img
              class="Top_most"
              src="{{asset($vols['image1'])}}"
              alt="Landing Page Picture"
            />
            
            </div>
          </div>
            <div id="wrapper">
      
            </div>
              <section id="booking-confirmation">
                <div class="booking-confirmation-text">
                  <h1>{{($vols['Nom_vol'])}}</h1>
                </div>
              </section>
            <div id="room-image">
              <img id="room-image" src="{{asset($vols['image1'])}}" alt="Room Image">
            </div>
            <div class="royal-suite">
              <h1>Royal Suite</h1>
            </div>
          </div>
           
               
                   {{-- <div class="input-container">
          <div class="row">
              <div class="column">
                  <label for="price">$$$</label>
                  <input type="text" id="price" name="price" placeholder="hhh">
              </div>
      
              <div class="column">
                  <label for="ci-co"><img src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/f4317cf1-564c-43a7-a40a-37e705efe473/79f3c16d-81e3-44f8-ac3d-d2d01813c79a?org_if_sml=1915&amp;force_format=original" alt="Icon">Check in - Check out</label>
                  <input type="text" id="ci-co" name="checkInOut" readOnly>
              </div>
          </div>
      
          <div class="row">
              <div class="column">
                  <label for="no-guest"><img src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/f4317cf1-564c-43a7-a40a-37e705efe473/ab77e2ea-e267-40d3-87ec-d2ffa8665281?org_if_sml=1670&amp;force_format=original" alt="Icon">No. of Guest</label>
                  <input type="text" id="no-guest" name="noGuest" readOnly>
              </div>
      
              <div class="column">
                  <label for="no-room"><img src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/f4317cf1-564c-43a7-a40a-37e705efe473/f2fbece8-9c15-4961-b90d-1145593feb7a?org_if_sml=1463&amp;force_format=original" alt="Icon">No. of Room</label>
                  <input id="no-room" name="noRoom" readOnly>
              </div>
          </div>
      </div>
            <div id="total-container">
              <label for="total-expense">TOTAL</label>
              <input type="text" id="total-expense" name="total">
          </div>
           <div id="confirm-booking-container">
               <button id="confirm-booking-btn">CONFIRM BOOKING</button>
            </div> --}}
      <!-- https://w3layouts.com/airline-booking-form-responsive-widget-template/ -->
<div class="booking-form-w3layouts">
<div id="a-i-text-container">
<div id="a-i-text">Amenities & Inclusions</div>
</div>
<div id="a-i-container">
<div id="amenities-inclusions" class="rounded-box">
<ul class="column">
   <li> Private Entrance</li>
  <li> Spacious Living Area</li>
  <li>Limousine Service</li>
  <li>In-Room Spa Services</li>
</ul>
<ul class="column">
  <li>Exclusive Terrace or Balcony</li>
  <li>Private Bar and Lounge</li>
  <li>Walk-in Closet</li>
  <li>State-of-the-Art Entertainment System</li>
</ul>
</div>
</div>
<!-- Form starts here -->
<form action="{{Route('storev')}}" method="post">
@csrf
<h2 class="sub-heading-agileits">Booking Details</h2>
<div class="main-flex-w3ls-sectns">
{{-- <div class="field-agileinfo-spc form-w3-agile-text1">
<select class="form-control">
          <option>From</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
        </select>
</div> --}}
{{-- <div class="field-agileinfo-spc form-w3-agile-text2">
<select class="form-control">
          <option>To</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
        </select>
</div> --}}
</div>
{{-- <div class="main-flex-w3ls-sectns">
<div class="field-agileinfo-spc form-w3-agile-text1">
<select class="form-control">
          <option>Preferred Airline</option>
          <option value="American Airline">American Airline</option>
          <option value="Delta Airlines">Delta Airlines</option>
          <option value="Frontier Airline">Frontier Airline</option>
          <option value="Jet Blue">Jet Blue</option>
          <option value="Southwest Airlines">Southwest Airlines</option>
        </select>
</div>
<div class="field-agileinfo-spc form-w3-agile-text2">
<select class="form-control">
          <option>Preferred Seating</option>
          <option value="Window">Window</option>
          <option value="Aisle">Aisle</option>
          <option value="Special">Special (Request note below)</option>
        </select>
</div>
</div> --}}
<div class="main-flex-w3ls-sectns">
<div class="field-agileinfo-spc form-w3-agile-text1">
<input id="datepicker" name="Check_in" type="date" placeholder="Check-in Date" value="{{$vols['date_depart']}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
</div>
<div class="field-agileinfo-spc form-w3-agile-text2">

<input type="time" id="timepicker" name="Time_in" class="timepicker form-control hasWickedpicker" placeholder="Check-in Time" value="{{$vols['H_depart']}}" onkeypress="return false;"  disabled>
</div>
</div>
<div class="main-flex-w3ls-sectns">
<div class="field-agileinfo-spc form-w3-agile-text1">
<input id="datepicker" name="Check_out" type="text" placeholder="Departure Date" value="{{$vols['date_arrivee']}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker" disabled>
</div>
<div class="field-agileinfo-spc form-w3-agile-text2">
<input type="time" id="timepicker" name="Time_out" class="timepicker form-control hasWickedpicker" placeholder="Departure Time" value="{{$vols['H_arrivage']}}" onkeypress="return false;"  disabled>
</div>
</div>

<div class="triple-wthree">
<div class="field-agileinfo-spc form-w3-agile-text11">
<select class="form-control">
              {{-- <option value="">Adult(12+ Yrs)</option>
               @if($vols['n_place']>0 )
              <option value="1">1</option>
              @if($vols['n_place']>1 )
              <option value="2">2</option>
              @if($vols['n_place']>2 )
              <option value="3">3</option>
              @if($vols['n_place']>3 )        
              <option value="4">4</option>
              @if($produit['n_place']>4 )
              <option value="5">5+</option>@endif @endif @endif @endif @endif --}}
            </select>
</div>
<div class="field-agileinfo-spc form-w3-agile-text22">
<select class="form-control">
              <option value="">Children(2-11 Yrs)</option>
              <option value="1">1</option>
              <option value="2">2</option>    
            </select>
</div>
<div class="field-agileinfo-spc form-w3-agile-text33">
<select class="form-control" name="sex">
              <option value="">sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
               
            </select>
</div>
</div>
{{-- <div class="radio-section">
<h6>Select your sex</h6>
<ul class="radio-buttons-w3-agileits">
<li>
  <input type="radio" value="Male" id="a-option" name="selector1">
  <label for="a-option">Male </label>
  <div class="check"></div>
</li>
<li>
  <input type="radio" id="b-option" value="Female" name="selector1">
  <label for="b-option">Female</label>
  <div class="check">
    <div class="inside"></div>
  </div>
</li>
</ul>
<div class="clear"></div>
</div> --}}
{{-- <div class="main-flex-w3ls-sectns">
<div class="field-agileinfo-spc form-w3-agile-text1">
<input id="datepicker1" name="Text" type="text" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
</div>
<div class="field-agileinfo-spc form-w3-agile-text2">
<input type="text" id="timepicker1" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Return Time" value="" onkeypress="return false;">
</div>
</div> --}}
{{-- <div class="field-agileinfo-spc form-w3-agile-text">
<textarea name="Message" placeholder="Any Message..."></textarea>
</div> --}}
<h3 class="sub-heading-agileits">Personal Details</h3>
<div class="main-flex-w3ls-sectns">
<div class="field-agileinfo-spc form-w3-agile-text1">
<input type="text" name="Name" placeholder="Full Name" required="">
</div>
<div class="field-agileinfo-spc form-w3-agile-text2">
<input type="text" name="Phone no" placeholder="Phone Number" required="">
</div>
</div>
<div class="field-agileinfo-spc form-w3-agile-text">
<input type="email" name="Email" placeholder="Email" required="">
</div>
<div class="clear"></div>
<input type="text" name="idcho" value="{{$vols['id']}}" hidden>
<input type="text" name="price" value="{{$vols['id']}}" hidden>
<input id="confirm-booking-btn" type="submit" value="Submit">
<input id="confirm-booking-btn" type="reset" value="Clear Form">
<div class="clear"></div>
</form>
<!--// Form starts here -->
</div>

      

<style>


/*! CSS Used from: https://p.w3layouts.com/demos_new/template_demo/20-12-2017/airline_booking_form-demo_Free/828699705/web/css/style.css */
div,h2,h3,h6,form,label{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
ul{list-style:none;margin:0px;padding:0px;}
.clear{clear:both;}
.booking-form-w3layouts{box-sizing:border-box;padding:3em 3em; border-radius:20px ; background:rgb(242, 240, 236);width:65%;margin:0 auto;}
h2.sub-heading-agileits,h3.sub-heading-agileits{display:inline-block;text-align:left;font-size:24px;color:#000000;text-transform:capitalize;margin-bottom:.4em;padding:0px 25px 10px 0px;font-weight:400;letter-spacing:2px;border-bottom:2px solid #0091cd;font-family:'Raleway', sans-serif;}
.radio-section{text-align:left;margin:0.7em 0;}
.radio-section h6{display:inline;margin-top:10px;color:#0091cd;font-size:19px;text-transform:capitalize;margin-bottom:.7em;font-weight:400;letter-spacing:2px;font-family:'Raleway', sans-serif;}
.radio-section ul{display:inline;}
.radio-buttons-w3-agileits li input[type="radio"]{cursor:pointer;}
.radio-buttons-w3-agileits li label{color:#000000;font-size:13.5px;font-weight:400;letter-spacing:1px;font-family:'Raleway', sans-serif;}
.booking-form-w3layouts input[type="text"],.booking-form-w3layouts input[type="email"],.booking-form-w3layouts textarea,select.form-control,input#datepicker{width:100%;font-weight:300;color:#000000;font-size:14px;letter-spacing:1.2px;padding:10px 10px;outline:none;background:rgba(255, 255, 255, 0);border:none;border-bottom:1px solid rgba(0, 0, 0, 0.27);box-sizing:border-box;font-family:'Roboto', sans-serif;}
.booking-form-w3layouts textarea{resize:none;height:80px;}
.field-agileinfo-spc{margin-bottom:1em;}
.form-w3-agile-text{width:100%;}
select.form-control option{background:#ffffff;}
.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{text-transform:capitalize;background:#0091cd;color:#fff;padding:0.5em 4em;border:none;font-weight:500;font-size:1.2em;margin-top:1em;float:left;outline:none;letter-spacing:1px;-webkit-transition:.5s all;-moz-transition:.5s all;transition:.5s all;cursor:pointer;font-family:'Raleway', sans-serif;}
.booking-form-w3layouts input[type="submit"]{margin-right:1.5em;background:#d2741c;}
.booking-form-w3layouts input[type="submit"]:hover{background:#0091cd;color:#fff;}
.booking-form-w3layouts input[type="reset"]:hover{background:#d2741c;color:#fff;}
.booking-form-w3layouts ::-webkit-input-placeholder{color:#000000;}
.booking-form-w3layouts :-moz-placeholder{color:#000000;}
.booking-form-w3layouts ::-moz-placeholder{color:#000000;}
.booking-form-w3layouts :-ms-input-placeholder{color:#000000;}
.booking-form-w3layouts label{font-size:13.5px;color:rgba(0, 0, 0, 0.83);letter-spacing:2px;font-weight:400;position:relative;margin-bottom:5px;display:inline-block;text-transform:capitalize;}
ul.radio-buttons-w3-agileits li{display:inline-block;margin:0em 2em;}
@media (max-width:1440px){
.booking-form-w3layouts{width:73%;}
}
@media (max-width:1366px){
.booking-form-w3layouts{width:75%;}
}
@media (max-width:1280px){
.booking-form-w3layouts{width:80%;}
}
@media (max-width:1080px){
.booking-form-w3layouts{width:83%;padding:2em 2.2em;}
}
@media (max-width:1024px){
h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:22px;padding:0px 20px 7px 0px;}
.field-agileinfo-spc{margin-bottom:0.8em;}
.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{padding:0.5em 3em;font-size:1.1em;}
}
@media (max-width:768px){
h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:21px;padding:0px 15px 7px 0px;}
.radio-section h6{font-size:17px;letter-spacing:1.5px;}
ul.radio-buttons-w3-agileits li{margin:0em 1em;}
}
@media (max-width:667px){
h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:19px;letter-spacing:1.5px;}
.booking-form-w3layouts{width:86%;padding:2em 2em;}
.booking-form-w3layouts input[type="text"],.booking-form-w3layouts input[type="email"],.booking-form-w3layouts textarea,select.form-control,input#datepicker{padding:8px 10px;}
.field-agileinfo-spc{margin-bottom:0.9em;}
h2.sub-heading-agileits,h3.sub-heading-agileits{margin-bottom:.6em;}
}
@media (max-width:640px){
.booking-form-w3layouts input[type="submit"]{margin-right:0.7em;}
}
@media (max-width:600px){
.booking-form-w3layouts{width:90%;}
.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{padding:0.5em 2em;}
}
@media (min-width:481px){
.main-flex-w3ls-sectns{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;}
.form-w3-agile-text1,.form-w3-agile-text2{flex-basis:48.5%;-webkit-flex-basis:48.5%;}
}
@media (min-width:737px){
.triple-wthree{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;}
.form-w3-agile-text11,.form-w3-agile-text22,.form-w3-agile-text33{flex-basis:32%;-webkit-flex-basis:32%;}
}
@media (max-width:480px){
ul.radio-buttons-w3-agileits li{margin:0em 0.5em;}
.radio-section{margin:1.3em 0 .7em;}
.booking-form-w3layouts{width:85%;}
ul.radio-buttons-w3-agileits li{margin:1em 0em 0em 0.2em;display:block;}
.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{font-size:1em;}
.booking-form-w3layouts textarea{height:60px;}
.radio-section{margin:1em 0 .7em;}
}
@media (max-width:414px){
.booking-form-w3layouts{width:90%;}
.booking-form-w3layouts{width:90%;padding:1.5em 1.7em;}
}
@media (max-width:384px){
.booking-form-w3layouts input[type="submit"],.booking-form-w3layouts input[type="reset"]{float:none;}
.booking-form-w3layouts input[type="submit"]{margin-right:0em;}
}
@media (max-width:320px){
.booking-form-w3layouts{width:93%;padding:1.3em 1.5em;}
h2.sub-heading-agileits,h3.sub-heading-agileits{font-size:18px;letter-spacing:1.4px;padding:0px 12px 5px 0px;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Raleway';font-style:normal;font-weight:300;src:local('Raleway Light'), local('Raleway-Light'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIYqWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:300;src:local('Raleway Light'), local('Raleway-Light'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIYqWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:400;src:local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:400;src:local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:500;src:local('Raleway Medium'), local('Raleway-Medium'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwN4rWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:500;src:local('Raleway Medium'), local('Raleway-Medium'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwN4rWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:600;src:local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:600;src:local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:700;src:local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Raleway';font-style:normal;font-weight:700;src:local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}

















@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');




nav {
position: relative;
z-index: 2;
display: flex;
height: 80px;
width: 100%;
background: rgba(27, 27, 27, 0.85);
align-items: center;
justify-content: space-between;
padding: 0 50px 0 100px;
flex-wrap: wrap;

}
nav .logo-nav img {
max-width: 140px; /* Adjust the max-width as needed */
width: 100%;
height: auto;
margin-right: 5px; /* Adjust the margin as needed */
}
nav ul {
display: flex;
flex-wrap: wrap;
list-style: none;
}

nav ul li {
margin: 0 5px;
}

nav ul li a {
color: #f2f2f2;
text-decoration: none;
font-size: 14px;
font-weight: 500;
padding: 8px 15px;
border-radius: 5px;
letter-spacing: 1px;
transition: color 0.3s ease; /* Modified transition property */
}

nav ul li a.active,
nav ul li a:hover {
color: #fcba03;
}

nav .menu-btn i {
color: #fff;
font-size: 22px;
cursor: pointer;
display: none;
z-index: 3;
}

input[type="checkbox"] {
display: none;
z-index: 2;
}
.Top_most {
display: block;
margin-top: 60px; /* Adjusted margin-top to position the image under the navbar */
width: 100%;
height: 300px;
position: relative;
z-index: 1;
filter: brightness(85%);
}

.landing-page {
position: relative;
}

@media (max-width: 920px) {
nav .menu-btn i {
display: block;
}
#click:checked ~ .menu-btn i:before {
content: "\f00d";
}

nav ul {
position: fixed;
top: 80px;
left: -100%;
background: #1b1b1b;
height: 100vh;
width: 100%;
text-align: center;
display: block;
transition: all 0.3s ease;
}
#click:checked ~ ul {
left: 0;
}
nav ul li {
width: 100%;
margin: 40px 0;
}
nav ul li a {
width: 100%;
margin-left: -100%;
display: block;
font-size: 20px;
transition: color 0.3s ease; /* Modified transition property */
}
#click:checked ~ ul li a {
margin-left: 0px;
}
nav ul li a.active,
nav ul li a:hover {
background: none;
color: fcba03;
}
.footer {
background-color: #7c6a46;
color: white;
width: 100%;
padding: 20px;
text-align: center;
margin-top: 70px;
position: relative;
bottom: 0;
}
}


#booking-confirmation {
text-decoration: none;
font-weight: regular; /* Use 'normal' instead of 'regular' */
font-size: 18px;
color: black;
margin: 0 auto; /* Center the container horizontally */
max-width: 1050px; /* Set a maximum width to prevent stretching */
padding: 20px;
}

@media (max-width: 480px) {
#booking-confirmation {
padding: 10px;
}
}


#room-image {
max-width: 700px;
max-height: 356px;
width: 100%; /* Ensure the image doesn't exceed the specified dimensions */
height: auto; /* Maintain the aspect ratio */
display: block;
margin: 0 auto; /* Center the image horizontally */
border: 0.5px solid black;

}
#header-image {
position: relative;
width: 100%;
height: 200px;
overflow: hidden;

}

.header-image {
width: 100%; /* Make sure the image takes up 100% of the container width */
height: 100%; /* Make sure the image takes up 100% of the container height */
object-fit: cover; /* Stretch the image to cover the entire container */
}

.royal-suite {
font-family: 'Dancing Script', sans-serif; /* Replace 'Your New Font' with the desired font family */
text-align: center;
position: relative; /* Add position relative to position the bar relative to this element */
color: #7C6A46;
}

.royal-suite::after {
content: '';
display: block;
width: 100px; /* Adjust the width of the bar as needed */
height: 2px; /* Adjust the height of the bar as needed */
background-color: #7C6A46;; /* Adjust the color of the bar as needed */
margin: 10px auto; /* Adjust the margin to control the space between the text and the bar */

}

#wrapper {
flex: 1; /* This will push the footer to the bottom */
width: 100%; /* Ensure the wrapper spans the full width */
box-sizing: border-box;
}

#a-i-container {
display: flex;
justify-content: center;
width: 100%;
padding: 20px;
}

#amenities-inclusions {
display: flex;
justify-content: space-around; /* Adjust as needed */
border-radius: 10px;
border: 1px solid #ddd;
padding: 20px; /* Adjust padding as needed */
width: 100%; /* Adjust the width as needed */
max-width: 700px;
background-color: rgba(124, 106, 70, 0.1);
font-weight: 100;
text-align: left; /* Center text within each column */
}

.column {
list-style-type: none;
padding: 0;
}

.column li {
margin-bottom: 10px; /* Adjust as needed for spacing */
}

.column li i {
margin-right: 5px;
}

#a-i-text {
font-family: 'Poppins', sans-serif;
font-weight: normal;
font-size: 18px;
color: #333;
margin-left: 20px;
}

#a-i-text-container {
text-align: left;
max-width: 740px;
width: 100%;
box-sizing: border-box;
margin-left: auto;
margin-right: auto;

}


.column {
list-style-type: none;
padding: 0;
}

.column li {
margin-bottom: 10px; /* Adjust as needed for spacing */
}

.input-container {
width: 100%;
max-width: 740px; /* Set a maximum width to prevent stretching */
margin: 0 auto;
padding: 20px;
}

.row {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.column {
width: 48%; /* Adjust as needed, leaving some space for margins between columns */
margin-bottom: 10px; /* Add some margin between columns */
}

/* General styling for labels and inputs within the container */
.input-container label {
text-align: center;
margin-bottom: 5px;
}

.input-container label img {
width: 20px; /* Adjust the width as needed */
height: 20px; /* Adjust the height as needed */
vertical-align: middle; /* Align the icons vertically to the middle of the line */
margin-right: 5px; 
}

.input-container input {
width: calc(100% - 30px); /* Adjust the width to account for the icon's width and margin */
padding: 10px;
box-sizing: border-box;
margin-top: 8px;
border: 1px solid #ccc;
border-radius: 10px;
background-color: rgba(124, 106, 70, 0.1);
display: flex;
justify-content: space-around;
align-items: center;
border: 1px solid #ddd;
font-weight: 100;
}


/* Responsive Styles */
@media (max-width: 768px) {
.column {
width: 100%;
}
}

@media (max-width: 480px) {
.input-container {
padding: 10px;
}
}

#no-room {
width: 50%; /* Adjust the width as needed */
}

#total-container {
text-align: right;
margin-bottom: 20px;
max-width: 1000px;
width: 100%;
margin: 0 auto; /* Center the container */
}

#total-container label {
display: block;
text-align: right;
margin-bottom: 10px;
}

#total-container input {
width: 200px;
padding: 5px;
box-sizing: border-box;
margin-top: 3px;
border: 1px solid #ccc;
border-radius: 10px;
font-weight: 100;
background-color: rgba(124, 106, 70, 0.1);
}

@media (max-width: 768px) {
#total-container {
width: 100%;
}
}

#confirm-booking-container {
text-align: right;
margin-top: 20px;
margin-bottom: 10px;
max-width: 1000px;
width: 100%;
margin: 0 auto; /* Center the container */
}

#confirm-booking-btn {
background-color: rgba(124, 106, 70, 1);
color: white;
padding: 10px 20px;
font-size: 16px;
border: none;
cursor: pointer;
border-radius: 5px;
width: 250px;
display: inline-block; /* Ensure the button stays in line and respects right alignment */
margin: 15px auto; /* Center the button */
}

#confirm-booking-btn:hover {
background-color: rgba(124, 106, 70, 0.9);
}



</style>

<script>
//       var app = {

// settings: {
//       booking: $('.booking'),
//       content: $('.content'),
//       description: $('.description'),
//       payment: $('.payment'),
//       slider: $('.slider')
// },

// init: function() {
//       instance = this;
//       settings = this.settings;

//       settings.booking.hide();
//       this.bindUIActions();
// },

// swap: function(start, end, currentView, desiredView) {
//       settings.slider.css('width', start);
//       settings.content.css('width', end);

//       currentView.fadeOut(200);

//       setTimeout(function(){
//             desiredView.fadeIn(600);
//       }, 100);
// },

// bindUIActions: function() {

//       settings.description.find('button').on('click', function(){
//             instance.swap('20%', '80%', settings.description, settings.booking);
//       });

//       settings.booking.find('.cancel').on('click', function(){
//             instance.swap('65%', '35%', settings.booking, settings.description);
//       });

//       settings.booking.find('button').on('click', function(){
//             instance.swap('65%', '35%', settings.booking, settings.description);

//             settings.description.find('button').html('Booked <i class="ion-checkmark"></i>')
//                      .attr('disabled', 'disabled');
//       });

// }
// }

// app.init();
</script>

 


</x-master1> 



