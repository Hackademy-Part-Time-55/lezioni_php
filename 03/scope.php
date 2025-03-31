<?php

$str = "Ciao";

function stampa(){
    echo $str;
}

//stampa(); // Mi da errore perché $str è dichiarata in un blocco diverso rispetto alla funzione


function stampa2(){
    $str2="Ciao";
    echo $str2;
}

//echo $str2; // Anche qui da errore perché str2 è dichiara in un blocco diverso rispetto a quello in cui la stiamo utilizzando

//L'unico modo per avere informazioni globalmente visibili è usare le COSTANTI

const STR3 = "CIAO";

function stampa3(){
    echo STR3;
}

stampa3();

/* 
IMPORTANTE --> le variabili che creiamo non andranno MAI in contrasto con i parametri formali

$x = 3;

function stampa($x){
echo $x;
}

anche se il parametro e la variabile hanno lo stesso nome SONO DUE COSE DIVERSE

*/