<?php $alamat_gambar = "http://localhost/bukawarung/tokoonline/TOKO.jpg"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>bukawarung.com</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    header {
        padding: 200px;
        background-image: url('<?php echo $alamat_gambar; ?>');
        background-size: cover; /* Tambahkan properti background-size */
        background-position: center center; /* Atur posisi background ke tengah */
        background-color: aqua; /* Fallback background color jika gambar tidak dimuat */
        color: #fff;
        text-shadow: 1px 1px 1px black;
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
        background-color: aqua;
        color: #fff;
        border: none;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: rgb(3, 192, 192);
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
</style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">
            <h1>Admin Panel</h1>
        </div>
        <ul class="nav-links">
            <li><a href="dashboard" class="active">Beranda</a></li>
            <li><a href="product.php">Tentang Kami</a></li>
            <li><a href="#">Kontak Kami</a></li>
        </ul>
    </nav>
    <header>
        <h2>bukawarung.com</h2>
        <p>Kami hadir dengan berbagai produk berkualitas terbaik</p>
    </header>
    <h1>Produk Terbaik</h1>
    <div class="container">
        <?php  
        include 'db.php';
        
        $sql = "SELECT * FROM produk";
        $result = $koneksi->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='produk'>";
                echo "<img src='uploads/" . $row['foto'] . "' alt='" . $row['nama_product'] . "'><br>";
                echo "<h3>" . $row['nama_product'] . "</h3>";
                echo "<p>Harga: Rp " . $row['harga'] . "</p>";
                echo "<p>" . $row['deskripsi'] . "</p>";
// Tambahkan tombol bayar dengan link ke halaman metode pembayaran
                echo "<a href='metode_pembayaran.php?id=" . $row['id'] . "' class='btn-submit'>Bayar Sekarang</a>";
                echo "</div>";

            }
        } else {
            echo "Tidak ada produk yang tersedia.";
        }
        ?>
    </div>
</body>
</html>
