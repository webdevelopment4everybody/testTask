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
    //method to print associative array
    public function getJson(){

        print_r($this->file_name);

    }
}