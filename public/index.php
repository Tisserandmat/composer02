<?php

require '../vendor/autoload.php';

use HelloWorld\SayHello;

$mister = new SayHello();
echo $mister->world();

?>