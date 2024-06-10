
<x-master2 title="id" >



<!-- Wrapper -->
<div class="navimg">
<div class="wrapper">
  <!-- Images Area -->
  <div class="images-area">
    <img src="{{asset( $produitv['image1'])}}" alt="image" id="imag1" class="firstImage">
    <img src="{{asset( $produitv['image2'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image3'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image4'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image5'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image2'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image3'])}}" alt="image" id="imag1">
    <img src="{{asset( $produitv['image4'])}}" alt="image" id="imag1">
  </div>
  <!-- Buttons Area -->
  <div class="buttons-area">
    <div class="previous-btn">
      <i class='bx bx-chevron-left'></i>
    </div>
    <div class="next-btn">
      <i class='bx bx-chevron-right'></i>
    </div>
  </div>
  <!-- Pagination Area -->
  <div class="pagination-area">
  </div>
</div>
</div>
<!-- End Wrapper -->


<script>
  // Images Area Images
let imagesAreaImages = document.querySelectorAll('.images-area img');
// Images Area First Image
let imagesAreaFirstImage = document.querySelector('.images-area .firstImage');

// Previous And Next Buttons
let previousBtn = document.querySelector('.previous-btn');
let nextBtn = document.querySelector('.next-btn');

// Pagination Area 
let paginationArea = document.querySelector('.pagination-area');

// Current Image Count
let currentImageCount = 1;

// Slider Controler Function
let sliderController;
// Create Pagination Spans Function
let createPaginationSpans;

// Every Click On Buttons
previousBtn.addEventListener('click', previousImage);
nextBtn.addEventListener('click', nextImage);


// Previous Image Function
function previousImage() {
  // If The currentImageCount Is 1
  if(currentImageCount === 1){
    return false;
  }else{ // Else
    // Minus One From currentImageCount
    currentImageCount--;
    // Call Function sliderController();
    sliderController();

  };
};

// Next Image Function
function nextImage() {
  // If The currentImageCount Is imagesAreaImages.length
  if(currentImageCount === imagesAreaImages.length){
    return false;
  }else{ // Else
    // Plus One To currentImageCount
    currentImageCount++;
    // Call Function sliderController();
    sliderController();
  };
};

// Create Pagination Spans [Circls] Function
(function createPaginationSpans(){
  // Loop On All The Images Slider
  for(var i = 0; i < imagesAreaImages.length; i++){
    // Create Span 
    let paginationSpan = document.createElement('span');
    // Append The Span
    paginationArea.appendChild(paginationSpan)
  };
})();

// Slider Controler Function
(sliderController = function (){
  // Get All The pagination Spans
  let paginationCircls = document.querySelectorAll('.pagination-area span');

  // Call Remore All Active Class Function
  removeAllActive(paginationCircls);
  
  // Call Remore Active Button Function
  activeButton();

  // The currentImageCount Minus One
  let currentImageMinusOne = currentImageCount - 1;

  // Set Active Class On Current Pagination
  paginationCircls[currentImageMinusOne].classList.add('active');

  // Move The images Area First Image
  imagesAreaFirstImage.style.marginLeft = `-${400 * (currentImageMinusOne-3)}px`;
  console.log(400 * currentImageMinusOne);
})();

// Remove All Active Class Function
function removeAllActive(targetElement){
  for(var i = 0; i < targetElement.length; i++){
    targetElement[i].classList.remove('active');
  };
};

// Check Active Button Function
function activeButton() {
  // If The Current Image Count Equle 1
  currentImageCount === 1 ? 
  // Hide The Previous Button
  previousBtn.classList.add('disabled') : 
  // Else: Show The Previous Button
  previousBtn.classList.remove('disabled');

  // If The Current Image Count Equle imagesAreaImages.length
  currentImageCount === imagesAreaImages.length ? 
  // Hide The Next Button
  nextBtn.classList.add('disabled') : 
  // Else: Show The Next Button
  nextBtn.classList.remove('disabled');
};

// Move Slider Image Every 3 Second 
setInterval(() => {
  // If The Current Image Count Not Equle imagesAreaImages.length
  if(currentImageCount != imagesAreaImages.length){
    // Plus One
    currentImageCount++;
    // Call Function sliderController();
    sliderController();
  }else{ // else
    // Make currentImageCount Equle 1
    currentImageCount = 1;
    // Call Function sliderController();
    sliderController();
  };
}, 3000);

