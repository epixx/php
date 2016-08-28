<?php
namespace Epic;

require 'vendor/autoload.php';

$controller = new Controllers\HomeController();
$controller->model();

$urlfy = \URLify::filter('Маленький пушистый зайчик');
echo 'Результат вызова библиотеки URLify: ' . $urlfy;