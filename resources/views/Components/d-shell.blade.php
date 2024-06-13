<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Fresh2Go</title>
    
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    
    <style>

    </style>


</head>

<body>

    <div id="main">
        <div id="nav">
            <div id="quick-links" class="nav-element"> quick links</div>
            <div id="logo" class="nav-element"> logo </div>
            <div id="search" class="nav-element"> search</div>
            <div id="tool-kit" class="nav-element"> tool kit</div>
            <div id="menu" class="nav-element"> menu </div>
            <div id="filters" class="nav-element"> filters </div>
        </div>
        <div id="body"> {{$slot}} </div>
    </div>
    
<img src="https://cdn.statically.io/img/statically.dev/h=100/dog.jpg"></img>
</body>
</html>