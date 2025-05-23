<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8</title>
</head>
<body>
    <header>
        <h1>Informasi Diskon Pembayaran UKT Mahasiswa</h1>
    </header>

    <section class="content">
        <h2>Form Pembayaran UKT</h2>
        <form method="post" action="">
            NPM: <input type="text" name="npm"><br>
            Nama: <input type="text" name="nama"><br>
            Prodi: <input type="text" name="prodi"><br>
            Semester: <input type="number" name="semester"><br>
            Biaya UKT: <input type="number" name="biaya"><br>
            <input type="submit" value="Proses">
        </form>

        <?php
        $var_npm = $_POST['npm'];
        $var_nama = $_POST['nama'];
        $var_prodi = $_POST['prodi'];
        $var_semester = $_POST['semester'];
        $var_biaya = $_POST['biaya'];

            if (!empty($_POST['npm']) && !empty($_POST['nama']) && !empty($_POST['prodi']) && !empty($_POST['semester']) && !empty($_POST['biaya'])) {
                $npm = htmlspecialchars($var_npm);
                $nama = htmlspecialchars($var_nama);
                $prodi = htmlspecialchars($var_prodi);
                $semester = htmlspecialchars($var_semester);
                $biaya = htmlspecialchars($var_biaya);

                $diskon = 0.1; // Diskon 10%

                // Tambahan Diskon berdasarkan semester
                if ($semester > 8) {
                    $diskonSemester = 0.05;
                } else {
                    $diskonSemester = 0;
                }

                // Jumlah Pembayaran setelah diskon

                if ($biaya > 5000000) {
                    $diskonAkhir = $diskon + $diskonSemester;
                } else {
                    $diskon = 0;
                }

                $pembayaranAkhir = $biaya - ($biaya * $diskonAkhir);

                echo "<h3>Data Pembayaran:</h3>";
                echo "NPM: <b>$npm</b><br>";
                echo "Nama: <b>$nama</b><br>";
                echo "Prodi: <b>$prodi</b><br>";
                echo "Semester: <b>$semester</b><br>";
                echo "Biaya UKT: <b>$biaya</b><br>";
                echo "Diskon: <b>$diskonAkhir</b><br>";
                echo "Jumlah Yang Harus Di Bayar: <b>$pembayaranAkhir</b><br>";
            } else {
                echo "<p style='color:red;'>Semua field harus diisi!</p>";
            }
        ?>
</body>
</html>