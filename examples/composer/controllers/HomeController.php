<?php
namespace Epic\Controllers;

use Epic\Models;

class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		echo 'Вызван конструктор класса HomeController<br>';
	}

	public function model()
	{
		echo 'Вызван метод model у класса HomeController<br>';
		$model = new Models\Message();
	}
}

echo 'Подключен файл controllers/HomeController.php<br>';