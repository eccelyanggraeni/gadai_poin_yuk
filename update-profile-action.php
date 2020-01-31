<?php 
require_once("auth.php");
// include('config.php');

if (isset($_POST['update_profile'])) {
    // $user = $_GET['user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    // $username = $_POST['username'];

    $update_profile = $mysqli->query("UPDATE user SET nama = '$nama', 
                                                    alamat = '$alamat', 
                                                    email = '$email', 
                                                    no_hp = '$no_hp' 
                                                    -- username = '$username' 
                                    WHERE email = '$user'");

    if ($update_profile) {
        header("Location: profil.php?user=$user");
        // header("Location: profil.php");
    } else {
        echo $mysqli->error;
    }
}
?>