<?php

$names[] = ['name' => 'Ivan', 'gender' => 'male'];
$names[] = ['name' => 'Mia', 'gender' => 'female'];

$str  = '<?xml version="1.0"?>';
$str .= '<root>';
foreach ($names AS $person) {
    $str .= '<person>';
    $str .= '<name>' . $person['name'] . '</name>';
    $str .= '<gender>' . $person[gender] . '</gender>';
    $str .= '</person>';
}
$str .= '</root>';

file_put_contents('my.xml', $str);