// :)
</script>









    


       {{--      <div class="p-imag" >
   <div class="pre-imag">   <img src="{{asset( $produitv['image1'])}}" alt="" class="cart-img"> </div> 

    <div class="sous-imag"> 
           <div class="im1"> <img src="{{asset( $produitv['image1'])}}" alt="" class="cart-img1">
            <img src="{{asset( $produitv['image2'])}}" alt="" class="cart-img2"></div><div class="im2">
            <img src="{{asset( $produitv['image3'])}}" alt="" class="cart-img3">
            <img src="{{asset( $produitv['image4'])}}" alt="" class="cart-img4">
    </div></div>--}}



    <div class="cart-voyage">
    
    <div class="barcart">
      <div class="titleprv">{{$produitv['title']}}</div>
      <div class="prixpv">
        

        <div class="prix-tours">
        <svg class="icprix" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="24" height="24" viewBox="0 0 6.3499999 6.3500002" version="1.1" id="svg8" inkscape:version="0.92.4 (5da689c313, 2019-01-14)" sodipodi:docname="3. Money.svg">
        <defs id="defs2">
          <pattern y="0" x="0" height="6" width="6" patternUnits="userSpaceOnUse" id="EMFhbasepattern"></pattern>
          <pattern y="0" x="0" height="6" width="6" patternUnits="userSpaceOnUse" id="EMFhbasepattern-3"></pattern>
        </defs>
        <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="7.9999995" inkscape:cx="-4.2455253" inkscape:cy="11.770705" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" units="px" inkscape:window-width="1280" inkscape:window-height="658" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" showguides="true" guidecolor="#af0000" guideopacity="0.49803922" guidehicolor="#ff4b4b" guidehiopacity="0.49803922">
          <inkscape:grid type="xygrid" id="grid815" empspacing="1" originx="0" originy="0" spacingx="0" spacingy="0" snapvisiblegridlinesonly="true" visible="true" enabled="true" dotted="false"></inkscape:grid>
        </sodipodi:namedview>
        <metadata id="metadata5">
          <rdf:rdf>
            <cc:work rdf:about="">
              <dc:format>image/svg+xml</dc:format>
              <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
              <dc:title></dc:title>
            </cc:work>
          </rdf:rdf>
        </metadata>
        <g inkscape:label="Guides" inkscape:groupmode="layer" id="layer1" transform="translate(0,-290.64999)">
          <path style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#f0fe67;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.26458332;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" d="m 3.1757812,291.44531 c -1.3138446,0 -2.38085932,1.06506 -2.38085932,2.37891 0,1.31384 1.06701472,2.38086 2.38085932,2.38086 1.3138447,0 2.3789063,-1.06702 2.3789063,-2.38086 0,-1.31385 -1.0650616,-2.37891 -2.3789063,-2.37891 z" id="path1216" inkscape:connector-curvature="0" sodipodi:nodetypes="sssss"></path>
          <path style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#eaca35;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.26458332;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" d="m 3.1757812,292.03516 c -0.9832886,0 -1.7890624,0.80577 -1.7890624,1.78906 0,0.98329 0.8057729,1.78906 1.7890624,1.78906 0.9832896,0 1.7890626,-0.80577 1.7890626,-1.78906 0,-0.98329 -0.8057739,-1.78906 -1.7890626,-1.78906 z" id="path1214" inkscape:connector-curvature="0" sodipodi:nodetypes="sssss"></path>
          <path id="path1218" d="m 3.7429769,294.14447 c 0,0.142 -0.035498,0.26032 -0.1301614,0.35499 -0.094663,0.0946 -0.2129913,0.15382 -0.3668182,0.16565 v 0.50882 H 3.1158358 v -0.49699 c -0.1064955,0 -0.2011585,-0.0119 -0.2839884,-0.0355 -0.08283,-0.0237 -0.1656598,-0.0592 -0.2248241,-0.0946 v -0.27215 h 0.011832 c 0.011833,0.0119 0.047331,0.0355 0.08283,0.0592 0.035498,0.0237 0.070997,0.0473 0.1064957,0.0592 0.035498,0.0237 0.08283,0.0355 0.1419942,0.0473 0.047331,0.0237 0.1064956,0.0237 0.1656598,0.0237 v -0.59164 c -0.035498,-0.0119 -0.059165,-0.0237 -0.08283,-0.0237 -0.023666,-0.0119 -0.047331,-0.0119 -0.070997,-0.0237 -0.1301614,-0.0355 -0.2129912,-0.0946 -0.2721555,-0.16566 -0.047331,-0.0829 -0.08283,-0.17749 -0.08283,-0.28398 0,-0.142 0.047331,-0.26034 0.1419943,-0.35499 0.08283,-0.0946 0.2011584,-0.142 0.3668182,-0.16567 v -0.37864 h 0.1301614 v 0.37864 c 0.08283,0 0.153827,0.0119 0.236657,0.0355 0.08283,0.0236 0.153827,0.0473 0.2011585,0.071 v 0.27215 h -0.011833 c -0.059164,-0.0473 -0.1183285,-0.0829 -0.1774928,-0.11834 -0.059164,-0.0237 -0.1419942,-0.0473 -0.2484897,-0.0592 v 0.60348 c 0.023666,0 0.047331,0.0119 0.08283,0.0119 0.023666,0.0119 0.047331,0.0119 0.059164,0.0237 0.1183285,0.0237 0.2011584,0.0829 0.2721555,0.15383 0.059164,0.071 0.08283,0.16566 0.08283,0.29582 z m -0.6271411,-0.50881 v -0.57982 c -0.08283,0.0119 -0.153827,0.0355 -0.2011585,0.0829 -0.059164,0.0473 -0.08283,0.1065 -0.08283,0.20115 0,0.0829 0.011833,0.142 0.059164,0.18933 0.035498,0.0355 0.1183286,0.071 0.2248241,0.1065 z m 0.4141499,0.5443 c 0,-0.0946 -0.023666,-0.15382 -0.059164,-0.18932 -0.047331,-0.0473 -0.1183285,-0.071 -0.224824,-0.0946 v 0.56799 c 0.094663,-0.0119 0.1656597,-0.0355 0.2129912,-0.0829 0.047331,-0.0473 0.070997,-0.10649 0.070997,-0.20116 z" style="fill:#ea8035;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.26458332;stroke-miterlimit:4;stroke-dasharray:none" inkscape:connector-curvature="0"></path>
        </g>
       </svg>
       <div class="pri">{{$produitv['prix']}} Dhs</div> 
      </div>

