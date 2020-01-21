<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Peringkat</title>
    <?php include('layout/head.php') ?>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?>

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menulong.png); width: 100%; height: 50%;">
            <h4 style="color: #e9ecef;">Peringkat</h4>
            <div class="dropdown-divider" style="border: 1px solid white;"></div><br>
            <div class="row">
                <div class="col-sm-2">
                    <div style="background-color: #e9ecef; width: 200px; height: 200px; border-radius: 10px; text-align: center;">
                        <br>
                        <img src="img/usericon.png" width="60%" height="60%" style="align-content: center;" alt="">
                        <h6><?php echo $_SESSION["user"]["name"] ?></h6>
                        <p><?php echo $_SESSION["user"]["email"] ?></p>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div style="background-color:#e9ecef; width: auto; height: 200px; border-radius: 10px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

</html>