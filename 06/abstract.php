<?php

// class Person {
//     public $name;
//     public $surname;

//     public function __construct($name,$surname){
//         $this->name = $name;
//         $this->surname = $surname;
//     }
// }

// class Student extends Person{
//     public $class;

//     public function __construct($name,$surname,$class){
//         parent::__construct($name,$surname);
//         $this->class = $class;
//     }
// }

// class Teacher extends Person {
//     public $subject;

//     public function __construct($name,$surname,$subject){
//         parent::__construct($name,$surname);
//         $this->subject=$subject;
//     }
// }


// Casi d'uso
// Funzione 1 : Inserimento studente
// $student = new Student("Mario","Rossi","2A");

// // Funzione 2 : Inserimento Docente
// $teacher = new Teacher("Luca","Verdi","Matematica");

/*
? Dati i casi d'uso abbiamo che le classi Student e Teacher DEVONO essere instanziabili
Una classe è istanziabile quando possiamo creare un oggetto della medesima classe

? Person è necessario che sia istanziabile?
Secondo i nostri casi d'uso -> no

Quindi abbiamo una classe che non deve essere istanziata , ma questo è un problema?
- Aumenta leggermente l'inneficenza
- Un rischio per la scrittura del codice -> qualcuno potrebbe utilizzare classi in maniera errata

? Soluzione?
Le classi ASTRATTE

Le classi astratte sono delle classi che NON possono essere istanziate
Sono soltanto uno schema da seguire e utilizzare nelle classi figlie
Questo approcio aumenta la ROBUSTEZZA del codice

*/

// abstract class Person {
//     public $name;
//     public $surname;

//     public function __construct($name,$surname){
//         $this->name = $name;
//         $this->surname = $surname;
//     }

//     public function saluta(){
//         echo "Ciao mi chiamo {$this->name} \n";
//     }
// }

// //$persona = new Person("Mario","Rossi"); //: Cannot instantiate abstract class Person

// class Student extends Person{
//     public $class;

//     public function __construct($name,$surname,$class){
//         parent::__construct($name,$surname);
//         $this->class = $class;
//     }

//     public function saluta(){
//         echo "Ciao mi chiamo {$this->name} e sono uno studente \n";
//     }
// }

// class Teacher extends Person {
//     public $subject;

//     public function __construct($name,$surname,$subject){
//         parent::__construct($name,$surname);
//         $this->subject=$subject;
//     }

//     public function saluta(){
//         echo "Ciao mi chiamo {$this->name} e sono uno docente \n";
//     }
// }

// $student = new Student("Mario","Rossi","2A");
// var_dump($student);

// $teacher = new Teacher("Luca","Verdi","Matematica");
// var_dump($teacher);

// $student->saluta();
// $teacher->saluta();


/*

? Dopo aver analizzato il nostro progetto sappiamo che tutte le classi figlie dovranno avere il metodo saluta
Ma ogni metodo avrà un stampa diversa

? Allora ha senso tenere il metodo saluta nella classe padre?
No -> Rimuoviamo una funzione che non verrà mai utilizzata
Si -> Perché ci garantiamo un metodo di riserva se qualcuno dimentica di creare il metodo corretto nella classe figlia

? abstract ai metodi
Cosa vuol dire che un metodo diventa abstract?
- Soltanto le classi abstract possono avere metodi abstract
- Vuol dire che imponiamo a tutte le classi figlie di IMPLEMENTARE la propria versione di quel metodo 
- Cioè stiamo creando una nuova regola -> quel metodo dovrà essere presente in tutte le classi figlie di PRIMO LIVELLO
- Le funzioni astratte non hanno corpo -> SONO VUOTE -> ci servono per imporre la regola

*/

trait Respira{
    public function respira(){
        echo " Sto respirando....\n";
    }
}

abstract class Person {
    use Respira;
    public $name;
    public $surname;

    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname = $surname;
    }

   abstract public function saluta();
}

class Student extends Person{
    public $class;

    public function __construct($name,$surname,$class){
        parent::__construct($name,$surname);
        $this->class = $class;
    }

    public function saluta(){
        echo "Ciao mi chiamo {$this->name} e sono uno studente \n";
    }

}

$student = new Student("Mario","Rossi","2A");

$student->respira();

// Anche i TRAITS della classe padre vengono eridetati dalla classe figlia

