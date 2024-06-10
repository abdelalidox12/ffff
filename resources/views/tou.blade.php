
<x-master2 title="Voyages">


    <x-navvoyage :profiler="$hotels" />
    
      
   
    <div class="box-top" >
        <!-- <i class="fa-solid fa-badge-percent"></i> -->

            <div class="box-voyage">

                @foreach ($hotels as $profile)  @if($profile['id'] > 1)

             <div class="top-destinationvo" >
             
                    <img src="{{asset($profile['image1'])}}" alt="" class="produit-imgvo">
                    <div id="pinfvo"> <h2 class="produit-titlevo"><i class="fa-solid fa-hotel"></i>{{$profile['title']}}</h2>
                    <p class="produi-description"><a href="#">{{$profile['title']}}</a></p>
                   <div> <span id="star"> @for($i=0;$i<3;$i++) <i class="fa-solid fa-star"></i> @endfor</span><span  id="star2" > @for($j=3;$j<5;$j++) <i class="fa-solid fa-star"></i> @endfor</span><br></div>
                   <span class="pricevo"><span>par personne, à partir de </span> <a href="{{ route('voyage.show' , $profile->id)}}">Découvrir</a> <br>{{$profile['prix']}} DH</span></div>
      
                  </div>
                  @endif      @endforeach
            </div>
     
    </div>
   
   </x-master2>