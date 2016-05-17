<?php
/**
 * @package 
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
*/

define('EMAIL_TEXT_SUBJECT', 'Ваш заказ');
define('EMAIL_TEXT_HEADER', 'Подтверждение заказа');
define('EMAIL_TEXT_FROM',' от ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Благодарим Вас за покупку в нашем магазине!');
define('EMAIL_DETAILS_FOLLOW','Детали Вашего заказа.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Номер заказа:');
define('EMAIL_TEXT_INVOICE_URL', 'Подробности заказа:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Кликните здесь для получения подробностей заказа');
define('EMAIL_TEXT_DATE_ORDERED', 'Дата заказа:');
define('EMAIL_TEXT_PRODUCTS', 'Наименование');
define('EMAIL_TEXT_SUBTOTAL', 'Итого:');
define('EMAIL_TEXT_TAX', 'Налоги:     ');
define('EMAIL_TEXT_SHIPPING', 'Доставка: ');
define('EMAIL_TEXT_TOTAL', 'Всего:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Адрес доставки');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Адрес для выписывания счета');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Метод оплаты');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'через');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' N');
define('HEADING_ADDRESS_INFORMATION','Адрес');
define('HEADING_SHIPPING_METHOD','Способ доставки');

// EOF