<?php

require('app/app.php');


$view_bag = [
    'title' => 'Glossary List'
];

/*********SEARCH **************/

if (isset($_GET['search'])) {
    $items = search_terms($_GET['search']);
} else {
    $items = get_terms();
}


view('index', $items);

// define('BASE_PATH', __DIR__);
