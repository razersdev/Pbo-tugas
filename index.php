<?php
require('./sopwan.php');

use Pbo\Marketplace\produk;

$produk = new produk("A001", "LAPTOP", 1000000, 5);

echo "Produk: ". $produk->nama . "<br>";
echo "Produk: ". $produk->harga . "<br>";
echo "Produk: ". $produk->stock . "<br>";
echo "Produk: ". $produk->pajak() . "%";
echo "<br>";
echo "<br>";
echo "Total harga setelah pajak Rp." . $produk->total();

