<?php
namespace Epic\Models;

class User extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo 'Вызван конструктор класса User<br>';
	}
}

echo 'Подключен файл models/User.php<br>';