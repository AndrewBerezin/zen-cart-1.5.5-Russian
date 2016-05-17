<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
*/

define('HEADING_TITLE', 'Список скидок');

define('TABLE_HEADING_PRODUCTS', 'Товар');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Артикул');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Базовая цена/Скидки/Цена по акции');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Проценты');
define('TABLE_HEADING_AVAILABLE_DATE', 'Доступно с');
define('TABLE_HEADING_EXPIRES_DATE','Доступно по');
define('TABLE_HEADING_STATUS', 'Состояние');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_SPECIALS_PRODUCT', 'Товар:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Скидка:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Доступно по:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Доступно с:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Замечание:</b><ul><li>Вы можете показать скидку в виде процентов, например: <b>20%</b></li><li>Если вы хотите просто дать новую цену то используйте точку для разделения десятичных \'.\' (точка), например: <b>49.99</b></li><li>Если срок действия неограничен - не указывайте дату</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Базовая цена:');
define('TEXT_INFO_DISPLAY_PRICE', 'Отображаемая цена:');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступно с:');
define('TEXT_INFO_EXPIRES_DATE', 'Доступно по:');
define('TEXT_INFO_STATUS_CHANGE', 'Статус изменён:');
define('TEXT_IMAGE_NONEXISTENT', 'Нет картинки');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Удалить скидку');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить скидку для товара?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Успешно: Обновите цену и дату');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Внимание: ID товара не найден');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Внимание: ID товара уже участвует в скидках');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Предупреждение: ID товара не действителен... ничего не добавлено...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Добавление скидки по ID товара');
define('TEXT_INFO_PRE_ADD_INTRO', 'Вы можете вручную назначить скидку по ID товара');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Введите ID товара: ');
define('TEXT_INFO_MANUAL', 'Добавление товара по ID  в скидки');

// EOF