<?php

class MyFirstClass
{
    public $someProp;

    function myMethod()
    {
        echo 'My value is ' . $this->someProp;
    }

    function setProp($myProp)
    {
        $this->someProp = $myProp;
    }
}

$myObject = new MyFirstClass();
$myObject->setProp('some value');
$myObject->myMethod();
