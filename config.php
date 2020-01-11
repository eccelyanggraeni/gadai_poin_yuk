<?php

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