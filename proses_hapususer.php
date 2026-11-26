<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // proses hapus data user dari database
    $sql = "DELETE FROM user WHERE id_user='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data User berhasil dihapus!'); window.location.href='user.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
}
?>