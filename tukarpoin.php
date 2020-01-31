<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tukar Poin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .carousel-item {
            height: 250px;
        }

        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 250px;
        }
    </style>
</head>

<body>
    <!-- Navbar Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="beranda.php">
            <img src="img/logo2.png" width="160" height="35" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="beranda.php"><strong>Beranda</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php"><strong>Profil</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bantuan.php"><strong>Bantuan</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><strong>Keluar</strong></a>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <h1 style="color: #e9ecef;">Tukar Poin</h1>
            <div class="dropdown-divider" style="border: 1px solid white;"></div><br>
            <div class="row">
                <div class="col-sm-2">
                    <div style="background-color: #e9ecef; width: 200px; height: 200px; border-radius: 10px; text-align: center;">
                        <br>
                        <img src="img/user.png" width="60%" height="60%" style="align-content: center;" alt="">
                        <h6><?php echo $_SESSION["user"]["nama"] ?></h6>
                        <p><?php echo $_SESSION["user"]["cif"] ?></p>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div style="background-color:#e9ecef;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0px; ">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/promo.jpeg" alt="First slide" height="50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo1.jpeg" alt="Second slide" height="50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo2.jpeg" alt="Third slide" height="50%">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div style="background-color:#e9ecef;">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="margin: 0px;">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/promo1.jpeg" alt="First slide" height="50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo.jpeg" alt="Second slide" height="50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo2.jpeg" alt="Third slide" height="50%">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Navbar Footer Section -->
<footer class="text-muted" style="margin-top:30px;">
    <div class="container">
        <p class="float-right">
            <b>Kontak :</b><br>
            +62213155550/+622180635162

            <br><br>
            <b>Hubungi Kami:</b><br>
            <a href="https://www.instagram.com/pegadaian_id/"><img src="img/icons8-instagram-100.png" width="50" alt="Instagram"></a>
            <a href="#"><img src="img/icons8-twitter-100.png" width="50" alt="Twitter"></a>
            <a href="#"><img src="img/icons8-play-button-100.png" width="50" alt="Youtube"></a>
            <a href="#"><img src="img/icons8-facebook-old-100.png" width="50" alt="Facebook"></a>
            <a href="#"><img src="img/icons8-google-plus-100.png" width="50" alt="Google+"></a>
        </p>

        <p><b>PT. Pegadaian (Persero)</b><br>
            Kantor Pusat:<br>
            Jl. Kramat Raya 162 Jakarta Pusat<br>
            10430<br>
            INDONESIA<br><br><br>
        </p>
    </div>
    <div class="footer-copyright text-center py-3">
        Copyright © 2020 PT. Pegadaian (Persero). All rights reserved.
    </div>
</footer>

<footer class="page-footer font-small blue text-muted">
</footer>

</html>