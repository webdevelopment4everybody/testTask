<?php

include_once 'app/interface.php';

class Json implements AssociativeArrayInterface
{
    public function convertFiles($file_name)
    {
        // read the contents of a file into a string
        $json = file_get_contents($file_name);
        // takes json encoded string and converts into variable
        $this->array = array(json_decode($json, true));
        $associative_array = new Associative_Array($this->array);
        $associative_array->print();
    }
}