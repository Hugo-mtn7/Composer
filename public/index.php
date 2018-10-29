<?php

require_once '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$hellObject = new Hello();
echo $hellObject->talk();
echo "\n";

$hellObject2 = new SayHello();
echo $hellObject2->world();