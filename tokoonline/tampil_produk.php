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
        echo "<a href='edit_produk.php?id_produk=" . $row['id'] . "' class='btn-edit'>Edit</a>";
        echo "<a href='hapus_produk.php?id_produk=" . $row['id'] . "' class='btn-delete'>Hapus</a>";
        echo "</div>";
    }
} else {
    echo "Tidak ada produk yang tersedia.";
}
?>
