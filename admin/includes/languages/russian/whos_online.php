<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Mon Oct 19 01:43:02 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Кто сейчас в магазине');
define('TABLE_HEADING_ONLINE', 'В магазине');

define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Имя');
define('TABLE_HEADING_IP_ADDRESS', 'IP адрес');
define('TABLE_HEADING_SESSION_ID', 'Сессия');
define('TABLE_HEADING_ENTRY_TIME', 'Фамилия');
define('TABLE_HEADING_LAST_CLICK', 'Последний клик');
define('TIME_PASSED_LAST_CLICKED', '<strong>Времени после клика:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Последний URL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_SHOPPING_CART', 'Корзина покупателя');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Предварительная сумма');
define('TEXT_NUMBER_OF_CUSTOMERS', 'В настоящее время %s посетителей на сайте');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ОБНОВИТЬ СПИСОК');
define('WHOS_ONLINE_LEGEND_TEXT','Обозначения:');
define('WHOS_ONLINE_ACTIVE_TEXT','Активная корзина');
define('WHOS_ONLINE_INACTIVE_TEXT','Неактивная корзина');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Активных корзин нет');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Неактивных корзин нет');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Неактивность - это когда последний клик был сделан >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Неактивные корзины после >');
define('WHOS_ONLINE_REMOVED_TEXT','будут удалены');

define('TEXT_SESSION_ID', '<strong>ID сессии:</strong> ');
define('TEXT_HOST', '<strong>Хост:</strong> ');
define('TEXT_USER_AGENT', '<strong>Браузер:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Пустая корзина</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Исключить роботов?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Исключить IP администратора?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default

define('TEXT_DUPLICATE_IPS', 'Дублирующиеся IP-адреса: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Всего уникальных посетителей: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Обновлять ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'каждые %s секунд.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Вручную');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5с');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15с');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30с');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1м');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5м');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10м');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14м');

// EOF