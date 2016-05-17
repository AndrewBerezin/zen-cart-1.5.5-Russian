<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
*/

define('HEADING_TITLE', 'Список Подарочных Сертификатов');

define('TABLE_HEADING_CUSTOMERS', 'Покупатели');
define('TABLE_HEADING_ORDERS_ID', 'Заказ-№.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Стоимость');
define('TABLE_HEADING_DATE_PURCHASED', 'Дата добавления');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Вы только что получили  ' . TEXT_GV_NAME . ' из нашего магазина.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'В целях безопасности эта сумма не была отослана Вам сразу же. ' .
                                          'Однако эта сумма закреплена за Вами. Вы можете посетить наш магазин и использовать сумму указанную в  ' . TEXT_GV_NAME . ' отослав по е-mail кому-нибудь из своих знакомых, либо использовав ее для себя, покупая в нашем магазине.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Вы купили ' . TEXT_GV_NAME . ' на сумму %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Спасибо за покупку!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', ' Покупка' . TEXT_GV_NAME);
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Заказ №');

define('TEXT_EDIT_ORDER','Редактиовать заказ ID# ');
define('TEXT_GV_NONE','Нет ' . TEXT_GV_NAME . ' для использования');

// EOF