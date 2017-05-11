<?php

// Home page
$app->get('/', function () {
    require '../src/model.php';
    $quotes = getQuotes();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});