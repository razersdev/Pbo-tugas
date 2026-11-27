<?php

namespace Pbo\Marketplace;

require_once('./sopwan.php');

use Pbo\Marketplace\produk;

class jasa {

    use produk;

    public function payment ($tipe) {

        return match($tipe) {
            'virtual' => "Virtual Account",
            'qris' => "QRIS",
            default => "Metode pembayaran tidak tersedia",
        };
    
    }

}