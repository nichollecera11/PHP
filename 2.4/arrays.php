<?php // array is a data structure

// traditional array
// $guitars1 = ['Vela', 'Explorer', 'Strat'];

// print_r($guitars1);

// if (isset($guitars[3])) {
//     echo $guitar[3];
// } else {
//     echo 'Guitar does not exist';
// };

//associative array
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
 ];
 
if (isset($guitars2['Prs'])) {
    echo $guitars2['Prs'];
} else {
    echo 'Guitar does not exist';
};
