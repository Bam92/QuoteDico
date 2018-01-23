<?php

namespace QuoteDico\Domain;

/**
 * This class defines a quote
 */
class Quote
{
  /**
  * Quote id
  *
  * @var integer
  */
  private $id;

  /**
  * Quote description - summary -
  *
  * @var string
  */
  private $summary;

  /**
  * Quote author id
  *
  * @var integer
  */
  private $author;

  /**
  * Quote category id
  *
  * @var integer
  */
  private $category;

  public function id ()
		{
			return $this->id;
		}

		public function setId ($id)
		{
			$id = (int) $id;

			if ($id > 0)
			{
				$this->id = $id;
			}
		}

		public function summary ()
		{
			return $this->summary;
		}

		public function setSummary ($summary)
		{
			$this->summary = $summary;
		}

		public function author ()
		{
			return $this->author;
		}

		public function setAuthor (Author $author)
		{
			$this->author = $author;
		}

    public function category ()
		{
			return $this->category;
		}

		public function setCategory (Category $category)
		{
			$this->category = $category;
		}

}
