<style>
	.login100-form-title {
		font-family: 'Open Sans', sans-serif;
		letter-spacing: -2px;
	}

	.text-center {
		text-align: center;
		margin-top: 10px;
		margin-bottom: -30px;
	}

	form input {
		font-family: 'Dosis', sans-serif;
		text-align: center;
	}

	#form-login .login-submit button {
		font-family: 'Dosis', sans-serif;
	}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - Gadai Poin Yuk</title>
	<?php include('layout/head.php') ?>
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: linear-gradient(to right bottom, #287e42, #269d43, #2bbd3f, #39de33, #50ff12); width: 100%; height: 50%;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-50">
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
						<a href="index.php" class="login100-form-btn">Batal</a>
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
	$(".login-submit").click(function(e) {
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
			beforeSend: function() {
				// Statement
				Notiflix.Loading.Pulse('Mohon Menunggu...');
			},
			success: function(data) {
				if (data.status == true) {
					Notiflix.Report.Success(
						'Sukses',
						data.message,
						'Ok',
						function() {
							$.post('updatesession.php', {
								cif: data.data[0].cif,
								username: data.data[0].username
							});
							window.location.href = "beranda.php";
						}
					);
					// alert(data.message);

					// $.post('updatesession.php', {cif: data.data[0].cif, 
					// 							 username: data.data[0].username});
					// window.location.href = "beranda.php";
				} else {
					// alert(data.message);
					Notiflix.Report.Failure(
						'Terjadi Kesalahan',
						data.message,
						'Ok'
					);
				}
			},
			complete: function(data) {
				// remove
				Notiflix.Loading.Remove();
			}
		});
	});
</script>

</html>