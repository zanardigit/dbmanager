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
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
          <book value="best">
          <author>'.$result['author'].'</author>
          <title>'.$result['title'].'</title>
          <year>'.$result['year'].'</year>
        </book>';
    return $xml;
  }
    
}