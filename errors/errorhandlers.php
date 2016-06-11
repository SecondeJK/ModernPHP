<?php
Echo "Hello World! \n";

try {
  //throw me an Error
  throw new Exception('This is another exception');
  //duff PDO statement
  $pdo = new PDO('mysql://host=nonsense;dbname=moresnonsense');
} catch (PDOException $e) {
  echo "Caught a PDO Error \n";
} catch (Exception $e) {
  echo "Caught an Exception \n";
}

//var_dump($e);
//variable $e is an exception object
print $e->getMessage();
