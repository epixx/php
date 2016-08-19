<?php

class MyFirstClass
{
    public $someProp;

    function myMethod()
    {
        echo 'Hello!';
    }
}

$myObject = new MyFirstClass();
$myObject->someProp = 'Vasya';
$myObject->myMethod();
