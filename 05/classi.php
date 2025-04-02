<?php

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
