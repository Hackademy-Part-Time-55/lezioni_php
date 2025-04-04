<?php

// Creare il software per gestire tutte le batmobili

// abstract class Veichle{

//     public $engine;

//     public function __construct($engine){
//         $this->engine = $engine;
//     }

//     abstract public function drive();

// }

// class Batmobile extends Veichle {

//     public function __construct($engine){
//         parent::__construct($engine);
//     }

//     public function drive(){
//         echo "Batmobile in movimento !\n";
//     }

// }


// $batmobile1 = new Batmobile("Motore V10");
// $batmobile1->drive();
// var_dump($batmobile1);

/*

? Adesso stiamo memorizzando la proprietà engine
? Ma non è riduttivo trattare un motore come se fosse solamente una stringa di testo

? Il motore ha un sacco di informazioni che ci sono utili come ad esempio i cavalli
Ha senso creare una classe per gestire l'engine

*/


// class Engine{

//     public $horsepower;

//     public function __construct($horsepower){
//         $this->horsepower=$horsepower;
//     }

// }

/*

? Veichle e Engine sono collegati in qualche modo?
Si, uno serve per far funzionare l'altro 
Cioè il Veicolo non può esistere senza Engine
L'engine può esistere senza Veichle? SI

? Questa è una relazione di ereditarietà? NO

In questo parliamo di OBJECT COMPOSITION
Ovvero il veicolo per funzionare ha bisogno dell'engine , quindi il veicolo è composto dal MOTORE

*/


// abstract class Veichle{

//     public $engine;
//     public $ruote;

//     public function __construct(Engine $engine,array $ruote){
//         $this->engine = $engine;
//         $this->ruote=$ruote;

//     }

//     abstract public function drive();

// }

// class Routa{

// }

// class Engine{

//     public $horsepower;

//     public function __construct(int $horsepower){
//         $this->horsepower=$horsepower;
//     }

//     public function startEngine(){
//         echo "Motore Acceso!!\n";
//     }

// }

// class Batmobile extends Veichle {

//     // Dependency Injection -> qui sto dicendo che il primo parametro quando chiamero new di batmobile DOVRà ESSERE UN OGGETTO DI CLASE ENGINE
//     // Definiamo che il secondo parametro DEVE essere un ARRAY
//     public function __construct(Engine $engine,array $ruote){
//         parent::__construct($engine,$ruote);
//     }

//     public function drive(){
//         $this->engine->startEngine();
//         echo "Batmobile in movimento !\n";
//     }

// }

// $ruota1=new Routa();
// $ruota2=new Routa();
// $ruota3=new Routa();
// $ruote=[$ruota1,$ruota2,$ruota3];
// $engine = new Engine(1500);
// $batmobile1 = new Batmobile($engine,$ruote);

// $batmobile1->drive();

// var_dump($batmobile1);
// Invertendo i parametri del costruttore creo una batmobile con gli oggetti negli attributi sbagliati
//$batmobile2 = new Batmobile($ruote,$engine);
//$batmobile2->drive();

//? Per risolverlo dobbiamo fare la DEPENDENCY INJECTION --> ovvero inserire nelle classi delle dipendenze

// Dobbiamo aggiungere le armi alla batmobile (Razzi , Laser)

abstract class Weapon {
    abstract public function shoot();
}

class Razzi extends Weapon{
    public function shoot(){
        echo "Razzi sparati\n";
    }
}

class Laser extends Weapon{
    public function shoot(){
        echo "Laser attivato\n";
    }
}

abstract class Veichle{

    public $engine;
    public $ruote;

    public function __construct(Engine $engine,array $ruote){
        $this->engine = $engine;
        $this->ruote=$ruote;

    }

    abstract public function drive();

}

class Ruota{
//classe per le ruote
}

class Engine{

    public $horsepower;

    public function __construct(int $horsepower){
        $this->horsepower=$horsepower;
    }

    public function startEngine(){
        echo "Motore Acceso!!\n";
    }

}

class Batmobile extends Veichle {

    public $weapon;

    public function __construct(Engine $engine,array $ruote,Weapon $weapon){
        parent::__construct($engine,$ruote);
        $this->weapon = $weapon;
    }

    public function drive(){
        $this->engine->startEngine();
        echo "Batmobile in movimento !\n";
    }

    public function attack(){
        $this->weapon->shoot();
    }

}

// La prima batmobile che 3 route e i razzi
$ruote = [new Ruota(),new Ruota(),new Ruota()];
$razzi = new Razzi();
$engine = new Engine(1500);

$batmobile1=new Batmobile($engine,$ruote,$razzi);

// La seconda batmobile ha 4 ruote e il laser
$ruote = [new Ruota(),new Ruota(),new Ruota(),new Ruota()];
$laser = new Laser();
$engine = new Engine(1500);

$batmobile1=new Batmobile($engine,$ruote,$laser);
// Ci da errore perché come arma sto passando un Laser ma nel costruttore ho inserito la regola che siano dei Razzi
// La dependency injection funziona anche per le classi padri , che se io metto come requisto che il terzo parametro
// sia di classe Weapon allora sia i Laser che i Razzi saranno accettati -> perché sono figli di Weapon 
