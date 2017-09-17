<?php

namespace QuoteDico\DAO;

use Doctrine\DBAL\Connection;
use QuoteDico\Domain\Author;

class AuthorDAO extends DAO
{
  /**
     * Return a list of authors.
     *
     * @return array A list of all authors.
     */
     public function findAllAuthors() {

         $sql = "select * from t_author order by a_lName asc";
         $result = $this->getDb()->fetchAll($sql);

         // Convert query result to an array of domain objects
         $authors = array();

         foreach ($result as $row) {
             $authorId = $row['a_id'];
             $authors[$authorId] = $this->buildDomainObject($row);
         }
         return $authors;
     }

     /**
      * Returns an author matching the supplied id.
      *
      * @param integer $id The author id.
      *
      * @return \Author\Domain\Author|throws an exception if no matching author is found
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
