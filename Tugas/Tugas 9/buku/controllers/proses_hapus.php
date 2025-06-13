<?php
include '../../koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
    $stmt->bind_param("i", $id);

    // Eksekusi dan tangani hasilnya
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus'); window.location='../views/index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='../views/index.php';</script>";
    }


    // Tutup statement
    $stmt->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='../views/index.php';</script>";
}


// Tutup koneksi
$conn->close();
?>