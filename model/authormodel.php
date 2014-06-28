<?php

/**
 * @class AuthorModel
 */
class AuthorModel
{


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

        return $database->getRows('author');
    }


    /**
     * Save a new author
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

        return $database->insertRow('author', $data);
    }

}