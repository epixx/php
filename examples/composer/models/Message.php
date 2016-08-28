<?php
namespace Epic\Models;

class Message extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo 'Вызван конструктор класса Message<br>';
	}
}

echo 'Подключен файл models/Message.php<br>';