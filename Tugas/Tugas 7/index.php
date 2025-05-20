<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 - Pemrograman Berbasis Objek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tugas 7 - Pemrograman Berbasis Objek</h1>
        <nav>
            <ul>
                <li>Vehicle Type</li>
                <li>Even Numbers</li>
                <li>Animal</li>
                <li>EvenOdd Numbers</li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <section class="vehicle-type">
            <h2>Vehicle Type</h2>
            <form method="post">
                <label for="vehicle">Pilih Jumlah Roda:</label>
                <select name="roda" id="roda">
                    <option value="1">1 Roda</option>
                    <option value="2">2 Roda</option>
                    <option value="3">3 Roda</option>
                    <option value="4">4 Roda</option>
                    <option value="6">6 Roda</option>
                    <option value="8">8 Roda</option>
                </select>
                <br><br>
                <input type="submit" value="Cek Jenis Kendaraan">
            </form>
            <?php include 'vehicle.php'; ?>        
        </section>

        <section class="even-numbers">
            <h2>Even Numbers</h2>
            <p>Bilangan genap dari 2 hingga 10:</p>
            <?php include 'even.php'; ?>
        </section>
        
        <section class="animal">
            <h2>Animal</h2>
            <p>Daftar hewan:</p>
            <?php include 'animal.php'; ?>
        </section>

        <section class="even-odd">
            <h2>EvenOdd Numbers</h2>
            <form method="post">
                <label for="numbers">Masukkan Angka:</label>
                <input type="number" name="numbers" id="numbers" required>
                <br><br>
                <input type="submit" name="evenodd" value="Cek Ganjil / Genap">
            </form>
            <?php include 'evenodd.php'; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Tugas 7 - Pemrograman Berbasis Objek</p>
    </footer>
<body>
</html>