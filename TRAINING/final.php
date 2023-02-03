<?php

class Hewani {

    protected $kaki = 4;

    final public function getKaki() {
        return $this->kaki;
    }
}

class Domba extends Hewani {

}

$domba = new Domba;
echo $domba->getKaki();