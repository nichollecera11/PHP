<?php

//$result = 1 != 3; // true

$firstName = 'Nichol';
$lastName = 'Lecera';

if ($firstName == 'nichol' || $lastName == 'lecera'){
    echo 'The First Condition is True';
} else if ($firstName != 'Nichol' && $lastName == 'Lecera') {
    echo 'The Second Condition is True';
} else {
    echo 'The Conditions are false';
}

//echo $result == false; //comparison result 
// us 2 equal sign if you are comparing and use 1 equal sign if you are assigning something
