<?php session_start();
if (isset($_POST["submit"])) 
     {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["nomorPeserta"] = $_POST["nomorPeserta"];
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="profil_siswa.php">Masuk ke profil</a>
</body>
</html>
