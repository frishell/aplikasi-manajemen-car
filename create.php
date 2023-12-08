<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $plat = $_POST["plat"];
    $tahun = $_POST["tahun"];

    // Query untuk menambah data
    $sql = "INSERT INTO car (nama, merk, warna, plat, tahun) VALUES ('$nama', '$merk', '$warna', '$plat', '$tahun')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
