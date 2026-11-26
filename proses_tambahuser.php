

<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    // ambil data dari form
   
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    
    $status = $_POST['status'];

    // proses simpan data ke database
    include "koneksi.php";
    $sql = "INSERT INTO user (username,password,level,status) VALUES ('$username','$password','$level','$status')";
    if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Pendaftaran User berhasil!'); window.location.href='user.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>