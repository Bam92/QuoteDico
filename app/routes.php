<?php

// test page
$app->get('/test', function () use($app){
  $quotes = $app['dao.quote']->findAllQuotes();
  $dayQ = $app['dao.quote']->test();
  $ID = $app['dao.quote']->find($dayQ);
  //  require '../src/model.php';
  //  $quotes = getQuotes();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});


// Home page
$app->get('/', function () use ($app) {
    $quotes = $app['dao.quote']->get5quotes();
    $quote_total = $app['dao.quote']->count();
    $author_total = $app['dao.author']->count();

    /* We no longer need this, may be after?
    $checkID = !$app['dao.quote']->exists($dayQ);

    while ($checkID) {
      //$ID = $app['dao.quote']->find($dayQ);
      $app['dao.quote']->getId();
    }
  else {
      $dayQ = $app['dao.quote']->test();
    }
    $ID = $app['dao.quote']->find($dayQ);*/

    return $app['twig']->render('index.html.twig', array(
      'quotes'      => $quotes,
      'quote_total' => $quote_total,
      'author_total'    => $author_total
    ));
})->bind('home');

$app->get('/quotes', function () use ($app) {
    $quotes = $app['dao.quote']->findAllQuotes();
    return $app['twig']->render('quote.html.twig', array(
      'quotes' => $quotes
    ));
})->bind('quotes');

// details on a quote
$app->get('/quote/{id}', function () use ($app) {

})->bind('quote');

// Get list of quotes of a given category
$app->get('/quote/category/{id}', function () use ($app) {

})->bind('category');

// Get list of quotes of a given author
$app->get('/author/{id}', function ($id) use ($app) {
    $author = $app['dao.author']->find($id);
    $quotes = $app['dao.quote']->findByAuthor($id);
    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));

});

// List of contributors
$app->get('/contributors', function () use ($app) {

})->bind('contributors');

// test view
/*$app->get('/test', function() use($app) {
  $quotes = $app['dao.quote']->findAllQuotes();
  return $app->render('view.php', array('quotes' => $quotes));
});*/
