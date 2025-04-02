<?php

/*
I livelli di visibilità
La visibilità definisce chi o cosa può accedere ad un determinato metodo o attributo

L'access modifier permette di definire il livello di visibilità

Abbiamo 3 Access modifiers
- public -> pubblico
- protected -> protetto
- private -> privato

public ->  visibile ovunque , e chiunque lo conosce e ci può accedere
protected -> visibile solo all'interno della classe stessa e delle classi figlie
private -> visibile solamente all'interno della classe stessa

*/

class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name,$age,$color){
        $this->name=$name;
        $this->age=$age;
        $this->color=$color;
    }

    protected function getColor(){
        echo "{$this->color}\n";
    }

    protected function setColor($color){
        $this->color = $color;
    }
}

class Lion extends Animal{

    //Getters
    public function getAge(){
        echo "{$this->age}\n";
    }

    public function getColor(){
        echo parent::getColor(); // essento la funzione prottetta in Animal possiamo accedervi da Lion (classe figlia)
    }

    // Setters
    public function setAge($age){
        $this->age = $age;
    }

    public function setColor($color){
        parent::setColor($color);
    }

}


$animal = new Animal('Leone',5,"Marrone");
$lion = new Lion('Leone',5,"Marrone");

//Essendo name pubblico posso accervi
// echo "{$animal->name}\n";
// Essendo Age protetta -> Cannot access protected property Animal::$age
// echo "{$animal->age}\n";
// Essendo color privata -> Cannot access private property Animal::$color
// echo "{$animal->color}\n";

// Essendo Age protetta -> posso accedervi uitilizzando il getter
$lion->getAge();


$lion->getColor();

//$lion->age=11; //Cannot access protected property Lion::$age
$lion->setAge(11);
$lion->getAge();

$lion->setColor("Orange");
$lion->getColor();
