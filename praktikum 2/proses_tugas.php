<?php
// Mengambil data Input
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = 0;


if($produk === 'tv'){
    $harga = "4200000";
} else if ($produk === 'kulkas'){
    $harga = "3100000";
} else if ($produk === 'mesin cuci'){
    $harga = "3800000";
} else {
    echo 'produk tidak valid';
    
}

$total_harga = ($harga * $jumlah);

    
?>