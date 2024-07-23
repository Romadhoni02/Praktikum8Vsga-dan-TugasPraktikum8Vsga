<?php 
// Array Asosiatif
$mahasiswa = array( 
    "nama" => "John Doe", 
    "umur" => 20, 
    "jurusan" => "Informatika"
);

echo "Nama: " . $mahasiswa["nama"] . "<br>"; 
echo "Umur: " . $mahasiswa["umur"] . "<br>"; 
echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>"; 

// Menampilkan semua elemen array asosiatif 
foreach ($mahasiswa as $key => $value) { 
    echo $key . ": " . $value . "<br>"; 
}
?>
