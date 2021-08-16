<?php 

include_once 'app/interface.php';

class Xml implements AssociativeArrayInterface
{
    public function convertFiles($file_name)//method, which reads xml file data into associative array
    {
        $xmlFileData = file_get_contents($file_name);
        // string conversion into object
        $xmlDataObject = simplexml_load_string($xmlFileData); // string conversion into object
        $jsonData  = json_encode($xmlDataObject);
        $this->file_name = json_decode($jsonData, true);
        $associative_array = new Associative_Array($this->file_name);
        $associative_array->print();
    }
}