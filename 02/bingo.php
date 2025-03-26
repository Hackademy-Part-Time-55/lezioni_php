<?php
//Creare un programma dove se esce 23 stampiamo Bingo! oppure se esce 60 stampiamo Tombola altrimenti stampiamo hai perso!
$estrazione = readline("Inserisci il numero vincente: ");

/*
if($estrazione==23){
    echo "Bingo!";
}elseif($estrazione == 60 ){
    echo "Tombola!";
}else{
    echo "Hai perso!";
}
*/

/*
switch($variabileDaControllare){
    caso 1:
    ...
    break;

    caso 2:
    ....
    break;

    default:
        ......
}

*/

switch($estrazione){
    case 23:
        echo "Bingo";
        break;
    
    case 60;
        echo "Tombola";
        break;
    
    default:
        echo "Hai perso";
        break;
}

