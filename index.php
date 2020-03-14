<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gadai Poin Yuk</title>
    <?php include('layout/head.php') ?>
    <style>
        .logo img{
            position: absolute; 
            left:-150px; 
            top:50px;
            width: 150%
        }

        .title p:nth-child(1){
            font-family: 'Open Sans', sans-serif;
            font-size:50pt; 
            color:#e9ecef; 
            letter-spacing:-6px;
        }

        .title p:nth-child(2){
            font-family: 'Dosis', sans-serif;
            font-size:20pt; 
            color:#e9ecef; 
            line-height:110%;
        }

        .section-2-title h1{
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            text-align:center; 
            margin-top: 40px;
            letter-spacing: -4px;
            color: #8b8878;
        }

        .section-2-detail img{
            width: 45%;
            margin-left: 95px;
            margin-bottom: 0px;
            margin-top: 25px;
        }

        .section-2-detail p{
            font-family: 'Dosis', sans-serif;
            text-align:center;
            font-size: 20px;
            font-weight: bold;
            color: #8b8878;
        }

        .section-3-title h1{
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            text-align:center; 
            margin-top: 40px; 
            color: #e9ecef;
            letter-spacing: -4px;
        }

        .section-3-detail img{
            width: 45%;
            margin-left: 95px;
            margin-bottom: 0px;
            margin-top: 25px;
        }

        .section-3-detail p{
            font-family: 'Dosis', sans-serif;
            text-align:center;
            font-size: 20px;
            font-weight: bold;
            color: #e9ecef;
        }
    </style>
</head>

<body>
    <?php include('layout/navbar-index.php') ?>

    <!-- -------------------------Page Content Section------------------------- -->
    <div class="album text-muted" style="background-image: linear-gradient(to right bottom, #287e42, #269d43, #2bbd3f, #39de33, #50ff12); width: 100%; height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <div class="logo">
                        <img src="img/logo-banner.png">
                    </div>
                </div>
                <div class="col-md-9 offset-md-4" style="top:100px; text-align:center";>
                    <div class="title">
                        <p><b>Gade Poin Yuk !!!</b></p>
                        <p>Kumpulkan Gade Poin sebanyak - banyaknya
                            Yuk !!!
                            <br>dan dapatkan voucher impianmu dengan harga menarik !!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="album text-muted" style="background-color:#e2e2e2; width:100%; height: 350px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-2-title">
                        <h1>Tukar POIN Dengan</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="section-2-detail">
                        <img src="img/icons8-gift-100.png">
                        <p>Kupon undian berhadiah dari Pegadaian</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-2-detail">
                        <img src="img/icons8-online-payment-100.png">
                        <p>Voucher diskon berbagai macam merchant</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-2-detail">
                        <img src="img/icons8-discount-100.png">
                        <p>Berbagai penawaran diskon lainnya</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="album text-muted" style="background-image: linear-gradient(to right bottom, #287e42, #269d43, #2bbd3f, #39de33, #50ff12); width: 100%; height: 350px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-3-title">
                        <h1>Cara Mengumpulkan POIN</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="section-3-detail">
                        <img src="img/icons8-order-history-100.png">
                        <p>Penyelesaian berbagai tugas harian</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-3-detail">
                        <img src="img/icons8-commercial-100.png">
                        <p>Share berbagai event dari Pegadaian</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-3-detail">
                        <img src="img/icons8-handshake-100.png">
                        <p>Melakukan berbagai transaksi di Pegadaian</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

</html>