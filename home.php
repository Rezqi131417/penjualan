<?php
 session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }   
    ?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMRS | Beranda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header class="navbar">
            <div class="brand">POS KASIR</div>
            <?php 
            include 'menu.php';
            ?>
        </header>

        <main class="hero">
            <span class="eyebrow">Sistem Informasi Penjualan</span>
            <h1>Selamat Datang di POS KASIR</h1>
            <p>
                Sistem informasi penjualan yang cepat, rapi, dan mudah digunakan.
                Pilih menu di atas atau gunakan tombol di bawah untuk melanjutkan.
            </p>

           
        </main>
    </div>
</body>
</html>