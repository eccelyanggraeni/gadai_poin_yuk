<?php
require_once("auth.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
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

        .profil-container-title {
            font-family: 'Open Sans', sans-serif;
            font-size: 30px;
            letter-spacing: -1px;
            text-align: center;
        }

        #profil-container img {
            border-radius: 50%;
            width: 10%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        td {
            font-family: 'Dosis', sans-serif;
        }

        button {
            font-family: 'Dosis', sans-serif;
        }

        #profil-container {
            background-color: #e9ecef;
            width: auto;
            height: 545px;
            border-radius: 10px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .title-profil{
            color: #e9ecef;
            font-family: 'Open Sans', sans-serif;
            font-weight: normal;
            letter-spacing: -1px;
        }

        .voucher-container-title {
            font-family: 'Open Sans', sans-serif;
            font-size: 30px;
            letter-spacing: -1px;
            text-align: center;
        }

        .voucher-response{
            font-size: 20px;
            letter-spacing: -1px;
            text-align: center;
            font-family: 'Dosis', sans-serif;
        }

        #voucher-container {
            background-color: #e9ecef;
            width: auto;
            height: 545px;
            border-radius: 10px;
            margin-top: 10px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .jumbotron{
            padding: 3rem 3rem!important;
        }

        .card-title {
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                font-size: 25px;
                color: black;
                margin-bottom: .75rem;
                text-align: center;
            }
            #voucher.row {
                margin-right: 0px!important;
                margin-left: 0px!important;
            }

            .card {
                background-color: #eedfcc;
            }

            p.voucher-detail{
                font-family: 'Dosis', sans-serif;
                text-align: center;
                font-size: 17px;
                margin-bottom: 10px;
            }

            p.voucher-price{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                margin-bottom: 10px;
            }

            p.voucher-expired{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                margin-bottom: 10px;
            }

            button{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                width: 100%;
                margin-bottom: 10px;
            }
            .card{
                margin:10px;
            }
    </style>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?>

    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <h3 class="title-profil">Profil</h3>
            <div class="dropdown-divider" style="border: 1px solid #e9ecef;"></div><br>
            
            <div id="profil-container">
            <div class="row">
                <div class="col-md-12">
                    
                        <p class="profil-container-title"><?php echo $_SESSION["username"] ?> Profile</p><br>
                        <img src="uploads/
                            user.png" class="ava-profil" alt=""><br>

                        <div class="row justify-content-center">
                        <table>
                            <tr height="50">
                                <td width="100"><strong>CIF</strong></td>
                                <td width="50">:</td>
                                <td width="150"><?php echo $_SESSION['cif'] ?></td>
                                <td width="100"><strong>Nama</strong></td>
                                <td width="50">:</td>
                                <td width="150" id="nama"></td>
                            </tr>
                            <tr height="50">
                                <td width="100"><strong>Alamat</strong></td>
                                <td width="50">:</td>
                                <td width="150" id="alamat"></td>
                                <td width="100"><strong>E-mail</strong></td>
                                <td width="50">:</td>
                                <td width="150" id="email"></td>
                            </tr>
                            </tr>
                            <tr height="50">
                                <td width="100"><strong>No. HP</strong></td>
                                <td width="50">:</td>
                                <td width="150" id="no_hp"></td>
                                <td width="100"><strong>Username</strong></td>
                                <td width="50">:</td>
                                <td width="150"><?php echo $_SESSION['username'] ?></td>
                            </tr>
                        </table>
                        </div>
    
                        <div class="container-login100-form-btn m-t-20 justify-content-center">
                            <button onclick="window.location.href = 'edit_profil.php';" class="login100-form-btn">Edit Profil</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="voucher-container">
            <div class="row">
                <div class="col-md-12">
                    <p class="voucher-container-title">Voucher</p><br>
                    <div id="voucher-detail" class="row justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

<script>
    $(document).ready(function() {
        var cif = <?php echo $_SESSION["cif"] ?>;
        var voucher = [];
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
                    $("td#nama").html(data.data[0].nama);
                    $("td#alamat").html(data.data[0].alamat);
                    $("td#email").html(data.data[0].email);
                    $("td#no_hp").html(data.data[0].no_hp);
                    if(data.data[0].ava_url === ""){
                        $(".ava-profil").attr('src', 'img/user.png');
                    }else{
                        $(".ava-profil").attr('src', data.data[0].ava_url);
                    }
                }
            }
        });

        $.ajax({
            type: 'GET',
            url: 'http://gade-poin-yuk.com/api/voucher/uservoucher',
            data: {
                cif: cif
            },
            dataType: 'json',
            success: function(voucherData) {
                console.log(voucherData.data);
                if (voucherData.status == true) {
                    for(i=0;i<voucherData.data.length;i++){
                        voucher.push($(
                            "<div class='card col-md-3'>"
                            // +"<img class='card-img-top' src='#' alt='Card image cap'>"
                            +"<div class='card-body'>"
                            +"<h5 class='card-title'>"+voucherData.data[i].nama_voucher+"</h5>"
                            +"<div class='card-text'>"
                            +"<p class='voucher-detail'>"+voucherData.data[i].detail+" sebesar "+voucherData.data[i].jumlah_potongan+" rupiah</p>" 
                            +"<p class='voucher-price'>Harga : "+voucherData.data[i].harga_voucher+" poin"
                            +"</p></div>"
                            +"<p class='voucher-expired'>Masa Berlaku : <br>"+voucherData.data[i].valid_start+" - "+voucherData.data[i].valid_end
                            +"</p></div>"
                            +"</div>"
                            +"</div>"));
                    }
                }else{
                    $("#voucher-container").css("height", "225px");
                    voucher.push($(
                        "<p class='voucher-response'>Anda belum memiliki voucher, segera tingkatkan poin anda dan tukarkan poin anda dengan beragam voucher yang tersedia.</p>"
                    ));
                }
                $("#voucher-detail").append(voucher);
            }
        });
    });
</script>

</html>