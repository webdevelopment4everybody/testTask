<?php 

class Associative_Array
{
    //properties
    public $file_name;

    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }
   
    //prints associative array
    public function print()
    {
        $this->file_name;
        var_dump($this->file_name);
    }
}