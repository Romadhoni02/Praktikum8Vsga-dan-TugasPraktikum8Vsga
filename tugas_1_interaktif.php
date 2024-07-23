<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>
</head>
<body>
    <h1>Kelola Angka</h1>
    <form method="POST" action="">
        <label for="angka">Masukkan angka (pisahkan dengan koma):</label><br>
        <input type="text" id="angka" name="angka" required><br><br>
        <input type="submit" name="submit" value="Proses">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['angka'];
        $angka = array_map('intval', explode(',', $input));

        // Menghitung total hasil penjumlahan semua angka
        $total = array_sum($angka);
        echo "Total: " . $total . "<br>";

        // Menghitung nilai rata-rata (mean)
        $mean = $total / count($angka);
        echo "Rata-rata: " . number_format($mean, 2) . "<br>";

        // Menghitung nilai median
        sort($angka);
        $middleIndex = floor(count($angka) / 2);
        if (count($angka) % 2 == 0) {
            $median = ($angka[$middleIndex - 1] + $angka[$middleIndex]) / 2;
        } else {
            $median = $angka[$middleIndex];
        }
        echo "Median: " . $median . "<br>";

        // Menampilkan angka ganjil
        echo "Angka ganjil: ";
        $ganjil = array_filter($angka, function($num) {
            return $num % 2 != 0;
        });
        echo implode(", ", $ganjil);
        echo "<br>";
    }
    ?>
</body>
</html>
