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
    $quotes       = $app['dao.quote']    -> findAllQuotes();
    $quote_total  = $app['dao.quote']    -> count();
    $author_total = $app['dao.author']   -> count();
    $categories   = $app['dao.category'] -> findAllCategories();

    return $app['twig']->render('index.html.twig', array(
      'quotes'       => $quotes,
      'quote_total'  => $quote_total,
      'author_total' => $author_total,
      'categories'   => $categories
    ));
  }

  public function getQuotesAction(Application $app) {
    $quotes = $app['dao.quote']-> findAllQuotes();
    $categories = $app['dao.category']-> findAllCategories();

    return $app['twig']->render('quote.html.twig', array(
        'quotes' => $quotes,
        'categories' => $categories
    ));
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
    $total_quotes = $app['dao.quote'] ->countByAuthor($id);

    return $app['twig']->render('author.html.twig', array(
      'author' => $author,
      'quotes' => $quotes,
      'total_quotes' => $total_quotes
    ));
  }

  /**
   * Category details controller.
   *
   * @param integer $id Category id
   * @param Request $request Incoming request
   * @param Application $app Silex application
   */
  public function viewCategoryAction($id, Request $request, Application $app) {
    $author = $app['dao.category']->find($id);
    $quotes = $app['dao.quote'] ->findByAuthor($id);

    return $app['twig']->render('category.html.twig', array(
      'author' => $author,
      'quotes' => $quotes
    ));
  }

  // return contributors
  public function getContributorsAction(Application $app) {
    return $app['twig']->render('credits.html.twig');
  }
}
