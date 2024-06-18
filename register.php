php
Salin kode
<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = ""; // Default password XAMPP adalah kosong
$dbname = "logindb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Mencegah SQL Injection dengan menggunakan prepared statements
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

    if ($stmt) {
        // Hash password sebelum menyimpannya
        $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);

        // Mengikat parameter
        $stmt->bind_param("ss", $inputUsername, $hashedPassword);

        // Menjalankan statement
        if ($stmt->execute()) {
            header("Location: cari.html");
        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }

        // Menutup statement
        $stmt->close();
    } else {
        echo "Terjadi kesalahan dalam persiapan statement: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>