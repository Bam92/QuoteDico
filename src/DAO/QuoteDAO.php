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

    public function findQuotes() {

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
    public function find($id) {

        $sql = "select * from t_quote where q_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)

            return $this->buildDomainObject($row);
        else
            throw new \Exception("No quote matching id " . $id);

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
        //$quote->setAuthor(($row['a_id']));

      if (array_key_exists('a_id', $row)) {
          // Find and set the associated author
          $authorId = $row['a_id'];
          $author = $this->authorDAO->find($authorId);
          $quote->setAuthor($author);
        }
        return $quote;

    }
}
