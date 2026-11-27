<?php
require('./jasa.php');

use Pbo\Marketplace\jasa;

$produk = new jasa();

$produk->setKode("P001")
        ->setNama("Laptop")
        ->setHarga(1000000)
        ->setStock(10);

echo "Produk: ". $produk->getNama() . "<br>";
echo "Produk: ". $produk->getHarga() . "<br>";
echo "Produk: ". $produk->getStock() . "<br>";
echo "Produk: ". $produk->pajak() . "%";
echo "<br>";
echo "<br>";
echo "Total harga setelah pajak Rp." . $produk->total();
echo "<br/>";
echo "Metode pembayaran: " . $produk->payment('qris');
