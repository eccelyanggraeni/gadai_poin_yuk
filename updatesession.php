<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo $_SESSION['username'] = $_POST['username'];
        echo $_SESSION['cif'] = $_POST['cif'];
    }
?>