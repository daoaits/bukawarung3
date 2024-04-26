<?php
include 'db.php'; // Pastikan file db.php sudah di-include sebelumnya

// Cek apakah ada parameter ID produk yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Query untuk mendapatkan data produk berdasarkan ID
    $sql_produk = "SELECT * FROM produk WHERE id = $id_produk";
    $result_produk = $koneksi->query($sql_produk);

    if ($result_produk->num_rows > 0) {
        $row_produk = $result_produk->fetch_assoc();
        $nama_barang = $row_produk['nama_product'];
        // Lakukan sesuatu dengan data produk yang diambil, misalnya tampilkan di form pembayaran
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "ID produk tidak ditemukan.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirimkan dari form
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
    $metode_pembayaran = mysqli_real_escape_string($koneksi, $_POST['metode_pembayaran']);

    // Simpan data ke dalam database
    $sql_insert = "INSERT INTO metode_pembayaran (nama_lengkap, email, alamat, no_hp, nama_barang, metode_pembayaran) VALUES ('$nama_lengkap', '$email', '$alamat', '$no_hp', '$nama_barang', '$metode_pembayaran')";

    if ($koneksi->query($sql_insert) === TRUE) {
        // Tampilkan notifikasi dengan JavaScript
        echo "<script>alert('Pembayaran untuk $nama_barang oleh $nama_lengkap berhasil diproses.'); window.location.href = 'customers.php';</script>";
        
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: aqua;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: rgb(3, 192, 192);
        }
        .error-message {
            color: red;
            margin-top: 5px;
        }
        .form-group a {
            background-color: aqua;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Metode Pembayaran</h1>
        <p>Harap isi data dengan benar</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id_produk; ?>" method="POST">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap:</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor Handphone:</label>
                <input type="number" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang; ?>" readonly>
            </div>
            <div class="form-group">
                <h5>Hanya metode Cash On Delivery (COD) yang tersedia</h5>
                <label for="metode_pembayaran">Metode Pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="COD">Cash On Delivery (COD)</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Bayar Sekarang" class="btn-submit">
                <a href="customers.php">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
