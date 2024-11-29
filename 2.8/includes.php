<?php
    $title = 'includes'; // scope is a visibility of a variable

    include ('./../inc/header.php');
    require_once('./../inc/functions.php');  // this is useful when you want to add this to another file that you want to include


    $guitars = [
      ['name' => 'Vela', 'manufacturer' => 'PRS'],
      ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
      ['name' => 'Strat', 'manufacturer' => 'Fender']

    ];

    $guitar_names = pluck($guitars , 'name');

?>

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


<?php include ('./../inc/footer.php'); ?>