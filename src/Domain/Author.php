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
  * Author full name
  *
  * @var string
  */
  private $fullName;


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

public function fullName ()
{
    return $this->fullName;
}

public function setFullName ($fullName)
{
    $this->fullName = $fullName;
}
}
