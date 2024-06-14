<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Fresh2Go</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

    </style>


</head>

<body>

    <div id="main">
        <div id="nav">
            <div id="quick-links" class="nav-element">
                <a href="" class="q-link">About</a>
                <a href="" class="q-link">Contact</a>
                <a href="" class="q-link">More</a>
                <a href="" class="q-link">Terms and Conditions</a>
            </div>
            <div id="logo" class="nav-element">
                <img src="https://cdn.statically.io/gh/brwncreative/Fresh2GoHub/main/resources/images/Long%40300x.webp"
                    height="55px"></img>
            </div>
            <div id="search" class="nav-element">
                <div id="s-bar">
                    <form>
                        <input placeholder="Lets eat!" name="search" type="search"></input>
                        <div id="s-filter">
                            <i class="bi bi-filter"></i>
                            Filter
                        </div>
                    </form>
                </div>
            </div>
            <div id="tool-kit" class="nav-element">
                <div class="tool">Delivery address</div>
                <div class="tool">tool</div>
                <div class="tool">tool</div>
                <div class="tool">tool</div>
            </div>
            <div id="menu" class="nav-element">
                <div id="menu-wrapper">
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                    <div class="menu-item"><i class="bi bi-people h4"></i>
                        <p>menu item</p>
                    </div>
                </div>
            </div>
            <div id="filters" class="nav-element"> <label>Shop by:</label>

                <div class="f-tag">
                    <p>tag</p>
                </div>
                <div class="f-tag">
                    <p>tag</p>
                </div>
                <div class="f-tag">
                    <p>tag</p>
                </div>
                <div class="f-tag">
                    <p>tag</p>
                </div>
                <div class="f-tag">
                    <p>tag</p>
                </div>
            </div>
        </div>
        <div id="body">
            <div id="body-wrapper">
                <div id="bw-push">dsadsadsadsa</div>
                <div id="bw-content"> {{ $slot }} </div>
            </div>
        </div>

</body>

</html>
