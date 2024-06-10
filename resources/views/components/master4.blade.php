<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- <link rel="stylesheet" href="{{url("storage/css/css.css")}}">
   <link rel="stylesheet" href="{{url("storage/css/cartproduit.css")}}">
   <link rel="stylesheet" href="{{url("storage/css/reser.css")}}">
   <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/boostrap.css" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> --}}
   {{-- <link rel="stylesheet" href="{{url("css/app.css")}}"> --}}
    {{-- <link rel="stylesheet" href="{{url("storage/js/jshotel.js")}}">  --}}
       {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
       
       <!-- icons CSS  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>MCH-DOX | {{$title}}</title>
</head>
<body>
 

   @include('partials.navbar')

 
  
   <main  >
      {{$slot}}
   </main>

  @include('partials.footer')


</body>
</html>
    


  

    
