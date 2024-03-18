<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articoli</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
        <nav class="nav justify-content-center">
       <a style="color:indigo;" class="nav-link" href="{{ route('welcome21') }}">Home Page</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('articles') }}">Articles</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('aboutMe') }}">About Me</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('contacts') }}">Contatti</a>
        </nav>
        
        <div >
            <h1 class="ms-3 fw-bold" style="color:teal">{{ $article['title'] }}</h1>

            <p class="ms-2 fs-5">{!! $article['description'] !!}</p>
        </div>
   
</body>
</html>