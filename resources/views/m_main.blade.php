<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} Mobile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ mix('build/assets/m_main.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/m_footer.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/m_hero.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/m_searchBar.css') }}">
    <link rel="stylesheet" href="{{ mix('build/assets/m_productCard.css') }}">
</head>

<body>
    <div id="main">
        <div id="nav">
            <div id="nav-wrapper">
                <div id="actions" class="nav-element">
                    <div id="a-wrapper">
                        <img src="https://cdn.statically.io/gh/brwncreative/Fresh2GoHub/main/resources/images/Long%40300x.webp"
                            height="50px"></img>
                        <i class="bi bi-list h1"></i>
                    </div>
                </div>
                <div id="search" class="nav-element">
                    <form action ="">
                        <div id="search-wrapper" class="nav-element">
                            <input placeholder="Lets eat!" name="search"></input>
                            <div id="search-filter"><i class="bi bi-search h2"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="menu" class="nav-element">
                    <div id="menu-wrapper">
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Mixed Packages</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Vegetables</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Prepackaged Fruit and Platters</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Paste/Mash</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Sauces</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Seasonings</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Dry Rubs (Packs)</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Meats</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Seafoods</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Marinades</p>
                        </div>
                        <div class="menu-item"><i class="bi bi-people h2"></i>
                            <p>Others</p>
                        </div>
                    </div>
                </div>
                <div id="mask">
                </div>
            </div>
        </div>
        <div id="body">
            <div id="body-wrapper">
                <div id="bw-push"></div>
                <div id="bw-content"><x-m_hero /></div>
                <div id="bw-buffer"></div>
                <div id="bw-footer"><x-m_footer /></div>
            </div>
        </div>
    </div>
    </div>

    {{-- Control Nav render  --}}
    <script type="text/javascript">
        const scrollCheck = document.getElementById('body');
        const animTarget = document.getElementById('menu');
        let clickable = new Boolean(false);

        // Handler for the proxy
        const watchClickable = {
            set(target, property, value) {
                target[property] = value;
                return true;
            },
        };

        // New proxy
        const clickableProxy = new Proxy({
            value: clickable
        }, watchClickable);

        // Toggle Nav
        function toggleNav() {
            if (clickableProxy.value == true) {
                document.getElementById('menu').style.zIndex = '1';
            } else {
                document.getElementById('menu').style.zIndex = '-1';
            }
        }

        scrollCheck.addEventListener('scroll', () => {
            if (scrollCheck.scrollTop >= '30') {
                clickableProxy.value = false;
                toggleNav();
                document.getElementById('mask').style.gridArea = '3 / 1 / 3 / 1';
                document.getElementById('mask').style.height = '1rem';
                document.getElementById('menu').style.transform = 'translateY(-5rem)';
            } else if (scrollCheck.scrollTop <= '20') {
                clickableProxy.value = true;
                toggleNav();
                document.getElementById('mask').style = '';
                document.getElementById('menu').style.transform = '';
            };
        });
    </script>
</body>

</html>
