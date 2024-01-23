<?php

// $intero = 5;
// $decimale = 5.5;
// $string = "ciao";
// $Boolean = true;
// define("PI_GRECO",3.14);
// define("intero",6);
// define("DECIMALE",5.6);


// var_dump($string);
// var_dump($Boolean);
// var_dump(PI_GRECO);
// var_dump(intero);
// var_dump(DECIMALE);

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete ";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = "$text2";
// $text7 = "bevuto";
// $text8 = "tutto";

// $stringa = "$text1 $text2 $text3$text4 $text5 $text6 $text7 $text8 ";
// var_dump("$stringa");


$words1 = ['una','vita', 'colle', 'mi', 'rosso', 
            [ 'oscura','era',
                [ 'mezzo',
                ['cammin', 'Nel', 
                [ 'selva', 'la', 
                [ 'via', 'una',  ] 
            ],
            ] 
            ],
            'ritrovai', 'per' ], 'diritta' 
            ]; 

$words2 = [ 'elemento2' => 'nostra', 
                'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] 
            ];
$words1 [] = "del";
$result = $words1[5][2][1][1] ." " . $words1[5][2][0] . " " .$words1[7]. " " . $words1[5][2][1][0];
var_dump($result);
