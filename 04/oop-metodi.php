<?php
/*

Ad ogni classe oltre che le proprietà possiamo definire anche i metodi
I metodi sono delle funzioni che simulano un comportamento comune di quella classe di oggetti

Per creare un metodo ci basta andare all'interno della classe e creare una nuova funzione

*/

class Persona{
    public $nome;
    public $cognome;
    public $eta;

    public function __construct($name,$surname,$age){

        // Associare i parametri della funzione ai vari attributi
        $this->nome= $name;
        $this->cognome = $surname;
        $this->eta = $age;
        
    }

    // Il metodo saluta che simula il comportamento della persona 
    public function saluta(){

        echo "Ciao piacere di conoscerti\n";
        // Adesso dobbiamo fare in modo che dopo la prima stampa
        // deve stampare il suo nome
        echo "Ciao piacere sono $this->nome\n";
    }
}

// 1 - Creiamo una nuova persona (Marco Verdi 37)
$persona = new Persona("Marco","Verdi",37);

//Dopo aver creato la persona ho accesso ai suoi attributi e ai suoi metodi
// 2 - Voglio utilizzare il suo metodo saluta
$persona->saluta();


$persona2 = new Persona("Mario","Rossi",27);
$persona2->saluta();