<?php

require __DIR__ . '/../src/Hello.php';

use App\Hello as Coucou;

$hi = new Coucou(); 

var_dump($hi->talk());