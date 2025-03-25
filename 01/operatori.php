<?php

// Operatore and && ( entrambi gli elementi devono essere true per restituire true)
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false && true); // false
var_dump(false && false); // false

// Operatore or || ( basto che uno dei due elementi sia true per restituire true )
var_dump(true || true); // true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(false || false); // false

// Operatore not ! ( inverte il valore dell'elemento )
var_dump(!true); // false
var_dump(!false); // true

/* Operatori di confronto
 - > maggiore
 - < minore
 - >= maggiore uguale
 - <= minore uguale
 - == uguale ( restituisce true se i valori sono uguali ) N.b non controlla il tipo
 - === forte uguglianza ( restituisce true se i valori e i tipi sono uguali )
 - != diverso ( restituisce true se i valori sono diversi ) N.b non controlla il tipo
 - !== forte disuglianza ( restituisce true se i valori e i tipi sono diversi )
 - spaceship <=> ( restituisce 0 se i valori sono uguali, -1 se il primo valore è minore del secondo, 1 se il primo valore è maggiore del secondo )
*/

$x = 4;
$y = 5;
$z = "4";

var_dump($x == $y); // false

var_dump($x == $z); // true

var_dump($x === $z); // false

var_dump($y != $z); // true

var_dump($x != $z); // false

var_dump($x != $y); // true

var_dump($x !== $y); // true

var_dump($x !== $z); // true

var_dump($y !== $z); // true

var_dump($x <=> $y); // -1

// Operatore di incremento e decremento
// $x++ -> incrementa di 1 il valore di x
// $x-- -> decrementa di 1 il valore di x

// Null coalescing operator ??
// Restituisce il valore della variabile se è diverso da null altrimenti restituisce il valore dopo ??

$nome = "Mario";
var_dump($nome); // Mario

$nome = null;
var_dump($nome ?? "Nome non presente"); // Nome non presente
