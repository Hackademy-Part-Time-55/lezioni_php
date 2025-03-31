<?php
function incrementa($x){
    return ++$x;
}


$y = 5;
var_dump(incrementa($y));

// Ho incrementato la variabile $y a 6?
// La risposta è no

var_dump($y);

// $y è rimasto a 5 questo perché abbiamo fatto un passsaggio per valore
// quindi la funzione ha incrementato una copia di $y

// Se invece voglio modificare la variabile originale deve fare un passaggio per riferimento
// Dobbiamo modificare la definizione della funzione

// la & commerciale ci permette di passare l'indirizzo di memoria che contiene la variabile
// e quindi potremo usare la variabile originale e non una sua copia
function incrementa2(&$x){
    $x++;
}

incrementa2($y);
var_dump($y);
