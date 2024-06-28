<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> {{ config('app.name') }} </title>

    <link rel="stylesheet" href="{{ mix('build/assets/d_main.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/d_productCard.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/d_hero.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/d_footer.css') }}">
    <script src="{{ mix('build/assets/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

    </style>


</head>

<body>
    <div id="main">
        <div id="nav">
            <div id="nav-wrapper">
                <div id="quick-links" class="nav-element">
                    <a href="" class="q-link">About</a>
                    <a href="" class="q-link">Contact</a>
                    <a href="" class="q-link">More</a>
                    <a href="" class="q-link">Terms and Conditions</a>
                </div>
                <div id="logo" class="nav-element">
                    <img src="https://cdn.statically.io/gh/brwncreative/Fresh2GoHub/main/resources/images/Long%40300x.webp"
                        height="55px"></img>
                    <div id="l-divider"></div>
                </div>
                @livewire('searchbar')
                <div id="tool-kit" class="nav-element">
                    <div id="tk-delivery" class="tool">
                        <p>Delivery</p> <button type="button">Set Address</button>
                    </div>
                    <div id="tk-account" class="tool">
                        <p>Account Area</p><button type="button">Login / Sign up</button>
                    </div>
                    <div id="tk-coupons" class="tool"><i class="bi bi-ticket h2"></i></div>
                    <div id="tk-cart" class="tool"><i class="bi bi-basket h2"></i></div>
                </div>
                <div id="menu" class="nav-element">
                    <div id="menu-wrapper">
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Mixed Packages</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Vegetables</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Prepackaged Fruit and Platters</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Paste/Mash</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Sauces</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Seasonings</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Dry Rubs (Packs)</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Meats</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Seafoods</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Marinades</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h3"></i>
                            <p>Others</p>
                        </div>
                    </div>
                </div>
                <div id="filters" class="nav-element"> <label>Shop by:</label>

                    <div id="tag-wrapper">
                        <div class="f-tag">
                            <p>Express</p>
                        </div>
                        <div class="f-tag">
                            <p>Hot</p>
                        </div>
                        <div class="f-tag">
                            <p>Recommended</p>
                        </div>
                        <div class="f-tag">
                            <p>Popular</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="body">
            <div id="body-wrapper">
                <div id="bw-push"></div>
                <div id="bw-content"> <x-d_hero /> </div>
                <div id="bw-buffer"></div>
                <div id="bw-footer"> <x-d_footer></x-d_footer> </div>
            </div>
        </div>



</body>

</html>
