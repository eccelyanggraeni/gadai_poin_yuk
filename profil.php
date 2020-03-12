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

        .profil-title{
            font-family: 'Open Sans', sans-serif;
            font-size: 30px;
            letter-spacing: -1px;
        }

        #ava-profil{
            border-radius: 50%;
            width: 35%; 
            align-content: center;
        }

        td{
            font-family: 'Dosis', sans-serif;
        }

        button{
            font-family: 'Dosis', sans-serif;
        }
    </style>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?>

    <!-- Page Content -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <span class="login100-form-title p-b-33">
                    <p class="profil-title"><?php echo $_SESSION["username"]?>'s Profile</p><br>
                    <a class="" href="aktivitas.php"><img src="uploads/user.png" id="ava-profil" alt=""></a><br>
                </span>

                <table>
                    <tr height="50">
                        <td width="100"><strong>CIF</strong></td>
                        <td width="50">:</td>
                        <td><?php echo $_SESSION['cif'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>Nama</strong></td>
                        <td width="50">:</td>
                        <td id="nama"></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>Alamat</strong></td>
                        <td width="50">:</td>
                        <td id="alamat"></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>E-mail</strong></td>
                        <td width="50">:</td>
                        <td id="email"></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>No. HP</strong></td>
                        <td width="50">:</td>
                        <td id="no_hp"></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>Username</strong></td>
                        <td width="50">:</td>
                        <td><?php echo $_SESSION['username'] ?></td>
                    </tr>
                </table>
                <div class="container-login100-form-btn m-t-20 justify-content-center">
                    <button onclick="window.location.href = 'edit_profil.php';" class="login100-form-btn">Edit Profil</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

<script>
$(document).ready(function(){
    var cif = <?php echo $_SESSION["cif"] ?>;
    $.ajax({
        type: 'GET',
        url: 'http://gade-poin-yuk.com/api/user',
        data: {cif: cif},
        dataType: 'json',
        success : function(data){
            console.log(data.data[0]);
            if(data.status == true){
                $("td#nama").html(data.data[0].nama);
                $("td#alamat").html(data.data[0].alamat);
                $("td#email").html(data.data[0].email);
                $("td#no_hp").html(data.data[0].no_hp);
                $("#ava-profil").attr('src', data.data[0].ava_url);
            }
        }
    });
});
</script>

</html>