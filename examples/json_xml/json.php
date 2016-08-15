<?php

$url = 'http://api.openweathermap.org/data/2.5/weather?id=498817&units=metric&appid=';

$json = file_get_contents($url);
$weather = json_decode($json, true);

// print_r($weather);
echo $weather['main']['temp'];
