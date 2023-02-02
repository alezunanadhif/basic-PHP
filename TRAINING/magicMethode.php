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

$magic = new MagicMethod();
$magic->name = 'Muhammad Surya Iksanudin';
$magic->age = 17;
echo $magic->name;
echo $magic->age;
echo $magic->getName();
echo $magic->getAge();
$magic->ppp = "Ppp";

try {
    $magic->ppp;
} catch (ParseError $p) {
    echo $p->getMessage();
} 

echo $magic->getName();