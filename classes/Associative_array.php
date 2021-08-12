<?php 

class Associative_array {
    //properties
    public $file_name;

    public function __construct($file_name) {

        $this->file_name = $file_name;
    }

    //method to read data from json file to associative array
    public function setJson($file_name){
        // read the contents of a file into a string
        $json = file_get_contents($file_name);
        // takes json encoded string and converts into variable
        $this->file_name = array(json_decode($json,true));

    }

    //method to read data from csv file to associative array
    public function setcsv($file_name){

        // return an array containing the fields read
        $rows   = array_map('str_getcsv', file($file_name));
        
        //shifts the first value of the array off and returns it
        $header = array_shift($rows);

        $this->file_name  = [];

        foreach($rows as $row) {

            $this->file_name[] = array_combine($header, $row);

        }
    }

    //method to read data from xml file to associative array
    public function setxml($file_name){

        $xmlFileData = file_get_contents($file_name);

        // string conversion into object
        $xmlDataObject = simplexml_load_string($xmlFileData);

        $jsonData  = json_encode($xmlDataObject);

        $this->file_name = json_decode($jsonData, true);	
    }
    //prints associative array
    public function print(){

        print_r($this->file_name);
    }

}