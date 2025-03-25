<?php

/*
 Variabili : Contenitore di informazioni
*/

$nomeDellaVariabile = "Valore"; // camel case
$nome_della_variabile = "Valore"; // snake case

/*
Regole per la creazione di variabili
- Non possono inizare con un numero ($1a;)
- Non possono contenere spazi ($nome della variabile;)
- Non possono contenere caratteri speciali ($nome!della$variabile;)
*/


/*
Variabili e costanti
- La variabile può cambiare valore
- La costante non può cambiare valore
*/

/* Funzioni utili
 - var_dump() : Restituisce il tipo e il valore della variabile
 - print(): Restituisce il valore della variabile
 - echo(): Restituisce il valore della variabile
 - print_r(): Restituisce il valore della variabile
*/

$var = 10;
print($var);
print("\n"); // stampa una riga vuota

CONST COST = 10;
print(COST);
print("\n"); // stampa una riga vuota

var_dump(COST);

/*
Tipi di dati (primitivi)
*/
$x = 10; // Integer
$y = 3.14; // Float
$z = "Ciao"; // String
$w = true; // Boolean

var_dump($x);
var_dump($y);
var_dump($z);
var_dump($w);

//speciale
$speciale = null;
var_dump($speciale);

/* User defined 
- Array
- Object
*/

// Array
$frutta = ["Mela", "Banana", "Pera"];
var_dump($frutta);
// Array in php zero-based
// zero-based vuol dire che l'indice parte da 0

print($frutta[0]);
// 0 -> Mela
// 1 -> Banana
// 2 -> Pera

print("\n"); // Fa andare a capo

// Gli array possono contenere elementi di diversi tipi
$array = ["Ciao",10,true];
var_dump($array);



