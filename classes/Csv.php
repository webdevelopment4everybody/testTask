<?php

include_once 'app/interface.php';

class Csv implements AssociativeArrayInterface
{
    public function convertFiles($file_name)
    {
        // return an array containing the fields read
        $rows   = array_map('str_getcsv', file($file_name));
        //shifts the first value of the array off and returns it
        $header = array_shift($rows);
        $this->file_name  = [];
        foreach ($rows as $row) {
            $this->file_name[] = array_combine($header, $row);
        }
        $associative_array = new Associative_Array($this->file_name);
        $associative_array->print();
    }
}