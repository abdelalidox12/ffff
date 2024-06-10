{{-- 

<div id="Nos-engagements">
  <h2 id="nos">Nos engagements</h2>
  <p class="nos-paragraphe">Notre agence vous garantit les meilleurs prix, sous réserve
      de disponibilités. Les promotions que nous publions sur notre site nous
      assurent de notre capacité à vous proposer les meilleures offres au Maroc,
      comme à l’étranger.</p>
     
     <div class="engagements-tab">

      <div class="bost">
        <div class="bosticon">
          <span>
             <i class="fa-sharp fa-solid fa-plane-departure"></i>
        
          </span>
          <h5>Comparateur de vols 100% marocain</h5>
        </div>

      </div>


      <div class="bost">
        <div class="bosticon">
          <span>
            <i class="fa-solid fa-bed"></i>
        
          </span>
          <h5>Hôtels partout dans le monde</h5>
        </div>

      </div>


      <div class="bost">
        <div class="bosticon">
          <span>
            <i class="fa-solid fa-thumbs-up"></i>
        
          </span>
          <h5>Meilleur rapport qualité prix</h5>
        </div>

      </div>


      <div class="bost">
        <div class="bosticon">
          <span>
            <i class="fa-solid fa-users"></i>
        
          </span>
          <h5>Service client à votre écoute</h5>
        </div>

      </div>




</div>




<style>




  #Nos-engagements{

  

  }
  
  .engagements-tab{
  display: flex;
    flex-direction: row;


  }
  
  .bost i {

    border: 1px red solid;
    border-radius: 50%;
    padding: 18px;
    font-size: 30px;
    
  }

  .bost i:hover {
  background-color:rgb(254, 216, 169);
  cursor: pointer;
  }

  .bost  {
    text-align: center;
    font-size: 20px;
    margin-left: 51px;
    margin-right: 51px;
    margin-bottom: 51px;
    cursor: pointer;
  }


  




</style>


<footer>
    
   
    <div class="social" id="contactf">
        <a href="#" target="self"><i class="fab fa-whatsapp"></i></a>
        <a href="#" target="self"><i class="fab fa-instagram"></i></a>
        <a href="#" target="self"><i class="fab fa-facebook"></i></a>
        <a href="#" target="self"><i class="fa-solid fa-envelope"></i></i></a>
        <a href="#" target="self"><i class="fa-solid fa-location-dot"></i></a>
      </div>

      <div><p class="copyright">VoyageDox © 2024</p></div>
      

</footer>


 
 --}}

 <footer>
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <h6>
                MCH- <strong>DOX</strong>
              </h6>
              <p>MCH-DOX is a travel agency specializing in international adventures and unique travel experiences. Our mission is to inspire and facilitate world exploration for travel enthusiasts, adventurers, and those eager to discover new cultures. We offer a comprehensive range of services.
              </p>
              {{-- <p>eligendi libero modi nisi aut veniam obcaecati? Dolorem minima quae dolore!</p> --}}
          </div>
          <div class="col-md-3">
              <div class="address">
                  <h6>
                      contact info
                  </h6>
                  <div>

                      <p> <strong>Address</strong><br> Morocco Fquih Ben Salah <br> Hay ALyasmin </p>
                  </div>
                  <div>

                      <p>
                          <strong>
                              Phone number
                          </strong><br>+212 605-710-994 
                          <br>+212 767-721-141
                        </p>
                  </div>
                  <div>

                      <p><strong>Email address</strong> <br> a.belmqadem1@gmail.com <br>chemlalmouad2002@gmail.com </p>
                  </div>
              </div>

          </div>
          <div class="col-md-3">
              <h6>
                  pages
              </h6>
              <style>
                #lii li a {
                  text-decoration: none;

                }
                #likk a{
                  text-decoration: none;
                  color: none;
                  list-style: none
                  
                }
              </style>
              <ul class="p-0" id="lii">
                <li><a href="/" >Home</a></li>
                <li><a href="/hotels">Hotels</a></li>
                <li><a href="/flights">Flights</a></li>
                <li><a href="/Tours">Our Tours</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
              </ul>
          </div>
          <div class="col-md-3">
              <h6>
                  follow us
              </h6>
              <div class="social-icons" id="likk">
                  <a  href.="https://web.facebook.com" target="_blank"><i class="fab fa-facebook" ></i></a>
                  <a  href.="https://www.pinterest.com"target="_blank"><i class="fab fa-pinterest"></i></a>
                  <a  href.="https://www.instagram.com"target="_blank"><i class="fab fa-instagram"></i></a>
                  <a  href.="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  {{-- <a><i class="fab fa-twitter"></i></a> --}}
                  {{-- <a><i class="fab fa-google"></i></a> --}}
               
                  
                  {{-- <a><i class="fab fa-youtube"></i></a> --}}
              </div>
          </div>
      </div>
  </div>
</footer>
























 <style>
  
/* footer */

footer {
  background: linear-gradient(#131313e1, #181818e1),
    url(https://themes.getmotopress.com/luviana/wp-content/uploads/sites/27/2019/07/amenities-new.jpg)
      no-repeat;
  color: #fff;
  padding: 80px 0;
  font-family: "Lato", sans-serif;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}

footer p,
footer ul li a {
  font-size: 0.8em;
  color: rgb(214, 214, 214);
  text-transform: capitalize;
}

footer ul li {
  margin-bottom: 10px;
  list-style: none;
}

footer h6 {
  text-transform: uppercase;
  margin-bottom: 30px;
}

footer strong {
  color: #b48f31;
}

footer p strong {
  color: #b48f31;
  font-size: 1.2em;
  font-weight: 600;
}

@media only screen and (max-width: 600px) {
  footer .address > div {
    width: 33%;
    float: left;
  }
  footer ul {
    padding: 0;
    display: flex;
    justify-content: space-between;
  }
}

footer ul li::before {
  content: "\2022";
  color: rgb(255, 255, 255);
  font-weight: bold;
  display: inline-block;
  width: 1em;
}

footer ul li a:hover {
  color: rgb(167, 94, 0);
  text-decoration: none;
  transition: 0.2s;
}

footer .social-icons {
  display: flex;
  margin-top: 40px;
}

footer .social-icons > a {
  flex: 1;
  text-align: center;
  padding: 2px;
  font-size: 0.8em;
}

footer .social-icons > a:nth-child(1) {
  background-color: rgb(0, 100, 194);
}

footer .social-icons > a:nth-child(2) {
  background-color:  #E60023;
}

footer .social-icons > a:nth-child(3) {
  background-color: rgb(159, 88, 210);
}

footer .social-icons > a:nth-child(4) {
  background-color: rgb(0, 132, 219);
}


 </style>