<?php

// если метод запроса POST, то есть пришли данные с формы
// то мы их записываем в базу данных
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (checkToken($_POST['token'])) {

        $db = connection($db_config);
        $stmt = $db->prepare('INSERT INTO `messages` SET `message`=:message, `date`=NOW()');
        $stmt->execute([
            'message' => $_POST['message']
        ]);

    }
    header('Location: index.php');
}

// в ином случае отображаем форму
// тут необязательно использовать else
// потому что выше есть header('Location: index.php');
// которая перенаправит страницу и после header код не сработает

echo template('templates/add.php', [
    'token' => makeToken()
]);
