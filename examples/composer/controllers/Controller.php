<?php
namespace Epic\Controllers;

abstract class Controller
{
	public function __construct()
	{
		echo 'Вызван конструктор абстрактного класса Controller<br>';
	}
}

echo 'Подключен файл controllers/Controller.php<br>';