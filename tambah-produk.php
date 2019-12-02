<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product|BeautySome</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
form{
    text-align: center;
}
.add-produk-input{
    margin-bottom: 20px;
}
</style>

<body>
<div class="navbar" style="font-weight: bold; margin-left: 30px;">
<img src="./img/logo-beautysome.png" alt="" width=30 style="display: block; margin-left: 30px; margin-top: 10px;">
<a href="index.php" style="text-decoration: none;">BeautySome</a>
</div>
<form action="proses-tambah-produk.php" method="POST" class="add-produk-form">
                <div class="add-produk-input">
                    <input type="text" id="namaProduk" name="namaProduk" placeholder="nama produk"
                    class="add-produk-field">
                </div>
                <div class="add-produk-input">
                    <input type="text" id="brandProduk" name="brandProduk" placeholder="brand produk"
                    class="add-produk-field">
                </div>
                <div class="add-produk-input">
                    <input type="text" id="infoProduk" name="infoProduk" placeholder="info produk"
                    class="add-produk-field">    
                </div>
                <div class="add-produk-button">
                    <input type="submit" class="button" name="addProduct"
                    value="Add Product">
                </div>
            </form>
</body>
</html>