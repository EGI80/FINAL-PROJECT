
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Biasanya default password MySQL di XAMPP kosong
$dbname = "logindb"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>