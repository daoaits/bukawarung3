<?php
include 'db.php'; // Pastikan file db.php sudah di-include sebelumnya

// Cek apakah ada parameter ID pembayaran yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id_pembayaran = $_GET['id'];

    // Query untuk mendapatkan data pembayaran berdasarkan ID
    $sql_pembayaran = "SELECT * FROM metode_pembayaran WHERE id = $id_pembayaran";
    $result_pembayaran = $koneksi->query($sql_pembayaran);

    if ($result_pembayaran->num_rows > 0) {
        $row_pembayaran = $result_pembayaran->fetch_assoc();
    } else {
        echo "Data pembayaran tidak ditemukan.";
    }
} else {
    echo "ID pembayaran tidak ditemukan.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembayaran</title>
    <style>
        /* Styling CSS untuk halaman detail pembayaran */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Pembayaran</h1>
        <?php if (isset($row_pembayaran)) : ?>
            <div class="detail-item">
                <span class="detail-label">ID Pembayaran:</span>
                <?php echo $row_pembayaran['id']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Nama Lengkap:</span>
                <?php echo $row_pembayaran['nama_lengkap']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Email:</span>
                <?php echo $row_pembayaran['email']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Alamat:</span>
                <?php echo $row_pembayaran['alamat']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Nomor Handphone:</span>
                <?php echo $row_pembayaran['no_hp']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Nama Barang:</span>
                <?php echo $row_pembayaran['nama_barang']; ?>
            </div>
            <div class="detail-item">
                <span class="detail-label">Metode Pembayaran:</span>
                <?php echo $row_pembayaran['metode_pembayaran']; ?>
            </div>
        <?php else : ?>
            <p>Data pembayaran tidak ditemukan.</p>
        <?php endif; ?>
        <a href="customers.php">Kembali ke Daftar Pembayaran</a>
    </div>
</body>
</html>
