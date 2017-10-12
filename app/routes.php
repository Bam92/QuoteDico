<?php

// test page
$app->get('/test', function () use($app){
  //$quotes = $app['dao.category']->findAllCategories();
  /*$dayQ = $app['dao.quote']->test();*/
  $quotes = $app['dao.quote']->findAllQuotes();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});


// Home page
$app->get('/', "QuoteDico\Controller\QuoteController::indexAction")
    ->bind('home');

// List of quotes
$app->get('/quotes', "QuoteDico\Controller\QuoteController::getQuotesAction")
    ->bind('quotes');

// Details on one quote
$app->get('/quote/{id}', "QuoteDico\Controller\QuoteController::viewQuoteAction")
    ->bind('quote');

// Get list of quotes of a given category
$app->get('/quote/category/{id}', "QuoteDico\Controller\QuoteController::
viewCategoryAction")->bind('category');

// Get list of quotes of a given author
$app->match('/author/{id}',
    "QuoteDico\Controller\QuoteController::viewAuthorAction")->bind('author');

// List of contributors
$app->get('/contributors',
    "QuoteDico\Controller\QuoteController::getContributorsAction")
    ->bind('contributors');

// details on a quote
$app->get('/quote/{id}', function () use ($app) {

})->bind('quote');


// Get list of quotes of a given author
$app->get('/author/{id}', function ($id) use ($app) {
    $author = $app['dao.author']->find($id);
    $quotes = $app['dao.quote']->findByAuthor($id);
    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));

});
