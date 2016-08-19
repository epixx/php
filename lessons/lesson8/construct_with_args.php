<?php

class Human
{
    public $name = 'unknow';

    function __construct($name)
    {
        $this->name = $name;
    }

    function greeting()
    {
        echo 'Привет, меня зовут ' . $this->name . '!';
    }
}

$person = new Human('Петя');
$person->greeting();
