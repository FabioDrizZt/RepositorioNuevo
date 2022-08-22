<?php

$a = 33;

$operacion = !(($a > 10) && ($a < 20));
var_dump($operacion);
$operacion = !(($a > 10) || !($a < 20));
var_dump($operacion);
