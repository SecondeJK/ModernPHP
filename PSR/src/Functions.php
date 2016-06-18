<?php
Namespace jks\Functions;
//Coded in Atom, which automatically codes in UTF-8
//PSR-2: Namespace has a blank line after it for readability
// Objective PSR-1: each class, trait, function or constant has a seperate file.

function thisIsFunctionOne($inputone, $inputtwo) //PSR-1: function name lowercase then CamelCase //PSR-2: each parenthesis is seperated by a comma and whitespace
{ //PSR-2: functions, classes and methods should have enclosing brackets on new lines
    $rangestart = 0;
    $rangemax = 5;
    while ($rangestart < $rangemax) { //PSR-2: constrol structure bracket must be on the same line
        Echo $rangestart;
        $rangestart++;
    }; //PSR-2: Control structures must be followed by a space, closing bracket must be new line
}

function thisIsFunctionTwo() //PSR-1: function name lowercase then CamelCase
{ //PSR-2: functions, classes and methods should have enclosing brackets on new lines
}

//PSR-2 : do not close the PHP tag. PSR-1 allows it.
