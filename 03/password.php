<?php

/*
TRACCIA
- La password deve contenere almeno 8 caratteri
- la password deve contenere almeno una lettere maiuscola
- la password deve contenere almeno un numero
- la password deve contenere almeno un carattere speciale
*/


// 1 - minimo 8 caratteri (strlen($stringa)-> restituisce il numero di caratteri della stringa)
function checkLength($password){
    if(strlen($password)<8){
        return false;
    }else{
        return true;
    }    
}

/* 2- La password deve contenere almeno una lettera maiuscola

    bult-in function -> ctype_upper($x) --> questa funzione ci da true se il carattere esaminato è maiuscola altrimenti da false

    Dobbiamo controllare se almeno uno dei caratteri è maiuscolo
    - Un ciclo -> dobbiamo fare un ciclo sulla stringa -> ma la stringa non è altro che un array di caratteri -> foreach ( per php le stringhe non possono utilizzare il foreach)
    -> utilizziamo il for
*/


function checkUpper($password){
    for($i=0;$i<strlen($password);$i++){
        if(ctype_upper($password[$i])==true){
            return true;
        }
    }
    return false;
}


/* 3- La password deve contenere almeno un numero

bult-in function --> is_numeric($x) --> questa funzione ci da true se il carattere è un numero altrimenti da false

    Come abbiamo fatto prima ci facciamo un ciclo che controlla ogni singolo carattere della stringa

*/

function checkNumeric($password){

    for($i=0;$i<strlen($password);$i++){
        if(is_numeric($password[$i])==true){
            return true;
        }
    }

    return false;

}

/* 4 - deve contenere almeno un carattere speciale

In questo non abbiamo una buil-in function

Possiamo utilizzare la funzione in_array($x,$arr) --> ci da true se $x è contenuto nell'array
Quindi facciamo un ciclo che controlla se il carattere è contentuo nell'array di caratteri speciali

*/

function checkSpecial($password){
    $special_chars = ["!", "@", "#", "$"];
    for($i=0;$i<strlen($password);$i++){
        if(in_array($password[$i],$special_chars)){
            return true;
        }
    }
    return false;
}

// Chiediamo all'utente di inserire una password
$password = readline("Inserisci la nuova password : ");



if(checkLength($password)==false){
    echo "Password troppo corta\n";
}

if(checkUpper($password)==false){
    echo "La password deve contenere almeno una lettera maiuscola\n";
}

if(checkNumeric($password)==false){
    echo "La password deve contenere almeno un numero \n";
}

if(checkSpecial($password)==false){
    echo "La password deve contenere almeno un carattere speciale \n";
}

