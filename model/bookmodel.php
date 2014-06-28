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
     * @return array
     */
    public function getList()
    {
        include 'classes/database.php';
        $database = new Database();
        if ( ! $database->connection)
        {
            return array();
        }

        return $database->getRows('book');
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

    /**
     * Save a new book
     *
     * @param array $data
     * @return bool true if the operation went fine
     */
    public function save($data)
    {
        include 'classes/database.php';
        $database = new Database();
        if ( ! $database->connection)
        {
            return array();
        }

        return $database->insertRow('book', $data);
    }

}