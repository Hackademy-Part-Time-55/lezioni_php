<?php
$arr = ['1','2','Mario','Rossi'];
echo $arr[2]."\n";

// Array Multi-dimensionale (array di array)

$arr =[
    //0
    ['Mario',// 0 del primo elemento di arr
    'Rossi' // 1 del primo elemento di arr
    ],

    //1
    ['Luca', // 0 del secondo elemento di arr
    'Bianchi' // 1 del secondo elemento di arr
    ],
    //2
    ['Paolo',// 0 del terzo elemento di arr
    'Verdi' // 1 del terzo elemento di arr
    ]
];

var_dump($arr);

var_dump($arr[0]);

var_dump($arr[0][0]);

/* Per navigare negli array multi-dimensionali utilizzamo le [] concatenandole tra loro
/ $arr[0]-> prendo il primo elemento della variabile arr

    ['Mario',// 0 del primo elemento di arr
    'Rossi' // 1 del primo elemento di arr
    ],

    Concatenando un altro [0] -> prendo il primo elemento del primo array preso precedentemente

    'Mario' 

*/

// Sovrascrittura di un elemento di un array

$arr[0][0]= 'Giovanni';

var_dump($arr);


// Aggiunta di un elemento ad un array
$arr[0][2]=25;
print_r($arr);

/* Array associativi

    Gli array associativi sono array che hanno come chiave (indice) una stringa

*/

$persona1 = [
    //chiave => valore
    'nome' => 'Mario',
    'cognome' => 'Rossi',
    'anni' => 25
];

$persona2 = ['Mario','Rossi',25];

var_dump($persona1);
var_dump($persona2);

var_dump($persona2[0]);
var_dump($persona1['nome']);

//var_dump($persona1[0]); // Non funziona perchè non è un array classico con indice numerico