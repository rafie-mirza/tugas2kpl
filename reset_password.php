<?php
session_start();
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses reset password di sini
    // Misalnya, validasi email dan mengirimkan email dengan tautan reset password.
    
    // Setelah mengirim email, arahkan pengguna ke halaman informasi reset password
    header("location: reset_password_info.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
</head>
<body>
    <h2>Reset Password</h2>
    <form method="post" action="">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
