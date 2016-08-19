<?php

abstract class Human
{
    public $name;
    protected $sex;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greeting()
    {
        echo 'Привет, меня зовут ' . $this->name . '! ';
        echo 'Я ' . $this->sex . '!';
    }

    abstract protected function setSex();
}

class Man extends Human
{
    public function __construct($name)
    {
        parent::__construct($name);
        self::setSex($sex);
    }

    public function greeting()
    {
        parent::greeting();
        echo ' И у меня есть борода!';
    }

    protected function setSex()
    {
        $this->sex = 'мужик';
    }
}

class Woman extends Human
{
    public function __construct($name)
    {
        parent::__construct($name);
        self::setSex($sex);
    }

    public function greeting()
    {
        parent::greeting();
        echo ' Зато у меня есть грудь!';
    }

    protected function setSex()
    {
        $this->sex = 'девочка';
    }
}

$personMale = new Man('Петя');
$personMale->greeting();

echo '<br>';

$personFemale = new Woman('Маша');
$personFemale->greeting();

echo '<br>';

$personUnknown = new Man('Вася');
$personUnknown->greeting();
