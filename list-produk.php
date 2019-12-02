<?php include("config.php"); 
$sql = "SELECT * FROM produk ORDER BY id_produk desc";
$query = mysqli_query($db, $sql);
?>
<link rel="stylesheet" href="css/home.css">

<div class="navbar" style="font-weight: bold; margin-left: 30px;">
<img src="./img/logo-beautysome.png" alt="" width=30 style="display: block; margin-left: 30px; margin-top: 10px;">
<a href="index.php" style="text-decoration: none;">BeautySome</a>
</div>

<div class="tambah-produk" style="text-align: center;">
<a href="tambah-produk.php" style=" text-decoration: none;">TAMBAH PRODUK</a>
</div>
<h3>List Produk</h3>

<?php while ($record = mysqli_fetch_assoc($query)){ ?>
<div class="produk-content">
            <div id="produk" style="margin-bottom: 30px; width: 33%;">
                <div class="foto-produk">
                    <img src="./img/no_preview.jpg">
                </div>
                <div class="brand-produk"><?php echo $record['brand_produk']; ?></div>
                <div class="nama-produk"><?php echo $record['nama_produk']; ?></div>
                <div class="info-produk">
                    <span class="info-text"><?php echo $record['info_produk']; ?></span>
                </div>
                <div class="rate-produk">
                    <div class="average-produk">4.1</div>
                    <div class="jml-review">Reviewed by : 100 </div>
                </div>
                <div class="btn-more">
                    <button class="btn-home" onclick="pindah()"><span>Add Review</span></button>
                </div>
            </div>
</div>

<script>
        function pindah() {
            window.location = "tambah-review.php";
        }
    </script> 

<style>
.produk-content{
    display: flex;
    justify-content: space-around;
}

h3{
    font-size: 32pt;
    margin-bottom: 20px;
    margin-top: 30px;
    font-weight: bold;
    text-align: center;
}
</style>

<?php } ?>

