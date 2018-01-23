<?php

namespace QuoteDico\DAO;

use QuoteDico\Domain\Quote;

class QuoteDAO extends DAO
{
  /** quote author id
  * @var \QuoteDico\DAO|AuthorDAO
  */
  protected $authorDAO;

  public function setAuthorDAO(AuthorDAO $authorDAO) {
    $this->authorDAO = $authorDAO;
  }

  /**
  * Return the total of quotes
  * @return integer total of quotes in the db
  */
  public function count() {
    return $this->getDb()->query('SELECT COUNT(*) FROM t_quote')->fetchColumn();
  }

  /**
  * Return the total of quotes by author
  * @return integer total of quotes in the db
  */
  public function countByAuthor($author_id) {

    $sql = $this->getDb()->prepare('SELECT COUNT(*) FROM t_quote WHERE a_id = ?');
    $sql->execute(array($author_id));

    return $sql->fetchColumn();
  }

  /**
   * Return a list of all quotes
   * @return array A list of all quotes.
   */

  public function findAllQuotes() {

      /*$sql = "select *
              from t_quote
              inner join t_quote_category
               on t_quote.q_id = t_quote_category.q_id
              inner join t_category
               on t_category.cat_id = t_quote_category.cat_id";*/
      $sql = "SELECT * FROM t_quote";
      $result = $this->getDb()->fetchAll($sql);

      // Convert query result to an array of domain objects
      $quotes = array();

      foreach ($result as $row) {
          $quoteId = $row['q_id'];
          $quotes[$quoteId] = $this->buildDomainObject($row);
      }
      return $quotes;
  }

    // select last 5 added quotes
  public function get5quotes() {
    $sql = "select * from t_quote limit 0, 5";
    $result = $this->getDb()->fetchAll( $sql );

    // Convert query result to an array of domain objects
    $quotes = array();

    foreach ($result as $row) {
        $quoteId = $row['q_id'];
        $quotes[$quoteId] = $this->buildDomainObject( $row );
    }
    return $quotes;
  }


  /**
   * Returns a quote matching the supplied id.   *
   * @param integer $id The quote id.
   *
   * @return \Quote\Domain\Quote|throws an exception if no matching quote is found
   */
 public function find ($quote_id) {

     $sql = "select * from t_quote where a_id = ?";
     $row = $this->getDb()->fetchAssoc($sql, array($quote_id));

     if ($row)
         return $this->buildDomainObject($row);
     else {
         //throw new \Exception("No quote matching id " . $quote_id);
        // test();
       }
 }

  // Find quotes by author
  public function findByAuthor($author_id) {
    // get author author
    $author = $this->authorDAO->find($author_id);

      // $author_id is not selected by the SQL query
      // The $author won't be retrieved during domain objet construction
      $sql = "select * from t_quote where a_id=? order by time(q_id) asc";
      $result = $this->getDb()->fetchAll($sql, array($author_id));

      // Convert query result to an array of domain objects
      $auth_quotes = array();
      foreach ($result as $row) {
          $quoteId = $row['q_id'];
          $quote = $this->buildDomainObject($row);
          // The associated author is defined for the constructed comment
          $quote->setAuthor($author);
          $auth_quotes[$quoteId] = $quote;
      }
      return $auth_quotes;

  }

  // Find quotes by  category
  public function findByCategory($category_id) {
    // get author id
    $category = $this->categoryDAO->find($category_id);

      // $author_id is not selected by the SQL query
      // The $author won't be retrieved during domain objet construction
      $sql = "select * from t_quote where a_id=? order by time(q_id) asc";
      $result = $this->getDb()->fetchAll($sql, array($author_id));

      // Convert query result to an array of domain objects
      $auth_quotes = array();
      foreach ($result as $row) {
          $quoteId = $row['q_id'];
          $quote = $this->buildDomainObject($row);
          // The associated author is defined for the constructed comment
          $quote->setAuthor($author);
          $auth_quotes[$quoteId] = $quote;
      }
      return $auth_quotes;

  }

  /**
   * Creates a Quote object based on a DB row.   *
   * @param array $row The DB row containing Quote data.
   * @return \QuoteDico\Domain\Quote
   */
  protected function buildDomainObject(array $row) {
      $quote = new Quote();
      $quote->setId($row['q_id']);
      $quote->setSummary($row['q_description']);
      //$quote->setDate($row['q_date']);
    //  $quote->setTheme($row['q_theme']);

    if (array_key_exists('a_id', $row)) {
        // Find and set the associated author
        $authorId = $row['a_id'];
        $author = $this->authorDAO->find($authorId);
        $quote->setAuthor($author);
      }
      return $quote;

  }
}
