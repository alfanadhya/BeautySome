<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar User|BeautySome</title>
</head>
<body>
    <h1>Daftar User</h1>
    <table>
    <thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM users";
            $query = mysqli_query($db, $sql);

            while($user = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$user['userName']."</td>";
                echo "<td>".$user['userEmail']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$user['userID']."'>Edit</a> | ";
                echo "<a href='delete.php?id=".$user['userID']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>

</body>
</html>