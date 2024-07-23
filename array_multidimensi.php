<?php 
// Array Multidimensi
$kelas = array( 
    array("John Doe", 20, "Informatika"), 
    array("Jane Smith", 21, "Sistem Informasi"), 
    array("Michael Brown", 22, "Teknik Komputer")
);

echo "Mahasiswa 1: " . $kelas[0][0] . ", Umur: " . $kelas[0][1] . ", Jurusan: " . $kelas[0][2] . "<br>"; 
echo "Mahasiswa 2: " . $kelas[1][0] . ", Umur: " . $kelas[1][1] . ", Jurusan: " . $kelas[1][2] . "<br>"; 
echo "Mahasiswa 3: " . $kelas[2][0] . ", Umur: " . $kelas[2][1] . ", Jurusan: " . $kelas[2][2] . "<br>"; 

// Menampilkan semua elemen array multidimensi 
foreach ($kelas as $mahasiswa) { 
    echo "Nama: " . $mahasiswa[0] . ", Umur: " . $mahasiswa[1] . ", Jurusan: " . $mahasiswa[2] . "<br>"; 
}
?>
