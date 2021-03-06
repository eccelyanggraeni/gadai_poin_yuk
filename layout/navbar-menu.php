<style>
    #navbarNav a {
        font-family: 'Open Sans', sans-serif;
        letter-spacing: -1px;
    }
</style>
<!-- Navbar Header Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="beranda.php">
        <img src="img/logo2.png" width="160" height="35" class="d-inline-block align-top" style="padding-left: 3%;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php"><strong>Beranda</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php"><strong>Profil</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list_voucher_redeem.php"><strong>Voucher</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bantuan.php"><strong>Bantuan</strong></a>
                </li>
                <li class="nav-item">
                    <a id="keluar" href="#" class="nav-link"><strong>Keluar</strong></a>
                </li>
            </ul>
        </ul>
    </div>
</nav>
<script>
    $("#keluar").click(function(e) {
        e.preventDefault();
        Notiflix.Confirm.Show(
            'Konfirmasi',
            'Apakah anda yakin ingin keluar ?',
            'Ya',
            'Tidak',
            function(){
                //Ya callback
                window.location.href = "logout.php";
            }
        )
    });
</script>