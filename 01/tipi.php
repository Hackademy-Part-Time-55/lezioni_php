<?php

//$x=13.4;
$x=13.99;
print($x."\n");

// type casting
// Il type casting è la conversione di un tipo di dato in un altro tipo di dato

$y = (int) $x; // convertimi il valore di $x in un intero e salvalo dentro $y
var_dump($y); 



$var = "Ciao";
$z = (int) $var; // converto una stringa in intero
var_dump($z);

$var = "13";
$z = (int) $var; // converto una stringa in intero
var_dump($z);

$x = 1;
$y = (bool) $x; // converto un intero in boolean
var_dump($y); // TRUE

$x = 0;
$y = (bool) $x; // converto un intero in boolean
var_dump($y); // FALSE

$x = 113;
$y = (bool) $x; // converto un intero in boolean
var_dump($y);// TRUE

$x = 0.0;
$y = (bool) $x; // converto un float in boolean
var_dump($y); // FALSE


$x = 0.5;
$y = (bool) $x; // converto un float in boolean
var_dump($y); // TRUE

$x = "Ciao";
$y = (bool) $x; // converto una stringa in boolean
var_dump($y); // TRUE

$x = "";
$y = (bool) $x; // converto una stringa in boolean
var_dump($y); // FALSE