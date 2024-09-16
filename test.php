<?php
require __DIR__ . '/vendor/autoload.php';

use Kamakshyaprasadkar\MyPrivatePackage\MyPackage;

$package = new MyPackage();
echo $package->sayHello();
