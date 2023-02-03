<?php


class MagicMethod
{
    private $name, $age;
    public function __set($property, $value)
{
    if ('name' === $property) {
        $this->name = $value;
        echo  "Selamat Anda Berhasil Input $property dengan Data : $this->name" . PHP_EOL;
    } elseif ('age' === $property) {
        $this->age = $value;
        echo "Selamat Anda Berhasil Input $property dengan Data : $this->age" . PHP_EOL;
    } else {
    throw new ParseError(sprintf('Undefined property %s in class %s', $property, __CLASS__));
    }
}
    public function getName() {
        return $this->name . PHP_EOL;
    }

    public function getAge() {
        return $this->age . PHP_EOL;
    }

    public function __get($property)
    {
        if($property !== null) {
            return $this->$property . PHP_EOL;
        } else {
            throw new ParseError(sprintf('Undefined property %s in class %s', $property, __CLASS__));
        }
    }
}

// $magic = new MagicMethod();
// $magic->name = 'Muhammad Surya Iksanudin';
// $magic->age = 17;
// echo $magic->name;
// echo $magic->age;
// echo $magic->getName();
// echo $magic->getAge();
// $magic->ppp = "Ppp";

// try {
//     $magic->ppp;
// } catch (ParseError $p) {
//     echo $p->getMessage();
// } 

// echo $magic->getName();

class issets
{
private $name;
public function __isset($property)
{
if ('name' === $property) {
return true;
}
}
}
$magic = new issets();
// var_dump(isset($magic->name));

class unsets {

    private $user = [
        'nama' => 'nadhif',
        'alamat' => 'kisaran',
        'ig' => 'alezunadhif_'
    ];

    public function __unset($property)
    {
        if (isset($this->user[$property])) {
            unset($this->user[$property]);
        }
    }
}

$ndf = new unsets();
var_dump($ndf);
// unset($ndf->nama);
var_dump($ndf);

// SLEEP MASIH BELUM NGERTI
class sleeps
{
    private $data = [
        'name' => 'Muhamad Surya Iksanudin',
        'address' => 'In your hearth',
    ];

    public function __sleep()
    {
        return ['data'];
    }
}

// $magic = new sleeps();
// var_dump(serialize($magic));

class Bank {

    private function database() {

        echo "selamat anda berhasil masuk " . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        
        if ($name === 'database') {
            return $this->database();
        } else {
            throw new ParseError(sprintf('$name tidak di temukan'));
        }
    }
}

$nasabah1 = new Bank;
$nasabah1->database();

class strStr {

    public function cetakText() {
        return "Hell Ngab";
    }
}

$cetak = new strStr;
echo $cetak->cetakText();