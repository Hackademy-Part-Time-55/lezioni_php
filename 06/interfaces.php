<?php

/* Interfacce

Noi abbiamo la possibilità di creare delle interfacce
Le interfacce non sono altro che una collezione di metodi
Ma a differenza dei traits i metodi delle interfacce non hanno corpo
Quindi le interfacce ci servono per costringere le classi che le usano ad implementare i metodi richiesti

*/


interface InvioPosta{
    public function inviaEmail();
    public function riceviEmail();
}

class Posta implements InvioPosta {

    public function inviaEmail(){
        echo "Invio l'email";
    }

    public function riceviEmail(){
        echo "Sto ricevendo l'email";
    }

}

