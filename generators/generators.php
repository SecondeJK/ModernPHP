<?php
//here is the traditional way of using iteration
function makeRange($length)
{
  $dataset = [];

  for ($i = 0; $i < $length; $i++)
  {
    $dataset[] = $i;
  }
  return $dataset;
  //I've just put however many letters you want into an array in one go!
  //Generator access means one integer is loaded to memory at a time
}

$hereistherange = makeRange(10);
foreach ($hereistherange as $n)
{
  Echo $n . "\n";
}

Echo "Now using Generator method\n";

function makeGeneratorRange($length)
  {

  for ($i = 0; $i < $length; $i++)
  {
    //iteration of one each time is called is memory effecient
    yield $i;
  }
}

foreach (makeGeneratorRange(1000000) as $i) {
  echo $i;
}

?>
