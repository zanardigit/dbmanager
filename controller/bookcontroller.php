<?php

include "model/bookmodel.php";
include "view/bookview.php";

/**
 * @class BookController
 */
class BookController
{
    public function get()
    {
        $bookmodel = new BookModel();
        if ( ! $bookmodel->setPurchased(true))
        {
            exit("Unable to set status");
        }

        // Recupero i dati
        $id= empty($_GET['id']) ? 0 : $_GET['id'];
        $data = $bookmodel->getList($id);
        $format = empty($_GET['format']) ? '' : $_GET['format'];

        $bookview = new BookView();
        $bookview->display($format, $data);
    }

    public function post()
    {
        $data = array();
        $data['id']= $_GET['id'];
        $data['title'] = $_GET['title'];
        $data['author'] = $_GET['author'];
        $data['year'] = $_GET['year'];

        $model = new BookModel();
        if ($model->save($data))
        {
            header('Location: /frontend/books.php?result=success');
        }
        else
        {
            header('Location: /frontend/books.php?result=error');
        }
    }
}