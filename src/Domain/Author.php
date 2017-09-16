<?php

namespace QuoteDico\Domain;

/**
 * The definition of Author class
 */
class Author
{
  /**
  * Author id
  *
  * @var integer
  */
  private $id;

  /**
  * Author first name
  *
  * @var string
  */
  private $fName;

  /**
  * Author middle name
  *
  * @var string
  */
  private $mName;

  /**
  * Author last name
  *
  * @var string
  */
  private $lName;

  /**
  * where to find more about author (URL, e-mail, ...)
  *
  * @var string
  */
  private $link;

// setters and getters
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

		public function fName ()
		{
			return $this->fName;
		}

		public function setFName ($fName)
		{
			$this->fName = $fName;
		}

    public function mName ()
		{
			return $this->mName;
		}

		public function setMName ($mName)
		{
			$this->lName = $mName;
		}

    public function lName ()
		{
			return $this->lName;
		}

		public function setLName ($lName)
		{
			$this->lName = $lName;
		}

    public function link ()
		{
			return $this->link;
		}

		public function setLink ($link)
		{
			$this->link = $link;
		}
}
