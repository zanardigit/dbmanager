<?php

class BaseModel
{
    /**
     * Get the full item list or a single item if filtered by id
     *
     * @return array
     */
    public function getList($id=0)
    {
        include 'classes/database.php';
        $database = new Database();
        if ( ! $database->connection)
        {
            return array();
        }

        return $database->getRows($this->resource,$id);
    }

    /**
     * Save a row into the database
     *
     * @param array $data
     * @return bool
     */
    public function save($data)
    {
        include 'classes/database.php';
        $database = new Database();
        if ( ! $database->connection)
        {
            return array();
        }

        if ($data["id"])
        {

            return $database->updateRow($this->resource, $data);
        }
        else
        {
            return $database->insertRow($this->resource, $data);
        }
    }
}