<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "db_beautysome";

$db = mysqli_connect($server, $user, $password, $db_name);

if(!$db){
    die("Gagal connect");
}
?>