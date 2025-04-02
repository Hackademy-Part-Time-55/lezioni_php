<?php
class Company {
    public $nome;
    public $luogo;
    public $avg_salary;
    public $numeroDiImpiegati = 0;
    public static $numeroDiAziende = 0;
    public static $costi = [];

    public function __construct($name, $location, $salario, $tot_employees) {
        $this->nome = $name;
        $this->luogo = $location;
        $this->numeroDiImpiegati = $tot_employees;
        $this->avg_salary = $salario;

        $this->implementa();
        $this->stampaNumeroDiAziende();
        $this->calcola_costo_annuale();
    }
    
    public function office() {
        if($this->numeroDiImpiegati > 0) {
            echo "L'ufficio di Aulab con sede in Italia ha ben 50 dipendenti \n";
        }
        else {
            echo "L'ufficio Aulab con sede in Italia non ha dipendenti";
        }
    }

    public function spesa($month) {
        echo $month * $this->avg_salary;
    }

    public static function implementa() {
        self::$numeroDiAziende++;
    }

    public static function stampaNumeroDiAziende() {
        echo self::$numeroDiAziende;
    }

    public function calcola_costo_annuale(){

        $costo = 12 * $this->avg_salary * $this->numeroDiImpiegati;
        array_push(self::$costi,$costo);

    }

    public static function calcola_totale(){
        $totale=0;
        foreach(self::$costi as $costo){
            $totale+=$costo;
        }

        return $totale;
    }

    public static function stampa_costi_totale(){
        echo "Considerando tutte le nostre aziende spendiamo un totale " . self::calcola_totale();
    }
}

$amazon = new Company("Amazon", "Milano", 500, 7);
$facebook = new Company("Facebbok", "Napoli", 700, 25);
$tiktok = new Company("TikTok", "Genova", 200, 45);
$youtube = new Company("YouTube", "Verona", 1000, 32);
$google = new Company("Google", "New York", 1200, 15);

var_dump(Company::$costi);

Company::stampa_costi_totale();
?>