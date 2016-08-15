# Установка Composer на OpenServer
[Взято отсюда >>>](http://nikolaev-web.ru/blog/installing_the_composer_on_openServer/)

Убеждаемся, что версия PHP не ниже 5.3, допустим что стоит 5.6.

Открываем `Дополнительно` -> `Конфигурация` -> `PHP 5.6`

Ищем строку `extension=php_openssl.dll` и убеждаемся, что она не закомментирована (не стоит точка с запятой перед строкой).

Открываем  `Дополнительно` -> `Консоль`, переходим к текущему модулю PHP:

```
cd modules/php/PHP-5.6/
```

Затем выполняем команду:

```
php -r "readfile('https://getcomposer.org/installer');" | php
```

Если успех, то в консоли видим примерно следующее:

```
All settings correct for using Composer
Downloading 1.2.0...

Composer successfully installed to: C:\OpenServer\modules\php\PHP-5.6\composer.phar
Use it: php composer.phar
```
Проверяем какая версия стоит командой:

```
php composer.phar -V
```

В ответ можем получить что-то вроде:

```
Composer version 1.2.0 2016-07-19 01:28:52
```

Следующая команда создает `.bat` файл для краткости обращения к Composer:
```
echo @php "%~dp0composer.phar" %*>composer.bat
```

Проверяем:
```
composer -V
```

Если всё в порядке и вы снова видите версию, значит дальше можно вместо `php composer.phar` пользоваться просто `composer`.