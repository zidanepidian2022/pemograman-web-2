<?php 
// ini sebuah komentar
/* ini juga sebuah komentar*/
# ini juga sama sebuah komentar



// echo "hello world <br>";
// print_r("muhammad zidane pidian <br>");
// var_dump("STT Nurul Fikri");



//membuat variabel  user
$nama = "zidane";
$umur = 19;
$berat = 75.3;
$mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur <br>";
// echo "Berat saya adalah $berat";


//membuat variabel  sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File ' .$_SERVER["PHP_SELF"];

//membuat variabel  konstanta
define('PHI', 3.14);
$jari =  10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI *  $jari;

// echo "luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "keliling lingkaran dengan $luas = $keliling";

// membuat array
$programs = ["PHP", "JavaScript", "HTML", "CSS"];
// echo $programs[0];
// echo "jumlah data variabel program sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}

?>