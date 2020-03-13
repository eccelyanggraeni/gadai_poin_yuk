<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda</title>
    <?php include('layout/head.php') ?>
    <style>
        .jumbotron {
            padding: 3rem 3rem;
        }

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
            background-color: #e9ecef;
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

        #profil-ava {
            background-color: #e9ecef;
            width: 200px;
            height: 200px;
            border-radius: 10px;
            text-align: center;
        }

        #profil-ava h6.nama {
            margin-top: 10px;
        }

        #jumlah-poin {
            background-color: #e9ecef;
            width: auto;
            height: 200px;
            border-radius: 10px;
        }

        #jumlah-poin .poin-detail {
            padding: 20px;
        }

        #jumlah-poin .poin-detail h1 {
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            color: #8b8878;
        }

        #jumlah-poin .poin-detail p {
            text-align: center;
            font-size: 11px;
            font-family: 'Dosis', sans-serif;
            font-weight: bold;
            font-style: italic;
            margin-top: 15px;
        }

        #rank {
            background-color: #e9ecef;
            width: auto;
            height: 200px;
            border-radius: 10px;
        }

        #rank .rank-detail {
            padding: 20px;
        }

        #rank .rank-detail h1 {
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            color: #8b8878;
        }

        #konversi-poin {
            background-color: #e9ecef;
            width: auto;
            height: 200px;
            border-radius: 10px;
        }

        #konversi-poin .konversi-poin-form {
            padding: 25px;
        }

        #konversi-poin .konversi-poin-form form {
            margin-top: 15px;
        }

        #konversi-poin .konversi-poin-form input {
            width: 258px;
            font-family: 'Dosis', sans-serif;
            text-align: center;
        }

        #konversi-poin .konversi-poin-form button {
            margin-left: 10px;
            font-family: 'Dosis', sans-serif;
        }

        .title-beranda {
            color: #e9ecef;
            font-family: 'Open Sans', sans-serif;
            font-weight: normal;
            letter-spacing: -1px;
        }

        #profil-ava img.ava-profil {
            border-radius: 50%;
        }

        #profil-ava h6.nama {
            color: #8b8878;
            font-weight: bold;
        }

        h5 {
            font-family: 'Open Sans', sans-serif;
            letter-spacing: -1px;
            color: #8b8878;
        }

        h4.modal-title{
            font-family: 'Open Sans', sans-serif;
            color: black;
            text-align: center;
        }

        tbody>tr>td{
            font-family: 'Dosis', sans-serif;
            color: #8b8878;
            font-size: 15px;
        }

        thead>tr>td{
            font-family: 'Open Sans', sans-serif;
            color: black;
            font-weight: bold;
            font-size: 17px;
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem -2rem;
        }
    </style>
</head>


<body>
    <?php include('layout/navbar-menu.php') ?>

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <h3 class="title-beranda">Beranda</h3>
            <div class="dropdown-divider" style="border: 1px solid #e9ecef;"></div><br>
            <div class="row">
                <div class="col-sm-2">
                    <div id="profil-ava">
                        <br>
                        <img src="" class="ava-profil" width="60%" height="60%" style="align-content: center;" alt=""><br>
                        <h6 class="nama"></h6>
                        <p><?php echo $_SESSION["cif"] ?></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="jumlah-poin">
                        <div class="poin-detail">
                            <h5>Poin Anda</h5><br>
                            <h1 class="poin"></h1><br>
                            <p>*Poin akan direset ulang pada tanggal 31 Desember 2020</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3" data-toggle="modal" data-target="#detailPeringkat">
                    <div id="rank">
                        <div class="rank-detail">
                            <h5>Peringkat Anda</h5><br>
                            <h1 class="poinrank_jumlahdata"></h1><br>
                        </div>
                    </div>
                </div>



                <!-- Modal Peringkat -->
                <div id="detailPeringkat" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title col-12 text-center">Detail Peringkat</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="row justify-content-center modal-body">
                                <table align="center">
                                    <thead>
                                        <tr>
                                            <td width="200">USERNAME</td>
                                            <td>POIN</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div id="konversi-poin">
                        <div class="konversi-poin-form">
                            <h5>Tukar Poinmu Dari Transaksi Disini!</h5><br>
                            <form method="" action="" class="login100-form validate-form form-inline" id="form-poin">
                                <input type="text" class="form-control" name="poin" id="poin" placeholder="Nomer Transaksi" /><br>
                                <button class="submit-poin btn btn-success">Submit</button><br><br>
                            </form>
                            <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#detailAktivitas">Tukar Poin</button><br> -->
                        </div>
                    </div>
                </div>


            </div>
            <!-- <div class="row">
                <div class="col-sm"><br>
                    <h4 style="color: #e9ecef;">Voucher Anda</h4><br>
                    <div style="background-color:#e9ecef;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding: 0px">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/promo.jpeg" alt="First slide" height="40%">
                                    <div class="carousel-content">
                                        <h4>100 poin</h4>
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
            </div> -->
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

<script>
    $(document).ready(function() {
        var cif = <?php echo $_SESSION["cif"] ?>;
        var rank = [];
        $.ajax({
            type: 'GET',
            url: 'http://gade-poin-yuk.com/api/user',
            data: {
                cif: cif
            },
            dataType: 'json',
            success: function(data) {
                console.log(data.data);
                if (data.status == true) {
                    $(".nama").html(data.data[0].nama);
                    $(".poin").html(data.data[1].poin);
                    $(".poinrank_jumlahdata").html(data.data[1].poinrank + " / " + data.data[2].jumlahdata);
                    if (data.data[0].ava_url === "") {
                        $(".ava-profil").attr('src', 'img/user.png');
                    } else {
                        $(".ava-profil").attr('src', data.data[0].ava_url);
                    }

                    for (i = 3; i < data.data.length; i++) {
                        rank.push($("<tr>" +
                            "<td width='100'>" + data.data[i].username + "</td>" +
                            "<td>" + data.data[i].poin + "</td>" +
                            "</tr>"));
                    }
                    $("tbody").append(rank);
                }
            }
        });

        $(".submit-poin").click(function(e) {
            e.preventDefault();

            var no_transaksi = $("input[name=poin]").val();
            var cif = <?php echo $_SESSION["cif"] ?>;

            $.ajax({
                type: 'POST',
                url: 'http://gade-poin-yuk.com/api/konversi_poin',
                data: {
                    no_transaksi: no_transaksi,
                    cif: cif
                },
                dataType: 'json',
                success: function(data) {
                    if (data.status == true) {
                        alert(data.message);
                        window.location.href = "beranda.php";
                    } else {
                        alert(data.message);
                    }
                }
            });
        });
    });
</script>

</html>