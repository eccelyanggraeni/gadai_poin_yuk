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

        .carousel-content {
            position: absolute;
            bottom: 10%;
            left: 5%;
            z-index: 20;
            color: black;
            border-radius: 5px;
            /* text-shadow: 0 1px 2px rgba(0, 0, 0, .6); */
            background-color: whitesmoke;
            color: grey;

        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }
    </style>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?>    
    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <h3 style="color: #e9ecef;">Beranda</h3>
            <div class="dropdown-divider" style="border: 1px solid white;"></div><br>
            <div class="row">
                <div class="col-sm-2">
                    <div style="background-color: #e9ecef; width: 200px; height: 200px; border-radius: 10px; text-align: center;">
                        <br>
                        <img src="img/user.png" width="60%" height="60%" style="align-content: center;" alt=""><br>
                        <h6><?php echo $_SESSION["user"]["nama"] ?></h6>
                        <p><?php echo $_SESSION["user"]["cif"] ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;">
                        <div style="padding: 25px;">
                            <h5>Poin Anda</h5><br>

                            <h1>490 poin</h1><br>
                            <p style="font-size: 8pt; font-family: Arial, Helvetica, sans-serif">Poin akan direset ulang pada tanggal 31 Desember 2020</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3" data-toggle="modal" data-target="#detailPeringkat">
                    <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;">
                        <div style="padding: 25px;">
                            <h5>Peringkat Anda</h5><br>
                            <h1>1 / 5120</h1><br>
                        </div>
                    </div>
                </div>

                <!-- Modal Peringkat -->
                <div id="detailPeringkat" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Detail Peringkat</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <ul id="myUL">
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Gabe Dimas Wicaksana</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Agnes</a></li>

                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Billy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Bob</a></li>

                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Calvin</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Christina</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                    <li><a href="#"><img src="img/user.png" alt="" height="32px" width="32px">&nbsp;&nbsp;&nbsp;Cindy</a></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" data-toggle="modal" data-target="#detailAktivitas">
                    <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;">
                        <div style="padding: 25px;">
                            <h5>Aktivitas Anda</h5><br>
                            <h1>Play the Game !</h1><br>
                        </div>
                    </div>
                </div>

                <!-- Modal Aktivitas -->
                <div id="detailAktivitas" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Daftar Aktivitas</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, rem? Error laboriosam quos, labore eos non est commodi eveniet nemo ab magni, facere tempora fugit optio. Modi ea tempora dolor?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm"><br>
                    <h4 style="color: #e9ecef;">Voucher Anda</h4>
                    <div style="background-color:#e9ecef;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding: 0px">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/promo.jpeg" alt="First slide" height="40%" data-toggle="modal" data-target="#detail_myVoucher">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
                                </div>

                                <!-- Modal Voucher Anda -->
                                <div id="detail_myVoucher" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Voucher Anda</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, voluptate? Itaque laborum ipsum earum enim nemo quaerat, reprehenderit eos suscipit dolore. Veritatis laborum vero expedita quasi qui et minima nostrum?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success">Use</button>

<!-- -------------------------- ENDPOINT TRANSACTION CODE -------------------------- -->

                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo1.jpeg" alt="Second slide" height="40%">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo2.jpeg" alt="Third slide" height="40%">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
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
                </div><br>
                <div class="col-sm"><br>
                    <h4 style="color: #e9ecef;">Redeemable Voucher</h4>
                    <div style="background-color:#e9ecef;">
                        <div id="carouselExampleIndicators_1" class="carousel slide" data-ride="carousel" style="padding: 0px">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators_1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators_1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators_1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/promo.jpeg" alt="First slide" height="40%" data-toggle="modal" data-target="#detail_myVoucher">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
                                </div>

                                <!-- Modal Voucher Redeemable -->
                                <div id="detail_myVoucher" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Voucher Redeemable</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, voluptate? Itaque laborum ipsum earum enim nemo quaerat, reprehenderit eos suscipit dolore. Veritatis laborum vero expedita quasi qui et minima nostrum?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success">Use</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo1.jpeg" alt="Second slide" height="40%">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promo2.jpeg" alt="Third slide" height="40%">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators_1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators_1" role="button" data-slide="next">
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