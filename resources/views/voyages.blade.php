
<x-master2 title="Excursions">


    <x-navvoyage :profiler="$hotels" />
    
      
   
    <div class="box-top" >
        <!-- <i class="fa-solid fa-badge-percent"></i> -->

            <div class="box-voyage">

                @foreach ($hotels as $profile)  @if($profile['id'] > 1)

             <div class="top-destinationvo" >
             
                    <img src="{{asset($profile['image1'])}}" alt="" class="produit-imgvo">
                    <div id="pinfvo"> <h2 class="produit-titlevo">{{$profile['title']}}</h2>
                    <p class="produi-description"><a href="#">{{$profile['title']}}</a></p>
                   <div> </div>
                   <span class="pricevo"><span></span> <a href="{{ route('voyage.show' , $profile->id)}}">Explore</a> <br>{{$profile['prix']}} DH</span></div>
      
                  </div>
                  @endif      @endforeach
            </div>
     
    </div>
   
   </x-master2>