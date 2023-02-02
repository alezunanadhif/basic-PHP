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
    throw new ParseError(sprintf('Undefined property
    %s in class %s', $property, __CLASS__));
    }
}
    public function getNama() {
        return $this->name;
    }
}

$magic = new MagicMethod();
$magic->name = 'Muhammad Surya Iksanudin';
echo $magic->getNama();