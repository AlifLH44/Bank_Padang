<?php

require "functions.php";
// Buat koneksi ke database
$mysqli = new mysqli($server, $username, $password, $database);

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

// Buat variabel untuk menampung data
$nama_depan = $_POST["nama_depan"];
$nama_belakang = $_POST["nama_belakang"];
$email = $_POST["email"];
$tanggal = $_POST["tanggal"];
$waktu = $_POST["waktu"];
$nomor_telepon = $_POST["nomor_telepon"];
$message = $_POST["message"];

// Buat pernyataan SQL
$sql = "INSERT INTO customers (nama_depan, nama_belakang, email, tanggal, waktu, nomor_telepon, message) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Siapkan pernyataan SQL
$stmt = $mysqli->prepare($sql);

// Bind parameter ke pernyataan SQL
$stmt->bind_param("sssssss", $nama_depan, $nama_belakang, $email, $tanggal, $waktu, $nomor_telepon, $message);

if ($stmt->execute()) {
    echo "Silahkan Kunjungi Bank, Dengan Jadwal Yang Anda Buat. <br>
             Terima Kasih.";
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
