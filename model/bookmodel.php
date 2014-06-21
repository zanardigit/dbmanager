<?php

/**
 * @class BookModel
 */
class BookModel
{
    /**
     * @var bool $purchased the purchase state of the book (true if it's been purchased already)
     */
    private $purchased = false;
  
    /**
     * Returns a single item
     * 
     * @return void
     */
    public function getItem()
    {
        return array(
          'author' => 'Francesco Abeni',
          'title' => 'Joomla dev best practices',
          'year' => '2013'
        );
    }
    
    /**
     * @return bool the purchase status
     */ 
    public function getPurchased()
    {
        return $this->purchased;
    }
    
    /**
     * Set the new purchase status
     * 
     * @param bool the new purchase status
     * @return bool true if the operation went fine
     */ 
    public function setPurchased($value)
    {
        $this->purchased = (bool)$value;
        return true;
    }
    
}