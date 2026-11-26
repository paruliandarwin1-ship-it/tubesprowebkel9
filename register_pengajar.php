<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register_pengajar.css">
</head>
<body>
    <div class="card-daftar">
        <div class="form-daftar">
            <form action="halaman_pengajar.php" method="POST">
                <h1>Daftar</h1>
                <label for="username">Username</label> 
                <input type="text" name="username" id="username" placeholder="masukkan username" required><br>
                <label for="nama">Email </label>
                <input type="email" name="email" id="email" placeholder="masukkan email" required><br>
                <label for="password">Password </label>
                <input type="password" name="password" id="password" placeholder="masukkan password" required><br>
                 <label for="nomorPengajar">No Pengajar </label>
                 <input type="text" name="nomorPengajar" id="nomorPengajar" placeholder="masukkan nomor pengajar" required ><br>
               
<label for="pendidikan">Pendidikan Terakhir</label>
<select name="pendidikan" id="pendidikan" required>
    <option value="" disabled selected>-- Pilih Pendidikan --</option>
    <option value="D3">D3</option>
    <option value="D4">D4</option>
    <option value="S1">S1</option>
    <option value="S2">S2</option>
    <option value="S3">S3</option>
</select>

                <button type="submit" name="submit">Daftar</button>
<div class="login-link">
    <p>Already have an account?</p>
    <a href="login_pengajar.php">Login</a>
</div>

            </form>
        </div>
    </div>
</body>
</html>
