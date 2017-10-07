<?php

namespace QuoteDico\DAO;

use QuoteDico\Domain\Category;

class CategoryDAO extends DAO
{
  /** quote id
  * @var \QuoteDico\DAO|QuoteDAO
  */
  protected $quoteDAO;

  public function setQuoteDAO(QuoteDAO $quoteDAO) {
    $this->quoteDAO = $quoteDAO;
  } 

  /**
 * Return a list of all categories
 * @return array A list of all categories.
 */

  public function findAllCategories() {

      $sql = "select * from t_category order by cat_name asc";
      $result = $this->getDb()->fetchAll($sql);

      // Convert query result to an array of domain objects
      $categories = array();

      foreach ($result as $row) {
          $categoryId = $row['cat_id'];
          $categories[$categoryId] = $this->buildDomainObject($row);
      }
      return $categories;
  }

  /**
   * Returns an author matching the supplied id.
   *
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

  // Find quotes by  author
  public function findByAuthor($author_id) {
    // get author id
    $author = $this->authorDAO->find($author_id);

      // $author_id is not selected by the SQL query
      // The $author won't be retrieved during domain objet construction
      $sql = "select * from t_quote where a_id=? order by time(q_date) asc";
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
   * Creates a Quote object based on a DB row.
   *
   * @param array $row The DB row containing Quote data.
   * @return \QuoteDico\Domain\Quote
   */

  protected function buildDomainObject(array $row) {
      $category = new Category();
      $category -> setId($row['cat_id']);
      $category -> setName($row['cat_name']);
     
    /*if (array_key_exists('cat_id', $row)) {
        // Find and set the associated author
        $authorId = $row['a_id'];
        $author = $this->authorDAO->find($authorId);
        $quote->setAuthor($author);
      }*/
      return $category;

  }
}
