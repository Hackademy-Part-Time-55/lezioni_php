<?php
// Esercizio della somma totale
// 3,4,2,7

function sommaTotale($x,$y,$z,$w){

    return $x+$y+$z+$w;

}

// echo sommaTotale(3,4,2,7);


// Ha un grosso problema -> Sono vincolato ad avere per forza 4 parametri
// Potremmo crere dei default = 0 per ogni variabile --> non va bene
// Perché così siamo limitati ad avere massimo 4 numeri

/* Per risolvere questo problema abbiamo lo splat operator
funzione(...$numeri) -> che possiamo passare una quantità indefinita di numeri
*/

function sommaTotale2(...$numeri){
    $totale = 0;
    foreach($numeri as $numero){
        $totale+=$numero; 
    }
    return $totale;
}

echo sommaTotale2(3,2,1,7,5,2,1,4,44,11,33);