<div class="datetour">
       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <g>
          <g>
            <g>
              <polygon fill="#F77B55" points="27.8,372.8 25.4,370.8 134.3,243.1 229.2,350.4 336.7,147.7 402.7,210.5 489,131.9 491.1,134.3 
                402.7,214.8 337.6,152.8 229.8,355.8 134.3,247.8 			"></polygon>
            </g>
          </g>
          <g>
            <g>
              <path fill="#92E0EA" d="M278.1,425.3c-14.9,4.2-30.5,6.4-46.7,6.4c-95.7,0-173.3-77.6-173.3-173.3c0-95.7,77.6-173.3,173.3-173.3
                c68.8,0,128.3,40.1,156.2,98.2l21.3-11.8C376.8,106,309.4,60.8,231.4,60.8c-109.2,0-197.6,88.5-197.6,197.6
                c0,109.2,88.5,197.6,197.6,197.6c17.9,0,35.2-2.4,51.6-6.9L278.1,425.3z"></path>
            </g>
          </g>
          <g>
            <g>
              <polygon fill="#92E0EA" points="435.6,259.1 427.4,141.4 349.8,178.2 			"></polygon>
            </g>
          </g>
          <g>
            <g>
              <g>
                <polygon fill="#353F49" points="234.7,277.5 155.4,231.7 162.7,219 234.7,260.5 338.7,200.8 346,213.6 				"></polygon>
              </g>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M258.2,264.6c0,11.8-9.6,21.4-21.4,21.4c-11.8,0-21.4-9.6-21.4-21.4c0-11.8,9.6-21.4,21.4-21.4
                C248.6,243.2,258.2,252.8,258.2,264.6z"></path>
            </g>
          </g>
          <g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M241.1,111.5c-2.4,2.4-6.2,2.4-8.6,0c-2.4-2.4-2.4-6.2,0-8.6c2.4-2.4,6.2-2.4,8.6,0
                  C243.4,105.3,243.4,109.1,241.1,111.5z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M165.5,129.5c-0.9,3.3-4.2,5.2-7.5,4.3c-3.3-0.9-5.2-4.2-4.3-7.5c0.9-3.3,4.2-5.2,7.5-4.3
                  C164.5,122.8,166.4,126.2,165.5,129.5z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M109,182.8c0.9,3.3-1.1,6.6-4.3,7.5c-3.3,0.9-6.6-1.1-7.5-4.3c-0.9-3.3,1.1-6.6,4.3-7.5
                  C104.8,177.6,108.2,179.5,109,182.8z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M86.8,257.2c2.4,2.4,2.4,6.2,0,8.6c-2.4,2.4-6.2,2.4-8.6,0c-2.4-2.4-2.4-6.2,0-8.6
                  C80.6,254.8,84.4,254.8,86.8,257.2z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M104.7,332.7c3.3,0.9,5.2,4.2,4.3,7.5c-0.9,3.3-4.2,5.2-7.5,4.3c-3.3-0.9-5.2-4.2-4.3-7.5
                  C98.1,333.8,101.5,331.8,104.7,332.7z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M158,389.2c3.3-0.9,6.6,1.1,7.5,4.3c0.9,3.2-1.1,6.6-4.3,7.5c-3.3,0.9-6.6-1.1-7.5-4.3
                  C152.9,393.4,154.8,390.1,158,389.2z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M232.4,411.4c2.4-2.4,6.2-2.4,8.6,0c2.4,2.4,2.4,6.2,0,8.6c-2.4,2.4-6.2,2.4-8.6,0
                  C230.1,417.7,230.1,413.8,232.4,411.4z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M308,393.5c0.9-3.3,4.2-5.2,7.5-4.3c3.3,0.9,5.2,4.2,4.3,7.5c-0.9,3.2-4.2,5.2-7.5,4.3
                  C309.1,400.1,307.1,396.7,308,393.5z"></path>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M364.5,340.2c-0.9-3.3,1.1-6.6,4.3-7.5c3.3-0.9,6.6,1.1,7.5,4.3c0.9,3.3-1.1,6.6-4.3,7.5
                  C368.7,345.4,365.3,343.4,364.5,340.2z"></path>
              </g>
            </g>
            <g>
              <g>
                <ellipse fill="#CDCCCA" cx="391" cy="261.5" rx="6.1" ry="6.1"></ellipse>
              </g>
            </g>
            <g>
              <g>
                <path fill="#CDCCCA" d="M315.5,133.8c-3.3,0.9-6.6-1.1-7.5-4.3c-0.9-3.3,1.1-6.6,4.3-7.5c3.3-0.9,6.6,1.1,7.5,4.3
                  C320.6,129.5,318.7,132.9,315.5,133.8z"></path>
              </g>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M35.2,377.7c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5
                C30.5,367.1,35.2,371.9,35.2,377.7z"></path>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M144,247.8c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5
                C139.3,237.3,144,242,144,247.8z"></path>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M239.2,355.4c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5
                C234.5,344.9,239.2,349.6,239.2,355.4z"></path>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M345.3,154.2c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5
                C340.6,143.6,345.3,148.3,345.3,154.2z"></path>
            </g>
          </g>
          <g>
            <g>
              <path fill="#F77B55" d="M497.5,134.7c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5
                C492.7,124.1,497.5,128.8,497.5,134.7z"></path>
            </g>
          </g>
        </g>
        </svg>

       <div class="datt">{{$produitv['N_jour']}} Day</div> 
      </div>
    
    </div>
    </div>


    
 </div> 

 <div class="Descriptiontour"> <h1  >Description</h1>
  <p>
    
