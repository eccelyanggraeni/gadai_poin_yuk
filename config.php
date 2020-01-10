<?php

// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "gadai_poin_yuk";

// try {
//     //create PDO connection 
//     $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
// } catch (PDOException $e) {
//     //show error
//     die("Terjadi masalah: " . $e->getMessage());
// }

session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "gadai_poin_yuk"; /* Database name */

$db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>