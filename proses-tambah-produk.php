<?php

include("config.php");

if(isset($_POST['addProduct'])){
    $namaProduk = $_POST['namaProduk'];
    $brandProduk = $_POST['brandProduk'];
    $infoProduk = $_POST['infoProduk'];

    $sql = "INSERT INTO produk(nama_produk, brand_produk, info_produk) VALUES ('$namaProduk', '$brandProduk', '$infoProduk')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list-produk.php?status=sukses');
    } else{
        header('Location: tambah-produk.php?status=gagal');
    }
} else{
    die("Akses dilarang");
}

?>