Embark on an enchanting journey through Morocco, where each day unfolds like a chapter in a tale of adventure and discovery. Upon your arrival in Marrakech, you are greeted with open arms by the warmth of Moroccan hospitality, setting the stage for the magical experiences that lie ahead. From Marrakech, your expedition takes you through breathtaking landscapes and ancient cities, including Ouarzazate, Toudgha Gorges, Merzouga, Alnif, Tazarine, Nqob, and Zagora. Each stop along the way offers a unique glimpse into Morocco’s rich cultural tapestry, from the ochre-hued realm of Ouarzazate to the desert embrace of Merzouga and the verdant oasis of Zagora.



As you traverse the country, you are treated to a sensory feast of sights, sounds, and flavors, from the bustling markets of Marrakech to the panoramic vistas of N’Qob and the saffronscented air of Taliouine. Along the way, you find moments of serenity amidst the chaos of daily life, whether wandering through the ancient Kasbahs of Zagora or savoring the tranquility of Taroudant’s red ramparts.

In Marrakech, the journey comes full circle as you immerse yourself in the city’s storied past and vibrant present. Through labyrinthine streets and bustling markets, you wander, discovering hidden gems at every turn. From the opulent Bahia Palaces to the majesti
Koutoubia Mosque, each landmark tells a story of Marrakech’s enduring legacy.

