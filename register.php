<?php

// require_once("config.php");

// if (isset($_POST['register'])) {

//     // filter data yang diinputkan
//     $cif = filter_input(INPUT_POST, 'cif', FILTER_SANITIZE_STRING);
//     $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
//     $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
//     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//     $no_hp = filter_input(INPUT_POST, 'no_hp', FILTER_SANITIZE_STRING);
//     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//     // enkripsi password
//     $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


//     // menyiapkan query
//     $sql = "INSERT INTO user (cif, nama, alamat, email, no_hp, username, password) 
//             VALUES (:cif, :nama, :alamat, :email, :no_hp, :username, :password)";
//     $stmt = $db->prepare($sql);

//     // bind parameter ke query
//     $params = array(
//         ":cif" => $cif,
//         ":nama" => $nama,
//         ":alamat" => $alamat,
//         ":email" => $email,
//         ":no_hp" => $no_hp,
//         ":username" => $username,
//         ":password" => $password
//     );

//     // eksekusi query untuk menyimpan ke database
//     $saved = $stmt->execute($params);

//     // jika query simpan berhasil, maka user sudah terdaftar
//     // maka alihkan ke halaman login
//     if ($saved) header("Location: login.php");
// }

/* ----------------- Prototype JSON GET API using cURL ----------------- */
// function callAPI($method, $url, $data)
// {
//     $curl = curl_init();
//     switch ($method) {
//         case "POST":
//             curl_setopt($curl, CURLOPT_POST, 1);
//             if ($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             break;
//         case "PUT":
//             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
//             if ($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             break;
//         default:
//             if ($data)
//                 $url = sprintf("%s?%s", $url, http_build_query($data));
//     }
//     // OPTIONS:
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//         'APIKEY: 111111111111111111111',
//         'Content-Type: application/json',
//     ));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     // EXECUTE:
//     $result = curl_exec($curl);
//     if (!$result) {
//         die("Connection Failure");
//     }
//     curl_close($curl);
//     return $result;
// }


// $data_array =  array(
//     "cif"        => $user['user']['cif'],
//     "nama"        => $user['user']['nama'],
//     "alamat"        => $user['user']['alamat'],
//     "email"        => $user['user']['email'],
//     "no_hp"        => $user['user']['no_hp'],
//     "username"        => $user['user']['username'],
//     "password"        => $user['user']['password']
// );
// $make_call = callAPI('POST', 'https://api.example.com/post_url/', json_encode($data_array));
// $response = json_decode($make_call, true);
// $errors   = $response['response']['errors'];
// $data     = $response['response']['data'][0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - Gadai Poin Yuk</title>
    <?php include('layout/head.php') ?> 
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
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
                        <button onclick="window.location.href='index.php';" class="login100-form-btn">Batal</button>
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
                    alert("Anda telah sukses mendaftar akun, silahkan login untuk masuk ke website.");
                    window.location.href = "login.php";
                }
                else{
                    alert("Anda gagal mendaftar akun, silakan mencoba kembali");
                }
            }
        });
    });
</script>
</html>