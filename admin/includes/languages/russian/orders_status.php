<?php
/**
 * @package admin
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
*/

define('HEADING_TITLE', 'Статус заказов');

define('TABLE_HEADING_ORDERS_STATUS', 'Статус заказов');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте, пожалуйста, любые необходимые изменения');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Статус заказов:');
define('TEXT_INFO_INSERT_INTRO', 'Введите, пожалуйста, новый статус заказа, на основе исходных данных');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить этот статус заказа?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Новый статус заказа');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Изменить статус');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Удалить');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Ошибка: Статус заказа по умолчанию не может быть удален, измените статус и попробуйте снова.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Ошибка: Этот статус в настоящее время используется.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Ошибка: Этот статус используется сейчас в истории заказов.');

// EOF