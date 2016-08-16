<?php

// если метод запроса POST, то есть пришли данные с формы
// то мы их записываем в базу данных
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (checkToken($_POST['token'])) {

        $db = connection($db_config);
        $stmt = $db->prepare('UPDATE `messages` SET `message`=:message WHERE `id`=:id');
        $stmt->execute([
            'id' => $_POST['id'],
            'message' => $_POST['message']
        ]);

    }
    header('Location: index.php');
}

// в ином случае получаем данные о сообщении
// и отображаем форму для редактирования
// тут необязательно использовать else
// потому что выше есть header('Location: index.php');
// которая перенаправит страницу и после header код не сработает

$db = connection($db_config);
$stmt = $db->prepare('SELECT * FROM `messages` WHERE `id`=:id');
$stmt->execute([ 'id' => $_GET['id'] ]);
$data = $stmt->fetch();

echo template('templates/edit.php', [
    'token' => makeToken(),
    'post' => $data
]);
