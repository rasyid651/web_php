<?php 
session_start(); 

// dummy akun (bisa diganti dengan database nanti)

$valid_username = "rasyid_ux";
$valid_password = "12345";

// ambil data dari form 

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';


// cek login 

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username; // simpan ke session
    header("Location: index.php");
    exit;
} else {
    echo "<h2>Login Gagal!</h2>";
    echo "<p>Username Atau Password salah.</p>";
    echo '<a href="login.php">Coba Lagi</a>';
}