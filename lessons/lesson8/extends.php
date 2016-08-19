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

class Man extends Human
{
    function greeting()
    {
        parent::greeting();
        echo ' И у меня есть борода!';
    }
}

class Woman extends Human
{
    function greeting()
    {
        parent::greeting();
        echo ' Зато у меня есть грудь!';
    }
}

$personMale = new Man('Петя');
$personMale->greeting();

echo '<br>';

$personMale = new Woman('Маша');
$personMale->greeting();
