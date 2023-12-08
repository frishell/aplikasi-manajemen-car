<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id_car = $_POST["id_car"];
    $nama = $_POST["nama"];
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $plat = $_POST["plat"];
    $tahun = $_POST["tahun"];

    // Query untuk mengubah data
    $sql = "UPDATE car SET nama='$nama', merk='$merk', warna='$warna', plat='$plat', tahun='$tahun' WHERE id_car=$id_car";

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
