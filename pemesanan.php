html
Salin kode
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Tiket Pesawat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="pemesanan.css">
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Form Pemesanan Tiket Pesawat</h3>
                <p class="blue-text">Isi form di bawah ini untuk memesan tiket pesawat.</p>
                <div class="card">
                    <h5 class="text-center mb-4">Detail Pemesanan</h5>
                    <form class="form-card" action="process_form.php" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Nama<span class="text-danger"> *</span></label> 
                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Alamat<span class="text-danger"> *</span></label> 
                                <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" required> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">NIK<span class="text-danger"> *</span></label> 
                                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK Anda" required> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">No HP<span class="text-danger"> *</span></label> 
                                <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP Anda" required> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Jenis Pesawat<span class="text-danger"> *</span></label> 
                                <select id="jenis_pesawat" name="jenis_pesawat" required>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'tripsdb');
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    $result = $conn->query("SELECT id, jenis_pesawat FROM pesawat");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['id']."'>".$row['jenis_pesawat']."</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Jenis Tiket<span class="text-danger"> *</span></label> 
                                <select id="jenis_tiket" name="jenis_tiket" required>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'tripsdb');
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    $result = $conn->query("SELECT id, jenis_tiket FROM tiket");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['id']."'>".$row['jenis_tiket']."</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Jenis Maskapai<span class="text-danger"> *</span></label> 
                                <select id="jenis_maskapai" name="jenis_maskapai" required>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'tripsdb');
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    $result = $conn->query("SELECT id, jenis_maskapai FROM maskapai");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['id']."'>".$row['jenis_maskapai']."</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Pemberangkatan<span class="text-danger"> *</span></label> 
                                <select id="pemberangkatan" name="pemberangkatan" required>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'tripsdb');
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    $result = $conn->query("SELECT id, lokasi FROM pemberangkatan");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['id']."'>".$row['lokasi']."</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Tujuan<span class="text-danger"> *</span></label> 
                                <select id="tujuan" name="tujuan" required>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'tripsdb');
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    $result = $conn->query("SELECT id, lokasi FROM tujuan");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['id']."'>".$row['lokasi']."</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> 
                                <button type="submit" class="btn-block btn-primary">Pesan Tiket</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>