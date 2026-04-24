<!DOCTYPE html>
<html lang="en">

<head>
    <title>F1 Mercedes team example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #111;
            color: white;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #000;
            padding: 14px 30px;
            border-bottom: 2px solid #00e6d2;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;

        }

        .navbar img {
            max-height: 50px;
            height: auto;

        }

        .nav-link {
            color: #ddd;
            margin-left: 15px;
        }

        .navbar-nav {
            margin-right: 10px;

        }

        .nav-link:hover {
            color: white !important;
        }


        .carousel-item img {
            object-fit: cover;
            filter: brightness(60%);
        }

        .carousel-caption {
            bottom: 18%;
        }

        .carousel-caption h3 {
            font-size: 40px;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .carousel-caption h3:hover {
            color: #00e6d2;
            transform: scale(1.1);

        }

        .carousel-caption p {
            font-size: 20px;
        }


        .carousel-inner img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .carousel-item:hover img {
            transform: scale(1.06)
        }
    </style>


<body>

    <!-- Navbar (Disini saya menggunakan berbagai tipe navbar yakni navbar brand/logo dan collapse navbar,) -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <img src="https://images.ctfassets.net/1fvlg6xqnm65/2yqkq7wdz2V0Bwk6Co1GX/fb0be6de7e0ff748fb4b3836024a49d7/MF1_team_logo_Registered-Negative_full_colour.png?w=128&q=75&fm=webp"
            alt="Logo F1 Mercedes">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- berikut merupakan collapse navbar digunakan agar tampilan pada mobile lebih luas -->

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vehicle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Innovation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explore</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Team
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Our Team</a>
                        <a class="dropdown-item" href="#">Drivers </a>
                        <a class="dropdown-item" href="#">F1 Academy</a>
                        <a class="dropdown-item" href="#">Social Impact</a>
                        <a class="dropdown-item" href="#">Esport</a>
                        <a class="dropdown-item" href="#">Club</a>
                    </div>
                </li>
            </ul>


            <!-- Dropdown nav nav-link menggunakan yang ada di w3schools -->

        </div>
    </nav>

    <!-- Menggunakan container fluid agar tampilan subnavbar full/100%
     -->

    <!-- col-6 untuk mobile
    col-md-1 untuk pc
     -->
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col-6 col-md-1 d-flex justify-content-center align-items-center">
                <a class="nav-link" href="#">Now</a>
            </div>
            <div class="col-6 col-md-1 d-flex justify-content-center align-items-center">
                 <a class="nav-link" href="#">Next</a>
            </div>
            <div class="col-6 col-md-1 d-flex justify-content-center align-items-center">
                 <a class="nav-link" href="#">Latest</a>
            </div>
            <div class="col-6 col-md-1 d-flex justify-content-center align-items-center">
                 <a class="nav-link" href="https://www.formula1.com/en/results/2026/team">Standing</a>
            </div>

            <div class="col-12 col-md-5 text-left ">
                <div> <b style="color: #00ff66;">Chinese GP Shanghai</b> International Circuit</div>
            </div>

            <div class="col-12 col-md-3">
                <div class="text-right">22:16 CST</div>
            </div>
        </div>
    </div>

    <!-- untuk carousel saya menggunakan caption-carousel dari w3schools bs4
     -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>

        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.ctfassets.net/1fvlg6xqnm65/3pqctydYwMM3sNElsXrP9I/e979ab08d885134dea54ded5a07e463d/M585679.jpg?w=1273&q=75&fm=webp"
                    alt="" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Front Row Lockout!</h3>
                    <p>Kimi Becomes Youngest GrandPrix Polesitter</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.ctfassets.net/1fvlg6xqnm65/3BhG1mzESR0MYNeKBu04PQ/36d2b3c46d1611619157e76e77ba33bd/Leaderboards_WebLandscape.png?w=1273&q=75&fm=webp"
                    alt="#" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>PLAY:
                        Make Your 2026 Chinese GP Predictions!</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.ctfassets.net/1fvlg6xqnm65/7chq0DEUtDKXPhXlgNbXGS/8af4153fe0549bc87eb447ae8f804a30/M583655.jpg?w=1273&q=75&fm=webp"
                    alt="#" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>
                        In Pictures:
                    </h3>
                    <p>The Best Images from China 2026</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://images.ctfassets.net/1fvlg6xqnm65/5jLmKVgFHb8iP9uOjT8z5i/97b816a31e6a873f994ef1525b5276d7/01-M586713.jpg?w=1273&q=75&fm=webp"
                    alt="#" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>
                        History Made as Kimi Takes First Win in 1-2
                    </h3>
                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</body>


<!-- Dokumentasi w3schools BS 4 yang dipakai
navbar brand/logo
dropdown
fluid containers
grid col dan row
navbar collapsed
carrousel dengan caption -->

</html>