As your adventure draws to a close, you bid farewell to Morocco with a heart full of cherished memories and a longing to return. As you depart for the airport, you carry with you the echoes of laughter and the whispers of adventure, forever intertwined with the spirit of this enchanting land.
  </p>
  



 <div>
  <h2>Included/Exclude</h2>
<p><i class="fa-solid fa-check"></i> {{$produitv['Inclus']}}</p>
<p><i class="fa-solid fa-xmark"></i> {{$produitv['Exclue']}}</p>
 </div>

 </div>

     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
     <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
     <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>


     <main class="p-3  bg-light-blue">
       <div class="flex justify-center items-start my-2">
         <div class="w-full sm:w-10/12 md:w-18/19 my-1">
           <h2 class="text-xl font-semibold text-vnet-blue mb-2">Tour Plan</h2>
           <ul class="flex flex-col">

             @if(!empty($produitv['T_jour1']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour1']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 x-ref="tab"
                 :style="handleToggle()"
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour1']}}
                 </p>
               </div>
             </li>

             @endif @if(!empty($produitv['T_jour2']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour2']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                 x-ref="tab"
                 :style="handleToggle()"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour1']}}
                 </p>
               </div>
             </li>

             @endif @if(!empty($produitv['T_jour3']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour3']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                 x-ref="tab"
                 :style="handleToggle()"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour3']}}
                 </p>
               </div>
             </li>

             @endif @if(!empty($produitv['T_jour4']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour4']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                 x-ref="tab"
                 :style="handleToggle()"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour4']}}
                 </p>
               </div>
             </li>

             @endif @if(!empty($produitv['T_jour5']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour5']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                 x-ref="tab"
                 :style="handleToggle()"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour5']}}
                 </p>
               </div>
             </li>

             @endif @if(!empty($produitv['T_jour6']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
               <h2
                 @click="handleClick()"
                 class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
               >
                 <span>{{$produitv['T_jour6']}}</span>
                 <svg
                   :class="handleRotate()"
                   class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                   viewBox="0 0 20 20"
                 >
                   <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                 </svg>
               </h2>
               <div
                 class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                 x-ref="tab"
                 :style="handleToggle()"
               >
                 <p class="p-3 text-gray-900">
                  {{$produitv['D_jour6']}}
                 </p>
               </div>
             </li>
             @endif @if(!empty($produitv['T_jour7']) )
             <li class="bg-white my-2 shadow-lg" x-data="accordion(7)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour7']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour7']}}
                </p>
              </div>
            </li>
            @endif @if(!empty($produitv['T_jour8']) )

            <li class="bg-white my-2 shadow-lg" x-data="accordion(8)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour8']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour8']}}
                </p>
              </div>
            </li>
            @endif 
            @if(!empty($produitv['T_jour9']) )
            <li class="bg-white my-2 shadow-lg" x-data="accordion(9)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour9']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour9']}}
                </p>
              </div>
            </li> @endif @if(!empty($produitv['T_jour10']) )

            <li class="bg-white my-2 shadow-lg" x-data="accordion(10)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour10']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour10']}}
                </p>
              </div>
            </li>@endif @if(!empty($produitv['T_jour11']) )


            <li class="bg-white my-2 shadow-lg" x-data="accordion(11)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour11']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour11']}}
                </p>
              </div>
            </li>

            @endif @if(!empty($produitv['T_jour12']) )
            <li class="bg-white my-2 shadow-lg" x-data="accordion(12)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour12']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour12']}}
                </p>
              </div>
            </li>
            @endif @if(!empty($produitv['T_jour13']) )
            <li class="bg-white my-2 shadow-lg" x-data="accordion(13)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour13']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour4']}}
                </p>
              </div>
            </li>
            @endif @if(!empty($produitv['T_jour14']) )
            <li class="bg-white my-2 shadow-lg" x-data="accordion(14)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>{{$produitv['T_jour14']}}</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                 {{$produitv['D_jour14']}}
                </p>
              </div>
            </li>
            @endif 
           </ul>
         </div>



         <div class="container">

      
      
      <div class="row ">
        
        <div class="col-lg-7 mx-auto">
          <div class="card mt-2 mx-auto p-4 bg-light">
              <div class="card-body bg-light">
         
              <div class = "container">
                               <form action="{{Route('store')}}" method="post">
                                @csrf
                                <h1 >Booking Form</h1>
      
              <div class="controls">
      
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Firstname is required.">
                              
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                             
                              <input id="form_lastname" type="text" name="phone" class="form-control" placeholder="Phone Number" required="required" data-error="Lastname is required.">
                                                              </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email " required="required" data-error="Valid email is required.">
                              
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <div class="field-agileinfo-spc form-w3-agile-text33">
                              <select class="form-control" name="sex">
                                            <option value="">sex</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                             
                                          </select>
                            </div>
                              <label for="form_need">Number of Persons</label>
                              <input id="form_need" type="number" name="np" value="1" class="form-control" required="required" data-error="Please specify your need.">

                              
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                         
      
                          </div>
                       
                          <input type="text" name="idvoy" value="{{$produitv['id']}}" hidden>
                          <input type="text" name="price" value="{{$produitv['id']}}" hidden>
      
                      <div class="col-md-12">
                          
                          <input type="submit" class="btn btn-success btn-send  pt-1 btn-block
                              " value="Book" >
                      
                  </div>
            
                  </div>
      
      
          </div>
           </form>
          </div>
              </div>
      
      
      </div>
          <!-- /.8 -->
      
      </div>
      <!-- /.row-->
      
      </div>
      </div>
       </div>
       </div>


     </main>
   </body>


   <script>
     document.addEventListener('alpine:init', () => {
       Alpine.store('accordion', {
         tab: 0
       });
       
       Alpine.data('accordion', (idx) => ({
         init() {
           this.idx = idx;
         },
         idx: -1,
         handleClick() {
           this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
         },
         handleRotate() {
           return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
         },
         handleToggle() {
           return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
         }
       }));
     })
   </script>
 </html>
  
   {{-- <div class="info"> <div class="sinfo"> 
            <h2 class="cart-ptitle"><span class="tit"><i class="fa-solid fa-hotel"> </i>{{$produitv['title']}}</span> <span id="star"> @for($i=0;$i<3;$i++) <i class="fa-solid fa-star"></i> @endfor</span><span  id="star2" > @for($j=3;$j<5;$j++) <i class="fa-solid fa-star"></i> @endfor</span></h2>
            <p class="cart-pdescription"><a href="#">{{$produitv['description']}}</a></p>
           <div class="cart-price"><span>par personne, à partir de </span> <span class="prix">{{$produitv['prix']}}DH</span>  </div>
           <a  href="{{ route('voyage.show' , $produitv->id)}}" class="stretched-link"></a>
          </div>
          <div class="btres" id="r"><a class="breserver">Réserver</a></div>

</div>
          </div>

    </div> --}}



<style>
  body {
    font-family: 'Lato', sans-serif;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 20%;
    margin-left: 0px;
    background: rgb(180, 143, 49);
   

    }

    .btn-send:hover {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 20%;
    margin-left: 0px;
    background: rgb(238, 184, 46);
   

    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 0px;
	margin-right: 0px;
}

</style>




</x-master2>



