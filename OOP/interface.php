<?php

// interface adalah abstract

// interface hewan 
// {
//     public function makan();
//     public function setWarna($warna);
// }


// abstract class buah 
// {
//     private $warna;

//     abstract public function p();

// }

// class apel extends buah implements hewan
// {
//     private $warna; 

//     public function makan()
//     {
//     }

//     public function setWarna($warna) 
//     {
//         $this->warna = $warna;
//     }
    
// }

// class jeruk extends buah implements hewan
// {
//     public function makan()
//     {
//     }

//     public function setWarna($warna) 
//     {
//     }
// }

interface hewan {

    public function makan();
    public function setWarna($warna);

}

interface benda {

    public function getBenda();

}

abstract class buah {

    private $warna;
    abstract public function p();
    
}


class apel extends buah implements hewan, benda{

    private $warna;

    public function getBenda() {
    }

    public function p() {
    } 

    public function makan() {
    }

    public function setWarna($warna) {

        $this->warna = $warna;

    }
}

class jeruk extends buah implements hewan {
    public $warna;

    public function p(){
    }

    public function makan(){
    }

    public function setWarna($warna){
    }

}