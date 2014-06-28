<?php

include "model/authormodel.php";

/**
 * @class AuthorController
 */
class AuthorController
{
    public function get()
    {
        echo "Author get!";
    }

    public function post()
    {
        $data = array();
        $data['firstname'] = $_GET['firstname'];
        $data['lastname'] = $_GET['lastname'];
        $data['birthdate'] = $_GET['birthdate']."-01-01";
        
        $model = new AuthorModel();
        if ($model->save($data))
        {
            echo "Saved";
        }
        else
        {
            echo "Error";
        }
    }
}