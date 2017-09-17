<?php

// Home page
/*$app->get('/', function () {
    require '../src/model.php';
    $quotes = getQuotes();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});
*/

// Home page
$app->get('/', function () use ($app) {
    $quotes = $app['dao.quote']->findAllQuotes();
    return $app['twig']->render('index.html.twig', array('quotes' => $quotes));
})->bind('home');

// Get list of quotes of a given author
$app->get('/author/{id}', function ($id) use ($app) {
    $author = $app['dao.author']->find($id);
    $quotes = $app['dao.quote']->findByAuthor($id);
    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));
    //return "Bienvenue " .$id;
});
