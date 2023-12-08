<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Ambil ID dari URL
    $id_car = $_GET["id"];

    // Query untuk menghapus data
    $sql = "DELETE FROM car WHERE id_car=$id_car";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak valid.";
}

// Tutup koneksi
$conn->close();
?>