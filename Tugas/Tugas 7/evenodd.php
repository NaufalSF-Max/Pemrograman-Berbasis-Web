<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["evenodd"])) {
            $numbers = $_POST["numbers"];
            $evenodd = ($numbers % 2 == 0) ? "Genap" : "Ganjil";
            echo "<h3>Hasil:</h3>";
            echo "Bilangan $numbers adalah <strong>$evenodd</strong>";
        }
    }
?>