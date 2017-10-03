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
    $quotes = $app['dao.quote']->findAllQuotes();
    $dayQ = $app['dao.quote']->getId();
    $checkID = !$app['dao.quote']->exists($dayQ);

    while ($checkID) {
      //$ID = $app['dao.quote']->find($dayQ);
      $app['dao.quote']->getId();
    }
  /*  else {
      $dayQ = $app['dao.quote']->test();
    }*/
    $ID = $app['dao.quote']->find($dayQ);

    return $app['twig']->render('index.html.twig', array(
      'quotes' => $quotes,
      'dayQ' => $ID
    ));
})->bind('home');

$app->get('/quotes', function () use ($app) {
    $quotes = $app['dao.quote']->findAllQuotes();
    return $app['twig']->render('quote.html.twig', array(
      'quotes' => $quotes
    ));
})->bind('quotes');

// Get list of quotes of a given author
$app->get('/author/{id}', function ($id) use ($app) {
    $author = $app['dao.author']->find($id);
    $quotes = $app['dao.quote']->findByAuthor($id);
    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));

});

// test view
/*$app->get('/test', function() use($app) {
  $quotes = $app['dao.quote']->findAllQuotes();
  return $app->render('view.php', array('quotes' => $quotes));
});*/
