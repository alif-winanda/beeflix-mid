<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <title>Home</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark ">

    {{-- <div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ url()->previous() }}">  
        <button type="button" class="btn btn-secondary">Back</button>
    </a>    
    <a>    
        <button type="button" class="btn btn-secondary">Home</button>
    </a>  
    </div> --}}
      <h1 class="d-flex justify-content-center" style="color:white">BeeFlix</h1>
</nav>
    @foreach ($genreMovie as $genreDetails)   
   <h1 style="margin:30px"> {{$genreDetails->name}}</h1>  
     <div class="card-deck" style="margin: 10px">
         @foreach ($genreDetails->movie as $movieDetails)  
        <div class="card" style="width:10rem;">
          <img src="{{$movieDetails->photo}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$movieDetails->title}}</h5>
           <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
          <!-- <a href="#" class="btn btn-primary btn-lg btn-bloc">LIHAT FILM</a> -->
         <a href="/beeflix/{{$movieDetails->id}}"> <button  type="button" class="btn btn-primary btn-lg btn-block" style="border:none; background-color: black" >LIHAT FILM</button> </a>
          </div>
        </div>
            @endforeach
        </div> 
    @endforeach
    
</body>
</html>