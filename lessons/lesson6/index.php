<?php

// мы используем сессию для хранения токена
// не забываем стартовать сессию в самом начале
session_start();

// в переменную $db_config записываем данные
// ------------------------------------
// в переменные можно записывать данные как значение
// из php-файла, если в нем есть return (смотри config.php)
$db_config = require 'config.php';

// подключаем файл с основными функциями
require 'lib.php';

// получаем название контроллера из адресной строки
// http://localhost/index.php?action=add
// http://localhost/index.php?action=edit
// если там пусто - по умолчанию это будет 'home'
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// формируем название нужного файла контроллера
// в папке controllers должен быть файл php
// с названием, соответствующим пришедшему из адресной строки
$action_file = 'controllers/' . $action . '.php';

// проверяем есть ли такой файл и подключаем его
// иначе выводим шаблон с сообщением об ошибке
if(file_exists($action_file)) {
    require $action_file;
} else {
    echo template('templates/error.php');
}
