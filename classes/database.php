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

    public function getRows($table,$id=0)
    {
        $query="select * from $table";
        if ($id) {
            $query .= " where id=$id";
        }
        $result = mysqli_query($this->connection, $query);

        $list = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $list[] = $row;
        }

        return $list;
    }

    public function insertRow($table, $data)
    {
        $query = "INSERT INTO $table SET ";
        $inserts = array();
        foreach ($data as $key => $value)
        {
            $inserts [] = "$key = '$value'";
        }
        $query .= implode(",", $inserts);

        return mysqli_query($this->connection, $query);
    }

     public function updateRow($table, $data)
    {
        $query = "update $table SET ";
        $inserts = array();
        foreach ($data as $key => $value)
        {
            if($key=="id")
            {
                continue;
            }
            $inserts [] = "$key = '$value'";
        }
        $query .= implode(",", $inserts);
        $query.= " where id={$data["id"]}";


        return mysqli_query($this->connection, $query);
    }
}