<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <link rel="stylesheet" href="style-create.css">

</head>

<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="data-produk">
            <a href="show.php">Lihat data produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="nama-produk">
                <input type="text" name="name" placeholder="input nama produk">
            </div>

            <div class="harga-produk">
                <input type="number" name="price" placeholder="input harga produk">
            </div>

            <div class="foto-produk">
                <input type="file" name="image">
            </div>

            <div class="simpan-produk">
                <input type="submit" value="simpan" name="submit">
            </div>
        </form>
    </div>
</body>

</html>