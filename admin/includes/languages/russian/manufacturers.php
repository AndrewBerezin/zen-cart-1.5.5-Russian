<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
*/

define('HEADING_TITLE', 'Список производителей');

define('TABLE_HEADING_MANUFACTURERS', 'Производитель');
define('TABLE_HEADING_ACTION', 'Действия');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Новый производитель');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Изменить');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Удалить');

define('TEXT_MANUFACTURERS', 'Производитель:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_PRODUCTS', 'Товары:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Загрузить в директорию:');
define('TEXT_IMAGE_NONEXISTENT', 'Нет изображения');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Или введите имя файла картинки на сервере:</strong>');

define('TEXT_NEW_INTRO', 'Пожалуйста, внесите требуемую информацию для нового производителя');
define('TEXT_EDIT_INTRO', 'Пожалуйста, внесите необходимые изменения');

define('TEXT_MANUFACTURERS_NAME', 'Название:');
define('TEXT_MANUFACTURERS_IMAGE', 'ЛОГО:');
define('TEXT_MANUFACTURERS_URL', 'Сайт производителя URL:');

define('TEXT_DELETE_INTRO', 'Вы на самом деле хотите удалить этого производителя?');
define('TEXT_DELETE_IMAGE', 'Удалить лого производителя?');
define('TEXT_DELETE_PRODUCTS', 'Удалить товары этого производителя? (включая обзоры, товары в специальных предложениях и предстоящие поступления)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ПРЕДУПРЕЖДЕНИЕ:</b> Следующие товары %s имеют связь с данным Производителем!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Я не могу записывать в этот директорий. Пожалуйста, установите разрешения доступа правильно в: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория не существует: %s');

// EOF