<?php

/**
 * @class Helper
 */
class Helper
{
  /**
   * @param array $result
   * @return string the XML stream
   */
  public function xml_encode($result)
  {
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?> ';
    foreach ($result as $book )
    { 
        $xml.= '<book value="best">
          <author>'.$book['author'].'</author>
          <title>'.$book['title'].'</title>
          <year>'.$book['year'].'</year>
        </book>';
    }
    
    
          
    return $xml;
  }
    
}