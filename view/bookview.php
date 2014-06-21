<?php

/**
 * @class BookView
 */
class BookView
{
    public function display($format, $data)
    {
        $valid_formats = array('html','json','xml','file');
        if ( ! in_array($format, $valid_formats))
        {
           $format = 'html';
        }
        $method_name = "display" . ucfirst($format);
        $this->$method_name($data);
    }
  
    public function displayJson($data)
    {
        echo json_encode($data);
    }
    
    public function displayXml($data)
    {
        include_once 'classes/helper.php';
        $helper = new Helper();
        echo $helper->xml_encode($data);
    } 
    
    public function displayHtml($data)
    {
        include 'tpl/default.php';
    }
    
    public function displayFile($data)
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . 'data.txt';
        file_put_contents($file,print_r($data,true));
        include 'tpl/file.php';
    }
  
}