<?php
    include 'includes/associative-array.php';
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
    $array->setJson('data.json');
    // $array->setcsv('data.csv');
    // $array->setxml('data.xml');
    $array->print();

?>
</body>
</html>