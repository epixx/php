<?php

$names[] = ['name' => 'Ivan', 'gender' => 'male'];
$names[] = ['name' => 'Mia', 'gender' => 'female'];

$json = json_encode($names, JSON_UNESCAPED_UNICODE);

file_put_contents('my.json', $json);