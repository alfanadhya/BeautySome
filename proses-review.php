<?php

include("config.php");

if(isset($_POST['simpanReview'])){
    $star = $_POST['name'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO flow_rating(star, komentar) VALUES ('$name', '$userEmail')";
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