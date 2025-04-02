<?php

/*
? In questo esempio abbiamo che animal e person hanno un metodo in comune identico
Se abbiamo delle funzioni o metodi in comune tra classi che NON hanno alcuna relazione
In php possiamo creare un TRAIT

SINTASSI:

trait NomeDelComportamento{

    public function funzione1(){

    }
    .....
}

? I trait sono collezioni di metodi o funzioni che possono essere integrati in classi già esistenti

? Ma come faccio a dire ad una classe che deve usare un determinato trait?
Con la parola chiave use

use NomeDelTrait, NomeDelTrait2;

*/

trait Respira{
    public function respira(){
        echo " Sto respirando....\n";
    }
}


class Animal {
    use Respira;

    public $age;
    public $name;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

}

class Person {
    use Respira;
    
    public $name;
    public $surname;

    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname = $surname;
    }


}


$animale = new Animal(10,"Lion");
$persona = new Person("Marco","Rossi");

$zoo = [
    $animale,
    $persona
];

foreach($zoo as $element){
    $element->respira();
}