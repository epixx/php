<?php

class MyFirstClass
{
    public $someProp = 'Some default value';

    function myMethod($name)
    {
        echo 'Hello, ' . $name . '!';
    }
}

$myObject = new MyFirstClass();
$myObject->myMethod('Vasya');
echo $myObject->someProp;
