<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - Judol.cuy</title>
</head>
<body>
    <h1>Login Admin</h1>
    <form action="admin-login-save" method="post">
        <!-- Form untuk login admin -->
        <label for="admin_username">Username:</label>
        <input type="text" id="admin_username" name="admin_username" required><br>

        <label for="admin_password">Password:</label>
        <input type="password" id="admin_password" name="admin_password" required><br>

        <input type="submit" value="Login">
    </form>
    <!-- Tambahkan validasi dan pesan kesalahan jika diperlukan -->
</body>
</html>
