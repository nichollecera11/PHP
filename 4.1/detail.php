<?php

require('app/app.php');

if (!isset($_GET['term'])) {
    redirect('index.php');
}

$data = get_term($_GET['term']); // TODO: validate input

if ($data == false) {
    view('not_found');
    die();
}

$term = 

$view_bag = [
    'title' => "Detail for " . $data->term 
];


view('detail', $data);

// define('BASE_PATH', __DIR__);