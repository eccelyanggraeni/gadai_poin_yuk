<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bantuan</title>
    <?php include('layout/head.php') ?> 
</head>

<body>
    <?php include('layout/navbar-menu.php') ?> 

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: url(img/menulong.png); width: 100%; height: 50%;">
            <h3 style="color: #e9ecef;">Bantuan</h3>
            <div class="dropdown-divider" style="border: 1px solid white;"></div><br>

            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseOne" style="color:#198C09;">
                            <strong>Daftar 1</strong>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores cumque accusamus,
                            optio
                            dolorem possimus nihil nisi assumenda? Eaque, nostrum voluptas! Perspiciatis iure labore
                            ratione
                            qui beatae placeat repellendus cupiditate?
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseTwo" style="color:#198C09;">
                            <strong>Daftar 2</strong>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sequi omnis a impedit maiores
                            dolorem magni? Repellat magni maiores dicta consequuntur repellendus aspernatur numquam? Aut
                            blanditiis vero pariatur doloribus nemo.
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseThree" style="color:#198C09;">
                            <strong>Daftar 3</strong>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa omnis tempore assumenda
                            dolor! Illo, ex? Ullam veniam qui temporibus. Nobis, officiis cupiditate illum pariatur
                            voluptatibus consequatur harum beatae quae!
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseFour" style="color:#198C09;">
                            <strong>Daftar 4</strong>
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa omnis tempore assumenda
                            dolor! Illo, ex? Ullam veniam qui temporibus. Nobis, officiis cupiditate illum pariatur
                            voluptatibus consequatur harum beatae quae!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

</html>