
<x-master1 title="Hotels">

    <x-navhotel :profiler="$hotels" />
   

        <div class="box-top" >
          <!-- <i class="fa-solid fa-badge-percent"></i> -->

            <div class="box-hotel">

                  @foreach ($hotels as $profile) 
                
                
              

                  <div class="top-destination" >
               
                    <img src="{{asset($profile['image1'])}}" alt="" class="produit-img">
                  <div id="pinf"><h2 class="produit-title"><i class="fa-solid fa-hotel"></i>{{$profile['Vile_hotel']}}</h2>
                    <p class="produi-description"><a >{{$profile['Vile_hotel']}}</a></p>
                   
                   <span class="price"><span></span> <a href="{{ route('hotel.show' , $profile->id)}}">Explore</a> <br>{{$profile['prix']}} DH</span></div>  
      
                  </div>


                  @endforeach
            </div>
       
      </div>
    



</x-master1>





