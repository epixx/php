<?php

class Human
{
    public $name;
    public $sex;

    function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    function greeting()
    {
        echo 'Привет, меня зовут ' . $this->name . '! ';
        echo 'Я ' . $this->sex . '!';
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

$personMale = new Man('Петя', 'мужик');
$personMale->greeting();

echo '<br>';

$personFemale = new Woman('Маша', 'девочка');
$personFemale->greeting();
