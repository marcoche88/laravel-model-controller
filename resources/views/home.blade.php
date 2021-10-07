<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 class="text-center my-4">HOME MOVIES</h1>
    <div class="container">

        <div class="row justify-content-center">
            
            @forelse ($movies as $movie)
            <div class="col-4">
                <div class="card alert-success m-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <ul class="card-text">
                            <li>Nationality: <span class="text-uppercase">{{ $movie->nationality }}</span></li>
                            <li>Date: <span class="text-uppercase">{{ $movie->date }}</span></li>
                            <li>Vote: <span class="text-uppercase">{{ $movie->vote }}</span></li>
                        </ul>
                    </div>
                </div> 
            </div>
            
            @empty
            <div class="col-12">
                <div class="alert alert-danger m-5">
                    <h3 class="text-center">Non ci sono film da visualizzare</h3>
                </div>
            </div>
            @endforelse
        </div>
    </div>
    
</body>
</html>