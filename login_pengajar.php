
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengajar</title>

    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="login_pengajar.css">
</head>
<body>

    <div class="card-login">
        <div class="form-login">

            <form action="halaman_pengajar.php" method="POST">

                <h1>Login</h1>

                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Masukkan email"
                    required
                >

                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Masukkan password"
                    required
                >

                <div class="remember">
                    <input type="checkbox" name="ingatkan" id="ingatkan">
                    <label for="ingatkan">Remember me</label>
                </div>

                <input type="submit" value="Login">

                <p class="register-link">
                    Don't have an account?
                    <a href="register_pengajar.php">
                        Register
                    </a>
                </p>

            </form>

        </div>
    </div>

</body>
</html>
