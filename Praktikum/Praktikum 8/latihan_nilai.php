<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Nilai Mahasiswa</title>
</head>
<body>
    <h2>Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br>
        Nilai: <input type="number" name="nilai" ><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    $var_nama = $_POST['nama'];
    $var_nilai = $_POST['nilai'];

    if (!empty($_POST['nama']) && !empty($_POST['nilai'])) {
        $nama = htmlspecialchars($var_nama);
        $nilai = htmlspecialchars($var_nilai);

        if ($nilai >= 85) {
            $predikat = 'A';
            $status = 'Lulus';
        } elseif ($nilai >= 75) {
            $predikat = 'B';
            $status = 'Lulus';
        } elseif ($nilai >= 65) {
            $predikat = 'C';
            $status = 'Lulus';
        } elseif ($nilai >= 50) {
            $predikat = 'D';
            $status = 'Lulus';
        } else {
            $predikat = 'E';
            $status = 'Tidak Lulus';
        }

        echo "<h3>Hasil:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Nilai: <b>$nilai</b><br>";
        echo "Predikat: <b>$predikat</b><br>";
        echo "Status: <b>$status</b>";
    }
    ?>
</body>
</html>