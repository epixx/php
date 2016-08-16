<?php

// знакомая вам функция подключения к базе данных
// но теперь $config нужно передавать как аргумент
// это правильнее, так как настройки обычно хранятся
// и редактируются отдельно
function connection($config)
{
    static $connection;
    if (empty($connection)) {
        // $dsn потому что эта строка - имя источника данных (Data Source Name)
        // смотри доки: http://php.net/manual/ru/pdo.construct.php
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $connection = new PDO ($dsn, $config['user'], $config['password'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $config['encoding']
        ]);
    }
    return $connection;
}

// немного исправленный шаблонизатор
// но суть осталась та же, убрано исключение,
// если файла не существует, то вернет пустую строку
function template($filename, $data = [])
{
    $content = '';
    if (file_exists($filename)) {
        ob_start();
        extract($data);
        require $filename;
        $content = ob_get_contents();
        ob_end_clean();
    }
    return $content;
}

// исправленная функция генерации токена
// она короче и каждый раз генерит новый токен
// исправлено название сессии на token как более логичное
function makeToken()
{
    $token = md5(rand(0, PHP_INT_MAX));
    $_SESSION['token'] = $token;
    return $token;
}

// проверка токена, токен тоже нужно передавать как аргумент
function checkToken($token)
{
    return ($token == $_SESSION['token']);
}
