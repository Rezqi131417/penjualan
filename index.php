<!-- halaman Login sistem SIM RS -->
 <!-- form login -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIMRS</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
 <div class="login-container">
    <form action="proses_login.php" method="post">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>