<?php


class Person{
    public $name;
    public $surname;

    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function sayHello(){
        echo "Ciao , mi chiamo " . $this->name . " e sono una persona\n";
    }
}

class Student extends Person{
    public $class;

    public function __construct($name,$surname,$class){
        parent::__construct($name,$surname);
        $this->class = $class;
    }

    public function sayHello(){
        echo "Ciao, mi chiamo {$this->name} e frequento {$this->class} \n";
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

    public function sayHello(){
        echo "Ciao , mi chiamo {$this->name} e insegno {$this->subject} \n";
    }

}

$student = new Student("Luca","Verdi","3A");
$teacher = new Teacher("Mario","Rossi","Matematica",1500);


$student->sayHello();
$teacher->sayHello();

/*
? Supponiamo però che noi vogliamo modificare il funzionamento del metodo sayHello
Per esempio vogliamo modificare la stampa in base al fatto che sia uno studente o un docente
Per farlo dobbiamo andare a sovvrascrivere la funzione originale questo processo prende il nome di override

? Ma come si effettua ?
Lo si fa andando a ridefinire nelle classi figlie dei metodi con lo stesso nome del metodo da sovvrascrivere
*/


$people = [
    $student,
    $teacher
];

foreach($people as $element){
    $element->sayHello();
}