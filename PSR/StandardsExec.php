<?php

include_once('PSRLogInterface.php');
include_once('Classes.php');
include_once('Classes2.php');
include_once('Functions.php');
include_once('MyLogger.php');

use Psr\Log;

//Coded in Atom, which automatically codes in UTF-8
//PSR-2: Namespace has a blank line after it for readability

//outputting a constant for the giggles
$testclass = new ThisIsCorrect;
echo $testclass::MY_CONSTANT;

$testclass2 = new ThisIsCorrectAsWell;
echo $testclass2::MY_CONSTANT2;

$testlogger = new Psr\Log\MyLogger('C:/log.txt');

echo $testlogger->stream;

//PSR-2 : do not close the PHP tag. PSR-1 allows it.
