<?php
include 'SpaceOne/NamespaceMe1.php';
include 'SpaceTwo/NamespaceMe2.php';
use rootNamespace\SpaceOne;
use rootNamespace\SpaceTwo;

Echo "Hello World, This is the Exec file! \n";

SpaceOne\Helloworld();
SpaceTwo\Helloworld();
?>
