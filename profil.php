<?php
require_once("auth.php");

// if (isset($_GET['user'])) {
//     $user = $_GET['user'];
//     $get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
//     if ($get_user->num_rows == 1) {
//         $profile_data = $get_user->fetch_assoc();
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>    
    <title><?php echo $_SESSION["user"]["username"] ?>'s Profile</title>
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
    <div class="limiter">
        <div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <span class="login100-form-title p-b-33">
                    <?php echo $_SESSION["user"]["username"] ?>'s Profile<br><br>
                    <a class="" href="aktivitas.php"><img src="img/user.png" width="25%" height="25%" style="align-content: center;" alt=""></a><br>
                </span>

                <table>
                    <tr height="50">
                        <td width="100"><strong>CIF:</strong></td>
                        <td><?php echo $_SESSION["user"]['cif'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>Nama:</strong></td>
                        <td><?php echo $_SESSION["user"]['nama'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>Alamat:</strong></td>
                        <td><?php echo $_SESSION["user"]['alamat'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>E-mail:</strong></td>
                        <td><?php echo $_SESSION["user"]['email'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="100"><strong>No. HP:</strong></td>
                        <td><?php echo $_SESSION["user"]['no_hp'] ?></td>
                    </tr>
                    <tr height="50">
                        <td width="125"><strong>Username:</strong></td>
                        <td><?php echo $_SESSION["user"]['username'] ?></td>
                    </tr>
                </table>
                <div class="container-login100-form-btn m-t-20">
                    <button onclick="window.location.href = 'edit_profil.php';" class="login100-form-btn">Ubah Profil</button>
                    <button onclick="history.back();" class="login100-form-btn">Batal</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

</html>