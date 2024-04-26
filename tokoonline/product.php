<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: aqua;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }

    .nav-links {
        list-style-type: none;
        display: flex;
        gap: 20px;
    }

    .nav-links li a {
        color: #fff;
        text-decoration: none;
        text-shadow: 1px 1px 1px black;
    }

    .nav-links li a.active {
        font-weight: bold;
    }

    .main-content {
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    .form {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #555;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .produk {
        width: 200px;
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .produk img {
        width: 100%;
        border-radius: 8px;
    }

    .produk h3 {
        margin-top: 10px;
        font-size: 18px;
    }

    .produk p {
        margin-top: 5px;
        font-size: 14px;
    }
    h1 {
        text-align: center;
    }
    /* Tambahkan kode berikut ke dalam tag <style> di dalam <head> HTML Anda */

.btn-edit {
    background-color: aqua;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.btn-delete {
    background-color: red;
    color: #fff;
    border: none;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-edit:hover,
.btn-delete:hover {
    background-color: #ff9900;
}

</style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">
            <h1>Admin Panel</h1>
        </div>
        <ul class="nav-links">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="product.php" class="active">Product</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="log.php">Exit</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <h2>Tambah Produk</h2>
        <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto Produk:</label>
                <input type="file" id="foto" name="foto" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <input type="submit" value="Tambah Produk" class="btn-submit">
        </form>
    </div>
    <hr>
    <h1>Produk Kami</h1>
    <div class="container">
        <?php
        include 'tampil_produk.php';
        ?>
    </div>
</body>
</html>
