<?php


require __DIR__ . '/../vendor/autoload.php';

$bonjour = new \App\Wcs\Hello();
$bonjour2 = new \HelloWorld\SayHello();

echo $bonjour->Hello() . '<br>';
echo $bonjour2->world();



