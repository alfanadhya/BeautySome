<?php
session_start();

include("config.php");

$userName = $_POST['userName'];
$userPass = $_POST['userPass'];
$sql = "SELECT * FROM user WHERE username='$userName' AND password='$userPass'";

$data = mysqli_query($db, $sql);
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['userName'] = $userName;
    $_SESSION['status'] = 'Login';
    header('Location: tambah-review.php');
}else{
    header('Location: gagal.php?p=gagal');
}
?>