<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
*/

define('HEADING_TITLE', 'Рекомендуемые товары');

define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_PRODUCTS_MODEL','Артикул');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Цена/Скидка/Акция');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Проценты');
define('TABLE_HEADING_AVAILABLE_DATE', 'Доступно с:');
define('TABLE_HEADING_EXPIRES_DATE','Срок истекает:');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_FEATURED_PRODUCT', 'Товар:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Срок истекает:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Доступно с:');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Базовая цена:');
define('TEXT_INFO_PERCENTAGE', 'Проценты:');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступно с:');
define('TEXT_INFO_EXPIRES_DATE', 'Срок истекает:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменение статуса:');
define('TEXT_IMAGE_NONEXISTENT', 'Нет картинки');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Удалить товар из рекомендуемых товаров');
define('TEXT_INFO_DELETE_INTRO', 'Вы уверены что хотите удалить этот товар?');

define('SUCCESS_FEATURED_PRE_ADD', 'Успешно: Рекомендуемые. Скорректируйте даты.');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Предупреждение: Не указан код товара. Ничего не добавлено.');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Предупреждение: Код товара уже определён в Рекомендуемых. Ничего не добавлено.');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Предупреждение: Неверный ID товара... ничего не добавлено...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Вручную новый Рекомендуемый указав код товара');
define('TEXT_INFO_PRE_ADD_INTRO', 'В больших базах данных Вы можете вручную добавлять рекомендуемые товары указаывая их код<br /><br />Лучше использовать это когда страница перезагружается слишком долго и выбирать товар из выпадающего списка слишком неудобно из-за большого объёма этого списка.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Добавьте коды Рекомендуемых товаров: ');
define('TEXT_INFO_MANUAL', 'Код товара был добавлен вручную в Рекомендуемые');

// EOF