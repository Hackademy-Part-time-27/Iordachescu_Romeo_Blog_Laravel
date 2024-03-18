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
        <h1 class="text-center text-primary-emphasis fw-bold" > HTML, JavaScript and PHP</h1>
    
        <div>
            @if($articles)
                <ol>
                    @foreach($articles as $index => $article)
                    <li><a class="nav-link badge text-bg-primary text-wrap p-1 m-1 fs-6" style="width: 10rem;" href="{{ route('article', $index)}}">{{ $article['title'] }}</a></li>
                    @endforeach
                </ol>
            @else
                <p>Non ci sono articoli disponibili</p>
            @endif
          
        </div>
   
</body>
</html>