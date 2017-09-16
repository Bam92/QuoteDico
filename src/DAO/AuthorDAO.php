<?php

namespace QuoteDico\DAO;

use Doctrine\DBAL\Connection;
use QuoteDico\Domain\Author;

class AuthorDAO extends DAO
{
  /**
     * Return a list of all quotes, sorted by quotes' descriptions (asc).
     *
     * @return array A list of all quotes.
     */

    public function find ($auth_id) {

        $sql = "select * from t_author where a_id = ?";
        $row = $this->getDb()->fetchAssoc($sql, array($auth_id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No author matching id " . $auth_id);
    }

    /**
     * Creates a Quote object based on a DB row.
     *
     * @param array $row The DB row containing Quote data.
     * @return \QuoteDico\Domain\Quote
     */

    protected function buildDomainObject(array $row) {
        $author = new Author();
        $author->setId($row['a_id']);
        $author->setFName($row['a_fName']);
        $author->setFName($row['a_mName']);
        $author->setLName($row['a_lName']);
        $author->setFName($row['a_link']);

        return $author;

    }
}
