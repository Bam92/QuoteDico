<?php

namespace QuoteDico\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class QuoteController //extends Controller
{

  /**
  * Home page Controller.
  * @param Application $app Silex application
  */
  public function indexAction(Application $app) {
    $quotes       = $app['dao.quote'] ->get5quotes();
    $quote_total  = $app['dao.quote'] ->count();
    $author_total = $app['dao.author']->count();

    return $app['twig']->render('index.html.twig', array(
      'quotes'       => $quotes,
      'quote_total'  => $quote_total,
      'author_total' => $author_total
    ));
  }

  public function getQuotesAction(Application $app) {
    $quotes = $app['dao.quote']->findAllQuotes();

    return $app['twig']->render('quote.html.twig', array('quotes' => $quotes));
  }

/**
   * Author details controller.
   *
   * @param integer $id Author id
   * @param Request $request Incoming request
   * @param Application $app Silex application
   */
  public function viewAuthorAction($id, Request $request, Application $app) {
    $author = $app['dao.author']->find($id);
    $quotes = $app['dao.quote'] ->findByAuthor($id);

    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));
  }
}
