php
Salin kode
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tripsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    $nama = $_POST['nama'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $nik = $_POST['nik'] ?? '';
    $no_hp = $_POST['no_hp'] ?? '';
    $jenis_pesawat = $_POST['jenis_pesawat'] ?? '';
    $jenis_tiket = $_POST['jenis_tiket'] ?? '';
    $jenis_maskapai = $_POST['jenis_maskapai'] ?? '';
    $pemberangkatan = $_POST['pemberangkatan'] ?? '';
    $tujuan = $_POST['tujuan'] ?? '';

    if ($nama && $alamat && $nik && $no_hp && $jenis_pesawat && $jenis_tiket && $jenis_maskapai && $pemberangkatan && $tujuan) {
        $sql = "INSERT INTO pemesanan (nama, alamat, nik, no_hp, jenis_pesawat, jenis_tiket, jenis_maskapai, pemberangkatan, tujuan) 
                VALUES ('$nama', '$alamat', '$nik', '$no_hp', '$jenis_pesawat', '$jenis_tiket', '$jenis_maskapai', '$pemberangkatan', '$tujuan')";

        if ($conn->query($sql) === TRUE) {
            echo "Pemesanan berhasil disimpan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Data tidak lengkap.";
    }
}

$conn->close();
?>