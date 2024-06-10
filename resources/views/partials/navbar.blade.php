<header>
    <div class="bar">
        <div class="logo"><a>MCH-DOX</a></div>
        <ul class="links">
          <li><a href="/" >Home</a></li>
          <li><a href="/hotels">Hotels</a></li>
          <li><a href="/flights">Flights</a></li>
          <li><a href="/tours">Our Tours</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/contact">Contact Us</a></li>
        
           
        </ul>
{{-- 
      <ul class="user">
        <li >
          <div class="btnn">
            <a class="fa-solid fa-users"></a>
            
          </div>
          <div></div>
         {{-- <div class="dropdown_user">
          
            <p><a href="login">Mon Compte</a></p>
            <p><a href="/registre">S'inscrire</a></p>
            <p><a href="#">Agence</a></p>
         </div> 
          </li>
      </ul> --}}



        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    

    </div>

</header>



<div class="dropdown_menu open">
        
  <li><a href="/" >Home</a></li>
  <li><a href="/hotels">Hotels</a></li>
  <li><a href="/flights">Flights</a></li>
  <li><a href="/tours">Our Tours</a></li>
  <li><a href="/about">About Us</a></li>
  <li><a href="/contact">Contact Us</a></li>

</div>


<script >
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');


toggleBtn.onclick = function() {
   
    dropDownMenu.classList.toggle('open');

    const isOpen = dropDownMenu.classList.contains('open');
 
    toggleBtnIcon.className = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars';
};
</script>




<style>
  
  /* header - bar */
  
  header {
    background-color: rgb(239, 239, 239);
    height: 60px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    z-index: 110;
  }
  .bar {
    width: 100%;
    height: 60px;
    max-width: 2000px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    
  
  }
  .bar .logo a {
    font-size: 1.5rem;
    font-weight: bold;
    position: absolute;
    font-family: 'Times New Roman', Times, serif;
    text-decoration: none;
    top: 15px;
    left: 30px;
    z-index: 11111;
  }
  .bar .links {
    display: flex;
    gap: 2rem;
  }
  
  .bar .toggle_btn {
    color: #000000;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
    transition: scale 0.2 ease;
  }
  .bar .toggle_btn:hover {
    color: rgb(255, 255, 255);
  }
  header .links li {
    list-style: none;
    position: relative;
    top: 10px;
    left: 100px;
  }
  
  header a {
    text-decoration: none;
    color: #000000;
    font-size: 1rem;
  
  }
  .user {
    list-style-type: none;
  }
  .btnn {
    position: absolute;
    top: 20%;
  
  }
  
  
  .dropdown_user {
    display: none;
   position: absolute;
   top: 40px;
   z-index: 22;
   backdrop-filter: blur(15px);
   border-radius:  20px;
   padding: 5px;
   right: 20px;
  }
  ul li:hover .dropdown_user  {
  display: block;
  
  }
  
  
  .links a:hover {
    color:rgb(255, 255, 255);
    text-decoration: none;
  }
  
  /*DROPOWN MENU - bar */
  .dropdown_menu {
    display: none;
    position: fixed;
    z-index: 111;
    right: 0rem;
    height: 0px;
    top: 60px;
    width:300px;
    backdrop-filter: blur(15px);
    border-radius: 0 0 20px 20px;
    overflow: hidden;
    transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  
  }
  
  .dropdown_menu.open {
    height: 350px;
  
  }
  
  .dropdown_menu li {
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: x-large;
    font-family: 'Times New Roman', Times, serif;
  
  }
  .dropdown_menu li a:hover {
    text-decoration: none;
    color: darkgray;
  
  }
  .dropdown_menu li a {
    color: rgb(0, 0, 0);
    font-weight: 500;
  
  }
  .toggle_btn {
    position: absolute;
    top: 15px;
    right: 30px;
  }
  
  /* responsive bars */
  @media (max-width: 1050px){
    .bar .links {
        display: none;
    }
    .bar .toggle_btn {
        display: block
    }
    .dropdown_menu {
      display: block;
    }
    .btnn {
      position: absolute;
      top: 20%;
      right: 20%;
    
    }

    .dropdown_user {
      right: 20%;
    }
  }
  @media (max-width: 576px){
  
    .dropdown_menu {
      left: 2rem;
      width:unset ;
    }
  
  }
  
</style>