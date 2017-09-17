<?php

namespace QuoteDico\DAO;

use Doctrine\DBAL\Connection;
use QuoteDico\Domain\Quote;

class QuoteDAO extends DAO
{
  /**
  * @var \QuoteDico\DAO|AuthorDAO
  */
  protected $authorDAO;

  public function setAuthorDAO(AuthorDAO $authorDAO) {
    $this->authorDAO = $authorDAO;
  }

  /**
     * Return a list of all quotes
     * @return array A list of all quotes.
     */

    public function findAllQuotes() {

        $sql = "select * from t_quote order by q_description asc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $quotes = array();

        foreach ($result as $row) {
            $quoteId = $row['q_id'];
            $quotes[$quoteId] = $this->buildDomainObject($row);
        }
        return $quotes;
    }

    // Find one quote
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
            // The associated article is defined for the constructed comment
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
        $quote = new Quote();
        $quote->setId($row['q_id']);
        $quote->setSummary($row['q_description']);
        $quote->setDate($row['q_date']);
        $quote->setTheme($row['q_theme']);

      if (array_key_exists('a_id', $row)) {
          // Find and set the associated author
          $authorId = $row['a_id'];
          $author = $this->authorDAO->find($authorId);
          $quote->setAuthor($author);
        }
        return $quote;

    }
}
