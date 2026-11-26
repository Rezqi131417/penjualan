<!-- koneksi ke database -->    
<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // Uncomment untuk debugging koneksi
?>