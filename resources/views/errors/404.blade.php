<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>404</title>
</head>
<body>
    <div class="d-flex flex-row justify-content-center pt-4">
        <img src="https://www.iconpacks.net/icons/2/free-sad-face-icon-2691-thumb.png" alt="404" width="250"
            height="250">
    </div>
    <div class="d-flex flex-row justify-content-center">
        <p class="text-center">
        <h1 class="display-1 text-dark"><i>404</i></h1>
        </p>
    </div>
    <div class="d-flex flex-row justify-content-center">
        <p class="text-center">
        <h2 class="display-2 text-secondary"><i>Page not found</i></h2>
        </p>
    </div>
    <div class="d-flex flex-row justify-content-center">
        <p class="text-center">
        <h2 class="display-2 text-secondary"><i>The page you are trying to access doesn't</i></h2>
        </p>
    </div>
    <div class="d-flex flex-row justify-content-center">
        <p class="text-center">
        <h2 class="display-2 text-secondary"><i>exist and you should feel bad about it</i></h2>
        </p>
    </div>

    <div class="d-flex flex-row justify-content-center pt-4">
        <a href="{{ route('products.index') }}" class="btn btn-dark btn-lg active" role="button" aria-pressed="true"><i class="display-2">JK, I love you. Click here to go back :)</i></a>
    </div>
</body>
</html>
