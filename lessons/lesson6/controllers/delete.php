<?php

$db = connection($db_config);
$stmt = $db->prepare('DELETE FROM `messages` WHERE `id`=:id');
$stmt->execute([ 'id' => $_GET['id'] ]);
header('Location: index.php');
