<?php

class MyExeption extends Exception
{
    protected $message = 'Хоть и мое, но неизвестное исключение!';

    public function __construct()
    {
        parent::__construct();
        $log = 'Ошибка в файле [' . __FILE__ . '] на строке [' . __LINE__ . ']' . PHP_EOL;
        file_put_contents('error.log', $log, FILE_APPEND);
    }
}

try {
    throw new MyExeption();
} catch (Exception $e) {
    echo $e->getMessage();
}
