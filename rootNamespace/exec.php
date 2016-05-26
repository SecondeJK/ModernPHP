<?php
include 'SpaceOne/NamespaceMe1.php';
include 'SpaceTwo/NamespaceMe2.php';
include 'SpaceThree/NamespaceMe3.php';
use rootNamespace\SpaceOne;
use rootNamespace\SpaceTwo;
use rootNamespace\SpaceThree;

Echo "Hello World, This is the Exec file! \n";

SpaceOne\Helloworld();
SpaceTwo\Helloworld();

//if you want to show a global function being called
//SpaceThree\globalFuncTest();
?>
