<?php

//function to enclose a string
function encloseString($name)
{
  return function($input2) use ($name)
  {
    return $name . $input2;
  };
}

$object1 = encloseString("Michael");

echo $object1('SMITH');


?>
