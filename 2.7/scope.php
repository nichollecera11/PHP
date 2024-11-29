<?php
    $title = 'scope'; // scope is a visibility of a variable

    $guitars = [
      ['name' => 'Vela', 'manufacturer' => 'PRS'],
      ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
      ['name' => 'Strat', 'manufacturer' => 'Fender']

    ];

    //$guitar_names = array_column($guitars, 'manufacturer');

    /****** ANONYMOUS FUNCTION *************/
    function pluck($arr,  $key) {

      $result = array_map(function($item) use($key) {
        return $item[$key];
      }, $arr);

      return $result;

    }

    // function return_name($item) {  // this is not the answer, if you just only want to have a local result
    //   return $item['name'];
    // }



    $guitar_names = pluck($guitars, 'name');

    // $greeting = 'hello world'; 
    

    // function sum($a, $b) {
    //   global $greeting;   // you can add more global variables
    //   echo $greeting;
    //     $result = $a + $b;  //the $result variable is local variable
    //     return $result;

    // }

    // $result = sum(1,2); // global variable

    function output($value) {
        echo '<pre>';
      print_r($value);
      echo '</pre>';
    }

    $guitars = [
        'Vela',
        'Explorer',
        'Strat'
    ];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
      <?php 
      output($guitar_names); 
      ?>
      <!-- theres a simplification about this code function output -->
      <!-- if you want to see the structure of array use print r -->
      </div>
    </div>
  </body>

</html>