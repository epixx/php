<?php
namespace Epic\Models;

abstract class Model
{
	public function __construct()
	{
		echo 'Вызван конструктор абстрактного класса Model<br>';
	}
}

echo 'Подключен файл models/Model.php<br>';