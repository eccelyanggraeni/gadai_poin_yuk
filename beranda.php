<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda</title>
    <?php include('layout/head.php') ?>
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
    <?php include('layout/navbar-menu.php') ?>

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <h4 style="color: #e9ecef;">Beranda</h4>
            <div class="dropdown-divider" style="border: 1px solid white;"></div><br>
            <div class="row">
                <div class="col-sm-2">
                    <div style="background-color: #e9ecef; width: 200px; height: auto; border-radius: 10px; text-align: center;overflow-y:hidden;">
                        <br>
                        <a class="" href="aktivitas.php"><img src="img/usericon.png" width="60%" height="60%" style="align-content: center;" alt=""></a><br>
                        <h6><?php echo $_SESSION["user"]["name"] ?></h6>
                        <p style="word-wrap:break-word;"><?php echo $_SESSION["user"]["email"] ?></p> <!-- nanti disini no cif -->
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
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0px">
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
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

</html>