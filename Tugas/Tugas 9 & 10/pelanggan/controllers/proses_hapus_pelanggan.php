<?php
include '../../koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Pelanggan berhasil dihapus'); window.location='../views/daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pelanggan: " . addslashes($stmt->error) . "'); window.location='../views/daftar_pelanggan.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='../views/daftar_pelanggan.php';</script>";
}

$conn->close();
?>