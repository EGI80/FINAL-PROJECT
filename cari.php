
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

    // Mencegah SQL Injection dan mempersiapkan statement
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $inputUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Memeriksa password
        $row = $result->fetch_assoc();
        if (password_verify($inputPassword, $row['password'])) {
            // Redirect to index.html upon successful login
            header("Location: index.html");
            exit(); // Ensure no further code is executed
        } else {
            echo "Password salah!";
            
        }
    } else {
        echo "Username tidak ditemukan!";
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>