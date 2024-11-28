<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>login</h1>
    <form action="./backend/login.php" method="post">
        <div class="masuk-email">
            <input type="email" name="email" placeholder="masukkan email anda">
        </div>
        <div class="masuk-pw">
            <input type="password" name="password" placeholder="masukkan password anda">
        </div>
        <div class="akun-login">
            <input type="submit" value="login" name="submit">
        </div>
        <div class="buat-akun">
            <label>belum memiliki akun? </label>
            <a href="register.php">register</a>
        </div>
    </form>

</body>

</html>