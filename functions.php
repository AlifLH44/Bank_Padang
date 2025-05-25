<?php
$server = "localhost:3306"; // Ganti dengan nama host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "it_banking"; // Ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($server, $username, $password, $database);

function register($data) {
    global $conn;

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    

    

    // Insert ke DB
    $sql = "INSERT INTO akun (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($conn, $sql);

    // Periksa apakah eksekusi query berhasil
    if ($result) {
        // Jika berhasil, kembalikan jumlah baris yang terkena dampak
        return mysqli_affected_rows($conn);
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
}

?>
