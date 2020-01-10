<?php
require_once("config.php");

if (isset($_POST['login'])) {

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	$sql = "SELECT * FROM users WHERE email=:email";
	$stmt = $db->prepare($sql);

	// bind parameter ke query
	$params = array(
		":email" => $email
	);

	$stmt->execute($params);

	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	// jika user terdaftar
	if ($user) {
		// verifikasi password
		if (password_verify($password, $user["password"])) {
			// buat Session
			session_start();
			$_SESSION["user"] = $user;
			// login sukses, alihkan ke halaman timeline
			header("Location: beranda.php");
			echo "Password Verified !";
		}
		echo "User Exist !";
	}
	echo "Logged In !";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - Gadai Poin Yuk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<div class="limiter">
		<div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<input type="submit" name="login" class="login100-form-btn" value="Sign in" />
					</div>
				</form>
				<!-- <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div> -->

				<div class="text-center">
					<span class="txt1">
						Create an account?
					</span>

					<a href="register.php" class="txt2 hov1">
						Sign up
					</a>
				</div>
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
			<a href="#"><img src="img/icons8-twitter-100.png" width="50" alt="Twitter"></a>
			<a href="#"><img src="img/icons8-play-button-100.png" width="50" alt="Youtube"></a>
			<a href="#"><img src="img/icons8-facebook-old-100.png" width="50" alt="Facebook"></a>
			<a href="#"><img src="img/icons8-google-plus-100.png" width="50" alt="Google+"></a>
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