<?php

class produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    public const PAJAK = 0.11;
}

//object 
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'labtop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11%
$jumlahPajak = $produk->harga *Produk::PAJAK; //tambahan 1,1Juta

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $pajak;
echo "br/>";
echo "total harga setelah pajak: Rp.". $total;

