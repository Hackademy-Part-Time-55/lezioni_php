<?php

/*
Tutto quello che fa parte di un blocco di codice è racchiuso tra parentesi graffe {}.
In questo caso, la variabile $x è dichiarata all'interno del blocco di codice, quindi non è visibile all'esterno.
{
    $x = 1;
    print $x;
    $x = 2;
}
*/

/*
if(condizione){
    // codice da eseguire se la condizione è vera
}
*/

if(false){
    echo "La condizione è vera";
}else{
    echo "La condizione è falsa";
}

echo "\n";

$x=2;

// la y viene dichiarata nel blocco e quindi diventa visibile solo se il blococ viene eseguito
if($x==1){
    $y = $x+2;
}
//echo $y; 
//echo "\n";

$persona = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "anni" => 30
];

if($persona['anni'] >= 18){
    // codice da eseguire se la condizione è vera
    print("Maggiorenne \n");
}else{
    // codice da eseguire se la condizione è falsa
    print("Minorenne \n");
}

// Nella variabile $voto è memorizzato il voto di un esame che va da 0 a 30.
// Se il voto è maggiore o uguale a 18 stampo promosso , se invece è tra 14 e 18 stampo orale, altrimenti stampo bocciato

$voto = 100;


/*
Soluzione non buona per due motivi
- Non abbiamo un controllo sui voti inseriti
- Efficienza

    if($voto >= 18) {
        print("Promosso \n");
    }

    // Se il voto è maggiore uguale di 14 e CONTEMPORANEAMENTE minore di 18
    if($voto >= 14 && $voto <18){
        print("Orale \n");
    }

    if($voto < 14){
        print("Bocciato \n");
    }
*/

if($voto >= 18 && $voto <=30){
    print("Promosso \n");
}elseif($voto >= 14 && $voto <18){
    print("Orale \n");
}elseif($voto < 14){
    print("Bocciato \n");
}else{
    print("Voto non valido \n");
}