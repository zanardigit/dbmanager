<?php

/**
 * @class Database
 */
class Database
{
    public $database_name = 'dbmanager';
    public $database_user = 'dbmanager';
    public $database_pass = 'dbmanager';
    public $connection = null;
    
    public function __construct()
    {
        $this->connection = mysqli_connect('localhost', $this->database_user, $this->database_pass, $this->database_name);
        if ( ! $this->connection)
        {
            return null;
        }
    }
    
    public function getRows($table)
    {
        $result = mysqli_query($this->connection, "SELECT * FROM $table");
        $list = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $list[] = $row;
        }

        return $list;
    }
}