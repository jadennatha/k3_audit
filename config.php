<?php
$host = "localhost";
$user = "root";      // ubah jika pakai user lain
$pass = "";          // isi password MySQL-mu
$dbname = "form_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
