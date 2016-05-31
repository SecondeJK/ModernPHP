<?php
Namespace PSR\Classes;
//Coded in Atom, which automatically codes in UTF-8
//PSR-2: Namespace has a blank line after it for readability
// Objective PSR-1: each class, trait, function or constant has a seperate file.

class ThisIsCorrect //PSR-1: CamelCase or Titlecase for classnames
{ //PSR-2: functions, classes and methods should have enclosing brackets on new lines
    //PSR-2: indentation is four spaces, not one tab
    const MY_CONSTANT = "This is a constant"; //PSR-1: Constants in capitals, using underscores
    public $keyword1 = null; //PSR-2: PHP keywords in lowercase
    public $keyword2 = false; //PSR-2: PHP keywords in lowercase
    public $keyword3 = true; //PSR-2: PHP keywords in lowercase
    //PSR-2: Full visibility declared

    function thisMethod() //PSR-1: method name lowercase then CamelCase
    { //PSR-2: functions, classes and methods should have enclosing brackets on new lines
    Echo "This method is PSR compliant";
    }
}

$testobj = new ThisIsCorrect;

var_dump($testobj);

//PSR-2 : do not close the PHP tag. PSR-1 allows it.
