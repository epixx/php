<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Epic Blog</title>
</head>
<body>
    <form action="index.php?action=add" method="post">
    	<input type="hidden" name="token" value="<?= $token ?>">
    	Текст: <input type="text" name="message">
    	<button type="submit">Добавить сообщение</button>
    </form>
</body>
</html>