<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
STAR <br>
<form action="proses-review.php" method="POST">
	<input type = "radio" id = "star" value = 1 > 1 <br>
	<input type = "radio" id = "star" value = 2 > 2 <br>
	<input type = "radio" id = "star" value = 3 > 3 <br>
	<input type = "radio" id = "star" value = 4 > 4 <br>
	<input type = "radio" id = "star" value = 5 > 5 <br>
	komentar <br>
	<input type="text" id="komentar" name="komentar">
	<br>
	<input type="submit" value = "simpanReview" name="simpanReview" >
</form>

<button onclick ="back()"> back </button>
</body>
</html>