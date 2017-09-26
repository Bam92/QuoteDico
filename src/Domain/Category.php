<?php

namespace QuoteDico\Domain;

/**
 * This class defines a category
 */
class Category
{
  /**
  * category id
  *
  * @var integer
  */
  private $id;

  /**
  * category name
  *
  * @var string
  */
  private $name;

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

		public function name ()
		{
			return $this->name;
		}

		public function setName ($name)
		{
			$this->name = $name;
		}
}
