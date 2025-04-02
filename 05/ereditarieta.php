<?php

//DRY -> Don't repeat yourself -> non dobbiamo ripetere il codice

/*

Scuola 
- Docente
- Studente

Hanno in comune il fatto di essere persone? -> Class Persona

Allo stesso tempo ma hanno anche delle differenze 




class Student{
    public $name;
    public $surname;
    public $class;
}

class Teacher{
    public $name;
    public $surname;
    public $subject;
    public $salary;

}


Qui abbiamo un problema -> che ripetiamo name e surname -> non rispettiamo il DRY

? Perché sia lo studente che il docente hanno nome e cognome?
Perché Oltre che essere stuedenti o docenti sono in primis persone

Abbiamo detto che gli stuendi o docenti sono anche persone quindi c'è una relazione 

? Ereditarietà
Cioè possiamo definire classi padre e classi figlie
    - Le classi figlie EREDITANO tutti gli attributi e i metodi delle classi Padre

Quindi nel nostro caso la classe Student/Teacher è figlia della classe Person

*/

// class Person{
//     public $name;
//     public $surname;
// }
// // Usiamo la parola chiave EXTENDS per far sapere che la classe Student è figlia di Person
// class Student extends Person{

//     public $class;
// }

// $student = new Student();
// var_dump($student);

//? è possibile estendere due classi -> extends Person,Classe2 NO
// Ma possiamo estendo Person ma Person estende classe 2 allora Student estendeno Person avrà anche le informazioni di Classe 2
/*

Classe 2 -> Person -> Student

*/

// class Person{
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
//         $this->name=$name;
//         $this->surname = $surname;
//         $this->class = $class;
//     }
// }

// class Teacher extends Person{

//     public $subject;
//     public $salary;

//     // Creiamo il costruttore
//     public function __construct($name,$surname,$subject,$salary){
//         $this->name = $name;
//         $this->surname = $surname;
//         $this->subject = $subject;
//         $this->salary = $salary;
//     }

// }

// $teacher = new Teacher("Mario","Rossi","Matematica",1000);

// var_dump($teacher);

//? Abbiamo un problema stiamo ripetendo lo stesso codice del costruttore e quindi stiamo rompendo il DRY


// LA SOLUZIONE è USARE IL parent::__construct()

class Person{
    public $name;
    public $surname;

    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname = $surname;
    }
}

class Student extends Person{
    public $class;

    public function __construct($name,$surname,$class){
        parent::__construct($name,$surname);
        $this->class = $class;
    }
}

class Teacher extends Person{

    public $subject;
    public $salary;

    // Creiamo il costruttore
    public function __construct($name,$surname,$subject,$salary){
        parent::__construct($name,$surname);
        $this->subject = $subject;
        $this->salary = $salary;
    }

}

$teacher = new Teacher("Mario","Rossi","Matematica",1000);

var_dump($teacher);

// parent fa riferimento alla classe padre sempre in maniera statica