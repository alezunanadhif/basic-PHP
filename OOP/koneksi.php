<?php

class konek {

    public function login($userName, $password, $IP = "192.178.44.1") {
        echo "you have login with username $userName";
    }

}

$login = new konek;
$login->login("ALZNDF", "GWGANTENGBETT", "192.178.44,17");