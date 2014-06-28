<?php

require_once "basemodel.php";

/**
 * @class BookModel
 */
class BookModel extends BaseModel
{
    /**
     *
     * @var string $resource
     */
    private $resource = 'book';

    /**
     * @var bool $purchased the purchase state of the book (true if it's been purchased already)
     */
    private $purchased = false;

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