<?php

try {
     $db = new PDO('mysql:localhost');
} catch (PDOException $e) {
    echo 'Ошибка при подключении к базе данных!';
}
