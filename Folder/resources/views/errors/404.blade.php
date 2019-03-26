<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page not found</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('css/errorPage.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title">Sorry, this page does not exist.</div>
            <img class="img-thumbnail" src="{{ URL::to('/images/broken beer bottle.jpg') }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 returnHome">
            <a href="{{ route(('home')) }}">Return home</a>
        </div>
    </div>
</div>
</body>
</html>
