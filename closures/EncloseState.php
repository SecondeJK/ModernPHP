<?php

//function to enclose a string
function encloseString($name)
{
  return function($input2) use ($name)
  {
    return $name . $input2;
  };
}

//this concept is totally weird. Come back to it if
//enclosed states are used anywhere useful
$object1 = encloseString("Michael");

echo $object1('SMITH');


?>
