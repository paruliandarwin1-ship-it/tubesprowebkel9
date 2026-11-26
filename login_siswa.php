<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_siswa.css">
</head>
<body>
    <div class="card-login">
        <div class="form-login">
            <form action="halaman_siswa.php" method="POST">
                <h1>Login</h1>
                <label for="nama">Email </label>
                <input type="email" name="email" id="email" placeholder="masukkan email" required><br>
                <label for="password">Password </label>
                <input type="password" name="password" id="password" placeholder="masukkan password" required><br>
                <input type="checkbox" name="ingatkan" id="ingatkan">
                <label for="ingatkan">Remember me</label><br>
                <input type="submit" value="Login">
                <p class="register-link"> Don't have an account? <a href="register_siswa.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
