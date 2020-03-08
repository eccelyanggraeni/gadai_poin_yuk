<?php
// require_once("config.php");

// $show_warning = false;

// if (isset($_POST['login'])) {

// 	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
// 	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// 	$sql = "SELECT * FROM user WHERE email=:email";
// 	$stmt = $db->prepare($sql);

// 	// bind parameter ke query
// 	$params = array(
// 		":email" => $email
// 	);

// 	$stmt->execute($params);

// 	$user = $stmt->fetch(PDO::FETCH_ASSOC);

// 	// jika user terdaftar
// 	if ($user) {
// 		// verifikasi password
// 		if (password_verify($password, $user["password"])) {
// 			// buat Session
// 			session_start();
// 			$_SESSION["user"] = $user;
// 			// login sukses, alihkan ke halaman timeline
// 			header("Location: beranda.php");
// 			echo "Password Verified !";
// 			$show_warning = false;
// 		}
// 		$show_warning = true;
// 	}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - Gadai Poin Yuk</title>
	<?php include('layout/head.php') ?>   	
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form action="" method="" class="login100-form validate-form" id="form-login">
					<span class="login100-form-title p-b-33">
						Masuk Akun
					</span>

					<!-- PHP ALGORITHM IF USERNAME OR PASSWORD IS NOT MATCH, THEN SHOW THE "STRING" !  -->
					<?php
					// if ($show_warning == true) {
					// 	echo '<span style="color:#F00; text-align:center;">* Invalid username or password.</span>';
					// }
					?>
					<div class="show-warning"></div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" id="username" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login-submit login100-form-btn">Masuk</button>
						<!-- <input type="submit" name="login" class="login100-form-btn" value="Masuk" /> -->
						<button onclick="window.location.href='index.php';" class="login100-form-btn">Batal</button>
					</div>
				</form>

				<div class="text-center">
					<span class="txt1">
						Ingin mendaftar Akun?
					</span>

					<a href="register.php" class="txt2 hov1">
						Daftar
					</a>
				</div>
			</div>
		</div>
	</div>
</body>

<?php include('layout/footer.php') ?>

<script>
	$(".login-submit").click(function(e){
        e.preventDefault();
        var username = $("input[name=username]").val();
        var password = $("input[name=password]").val();

		$.ajax({
            type: 'POST',
            url: 'http://gade-poin-yuk.com/api/user/login',
            data: {
                username: username,
                password: password
            },
            dataType: 'json',
            success : function(data){
                if(data.status == true){
					console.log("sukses", data.data[0].cif);
                    // alert("Anda telah sukses login.");
					$.post('updatesession.php', {cif: data.data[0].cif, 
												 username: data.data[0].username});
                    window.location.href = "beranda.php";
                }
                else{
                    $("#show-warning").html("<span style='color:#F00; text-align:center;'>* Invalid username or password.</span>");
                }
            }
        });
	});
</script>

</html>