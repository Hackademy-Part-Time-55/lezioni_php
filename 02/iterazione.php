<?php

/* 
FOR
for($contatore=0;condizione;comportamento del contatore){
.....
}

*/

// Stampare i primi numeri da 1 a 10
for($i=1;$i<=10;$i++){
    echo "$i \n";
}
/*
La variabile contatore($i) è fondamentale perché ci aiuta a capire quando finire il ciclo
Decidiamo che ad ogni giro del ciclo la $i incrementa di 1 questo ci permette di arrivare 
ad un certo punto dove la $i sarà maggiore di 10 e quindi la condizione diventa falsa

Nel momento in cui la condizione diventa false usciamo dal ciclo

Quindi la i seguirà questi cambiamenti
1->2->3......->11

Perché la facciamo partire da 1? 
Perché possiamo sfruttare questo conteggio per stamparlo a schermo e risolvere la traccia dell'esercizio
*/

// Dobbiamo fare la somma dei primi 100 numeri
//contatore può avere qualsiasi comportamento però si utilizza ++ --
$somma=0;
for($i=0;$i<=100;$i++){
    // somma
    // $somma = $somma + $i
    $somma += $i;
}

echo "$somma \n";

/*
+= Somma
-= Sottrae
*= Moltiplica
/= Divisione
*/


/*

WHILE 

while(condizione){

}


*/

/*

for($i=1;$i<=10;$i++){
    echo "$i \n";
}

*/

$i=1;
while($i<=10){
    echo "$i \n";
    $i++;
}

/*

    $somma=0;
    for($i=0;$i<=100;$i++){
        // somma
        // $somma = $somma + $i
        $somma += $i;
    }

    echo "$somma \n";


*/

$i=0;
$somma=0;
while($i<=100){
    $somma += $i;
    $i++;
}

echo "$somma \n";

/*
do while

do{

}while(condizioen)

*/

/*

$i=0;
$somma=0;
while($i<=100){
    $somma += $i;
    $i++;
}

*/

$i=0;
$somma=0;
do{
    $somma += $i;
    $i++;
}while($i<=100);
echo "$somma \n";

// Con il do while ci sarà sempre e comunque almeno un giro del ciclo

/*
FOREACH
Questo ciclo però va utilizzato per gli array

foreach($array as $elementoDellArray){

}

*/

$numeri = [10,23,44,11,6];
foreach($numeri as $numero){
    echo "$numero \n";
}

// Adesso voglio sommare tutti gli elementi dell'array
$somma = 0;
foreach($numeri as $numero){
    $somma += $numero;
}
echo "$somma \n";


$persone = [
    ['Nome' => 'Mario', 'Cognome'=>'Rossi','Anni'=>20 , 'Linguaggi'=>['Html','Php']],
    ['Nome' => 'Luca', 'Cognome'=>'Verdi','Anni'=>10 , 'Linguaggi'=>['Java','Php']],
    ['Nome' => 'Marco', 'Cognome'=>'Bianchi','Anni'=>30 , 'Linguaggi'=>['Javascript','Python']],
];

foreach ($persone as $persona) {
    print("{$persona['Cognome']}\n");
    
    // Controlliamo l'età e stampiamo il messaggio corretto
    if($persona['Anni']>=18){
        print("Maggiorenne\n");
    }else{
        print("Minorenne\n");
    }

    // Stampiamo i linguaggi conosciuti

    foreach($persona['Linguaggi'] as $linguaggio){
        print("$linguaggio - ");
    }

    print("\n-----");
}