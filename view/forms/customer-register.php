<!DOCTYPE html>
<html>
<head>
    <title>Registrasi - Judol.cuy</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="register/save" method="post">
        <!-- Form untuk registrasi -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
