<?php
class Hoge
{
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$hoge = new Hoge('藤村', 54);

$hoge->name = "藤村";
$hoge->age = 54;

print($hoge->name);
# => "藤村"
print($hoge->age);
# => 54
?>
