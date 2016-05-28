<?php
include 'Traits.php';

class cat {
  public $name;
  public $breed;

  function giveinfo($inname, $breed)
  {
    $this->name = $inname;
    $this->breed = $breed;
  }
}

class bike {
  public $model;
  public $price;

  function giveinfo($inmodel, $inprice)
  {
    $this->model = $inmodel;
    $this->price = $inprice;
  }
}

//test cat method
$moggy = new cat;

$newname = 'Ginger';
$newbreed = 'Shorthair';

$moggy->giveinfo($newname, $newbreed);

var_dump($moggy);

// test bike method
$vroom = new bike;

$newmodel = 'BMW';
$newprice = 9500;

$vroom->giveinfo($newmodel, $newprice);

var_dump($vroom);

?>
