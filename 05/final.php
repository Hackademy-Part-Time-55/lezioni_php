<?php
/*
Possiamo definire delle classi che per ragioni a noi noto non vogliamo siano estendibili

? Per farlo dobbiamo usare la parola chiave final
*/

// final class Person{

// }

// class Student extends Person{

// }

// I metodi defini final non possono essere sovvrascritti

class Person{

    final public function sayHello(){
        echo "ciao";
    }

}

class Student extends Person{

    public function sayHello(){

    }

}

$student = new Student();
$student->sayHello();