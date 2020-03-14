<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - Gadai Poin Yuk</title>
    <?php include('layout/head.php') ?> 
    <style>
        .login100-form-title{
            font-family: 'Open Sans', sans-serif;
            letter-spacing: -2px;
        }

        .text-center {
            text-align: center;
            margin-top: 10px;
            margin-bottom: -30px;
        }

        form input{
            font-family: 'Dosis', sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: linear-gradient(to right bottom, #287e42, #269d43, #2bbd3f, #39de33, #50ff12); width: 100%; height: 50%;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="" method="" class="login100-form validate-form" id="form-register">
                    <span class="login100-form-title p-b-33">
                        Daftar Akun
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="nama" placeholder="Nama">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <!-- ---------------------BRAND NEW TEXT FIELD FOR REGISTER--------------------- -->

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="alamat" placeholder="Alamat">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="no_hp" placeholder="Nomor Selular">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="cif" placeholder="Nomor CIF">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <!-- ---------------------BRAND NEW TEXT FIELD FOR REGISTER--------------------- -->

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="E-mail">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <input type="submit" name="register" class="login100-form-btn" value="Daftar" />
                        <a href="index.php" class="login100-form-btn">Batal</a>
                    </div>
                </form>


                
                <div class="text-center">
                    <span class="txt1">
                        Sudah memiliki Akun?
                    </span>

                    <a href="login.php" class="txt2 hov1">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

<script>
    $("#form-register").submit(function(e){
        e.preventDefault();
        var nama = $("input[name=nama]").val();
        var alamat = $("input[name=alamat]").val();
        var no_hp = $("input[name=no_hp]").val();
        var cif = $("input[name=cif]").val();
        var username = $("input[name=username]").val();
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();

        $.ajax({
            type: 'POST',
            url: 'http://gade-poin-yuk.com/api/user',
            data: {
                nama: nama,
                alamat: alamat,
                no_hp: no_hp,
                cif: cif,
                username: username,
                email: email,
                password: password
            },
            dataType: 'json',
            success : function(data){
                if(data.status == true){
                    alert(data.message);
                    window.location.href = "login.php";
                }
                else{
                    alert(data.message);
                }
            }
        });
    });
</script>
</html>