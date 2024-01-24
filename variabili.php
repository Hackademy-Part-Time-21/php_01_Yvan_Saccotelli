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




$words1 = ['una', 67, 'vita', 'colle', 'mi', 'rosso', 
                ['oscura', 'era', 89, 
                    ['mezzo', ['cammin', 'Nel', ['selva', 'la', ['via', 'una', true]]],],
                'ritrovai', 'per'], 
            'diritta'];

$words2 = ['elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => ['Virgilio', 'smarrita', 'ché']];
$words1 [] = "del";
$words1 [] = "in";
$result = $words1[6][3][1][1] ." " . $words1[6][3][0] . " " .$words1[8]. " " .$words1[6][3][1][0]." " .$words1[4]. " " .$words1[6][4]. " ".$words1[9]. " ".$words1[0]. " ";
var_dump($result);
