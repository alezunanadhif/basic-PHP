<?php

require "App/init.php";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

// $buku1 = new komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 30000 , 100);
// echo $buku1->getInfo();
// echo PHP_EOL;
// $game1 = new game("Mobile Legends", "Orang", "Moontoon", 10, 45);
// echo $game1->getInfoProduk();

// new App\Produk\User();
// echo PHP_EOL;
// new APP\Service\User();

new ProdukUser;
echo PHP_EOL;
new ServiceUser;

?>