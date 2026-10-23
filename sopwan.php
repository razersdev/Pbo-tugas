<?php
class produk{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stock) {
        
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }

    public function pajak() {
         return self::PAJAK * 100; 
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

// object
$produk = new produk("A001", "LAPTOP", 1000000, 5);

echo "Produk: ". $produk->nama . "<br>";
echo "Produk: ". $produk->harga . "<br>";
echo "Produk: ". $produk->stock . "<br>";
echo "Produk: ". $produk->pajak() . "%";
echo "<br>";
echo "<br>";
echo "Total harga setelah pajak Rp." . $produk->total();

?>
