<?php
namespace Epic\Controllers;

use Epic\Models;

class UserController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		echo 'Вызван конструктор класса UserController<br>';
	}

	public function model()
	{
		echo 'Вызван метод model у класса UserController<br>';
		$model = new Models\User();
	}
}

echo 'Подключен файл controllers/UserController.php<br>';