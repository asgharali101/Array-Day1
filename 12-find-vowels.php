<?php

$alphabets = [
    '',
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z'
];


foreach ($alphabets as $key => $alphabet) {

    if ($alphabet === 'a') {
        echo $alphabet . '------' . ' is vowel' . '<br>';

    } else if ($alphabet === 'e') {
        echo $alphabet . '------' . ' is vowel' . '<br>';

    } else if ($alphabet === 'i') {
        echo $alphabet . '------' . ' is vowel' . '<br>';

    } else if ($alphabet === 'o') {
        echo $alphabet . '------' . ' is vowel' . '<br>';

    } else if ($alphabet === 'u') {
        echo $alphabet . '------' . ' is vowel' . '<br>';
    } else {
        echo $alphabet . '<br>';
    }


}

// $position = [];
// $vowels = '';
// $consonants = '';
// $char = '';

// for ($i = 'a'; $i <= 'z'; $i++) {
//     $char = $i;

//     if ($char == 'a' && $char == 'o' && $char == 'i' && $char == 'e' && $char == 'u') {
//         echo $vowels += 1;
//         $position = $char;
//     } else {
//         echo $consonants += 1;
//     }
// }
// ;

// foreach ($postion as $vowel) {
//     echo $vowel;
// }

?>