<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Halaman Home</title>
</head>

<body>
    <h1> Ini halaman login</h1>
    <form action="./backend/login.php" method="POST">
        <input type="email" name="email" id="email" placeholder="email" required />
        <input type="password" name="password" id="password" placeholder="password" required />
        <button type="submit">login</button>
    </form>

</body>

</html>