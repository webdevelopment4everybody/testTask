<?php
  include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $array = new Associative_array("data.json"); 

    // test with json file 
    $array->setJson('data.json'); 
    // test with csv file 
    // $array->setcsv('data.csv'); 
    // test with xml file
    // $array->setxml('data.xml');

    $array->print();

?>
</body>
</html>