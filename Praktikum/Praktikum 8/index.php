<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 8 - Form</title>
</head>
<body>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email" ><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    // $var_nama = $_POST['nama'];
    // $var_email = $_POST['email'];

    // if (!empty($var_nama) && !empty($var_email)) {
    //     $nama = htmlspecialchars($var_nama);
    //     $email = htmlspecialchars($var_email);

    //     echo "<h3>Data:</h3>";
    //     echo "Nama: <b>$nama</b><br>";
    //     echo "Nilai: <b>$email</b><br>";
    // }
    ?>

    <h1>Form Input Data</h1>
    <form method="get" action="">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email" ><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    http://localhost/Praktikum/Praktikum%208/index.php/

    $var_nama = $_GET['nama'];
    $var_email = $_GET['email'];

    if (!empty($var_nama) && !empty($var_email)) {
        $nama = htmlspecialchars($var_nama);
        $email = htmlspecialchars($var_email);

        echo "<h3>Data:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Nilai: <b>$email</b><br>";
    }
    ?>
    
    <br><br><br><br>
    <h1>Latihan Nilai Mahasiswa</h1>
    <a href="latihan_nilai.php"><button>Latihan Nilai</button></a>
</body>
</html>