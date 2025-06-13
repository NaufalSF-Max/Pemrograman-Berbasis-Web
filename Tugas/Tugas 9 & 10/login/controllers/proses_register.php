<?php
session_start();
include '../../koneksi_db.php'; // pastikan file koneksi sesuai

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username sudah ada
    $cek = $conn->prepare("SELECT id FROM pengguna WHERE nama = ?");
    $cek->bind_param("s", $username);
    $cek->execute();
    $cek_result = $cek->get_result();

    if ($cek_result->num_rows > 0) {
        header("Location: ../views/register.php?message=" . urlencode("Nama pengguna sudah terdaftar."));
        exit;
    }

    $cek->close();

    // Simpan user baru
    $stmt = $conn->prepare("INSERT INTO pengguna (nama, katasandi) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        header("Location: ../views/login.php?message=" . urlencode("Berhasil daftar, silakan login."));
    } else {
        header("Location: ../views/register.php?message=" . urlencode("Gagal mendaftar. Silakan coba lagi."));
    }

    $stmt->close();
}
?>