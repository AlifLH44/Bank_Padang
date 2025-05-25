<?php
require"functions.php";

// Buat koneksi ke database
$mysqli = new mysqli($server, $username, $password, $database);


$nama = $_POST["nama"];
$email = $_POST["email"];
$message = $_POST["message"];

// Buat pernyataan SQL
$sql = "INSERT INTO kontak (nama,email,message) VALUES (?, ?, ?)";

// Siapkan pernyataan SQL
$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $nama,$email,$message);

if ($stmt->execute()) {
    // Buat notifikasi
    $notifikasi = "
        <div class='alert alert-success' role='alert'>
            Data berhasil diproses.
            <br>
            Terima kasih, <strong>" . $nama . "</strong>.
            <br>
            Laporan Anda akan kami jadikan pelajaran yang akan datang.
        </div>
    ";
    
    echo "
    <a href='index.php' class='btn btn-primary'>Kembali ke Halaman Awal</a>
";
    // Tampilkan notifikasi
    echo $notifikasi;
} else {
    echo "Gagal menyimpan data: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
