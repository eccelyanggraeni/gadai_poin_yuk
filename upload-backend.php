<?php
    $target_dir = "upload/";
    $temp = explode(".", $_FILES["ava-img"]["name"]);
    $newfilename = round(microtime(true)). '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;
    

    //Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        
        $check = getimagesize($_FILES["ava-img"]["tmp_name"]);
        if($check !== false){
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }else{
            // echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    //Check if file already exists
    if(file_exists($target_file)){
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    //Check file size
    if($_FILES["ava-img"]["size"] > 1000000){
        // echo "Sorry, your file is too large";
        $uploadOk = 0;
    }    

    //Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
        // echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

    //Check if $uploadOk is set to 0 by an error
    if($uploadOk == 0){
        // echo "Sorry, your file was not uploaded.";
        echo "invalid";
    //if everything is ok, upload file    
    }else{
        if(move_uploaded_file($_FILES["ava-img"]["tmp_name"], $target_file)){
            echo $target_file;
        }else{
            echo "invalid";
            // echo "Sorry, there was an error uploading your file.";
        }
    }
?>