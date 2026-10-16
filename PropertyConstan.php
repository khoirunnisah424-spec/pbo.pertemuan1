<?php

class produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    public const PAJAK = 0.11;

    public function pajak () {
        return self::PAJAK * 100; //11%
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object 
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'labtop';
$produk->harga = 10000000;
$produk->stok = 5;



//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->pajak();
echo "<br/>";
echo "total harga setelah pajak: Rp.". $produk->total();

