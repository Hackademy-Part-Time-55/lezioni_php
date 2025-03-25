<?php

// Differenza tra apici singoli e doppi apici
$username = 'admin';
$x = 'Ciao $username';
$y = "Ciao $username";

echo $x;
echo "\n";
echo $y;
echo "\n";

//$messagio = 'L'albero è verde';
$messagio = 'L\'albero è verde';
echo $messagio;
echo "\n";

$messagio = "L'albero è verde";
echo $messagio;
echo "\n";


$messagioDiBenvenuto = "Benvenuto \"$username\"";
echo $messagioDiBenvenuto;
echo "\n";

// Concatenazione
$nome = "Mario";
$cognome = "Rossi";

$nomeCompleto = $nome . " " . $cognome;
echo $nomeCompleto;
echo "\n";

echo 'Ciao '.$nome.', '.$messagioDiBenvenuto. "\n";
