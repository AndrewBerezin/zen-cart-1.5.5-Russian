<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
*/
define('HEADING_TITLE', 'EZ-страницы');
define('TABLE_HEADING_PAGES', 'Название страницы');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_VSORT_ORDER', 'Сортировка в боковых боксах');
define('TABLE_HEADING_HSORT_ORDER', 'Сортировка в Footer');
define('TEXT_PAGES_TITLE', 'Название страницы:');
define('TEXT_PAGES_HTML_TEXT', 'HTML содержимое:');
define('TABLE_HEADING_DATE_ADDED', 'Дата создания:');
define('TEXT_PAGES_STATUS_CHANGE', 'Статус изменен: %s');
define('TEXT_INFO_DELETE_INTRO', 'Вы уверены что хотите удалить эту страницу?');
define('SUCCESS_PAGE_INSERTED', 'Успешно: Страница создана.');
define('SUCCESS_PAGE_UPDATED', 'Успешно: Страница обновлена.');
define('SUCCESS_PAGE_REMOVED', 'Успешно: Страница удалена.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Успешно: Статус страницы обновлен.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Ошибка: Требуется название страницы.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Ошибка: Неизвестный статус.');
define('ERROR_MULTIPLE_HTML_URL', 'Ошибка: Вы указали несколько значений, когда может быть использовано только одно ...<br />Определите только: HTML содержимое -или- Внутренний линк -или- Абсолютный линк<br />Если Вы используете HTML-редактор, то обязательно проверьте HTML содержимое, там могли остаться служебные теги');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Шапка (Header):');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Боковой бокс:');
define('TABLE_HEADING_STATUS_FOOTER', 'Подвал (Footer):');
define('TABLE_HEADING_STATUS_TOC', 'Tаблица Содержимого (ТС):');
define('TABLE_HEADING_CHAPTER', 'Глава:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Открыть в новом окне:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Страница в режиме SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> страниц)');
define('IMAGE_NEW_PAGE', 'Новая страница');
define('TEXT_INFO_PAGE_IMAGE', 'Картинка');
define('TEXT_INFO_CURRENT_IMAGE', 'Текущая картинка:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Выберите страницу ...');

define('TEXT_HEADER_SORT_ORDER', 'Сортировка:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Сортировка:');
define('TEXT_FOOTER_SORT_ORDER', 'Сортировка:');
define('TEXT_TOC_SORT_ORDER', 'Сортировка:');
define('TEXT_CHAPTER', 'ПРЕД/СЛЕД глава:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Глава:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Порядок сортировки в Header выводит список названий дополнительных страниц в одну строку согласно указанной сортировки; Порядок сортировки должен быть больше нуля.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Порядок сортировки в боковых боксах выводит названия дополнительных страниц в вертикальном меню согласно порядка сортировки; Порядок сортировки должен быть больше нуля, иначе программа расценит их как HTML текст.');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Порядок сортировки в Footer выводит список названий дополнительных страниц в одну строку согласно указанной сортировки; Порядок сортировки должен быть больше нуля.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TC (Таблица Содержимого). Данный порядок сортировки используется когда ссылки названий дополнительных страниц опрделены как одиночные строки в (header/footer, и т.д.) или вертикальные, в зависимости от решаемых задач; Порядок сортировки должен быть больше нуля.');
define('TEXT_CHAPTER_EXPLAIN', 'В страницах используемых как TC (Таблицы Содержимого) порядок сортировки отображается в ссылке ПРЕД/СЛЕД. Ссылки в TC будут отображаться в соответствии с порядком сортировки.');

define('TEXT_ALT_URL', 'Внутренний линк:');
define('TEXT_ALT_URL_EXPLAIN', 'Если указан этот вид ссылки, содержимое страницы будет проигнорировано и ВНУТРЕННИЙ линк будет использован чтобы создать ссылку.<br />Например:<ul><li>для Отзывов: index.php?main_page=reviews</li><li>для Профиля покупателя: index.php?main_page=account и будет отмечено как SSL-страница</li></ul>');

define('TEXT_ALT_URL_EXTERNAL', 'Внешний линк:<br />обязательно указывайте с http://');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Если указан этот вид ссылки, содержимое страницы будет проигнорировано и ВНЕШНИЙ линк будет использован чтобы создать ссылку.<br />Например: http://www.ecommerce-service.com');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Порядок сортировки: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Глава/TC');
define('TEXT_SORT_HEADER_TITLE', 'Шапка (Header)');
define('TEXT_SORT_SIDEBOX_TITLE', 'Боковой бокс');
define('TEXT_SORT_FOOTER_TITLE', 'Подвал (Footer)');
define('TEXT_SORT_PAGE_TITLE', 'Название страницы');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID страницы, Название');

define('TEXT_PAGE_TITLE', 'Название:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>ВНИМАНИЕ: Указаны несколько видов ссылок</strong>');

// EOF