<?php

# CONTOH 1

/* 

membuat variabel $data_trainer dengan tipe data array
dan masukan beberapa data nama trainer

*/


$data_trainer = array('Samuel','Ellyakim','Marthen','Sulenias');
echo "<h3>Trainer</h3>"; // membuat judul

foreach($data_trainer as $trainer)
{
    echo 'Trainer : ' . $trainer. "<br>";
};

# CONTOH 2

/*

$peserta_kursus merupakan variabel dengan tipe data array
di dalamnya ada data peserta kursus

*/

$peserta_kursus = ['Lidia','Dimas','Melpan', 'Nicklas'];

echo "<h3>Siswa</h3>"; // membaut judul

echo $peserta_kursus[0];
echo "<br>"; // membuat baris baru dengan HTML

echo $peserta_kursus[1];
echo "<br>"; // membuat baris baru dengan HTML

echo $peserta_kursus[2];
echo "<br>"; // membuat baris baru dengan HTML

echo $peserta_kursus[3];
echo "<br>"; // membuat baris baru dengan HTML

?>
