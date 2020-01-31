<?php
require_once("auth.php");
// include("config.php");

// if (isset($_POST['but_upload'])) {

//     $name = $_FILES['file']['name'];
//     $target_dir = "upload/";
//     $target_file = $target_dir . basename($_FILES["file"]["name"]);

//     // Select file type
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//     // Valid file extensions
//     $extensions_arr = array("jpg", "jpeg", "png", "gif");

//     // Check extension
//     if (in_array($imageFileType, $extensions_arr)) {

//         // Convert to base64 
//         $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
//         $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
//         // Insert record
//         $query = "insert into user(profile_pic) values('" . $image . "')";
//         mysqli_query($con, $query);

//         // Upload file
//         move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);
//     }
// }
// if (isset($_GET['user'])) {
//     $user = $_GET['user'];
//     $get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
//     $user_data = $get_user->fetch_assoc();
// } else {
//     header("Location: edit.php");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION["user"]["username"]?>'s Profile Settings</title>
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
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
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
    <div class="limiter">
        <div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="update-profile-action.php" method="POST" class="login100-form validate-form">
                    <span class="login100-form-title p-b-33">
                        Ubah Profil
                        <br>
                        <br>
                        <img src="img/user.png" width="25%" height="25%" style="align-content: center;" alt=""></img><br>
                        <!-- <input class="input100" type="text" name="profile_pic" placeholder="Profile Picture"> -->
                        <!-- <input type="submit" name="choose_file" class="btn" value="Choose File..." /> -->
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="nama" placeholder="Nama" value="<?php echo $_SESSION["user"]['nama'] ?>">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="alamat" placeholder="Alamat" value="<?php echo $_SESSION["user"]['alamat'] ?>">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="E-mail" value="<?php echo $_SESSION["user"]['email'] ?>">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="no_hp" placeholder="Nomor Selular" value="<?php echo $_SESSION["user"]['no_hp'] ?>">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <!-- <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="username" placeholder="Username" value="
                        
                        php echo $_SESSION["user"]['username']">

                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div> -->

                    <div class="container-login100-form-btn m-t-20">
                        <input type="submit" name="update_profile" class="login100-form-btn" value="Ubah Profil" />
                        <button onclick="history.back();" class="login100-form-btn">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

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
            <a href="https://twitter.com/shbt_pegadaian?lang=en"><img src="img/icons8-twitter-100.png" width="50" alt="Twitter"></a>
            <a href="https://www.youtube.com/user/PegadaianTV"><img src="img/icons8-play-button-100.png" width="50" alt="Youtube"></a>
            <a href="https://www.facebook.com/PegadaianPersero/"><img src="img/icons8-facebook-old-100.png" width="50" alt="Facebook"></a>
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