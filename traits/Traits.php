<?php

trait Location {
  //interface and definition
  public $locationoutput;
  public $locationinput;

  function generateLocation($input)
  {
    $this->locationinput = $input;
    $payload = hash('sha256', $this->locationinput);
    $this->locationoutput = $payload;
    Echo $this->locationoutput;
  }

}

class LocationClass {
  //interface and definition
  public $locationoutput;
  public $locationinput;

  function generateLocation($input)
  {
    $this->locationinput = $input;
    $payload = hash('sha256', $this->locationinput);
    $this->locationoutput = $payload;
    return $this->locationoutput;
  }

}

?>
