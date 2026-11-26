
<!-- proses login -->
<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // ambil data user dari database
    include 'koneksi.php';
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
    // jika login gagal, tampilkan pesan error
        echo "<script>alert('Username atau password salah!'); window.location.href='index.php';</script>";  
    }
}