<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return 'Вы пытаетесь напечатать объект! Не надо так...';
    }
}

$user = new User('epixx');
echo $user;
