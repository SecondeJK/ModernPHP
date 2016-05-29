<?php
  function aGenerator()
  {
    yield 'value1';
    yield 'value2';
    yield 'value3';
  }

  foreach (aGenerator() as $value)
  {
    echo $value . "\n";
  };
?>
