<?php
// creiamo un modo per memorizzare tutti gli animali di uno zoo

// 1- Per salvare tutti gli animali ci serve un array
/* 2- Dobbiamo definire il concetto di Animale
    - Creiamo la classe Animale
    - Troviamo gli elementi in comune -> i nostri attributi
        - nome
        - tipo
    - Dichiariamo i nostri attributi
    - Creare il costruttore

    3 - Creiamo gli oggetti degli animali 
        - Pluto il cane
        - Mickey il topolino
        - J la zebra

    4 - Deve essere creata una funzione che faccia sapere che tipo di animale è
        - Dobbiamo creare un metodo chiamato presentati che stampa a schermo 
            "Ciao sono {nome} il {tipo dell'animale}"

    5 - Dobbiamo avere un conteggio degli animali
        ? Gli attributi possono essere dinamici o statici
            - Fin'ora abbiamo visto quelli dinamici cioè strettamente collegati con l'oggetto creato
            - Invece ci sono anche gli attributi detti statici ovvero informazioni non collegate agli oggetti ma alla classe in generale
            - Ad esempio il conteggio è collegato alla classe
        Per risolvere questa richiesta 
            - Creiamo un nuovo attributo STATICO chiamato conteggio e lo facciamo partire da zero
                -  public static $conteggio=0;
            - Creiamo un metodo che incrementa il conteggio
                - Dobbiamo fare in modo che venga utilizzata l'attributo statico
                -  self::$conteggio++; (Utilizzando il self possiamo accedere a attributi e metodi statici)
            - Facciamo in modo che ogni volta che viene creato un animale il conteggio aumenta

*/
class Animale{
    public $nome;
    public $tipo;
    public static $conteggio=0;

    public function __construct($name,$type){
        $this->nome = $name;
        $this->tipo = $type;

        //Incrementa il conteggio
        // Richiamo la funzione incrementa
        $this->incrementa();
    }

    public function presentati(){
        echo "Ciao sono $this->nome il $this->tipo\n";
    }

    public function incrementa(){
        self::$conteggio++;
    }

    public static function stampaConteggio(){
        echo self::$conteggio;
    }


}

$cane = new Animale("Pluto","cane");
$topolino = new Animale("Mickey","topolino");
$zebra = new Animale("J","zebra");

$zoo = [
    $cane,
    $topolino,
    $zebra,
];



foreach($zoo as $animale){
    $animale->presentati();
}

var_dump($zoo);

/* Come posso stampare un attributo statico

1 - echo Animale::$conteggio;

2 - creo nella classe un metodo statico che fa la stampa

*/

//echo Animale::$conteggio;

Animale::stampaConteggio();