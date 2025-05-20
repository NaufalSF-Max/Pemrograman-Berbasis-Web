<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roda = $_POST['roda'];

        echo "<h3>Hasil:</h3>";
        switch ($roda) {
            case "1":
                echo "Kemungkinan: Sepeda roda satu (unicycle)";
                break;
            case "2":
                echo "Kemungkinan: Sepeda motor atau sepeda";
                break;
            case "3":
                echo "Kemungkinan: Bajaj atau motor roda tiga";
                break;
            case "4":
                echo "Kemungkinan: Mobil pribadi atau taksi";
                break;
            case "6":
                echo "Kemungkinan: Truk kecil atau kendaraan niaga";
                break;
            case "8":
                echo "Kemungkinan: Truk besar atau kendaraan berat";
                break;
            default:
                echo "Jumlah roda tidak dikenali.";
                break;
        }
    }
    ?>