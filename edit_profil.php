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
    <title><?php echo $_SESSION["user"]["username"]?>'s Profile Settings</title>
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
</body>

<?php include('layout/footer.php') ?>

</html>