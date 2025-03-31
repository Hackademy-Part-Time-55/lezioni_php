<?php

// 1 - Definizione
// Due funzioni non possono avere lo stesso nome
function presentati(){
    echo "Ciao sono Giovanni\n";
}

// 2 - Invocazione
presentati();

// In Php le funzioni non sono case sensitive
Presentati();


/*

Sintassi della funzione

function nomeDellaFunzione( parametri della funzione ){
.....blocco di codice
}

i parametri della funzione = sono le informazioni necessarie affinché la funzione possa funzionre

*/

//Funzione parametrica
function somma($x,$y){
    echo $x+$y;
}

//somma(4,5);


// Attenzione alla posizione
function dividi($x,$y){
    echo $x/$y;
}

// dividi(2,6); è diverso da dividi(6,2);

/* 
Le funzioni possono anche restituire dei valori
Questo lo si fa utilizzando la parola chiave return
*/

function somma2($x,$y){
    return $x+$y;
}

somma(4,5); // Stampa 9 perché è il suo comportamento
$risultato = somma2(4,5);
var_dump($risultato);

// Le funzioni possono restiture qualsiasi tipo di dato 

function sottrazione($x,$y){
    $risultato = $x - $y;
    return $risultato;
    echo $risultato;
}

sottrazione(4,2);
// il return interrompe l'esecuzione del codice tutto quello che si trova dopo il return verrà ignorato


/*

Type hinting

- Durante la definzione dei paramentri noi creiamo delle regole ( la funzione non può essere invocata se i parametri non vengono riempiti)

    somma(4,"ciao");
- Nei parametri ci posso mettere qualsiasi cosa --> potrebbe creare errori nella funzione
- Per risolvere questa problematica possiamo utilizzare il type hinting--> aggiungiamo una nuova regola

funzione nomeDellaFunzione(int $x,int $y) --> vuol dire che non solo la funzione per essere invocata deve ricevere i due parametri
ma i due parametri DEVONO ESSERE DI TIPO INTERO

*/

function somma3(int $x,int $y){
    return $x+$y;
}

// somma3("ciao",3);

/* Type hinting vale anche per il valore d'uscita delle funzioni 
function somma3(int $x,int $y) : int{
    return $x+$y;
}
*/


// Creato una funzione che stampa una stringa , e va a capo se passo true nel secondo parametro
// DEFAULT -> ai parametri possiamo assegnare dei valori default affinché la funzione possa essere utilizzata anche senza quei parametri
function stampa(string $stringa,bool $aCapo = false){
    if($aCapo==true){
        echo "$stringa\n";
    }else{
        echo "$stringa";
    }
}

stampa("Ciao sono Giovanni");
stampa("Ciao sono Giovanni",true);