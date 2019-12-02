<?php

include("config.php");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];

    $sql = "INSERT INTO user(nama, email, username, password, tipe_user) VALUES ('$name', '$userEmail', '$userName', '$userPass', 'user')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    } else{
        header('Location: index.php?status=gagal');
    }
} else{
    die("Akses dilarang");
}

?>