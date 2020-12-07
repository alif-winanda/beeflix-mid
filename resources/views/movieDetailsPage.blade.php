<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <title>Movie Details</title>


</head> 
<body class="">

    <nav class="navbar navbar-dark bg-dark ">

        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ url()->previous() }}">  
            <button type="button" class="btn btn-secondary">Back</button>
        </a>    
        <a href="/home">    
            <button type="button" class="btn btn-secondary">Home</button>
        </a>  
        </div>
          <h1 class="d-flex justify-content-center" style="color:white">BeeFlix</h1>
    </nav>


 <div>
    <div class="row mt-15">
        <div class="col d-flex justify-content-center" >
            {{-- {{$movies->photo}} --}}
        <img class="" src="/{{$movies->photo}}" alt="" class="rounded mt-3 mb-3 mx-auto d-block" style=" width: 300px; height:450px;">
        </div>
        <div class="col" >
            <h1>{{$movies->title}}</h1>
            <span>
            @for ($i = 0; $i < 5; $i++)
                @if ($i < $movies->rating)
                    &starf;
                @else
                    &Star;
                @endif
            @endfor
            </span>

            <p>{{$movies->description}}</p>
         <p>Kategori: <a href="/category/{{$genres->id}}">{{$genres->name}}</a></p>
            
        </div>
        <div class="col">
            {{-- {{$episode->episode}}
            {{$episode->title}} --}}
           
            <table class="table table-striped">
            <thead>
                <th scope="col">Episode</th>
                <th scope="col">Judul</th>
            </thead>
             
            <tbody>
             @foreach ($episodes as $episodesDetail)
                <tr>   
                    <td>
                        {{$episodesDetail->episode}}
                    </td>
                    <td>
                        {{$episodesDetail->title}}
                    </td>
                </tr>
            @endforeach
          
            </tbody>
            </table>
           {{$episodes->links()}}
        </div> 
        
    </div>
 </div>
</body>
</html>