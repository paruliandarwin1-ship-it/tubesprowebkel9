<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register_siswa.css">
</head>
<body>
    <div class="card-daftar">
        <div class="form-daftar">
            <form action="halaman_siswa.php" method="POST">
                <h1>Daftar</h1>
                <label for="username">Username</label> 
                <input type="text" name="username" id="username" placeholder="masukkan username" required><br>
                <label for="nama">Email </label>
                <input type="email" name="email" id="email" placeholder="masukkan email" required><br>
                <label for="password">Password </label>
                <input type="password" name="password" id="password" placeholder="masukkan password" required><br>
                <label for="nomorSiswa">No Siswa </label>
                <input type="text" name="nomorSiswa" id="nomorSiswa" placeholder="masukkan password" required ><br>
                <button type="submit" name="submit">Daftar</button>
                <div class="login-link">
    <p>Already have an account?</p>
    <a href="login_siswa.php">Login</a>
</div>
            </form>
        </div>
    </div>
</body>
</html>
