<?php



function get_terms()
{
    $json = get_data();

    return json_decode($json);
}

function get_term($term)
{
    $terms = get_terms();

    foreach ($terms as $item) {
        if ($item->term == $term) {
            return $item;
        }
    }

    return false;
}
/************SEARCH FUNCTION***************/

function search_terms($search)
{
    $items = get_terms();

    $results = array_filter($items, function ($item) use ($search) {
        if (strpos($item->term, $search) !== false) {
            return $item;
        }
    });

    return $results;
}

function get_data()
{
    $fname = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fname)) {
        file_put_contents($fname, ''); //writing the file
    } else {
        $json = file_get_contents($fname); //reading the file, 
        // same as handle file, going to open read and close
    }

    return $json;
}