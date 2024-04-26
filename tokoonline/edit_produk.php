<?php
include 'db.php';

// Inisialisasi variabel dengan nilai default
$nama_produk = '';
$harga = '';
$deskripsi = '';

// Cek apakah parameter id_produk ada dalam URL
if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];

    // Query untuk mengambil data produk berdasarkan id_produk
    $sql = "SELECT * FROM produk WHERE id = $id_produk";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_produk = $row['nama_product'];
        $harga = $row['harga'];
        $deskripsi = $row['deskripsi'];
    } else {
        echo "Data produk tidak ditemukan.";
        exit();
    }
} else {
    echo "ID produk tidak ditemukan.";
    exit();
}

// Proses form edit jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk_baru = $_POST['nama'];
    $harga_baru = $_POST['harga'];
    $deskripsi_baru = $_POST['deskripsi'];

    // Query untuk mengupdate data produk tanpa foto jika tidak ada file gambar yang diunggah
    $sql_update = "UPDATE produk SET nama_product='$nama_produk_baru', harga='$harga_baru', deskripsi='$deskripsi_baru' WHERE id = $id_produk";

    if ($koneksi->query($sql_update) === TRUE) {
        echo "Data produk berhasil diupdate.";
    } else {
        echo "Error: " . $sql_update . "<br>" . $koneksi->error;
    }
}
?>
<a href="product.php">kembali</a>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Produk</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input[type="text"],
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
</style>
</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama_produk; ?>" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" value="<?php echo $harga; ?>" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required><?php echo $deskripsi; ?></textarea>
            </div>

            <input type="submit" value="Simpan Perubahan" name="submit" class="btn-submit">
        </form>
    </div>
</body>
</html>
