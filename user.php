<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
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


    <h2>Data User</h2>
    <a href="form_user.php" class="btn">+ Tambah Data User</a>

    <?php
    include 'koneksi.php';
    // Menampilkan data dari database
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);
    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status</th>
                     <th>Aksi</th>
                    
                </tr>
              </thead>
              <tbody>";    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
          
            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
            echo "<td>" . htmlspecialchars($row['password']) . "</td>";
            echo "<td>" . htmlspecialchars($row['level']) . "</td>";           
          
            $status = ($row['status'] == 'Y') ? 'Aktif' : 'Nonaktif';
            echo "<td>" . $status . "</td>";
            echo "<td>
                    <a href='form_edituser.php?id=" . $row['id_user'] . "' class='btn-edit'>Edit</a>
                    <a href='proses_hapususer.php?id=" . $row['id_user'] . "' class='btn-delete' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>
                  </td>";

            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p style='color: var(--text-muted); margin-top: 15px;'>Tidak ada data pendaftaran.</p>";
    }
    ?>

    <br>
    
</body>
</html>