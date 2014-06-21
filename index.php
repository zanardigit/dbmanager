<?php

include "model/bookmodel.php";
include "view/bookview.php";

$bookmodel = new BookModel();
if ( ! $bookmodel->setPurchased(true))
{
  exit("Unable to set status");
}

// Recupero i dati
$data = $bookmodel->getList();
$format = empty($_GET['format']) ? '' : $_GET['format'];

$bookview = new BookView();
$bookview->display($format, $data);