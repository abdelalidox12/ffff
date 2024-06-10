
@props(['profiler'])


  
  
  
<main> <div id="mai">

   <div class="box-top" id="TOP DESTINATION">
      <!-- <i class="fa-solid fa-badge-percent"></i> -->
   
          
      <h2 id="top">  TOP DESTINATION</h2>
      
      <P class="top-paragraphe">Une fois que vous entrez et découvrez la liste suivante, vous serez transporté(e) dans des paysages idylliques et ne voudrez manquer aucune de nos meilleures destinations. Nous vous garantissons que vous vivrez une expérience unique, avec l'excellence et la qualité d'un service cinq étoiles, quel que soit votre choix.</P>     
     
          <div id="tout1">
      
            <div class="wrapper">
        
              <ul class="carousel">

                  @foreach ($profiler as $profile) 
         
            <li id="cardid" class="card">     
              <div class="box">
      
                
                <div class="top-destination" >
           
                  <img src="{{asset($profile['image1'])}}" alt="" class="produit-img">
                <div id="pinf"> <h2 class="produit-title"><i class="fa-solid fa-hotel"></i>{{$profile['Nom_hotel']}}</h2>
                  <p class="produi-description"><a href="#">{{$profile['description_hotel']}}</a></p>
                 <div class="star"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><br></div>
                 <span class="price"><span>par personne, à partir de </span> <br>{{$profile['prix']}} DH</span></div> 
    
                </div> 
              </div>
            </li>

               @endforeach 
          </div>  </div>
  
        </ul>
     </div>





     <div class="box-top" id="TOP DESTINATION">
        <!-- <i class="fa-solid fa-badge-percent"></i> -->
     
            
        <h2 id="top">  TOP DESTINATION</h2>
        
        <P class="top-paragraphe">Une fois que vous entrez et découvrez la liste suivante, vous serez transporté(e) dans des paysages idylliques et ne voudrez manquer aucune de nos meilleures destinations. Nous vous garantissons que vous vivrez une expérience unique, avec l'excellence et la qualité d'un service cinq étoiles, quel que soit votre choix.</P>     
       
            <div id="tout1">
        
              <div class="wrapper">
          
                <ul class="carousel">
  
                    @foreach ($profiler as $profile) 
           
              <li id="cardid" class="card">     
                <div class="box">
        
                  
                  <div class="top-destination" >
             
                    <img src="{{asset('storage/' .$profile['image'])}}" alt="" class="produit-img">
                  <div id="pinf"> <h2 class="produit-title"><i class="fa-solid fa-hotel"></i>{{$profile['Nom_hotel']}}</h2>
                    <p class="produi-description"><a href="#">{{$profile['description_hotel']}}</a></p>
                   <div class="star"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><br></div>
                   <span class="price"><span>par personne, à partir de </span> <br>{{$profile['id']}} DH</span></div> 
      
                  </div> 
                </div>
              </li>
  
                 @endforeach 
            </div>  </div>
    
          </ul>
       </div>






       <div class="box-top" id="TOP DESTINATION">
        <!-- <i class="fa-solid fa-badge-percent"></i> -->
     
            
        <h2 id="top">  TOP DESTINATION</h2>
        
        <P class="top-paragraphe">Une fois que vous entrez et découvrez la liste suivante, vous serez transporté(e) dans des paysages idylliques et ne voudrez manquer aucune de nos meilleures destinations. Nous vous garantissons que vous vivrez une expérience unique, avec l'excellence et la qualité d'un service cinq étoiles, quel que soit votre choix.</P>     
       
            <div id="tout1">
        
              <div class="wrapper">
          
                <ul class="carousel">
  
                    @foreach ($profiler as $profile) 
           
              <li id="cardid" class="card">     
                <div class="box">
        
                  
                  <div class="top-destination" >
             
                    <img src="{{asset('storage/' .$profile['image'])}}" alt="" class="produit-img">
                  <div id="pinf"> <h2 class="produit-title"><i class="fa-solid fa-hotel"></i>{{$profile['Nom_hotel']}}</h2>
                    <p class="produi-description"><a href="#">{{$profile['description_hotel']}}</a></p>
                   <div class="star"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><br></div>
                   <span class="price"><span>par personne, à partir de </span> <br>{{$profile['id']}} DH</span></div> 
      
                  </div> 
                </div>
              </li>
  
                 @endforeach 
            </div>  </div>
    
          </ul>
       </div>

    </div>
    
  

  
  

  
    
  



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script></div>
  </main>



  <script>
        const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll("#ii");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
  
</script>




    <!------reservation--------->

  
 