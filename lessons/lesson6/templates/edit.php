<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Epic Blog</title>
</head>
<body>
    <form action="index.php?action=edit" method="post">
    	<input type="hidden" name="token" value="<?= $token ?>">
    	<input type="hidden" name="id" value="<?= $post['id'] ?>">
    	Текст: <input type="text" name="message" value="<?= $post['message'] ?>">
    	<button type="submit">Сохранить сообщение</button>
    </form>
</body>
</html>