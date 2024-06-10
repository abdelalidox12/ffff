@props(['profiler'])

<nav>
  
  <div class="section-intro">
    <h2 class="section-intro-title">
        <img src="https://themes.getmotopress.com/luviana/wp-content/themes/luviana/images/header_default.png" alt="">
        Our tours
        <img src="https://themes.getmotopress.com/luviana/wp-content/themes/luviana/images/header_default.png" alt="">

    </h2>
</div>
      
 
  <div>

  <style>
    .section-intro {
   height: 300px;
   background: linear-gradient(#00000031, rgba(0, 0, 0, 0.397)),
     url({{url("storage/images/s4.png")}});
   background-position: center;
   background-size: cover;
   display: flex;
   align-items: center;
   justify-content: center;
   background-attachment: fixed;
 }
 .section-intro-title {
   font-size: 4em;
   font-family: "MuseoModerno", cursive;
   color: #cccccc;
   position: relative;
   padding-top: 30px;
 }
 .section-intro-title img {
   position: absolute;
   left: 0;
   top: 0;
   left: 0;
   right: 0;
   margin: auto;
 }
 </style>
   
   <form method="GET" action="/tours-search">
    <div class="tabs-pane-voyage">
      <div class="radio-inputs-voyage">
        {{-- <label class="radio" id="hotel">
          <input type="radio" name="radio" checked="">
          <span class="name" ><a href="/hotels">CHERCHER UN HÔTEL</a></span>
        </label>
        <label class="radio" id="vol">
          <input type="radio" name="radio">
          <span class="name"><a href="/vols">CHERCHER UN VOL</a></span>
        </label> --}}
            
        <label class="radio" id="voyage">
          <input type="radio" name="radio">
          <span class="name"><a href="/tours">Search for tours</a></span>
        </label>
     </div>
     <div class="bar-recherch_voyage">

        <div id="selector"> 
          <div class = "options">
            <div class = "col">
             <div class="sb-custom-select">
              <select name="country" id="countryId" onchange="countryChange()">
                 <option value="" selected disabled>Traveling to</option>
                 <option value="Morocco">Morocco</option>
                 <option value="United States">États-Unis</option>
                 <option value="China">Chine</option>
                 <option value="Canada">Canada</option>   
                
               </select>
              </div>
            </div>


            {{-- <div class = "col">
              <div class="sb-custom-select">
                <label id="stateLabel"></label>
                <select name="<portlet:namespace/>State" id="stateId">
                  <option value="" selected disabled>État/Ville</option>
                </select>
             </div>
            </div> --}}

            <div class = "col">
              <div class="sb-custom-select">
                <select name="type" id="type">
                  <option value ="" disabled selected>Number of days</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="7">7+</option>
                  <option value="10">10+</option>
                  <option value="15">15+</option>    
                  <option value="20">20</option>  
                </select>
              </div>
            </div>
            
            <div class = "colt">
              <input placeholder="Date d'arrivée"  name="date_depart" class="textbox-n" type="text" onfocus="(this.type='date')" id="indate" onchange="updatedate();">
            </div>
            {{-- <div class = "colt">
              <input placeholder="Date de départ" class="textbox-n" type="text" onfocus="(this.type='date')" id="outdate" onchange="updatedate();">
             </div> --}}
          
          </div>
          <div class = "searchvo">
            <button name="search" type="submit" id="search-voyage" data-submit="...Sending"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
     
     </div>   
    </form>
     


    </div>
  
    



  </div>
    

</nav>

<style>
  

#selector {
margin: 10px;
height: 100%; 
width: 100%;}

#selector .options {
display: flex;
margin: 0px;
 }

#selector .options .col {
display: flex;
height: 20px;
width: 100%;
flex-direction: column;
margin: 12px 30px ;}

#selector .options .colt {
display: flex;
position: relative;
flex-direction: column;
width: 30%;
margin: 6px 0px ;
}

.sb-custom-select select {
font-size: 18px;
-webkit-appearance: none;
padding: 5px 10px;
background: 0;
line-height: 1.3;
margin: 0px ;
border-radius: 10px;}

.textbox-n {
height: 36px;
width: 160px;
font-size:18px; 
margin: 6px;
border-radius: 10px;  
padding: 10px;  
 }

 .searchvo {
  position: relative;
  text-align: right;
  margin-right: 10px; 
  top: 6px;
  right: 20px;
  height: 40px;
  width: 80px;}    
  
  
  
  #search-voyage {
    cursor: pointer;
  border: none;

  color: #000000;
  padding: 6px;
  border-radius: 10px;
  font-size: 30px; 
  font-weight: 500;
  height: 50px;
  width: 60px;
  }
  
  #search-voyage:hover {

  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;

  cursor: pointer;
  border: none;

  color: #000000;
  padding: 6px;
  border-radius: 10px;
  font-size: 36px; 
  font-weight: 500;
  height: 50px;
  width: 60px;}
</style>

<script>
  function countryChange() {
      var countryState = [
          ['United States', [
              ['', 'Arrival city'],
              ['New York', 'New York'],
              ['New Jersey', 'New Jersey'],
              ['Texas', 'Texas']
          ]],
          ['China', [
              ['', 'Arrival city'],
              ['Beijing', 'Beijing'],
              ['Tanger', 'Tanger'],
              ['Shanxi', 'Shanxi'],
          ]],
          ['Marrakech', [
              ['', 'Arrival city'],
              ['Rabat', 'Rabat'],
              ['Tanger', 'Tanger'],
              ['Fès', 'Fès'],
              ['Agadir', 'Agadir'],
              ['Ouarzazate', 'Ouarzazate'],
              ['Casablanca', 'Casablanca'],
          ]],
          ['Canada', [
              ['', 'Arrival city'],
              ['Marrakech', 'Marrakech'],
              ['Beijing', 'Rabat'],
              ['Tanger', 'Tanger'],
              ['Shanxi', 'Shanxi'],
          ]]
      ];

      var countryElement = document.getElementById('countryId');
      var stateElement = document.getElementById('stateId');
      var stateLabelElement = document.getElementById('stateLabel');

      if (countryElement && stateElement) {
          var listOfState = [['XX', 'None']];
          var currentCountry = countryElement.options[countryElement.selectedIndex].value;

          for (var i = 0; i < countryState.length; i++) {
              if (currentCountry == countryState[i][0]) {
                  listOfState = countryState[i][1];
              }
          }

          if (listOfState.length < 1) {
              stateElement.style.display = 'none';
              stateLabelElement.style.display = 'none';
          } else {
              stateElement.style.display = 'inline';
              stateLabelElement.style.display = 'inline';
          }

          var selectedState;
          for (var i = 0; i < stateElement.length; i++) {
              if (stateElement.options[i].selected === true) {
                  selectedState = stateElement.options[i].value;
              }
          }

          stateElement.options.length = 0;
          for (var i = 0; i < listOfState.length; i++) {
              stateElement.options[i] = new Option(listOfState[i][1], listOfState[i][0]);
              if (listOfState[i][0] == selectedState) {
                  stateElement.options[i].selected = true;
              }
          }
      }
  }

  function updatedate() {
      var indate = document.getElementById("indate").value;
      document.getElementById("outdate").setAttribute("min", indate);
      if (document.getElementById("outdate").value == indate) {
          document.getElementById("outdate").stepUp(1);
      }
  }
</script>
