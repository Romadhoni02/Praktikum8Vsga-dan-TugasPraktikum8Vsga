<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 2</title>
</head>
<body>
    <h1>Data Produk</h1>
    <form method="POST" action="">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>
        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" required><br><br>
        <input type="submit" name="submit" value="Tambah Produk">
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['produk'])) {
        $_SESSION['produk'] = array(
            array("nama" => "Produk A", "harga" => 10000, "stok" => 20),
            array("nama" => "Produk B", "harga" => 15000, "stok" => 15),
            array("nama" => "Produk C", "harga" => 20000, "stok" => 10)
        );
    }

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $produk_baru = array("nama" => $nama, "harga" => $harga, "stok" => $stok);
        $_SESSION['produk'][] = $produk_baru;
    }

    echo "<h2>Daftar Produk</h2>";
    echo "<table border='1'>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>";

    foreach ($_SESSION['produk'] as $item) {
        echo "<tr>
                <td>" . $item["nama"] . "</td>
                <td>" . number_format($item["harga"], 0, ',', '.') . "</td>
                <td>" . $item["stok"] . "</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
