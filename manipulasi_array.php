<?php 
$siswa = array("Oliver", "Justin", "Fiona", "Pullman", "John"); 

// Menghitung jumlah elemen array 
echo "Jumlah siswa: " . count($siswa) . "<br>"; 

// Menambah elemen ke array 
array_push($siswa, "Brown"); 
echo "Siswa setelah ditambah: " . implode(", ", $siswa) . "<br>"; 

// Menghapus elemen dari array 
array_pop($siswa); 
echo "Siswa setelah dihapus: " . implode(", ", $siswa) . "<br>"; 

// Mengurutkan array 
sort($siswa); 
echo "Siswa setelah diurutkan: " . implode(", ", $siswa) . "<br>"; 
?>
