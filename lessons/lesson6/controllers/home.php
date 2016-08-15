<?php

$db = connection($db_config);

$stmt = $db->prepare('SELECT * FROM `messages`');
$stmt->execute();
$data = $stmt->fetchAll();

echo template('templates/home.php', [
    'posts' => $data
]);
