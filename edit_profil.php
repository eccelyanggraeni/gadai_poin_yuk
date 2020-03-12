<?php
require_once("auth.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profil</title>
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

        .edit-profil-title{
            font-family: 'Open Sans', sans-serif;
            font-size: 30px;
            letter-spacing: -1px;
        }

        #ava-profil{
            border-radius: 50%;
            width: 35%; 
            align-content: center;
        }

        input{
            font-family: 'Dosis', sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?>
  
    <!-- Page Content -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url(img/menuxlong.png); width: 100%; height: 50%;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="" method="" class="login100-form validate-form" id="profil-form">
                    <span class="login100-form-title p-b-33">
                        <p class="edit-profil-title">Edit Profil</p>
                        <br>
                        <img src="img/user.png" id="ava-profil" alt=""></img><br>
                        <!-- <input class="input100" type="text" name="profile_pic" placeholder="Profile Picture"> -->
                        <!-- <input type="submit" name="choose_file" class="btn" value="Choose File..." /> -->
                    </span>
                    <input class="input100" id="cif" type="cif" name="cif" placeholder="Cif" value=<?= $_SESSION['cif'] ?> hidden>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" id= "nama" type="text" name="nama" placeholder="Nama">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" id= "alamat" type="text" name="alamat" placeholder="Alamat" >
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id= "email" type="email" name="email" placeholder="E-mail">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" id= "no_hp" type="text" name="no_hp" placeholder="Nomor Selular">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <p>Pilih foto profil: </p><input type="file" id="img" name="img" accept="image/*">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button type="submit" class="login100-form-btn submit-profil">Simpan</button>
                        <a href="profil.php" class="login100-form-btn">Batal</a>
                    </div>
                </form>
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
                $("#nama").val(data.data[0].nama);
                $("#alamat").val(data.data[0].alamat);
                $("#email").val(data.data[0].email);
                $("#no_hp").val(data.data[0].no_hp);
                $("#ava-profil").attr('src', data.data[0].ava_url);
            }
        }
    });

    $("#profil-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
            url: "upload-backend.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                if(data == 'invalid'){
                    alert("gagal");
                }else{
                    var cif = <?php echo $_SESSION["cif"] ?>;
                    var nama = $("#nama").val();
                    var alamat = $("#alamat").val();
                    var email = $("#email").val();
                    var no_hp = $("#no_hp").val();
                    var profpict = data;
                    // alert(profpict+cif+nama+alamat+email+no_hp);
                    $.ajax({
                        type: 'PUT',
                        url: 'http://gade-poin-yuk.com/api/user',
                        data: {
                            cif: cif,
                            nama: nama,
                            alamat: alamat,
                            email: email,
                            no_hp: no_hp,
                            ava_url: profpict
                        },
                        dataType: 'json',
                        success : function(data){
                            console.log(data);
                            alert("Anda telah sukses mengubah data profil.");
                            window.location.href = "profil.php";
                        }
                    });
                }
            }
        });
    }));
});        
</script>

</html>