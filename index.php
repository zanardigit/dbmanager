<?php

$key = empty($_GET['key']) ? '' : $_GET['key'];
if ($key != 'miaPasswordSegretaAAAbbbCCC')
{
    //exit("Not authorized");
}

$valid_resources = array('book','author');
$resource = empty($_GET['resource']) ? '' : $_GET['resource'];
if ( ! in_array($resource, $valid_resources))
{
    exit("Invalid resource requested");
}

$action = empty($_GET['action']) ? '' : $_GET['action'];

require_once "controller/".strtolower($resource)."controller.php";
$controller_class = ucfirst($resource)."Controller";
$controller = new $controller_class();
$controller->$action();