<?php

class anObjectTest extends PHPUnit_Framework_TestCase
{
  public function testSetOne()
  {
  $testobject = new anObject('Bob Smith');
  $this->assertAttributeEquals('Bob Smith', 'theinput', $testobject);
  }

  public function testSetTwo()
  {
    $testobject = new anObject('Bob Smith');
    $this->assertEquals('My content is: Bob Smith', $testobject->showString());
  }

  public function testAgreement()
  {
    $testobject = new anObject('Barfoo');
    $result = 'Barfoo';
    $this->assertEquals('String Matched!', $testobject->compareString($result));
  }

  public function expectedException()
  {
    $testobject = new anObject('Nonsense');
    $wronginput = 'Sensible';
    $aresult = $testobject->compareString($wronginput);
    if ($aresult !== 'String did not match'){
      throw Exception('Wrong result');
    }
  }
}
