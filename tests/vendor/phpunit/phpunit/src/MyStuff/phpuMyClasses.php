<?php

class anObject
{
  protected $theinput;

  public function __construct($input)
  {
    $this->theinput = $input;
  }

  public function showString()
  {
    echo "My content is: " . $this->theinput . "\n";
  }

  public function compareString($compare)
  {
    if ($compare === $this->theinput)
    {
      return "String Matched!";
    } else {
      return "String did not match";
    }
  }
}

$testobject = new anObject('Foobar');
$testobject->showString();
