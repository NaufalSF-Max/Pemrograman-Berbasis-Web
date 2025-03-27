function cekNilai () {
    var nim = document.getElementById("nim").value;
    var nilai = document.getElementById("nilai").value;
    if (nilai >= 80 && nilai <= 100) {
        alert("Selamat, dengan nilai : " + nilai + " anda mendapatkan huruf mutu A dan di dinyatakan lulus");
    } else if (nilai >= 70 && nilai < 80) {
        alert("Selamat, dengan nilai : " + nilai + " anda mendapatkan huruf mutu B dan di dinyatakan lulus");
    } else if (nilai >= 60 && nilai < 70) {
        alert("Selamat, dengan nilai : " + nilai + " anda mendapatkan huruf mutu C dan di dinyatakan lulus");
    } else if (nilai >= 50 && nilai < 60) {
        alert("Selamat, dengan nilai : " + nilai + " anda mendapatkan huruf mutu D dan di dinyatakan lulus");
    } else if (nilai >= 0 && nilai < 50) {
        alert("Maaf, dengan nilai : " + nilai + " anda mendapatkan huruf mutu E dan di dinyatakan tidak lulus");
    } else {
        alert("Nilai yang anda masukkan tidak valid");
    }
}