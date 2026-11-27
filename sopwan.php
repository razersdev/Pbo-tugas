<?php

namespace Pbo\Marketplace;

trait produk{
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stock;

    //constant
    public const PAJAK = 0.11;

    public function __construct() {
        
        
    }
    //setter
    public function setKode($kode) {
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

    public function setHarga($harga) {

        if($harga < 0) {
            echo "Harga tidak boleh kurang dari 0";
        }
        $this->harga = $harga;
        return $this;
    }

    public function setStock($stock) {

        if($stock < 0) {
            echo "Stock tidak boleh kurang dari 0";
        }
        $this->stock = $stock;
        return $this;
    }

    //getter
    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga; 
    }

    public function getStock() {
        return $this->stock;
    }

    public function pajak() {
         return self::PAJAK * 100; 
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}


