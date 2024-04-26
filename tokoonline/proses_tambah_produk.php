<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="product.php">Kembali</a>
</body>
</html>

<?php
include 'db.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

// Tangkap foto produk
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];

// Set folder penyimpanan foto
$folder = "uploads/";

// Pindahkan file foto ke folder
move_uploaded_file($tmp_file, $folder . $nama_file);

// Query untuk menyimpan data ke database
$sql = "INSERT INTO produk (nama_product, foto, harga, deskripsi) VALUES ('$nama', '$nama_file', '$harga', '$deskripsi')";

if ($koneksi->query($sql) === TRUE) {
    echo "Produk berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
