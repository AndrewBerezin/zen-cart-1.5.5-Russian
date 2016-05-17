<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
*/

define('HEADING_TITLE', 'Боксы в колонках');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Название бокс-файла');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'ЛЕВАЯ/ПРАВАЯ КОЛОНКА<br />Статус');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'ОДНА КОЛОНКА<br />Статус');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'ЛЕВАЯ или ПРАВАЯ<br />Колонка');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'ЛЕВАЯ/ПРАВАЯ КОЛОНКА<br />Порядок сортировки');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'ОДНА КОЛОНКА<br />Порядок сортировки');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_INFO_LAYOUT_BOX','Выбранные боксы: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Название бокса:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Помещен в (Если только одна колонка, то эти настройки игнорируются):');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Левая/Правая колонка-статус:');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Одна колонка-статус:');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','ДА= 1 НЕТ=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Левая/Правая колонка-порядок сортировки:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Одна колонка-порядок сортировки:');
define('TEXT_INFO_INSERT_INTRO', 'Установите новый бокс');
define('TEXT_INFO_DELETE_INTRO', 'Вы уверены что хотите удалить этот бокс?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Новый бокс');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Изменить бокс');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Удалить бокс');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Удалить несуществующий бокс из списка: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','Замечание: Вы не удаляете файлы, поэтому Вы всегда сможете вернуть его в список.<br /><br /><strong>Delete box name: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Обновить порядок сортировки боксов к значению установленному как ОСНОВНОЙ ПОРЯДОК СОРТИРОВКИ для этого темплейта: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Это действие не удаляет боксы. Просто боксы будут располагаться в другом порядке');
define('TEXT_INFO_BOX_DETAILS','Детали бокса: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Директория шаблона');

define('TABLE_HEADING_LAYOUT_TITLE', 'Заголовок');
define('TABLE_HEADING_LAYOUT_VALUE', 'Значение');
define('TABLE_HEADING_ACTION', 'Действие');


define('TEXT_MODULE_DIRECTORY', 'Директория расположения сайта:');
define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Расположение');
define('BOX_LAYOUT_COLUMNS', 'Управление колонками');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>НЕ СУЩЕСТВУЕТ</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Бокс успешно удален из этого шаблона: ');
define('SUCCESS_BOX_RESET','Обновление порядка расположения боксов успешно завершено к статусу ОСНОВНОЙ ПОРЯДОК СОРТИРОВКИ: ');
define('SUCCESS_BOX_UPDATED','Настройки бокса успешно обновлены: ');

define('TEXT_ON',' ДА ');
define('TEXT_OFF',' НЕТ ');
define('TEXT_LEFT',' ЛЕВАЯ ');
define('TEXT_RIGHT',' ПРАВАЯ ');

// EOF