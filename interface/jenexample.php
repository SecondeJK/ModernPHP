<?php

class person
{
  public $name;
  public $age;

  function addData($inputobject){
    $this->name = $inputobject->objectname;
    $this->age = $inputobject->objectage;
  }
}

$phpvar = new person;

class personinput
{
  public $objectname = 'Bob';
  public $objectage = 29;
}

$givemeinput = new personinput;

$phpvar->addData($givemeinput);

var_dump($phpvar);

?>
