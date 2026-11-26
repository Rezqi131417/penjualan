<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="wrapper">
        <header class="navbar">
            <div class="brand">SIMRS</div>
            <?php 
            include 'menu.php';
            include 'koneksi.php';
            $id_user = $_GET['id'];
            $query = "SELECT * FROM user WHERE id_user = '$id_user'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            } else {
                echo "Data user tidak ditemukan.";
                exit;
            }   
            ?>
        </header>

    <h1>Form Edit Data User</h1>

    <form action="proses_edituser.php" method="post">
        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" placeholder="Masukkan password" required>
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select id="level" name="level">
                <option value="admin" <?php echo ($row['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="kasir" <?php echo ($row['level'] == 'kasir') ? 'selected' : ''; ?>>Kasir</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="Y" <?php echo ($row['status'] == 'Y') ? 'selected' : ''; ?>>Aktif</option>
                <option value="N" <?php echo ($row['status'] == 'N') ? 'selected' : ''; ?>>Nonaktif</option>
            </select>
        </div>
        
        
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>
