<?php
require_once 'orang.php';


$orang = new orang('Mzaky','bandung','XI-RPL 2','Mahasiswa');
$orang1 = new orang('Sofy','bandung','XI-RPL 2','Pelajar');
$orang2 = new orang('Taufik','bandung','XI-RPL 2','Pelajar');
$orang3 = new orang('Firas','bandung','XI-RPL 2','Pelajar');
$orang4 = new orang('Bagus','bandung','XI-RPL 2','Jomblo');

echo "1. ";
echo "nama:     ".$orang->get_nama();
echo"</br>";
echo "tempat lahir:    ".$orang->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang->get_kelas();
echo"</br>";
echo "status:    ".$orang->get_status();
echo"</br>";
echo "<br>";

echo "2. ";
echo "nama:     ".$orang1->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang1->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang1->get_kelas();
echo"</br>";
echo "status:    ".$orang1->get_status();
echo"</br>";
echo "<br>";

echo "3. ";
echo "nama:     ".$orang2->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang2->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang2->get_kelas();
echo"</br>";
echo "status:    ".$orang2->get_status();
echo"</br>";
echo "<br>";

echo "4. ";
echo "nama:     ".$orang3->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang3->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang3->get_kelas();
echo"</br>";
echo "status:    ".$orang3->get_status();
echo"</br>";
echo "<br>";

echo "5. ";
echo "nama:     ".$orang4->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang4->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang4->get_kelas();
echo"</br>";
echo "status:    ".$orang4->get_status();
echo"</br>";
echo "<br>";


?>

