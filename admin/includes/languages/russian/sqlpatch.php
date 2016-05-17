<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
*/

  define('HEADING_TITLE', 'Установка SQL-патчей');
  define('HEADING_WARNING', 'ПЕРЕД ВЫПОЛНЕНИЕМ ЗАПРОСОВ СДЕЛАЙТЕ РЕЗЕРВНУЮ КОПИЮ ВСЕЙ БД!!!');
  define('HEADING_WARNING2', 'Все инсталяции Вы делаете на свой страх и риск!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'ВНИМАНИЕ: Скрипты установки новых версий базы данных Zen Cart нельзя запускать на этой странице.<br />Для обновления базы данных до новой версии загрузите новую директорию <strong>zc_install</strong> и запустите оттуда обновление (upgrade) базы данных.');
  define('TEXT_QUERY_RESULTS', 'Результаты запросов:');
  define('TEXT_ENTER_QUERY_STRING', 'Ведите запрос для выполнения<br />Убедитесь, что в конце запросов стоит ";"');
  define('TEXT_QUERY_FILENAME', 'Загрузить файл:');
  define('ERROR_NOTHING_TO_DO', 'Ошибка: Не введен запрос в поле запросов или не определен файл.');
  define('TEXT_CLOSE_WINDOW', '[ закрыть окно ]');
  define('SQLPATCH_HELP_TEXT', 'Инструмент SQLPATCH позволяет Вам устанавливать SQL-патчи помещая код SQL непосредственно здесь в текстовом окне или загружая SQL-файл с запросами SQL.<br />
При подготовке запросов SQL для использования этим инструментом, НЕ ВКЛЮЧАЙТЕ префикс таблиц, так как этот инструмент сделает это автоматически, используя префикс из файла admin/includes/configure.php (константа DB_PREFIX).<br /><br />
Вводимые или загружаемые команды могут начинаться только с указанных команд и должны быть набраны ПРОПИСНЫМИ буквами:<br />
<ul><li>DROP TABLE IF EXISTS</li>
<li>CREATE TABLE</li>
<li>INSERT INTO</li>
<li>ALTER TABLE</li>
<li>UPDATE (только для одной таблицы)</li>
<li>DELETE FROM</li>
<li>DROP INDEX</li>
<li>CREATE INDEX</li>
<li>SELECT </li></ul>' .
'<h2>Расширенный метод</h2>
Данные методы могут быть использованы, если необходимо выполнение более сложных, комплексных запросов:<br />
Чтобы выполнить блок кода вместе так, чтобы они воспринимались как один запрос MySQL, Вам необходимо установить значение
"<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>". В этом случае парсер будет трактовать xxx команд как один запрос.<br />
Если Вы будете запускать этот запрос в phpMyAdmin или чём-то подобном, то закомментированный "#NEXT..." будет проигнорирован и SQL-скрипт будет нормально выполнен.<br />
<br /><strong>Внимание: </strong>SELECT.... FROM... и LEFT JOIN запросы требуют чтобы "FROM" и "LEFT JOIN" были в отдельных строках чтобы парчер мог правильно их распознать и добавить префикс к таблицам.<br /><br />
<em><strong>Примеры:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS', 'Невозможно создать таблицу %s, так как она уже существует.');
  define('REASON_TABLE_DOESNT_EXIST', 'Невозможно удалить таблицу %s, так как она не существует.');
  define('REASON_TABLE_NOT_FOUND', 'Невозможно выполнить, так как таблица %s не существует. ');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS', 'Невозможно добавить ключ конфигурациии "%s", так как он уже существует.');
  define('REASON_COLUMN_ALREADY_EXISTS', 'Невозможно добавить колонку %s, так как он уже существует.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP', 'Невозможно удалить колонку %s, так как она не существует.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE', 'Невозможно изменить колонку %s, так как она не существует.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS', 'Невозможно добавить ключ конфигурациии prod-type-layout "%s", так как он уже существует.');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP', 'Невозможно удалить индекс %s в таблице %s, так как он не существует.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP', 'Невозможно удалить первичный ключ в таблице %s, так как он не определён.');
  define('REASON_INDEX_ALREADY_EXISTS', 'Невозможно создать индекс %s в таблице %s, так как он уже существует.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS', 'Невозможно добавить первичный ключ в таблицу %s, так как он уже определён.');
  define('REASON_NO_PRIVILEGES', 'Пользователь ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' не имеет привилегий %s в базе данных ' . DB_DATABASE . '.');

// EOF