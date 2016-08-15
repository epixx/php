<?php

$xml = simplexml_load_file('students.xml');
foreach ($xml->students->student as $person) {
	echo $person->name . '<br>';
}

$json = file_get_contents('students.json');
$info = json_decode($json, true);
foreach ($info['students'] as $student) {
	echo $student['name'] . '<br>';
}
