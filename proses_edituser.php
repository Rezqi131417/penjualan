<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $status = $_POST['status'];

    // proses update data ke database
    $sql = "UPDATE user SET username='$username', password='$password', level='$level', status='$status' WHERE id_user='$id_user'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data User berhasil diupdate!'); window.location.href='user.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>