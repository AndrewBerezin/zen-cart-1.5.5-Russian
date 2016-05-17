<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
*/

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Показывать сортировку: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal сортировка (новый - старый)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal сортировка (старый - новый)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID заказа(высокий - низкий), PayPal сортировка');
  define('TEXT_SORT_ZEN_ORDER_ID', 'ID заказа(низкий - высокий), PayPal сортировка');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Количество заказов (высокий - низкий)');
  define('TEXT_PAYMENT_AMOUNT', 'Количество заказов (низкий - высокий)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal моментальное уведомление о оплате');
  define('HEADING_PAYMENT_STATUS', 'Статус оплаты');
  define('TEXT_ALL_IPNS', 'Все');

  define('TABLE_HEADING_ORDER_NUMBER', 'Заказ #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Тип транзакции');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Статус оплаты');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Количество');
  define('TABLE_HEADING_ACTION', 'Действие');
  define('TABLE_HEADING_DATE_ADDED', 'Дата добалвения');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Количество записей в истории статусов');
  define('TABLE_HEADING_ENTRY_NUM', 'Номер записи');
  define('TABLE_HEADING_TRANS_ID', 'ID транзакции');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> IPN\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal детали регистрации покупателя');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal моментальное уведомление о оплате');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Адрес');
  define('TEXT_INFO_ORDER_NUMBER', 'Номер заказа');
  define('TEXT_INFO_TXN_TYPE', 'Тип транзакции');
  define('TEXT_INFO_PAYMENT_STATUS', 'Статус оплаты');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Количество');
  define('ENTRY_FIRST_NAME', 'Имя');
  define('ENTRY_LAST_NAME', 'Фамилия');
  define('ENTRY_BUSINESS_NAME', 'Должность');
  define('ENTRY_ADDRESS', 'Адрес');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID плательщика');
  define('ENTRY_PAYER_STATUS', 'Статус плательщика');
  define('ENTRY_ADDRESS_STATUS', 'Статус адреса');
  define('ENTRY_PAYMENT_TYPE', 'Тип оплаты');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Статус оплаты');
  define('TABLE_HEADING_PENDING_REASON', 'Причина ожидания');
  define('TABLE_HEADING_IPN_DATE', 'IPN дата');
  define('ENTRY_INVOICE', 'Счет');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID транзакции');
  define('ENTRY_PAYMENT_DATE', 'Дата оплаты');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Последнее изменение');
  define('ENTRY_MC_CURRENCY', 'MC валюта');
  define('ENTRY_MC_GROSS', 'MC брутто');
  define('ENTRY_MC_FEE', 'MC плата');
  define('ENTRY_PAYMENT_GROSS', 'Оплата брутто');
  define('ENTRY_PAYMENT_FEE', 'Оплата');
  define('ENTRY_SETTLE_AMOUNT', 'Определенное количество');
  define('ENTRY_SETTLE_CURRENCY', 'Определенная валюта');
  define('ENTRY_EXCHANGE_RATE', 'Обменный курс');
  define('ENTRY_CART_ITEMS', 'В коризне нет товаров');
  define('ENTRY_CUSTOMER_COMMENTS', 'Комментарии покупателя');
  define('TEXT_NO_IPN_HISTORY', 'IPN история не доступна');
  define('TEXT_TXN_SIGNATURE', 'Подпись транзакции');
  //end ADMIN text

// EOF