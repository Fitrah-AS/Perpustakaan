<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "root"; // Default username
$password = ""; // Default password (kosong)
$database = "perpustakaan_fitrah";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>