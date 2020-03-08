<?php
    $target_dir = "upload/";
    $temp = explode(".", $_FILES["img"]["name"]);
    $newfilename = round(microtime(true)). '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    echo $_POST["nama"];

    //Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }else{
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    //Check if file already exists
    if(file_exists($target_file)){
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    //Check file size
    if($_FILES["img"]["size"] > 500000){
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }    

    //Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

    //Check if $uploadOk is set to 0 by an error
    if($uploadOk == 0){
        echo "Sorry, your file was not uploaded.";
    //if everything is ok, upload file    
    }else{
        if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
            echo "The file " . basename($_FILES["img"]["name"] . " has been uploaded.");
            echo "<img src=".$target_file."></img>";
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
<script>
    var cif = <?php echo $_SESSION["cif"] ?>;
    var nama = <?php echo $_POST["nama"] ?>;
    var alamat = <?php echo $_POST["nama"] ?>;
    var email = <?php echo $_POST["nama"] ?>;
    var no_hp = <?php echo $_POST["nama"] ?>;
    var profpict = <?php echo $_POST["ava_url"] ?>;

    $.ajax({
        type: 'PUT',
        url: 'http://gade-poin-yuk.com/api/user',
        data: {
            cif: cif,
            nama: nama,
            alamat: alamat,
            email: email,
            no_hp: no_hp
        },
        dataType: 'json',
        success : function(data){
            console.log(data);
            alert("Anda telah sukses mengubah data profil.");
            window.location.href = "profil.php";
        }
    });
</script>