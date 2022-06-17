<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>500</title>
</head>

<body>
    <div class="container-md mt-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1 class="display-1 text-secondary"><b>500</b></h1>
                    <h1 class="display-1 text-warning">SERVER ERROR</h1>
                </div>
                <div class="pull-right">
                    <h1 class="display-1 text-warning"><b>:(</b></h1>
                </div>
            </div>
            <div class="pull-left">
                <h3 class="display-3 text-secondary">Uh oh, something went wrong.</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="container-md mt-4">
        <div class="row">
            <div class="pull-left">
                <h3 class="display-3 text-secondary">Try to refresh the page.</h3>
                <h3 class="display-3 text-secondary">That didn't seem to work? Then try checking back later</h3>
            </div>
            <h3 class="display-3 text-secondary">Click this button to go back!</h3>
            <form>
                <button type="button" class="btn btn-secondary btn-lg" onclick="history.back()">Go Back</button>
            </form>
        </div>
    </div>
</body>

</html>
