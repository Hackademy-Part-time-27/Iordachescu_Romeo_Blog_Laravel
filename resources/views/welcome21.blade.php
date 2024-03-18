<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
   <nav class="nav justify-content-center">
    <a style="color:indigo;" class="nav-link" href="{{ route('welcome21') }}">Home Page</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('articles') }}">Articles</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('aboutMe') }}">About Me</a>
        <a style="color:indigo;" class="nav-link" href="{{ route('contacts') }}">Contatti</a>
    </nav>
 

    <h1 class="text-center text-primary-emphasis fw-bold">Welcome for everyone</h1>

    <p class="text-center text-primary-emphasis fw-bold fs-3" style="color:#0dcaf0">{!!$welcome !!}</p>
   
</body>
</html>