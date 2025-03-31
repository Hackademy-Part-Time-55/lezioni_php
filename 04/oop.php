<?php
/*
// Trova un modo per memorizzare nome,cognome ed età dei dipendenti
$dipendenti = [
    [   
        'nome'=>'Marco',
        'cognome'=>'Rossi',
        'eta'=>23
    ], // dipendente 1

    [
        'nome'=>'Luca',
        'cognome'=>'Bianchi',
        'eta'=>30
    ], // dipendente 2

    [
        'first_name'=>'Mario',
        'cognome'=>'Verdi',
        'eta'=>26
    ], // dipendente 3
];

foreach($dipendenti as $dipendente){
    echo "{$dipendente['nome']}\n";
}

// var_dump($dipendenti);

// Con questo approccio se per sbaglio memorizzo un dato con una chiave diversa il programma non funzionerà
*/


/*
1 - Analizzare il problema
2 - Suddividere il problema
3 - Individuare le classi -> nel nostro caso la classe Persona
4 - Definire la struttra delle classi ( definiamo quali sono le proprietà in comune )-> nel nostro caso nome,cognome ed età 

La classe non è altro che la struttura generale che usiamo per memorizzare gruppi di dati
Gli oggetti non sono altro che esempi che seguono quella struttura imposta

Nel nostro caso avremo che la classa sarà "Persona" e i dipendenti saranno esempi di "Persona"
*/

/*

? Come si definisce una classe?
La classe si denisce usando questa sintassi

class nomeIDENTIFICATIVOeUNICOdellaClasse {
}

? Cosa ci può andare nelle classi?
Nelle classi possiamo memorizzare :
    - Proprietà (Attributi)
    - Metodi

? Cosa sono le proprietà?
Le proprietà non sono altro che le caratteristiche in comune per quel gruppo di oggetti
Nel nostro caso nome , cognome ed età

? Come si aggiungi le proprietà alla nostra classe?

class nomeDellaClasse{
    public $nome;
    public $cognome;
    public $eta;
}

Scrivendo così abbiamo definito che la classe deve avere le proprietà come specificare
*/

// class Persona{
//     public $nome;
//     public $cognome;
//     public $eta;
// }

//! Adesso creiamo il primo oggetto di classe persona
// Per creare un oggetto di classe persona usiamo la parola chiave new seguita dal nome della classe
// $oggetto = new Persona(); 

// var_dump($oggetto); // la variabile oggetto sarà di tipo Persona

// La classe non è altro che uno "stampino" che ci da un modello/schema da seguire per memorizzare delle informazioni seguendo le stesse regole

/* Dobbiamo far capire a Php come assegnare i dati che noi passiamo
? Per farlo capire dobbiamo creare la funzione detta "costruttore" 
Il costruttore è la funzione che avrà il compito di ricevere le informazioni e creare un esempio della classe desiderata

? Come si crea un costruttore?
Per creare un costruttore dobbiamo definire un metodo speciale della classe

? Cosa sono i metodi?
I metodi sono le funzioni di quella classe -> cioè per ogni classe posso creare delle funzioni che rispecchiano un comportamento
di quel gruppo di elementi

? function __construct() 
? Perché utilizziamo __ -> significano che quel metodo sarà il primo ad essere eseguito 

class nomeDellaClasse{
    public $attributo1;
    public $attributo2;

    public __construct($variabile1,$variabile2){
        ! Assegnazione dei dati passati all'interno degli attributi
    }

}

*/

class Persona{
    public $nome;
    public $cognome;
    public $eta;
    public $attivo=true; // definisco un nuovo attributo che sarà sempre true

    /* Il costruttore ci permette di inidirzzare i dati verso gli attributi corretti
        Non è altro che una funzione:
        - Entrata -> il costruttore può ricevere in input qualsiasi parametro esattamente come le funzioni
        - Comportamento -> il suo scopo è riempire correttamente gli attributi delle classi
        - Uscita -> il costruttore NON ha un valore d'uscita
    */
    public function __construct($name,$surname,$age){

        // Associare i parametri della funzione ai vari attributi
        $this->nome=$name;
        $this->cognome = $surname;
        $this->eta = $age;

        // il $this è fondamentale perché permette a php di capire dove deve salvare il dato
        // usando il this php sa che deve memorizzare quel dato nell'oggetto appena creato
        var_dump($this);
        
    }
}

// Esattamente come nelle funzioni l'associazione tra dato e parametro avviene per posizione 
$dipendente1 = new Persona("Marco","Rossi",23);
$dipendente2 = new Persona("Luca","Bianchi",30);
$dipendente3 = new Persona("Mario","Verdi",26);

/*
Essendo il costruttore una funzione valgono tutte le cose viste la socrsa lezione
- Type hinting
- Default
- L'assegnazione posizonale tra parametro formale e reale
*/

/*
Con le classi per accedere ai loro attributi dobbiamo usare una notazione diversa

Con gli array $dipendente1['nome'];
Invece per le classi utilizzeremo " -> " 
e quindi per accedere all'attributo nome utilizzeremo $dipendente->nome;

*/

echo $dipendente1->nome;