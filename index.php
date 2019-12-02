<?php
session_start();
$_SESSION['Login'] =  false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeautySome</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="jumbotron">
        <div class="navbar" style="display: flex; justify-content: center; padding-top: 20px; font-weight: bold;">
        <a href="register.php" style="text-decoration: none;">REGISTER | </a>
        <a href="login.php" style="text-decoration: none;">LOGIN</a>
        </div>
        <div class="logo" style="display: flex; justify-content: center; margin-top: 80px;">
        <img src="./img/logo-beautysome.png" alt="" width=100 style="display: block;">
        </div>
        <h1>BeautySome</h1>
        <div class="jumbotron-desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus accusantium repudiandae distinctio voluptate sint, quam perspiciatis laboriosam, repellat tempore quibusdam adipisci aspernatur facere praesentium illo dolore maxime ex
                quas doloribus.
            </p>
        </div>
    </div>

    <div class="skincare-bg">
        <img src="img/skincare-bg.png" alt="">
    </div>

    <div class="produk-review">
        <div class="produk-review-title" style="display: flex;">
            <h3>List Produk</h3>
            <a href="list-produk.php" style="font-size: 15px; line-height: 90px; margin-left: 10px; text-decoration: none;">Lihat semua</a>
        </div>
        <div class="produk-review-content">
            <div id="produk">
                <div class="foto-produk">
                    <img src="./img/lip.jpg" width="100px">
                </div>
                <div class="brand-produk">wardah</div>
                <div class="nama-produk">Everyday Moisture Lip Nutrition Balm</div>
                <div class="info-produk">
                    <span class="info-text">Moisture Lip Nutrition Balm dari Wardah ini merupakan Pelembab ekstra bibir dengan bahan natural dalam bentuk stick.Beraroma menenangkan. Tekstur rich dan creamy tanpa membuat bibir terasa lengket dan berminyak. Pelembap ini Mengandung SPF 15 PA+++ untuk melindungi kulit dari sinar matahari dan radikal bebas, Mengandung shea butter dan vitamin E, Memberikan kelembaban hingga 12 jam serta Membantu kulit bibir tetap lembab, tidak pecah-pecah dan kering.</span>
                </div>
                <div class="rate-produk">
                    <div class="average-produk">4.1</div>
                    <div class="jml-review">Reviewed by : 100 </div>
                </div>
                <div class="btn-more">
                    <button class="btn-home" onclick="pindah()"><span>Add review</span></button>
                </div>
            </div>
            <div id="produk">
                <div class="foto-produk">
                    <img src="./img/pore.jpg" width="100px">
                </div>
                <div class="brand-produk">the body shop</div>
                <div class="nama-produk">Tea Tree Pore Minimizer</div>
                <div class="info-produk">
                    <span class="info-text">Tea Tree Pore Minimizer can be used as the last step in your skincare routine as a make-up base to smooth and mattify skin, helping pores appear minimized. Enriched with Community Trade tea tree oil, it makes an ideal primer for blemished skin, leaving your skin’s texture looking refined and shine-free.</span>
                </div>
                <div class="rate-produk">
                    <div class="average-produk">4.2</div>
                    <div class="jml-review">Reviewed by : 100 </div>
                </div>
                <div class="btn-more">
                    <button class="btn-home" onclick="pindah()"><span>Add review</span></button>
                </div>

            </div>
            <div id="produk">
                <div class="foto-produk">
                    <img src="./img/sunscreen.jpg" width="100px">
                </div>
                <div class="brand-produk">wardah</div>
                <div class="nama-produk">Wardah Sunscreen Gel</div>
                <div class="info-produk">
                    <span class="info-text">Wardah Sunscreen Gel merupakan pelindung matahari bertekstur gel lembut dengan formula baru dan membuat kulit terasa nyaman. Diperkaya dengan SPF 30 untuk perlindungan maksimal pada kulit. Tidak lengket maupun berminyak, non-comedogenic, dan mudah menyerap. </span>
                </div>
                <div class="rate-produk">
                    <div class="average-produk">4.3</div>
                    <div class="jml-review">Reviewed by : 100 </div>
                </div>
                <div class="btn-more">
                    <button class="btn-home" onclick="pindah()"><span>Add review</span></button>
                </div>

            </div>
        </div>
    </div>

    <script>
        function pindah() {
            window.location = "login.php";
        }
    </script> 
</body>
</html>