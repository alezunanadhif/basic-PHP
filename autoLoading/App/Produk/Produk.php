<?php

abstract class Produk {
    protected $harga,
            $judul,
            $penerbit,
            $penulis;

            public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penerbit", $harga = 0)
            {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }


            public function getLabel() 
            {
                return "$this->penulis, $this->penerbit ";
            }

            

            abstract public function getInfo();
            

}
