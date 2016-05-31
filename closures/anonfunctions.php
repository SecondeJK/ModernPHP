<?php

function addOne($input)
{
  return $input + 1;
}

//echo addOne(145) . "\n";
//putting a function into a variable: neat!

$dave = function($input)
{
  return "Dave " . $input;
};

echo $dave(Smith) . "\n";

echo "Looking at callback in Array_Map\n\n";

$original = [5,45,56];

//old school array map needed a function to iterate through the data structure
function squareMe($input)
{
    return $input*$input;
}

echo squareMe(5);


//However, now we can use anonymous functions to define once and then apply it
$newclosure = function($input)
{
  return $input*$input;
};

$adjustedArray = array_map($newclosure, $original);

print_r($adjustedArray);

?>
