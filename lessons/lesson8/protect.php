<?php

class Human
{
    public $name;
    protected $sex;

    public function __construct($name, $sex)
    {
        $this->name = $name;
        self::setSex($sex);
    }

    public function greeting()
    {
        echo 'Привет, меня зовут ' . $this->name . '! ';
        echo 'Я ' . $this->sex . '!';
    }

    private function setSex($sex)
    {
        if ($sex == 'мужик' || $sex == 'девочка') {
            $this->sex = $sex;
        } else {
            echo 'Неверный пол, товарищ!';
            exit();
        }
    }
}

class Man extends Human
{
    public function greeting()
    {
        parent::greeting();
        echo ' И у меня есть борода!';
    }
}

class Woman extends Human
{
    public function greeting()
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

echo '<br>';

$personUnknown = new Human('Вася', 'котик');
$personMale->greeting();
