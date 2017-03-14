<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "alamat : "; echo $obj->alamat;
echo "<br>";
echo "No_hp : "; echo $obj->no_hp;
echo "<br>";
echo "mata kuliah pertama: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "mata kuliah kedua: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "mata kuliah ketiga: ";echo $obj->mata_kuliah[2];
?>