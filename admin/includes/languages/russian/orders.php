<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Sun Feb 28 02:42:59 2016 -0500 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Заказы');
define('HEADING_TITLE_DETAILS', 'Детали заказа');
define('HEADING_TITLE_SEARCH', 'ID заказа:');
define('HEADING_TITLE_STATUS', 'Статус:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Поиск по наименованию товара, <strong>ID:XX</strong> или артикулу');
define('HEADING_TITLE_SEARCH_ALL','Поиск: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Поиск по товарам: ');
define('TEXT_RESET_FILTER', 'Удалить поисковый фильтр');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Поисковый фильтр: ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Оплата<br />Доставка');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Адрес доставки и оплаты не совпадают ');

define('TABLE_HEADING_COMMENTS', 'Комментарий');
define('TABLE_HEADING_CUSTOMERS', 'Покупатель');
define('TABLE_HEADING_ORDER_TOTAL', 'Заказ итого');
define('TABLE_HEADING_DATE_PURCHASED', 'Дата покупки');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_TYPE', 'Тип заказа');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_QUANTITY', 'Количество.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Артикул');
define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_TAX', 'Налог');
define('TABLE_HEADING_TOTAL', 'Всего');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Цена (без налога)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Цена (с налогом)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Общая (без налога)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Общая (с налогом)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Покупатель уведомлён');
define('TABLE_HEADING_DATE_ADDED', 'Дата добавления');

define('ENTRY_CUSTOMER', 'Покупатель:');
define('ENTRY_CUSTOMER_ADDRESS', 'Адрес покупателя:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'Продано:');
define('ENTRY_DELIVERY_TO', 'Доставить:');
define('ENTRY_SHIP_TO', 'Доставка:');
define('ENTRY_SHIPPING_ADDRESS', 'Адрес доставки:');
define('ENTRY_BILLING_ADDRESS', 'Адрес плательщика:');
define('ENTRY_PAYMENT_METHOD', 'Метод оплаты:');
define('ENTRY_CREDIT_CARD_TYPE', 'Тип кредитной карты:');
define('ENTRY_CREDIT_CARD_OWNER', 'Владелец кредитной карты:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Номер кредитной карты:');
define('ENTRY_CREDIT_CARD_CVV', 'Номер CVV:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Карта действительна до:');
define('ENTRY_SUB_TOTAL', 'Итого:');
define('ENTRY_TAX', 'Налог:');
define('ENTRY_SHIPPING', 'Доставка:');
define('ENTRY_TOTAL', 'Всего:');
define('ENTRY_DATE_PURCHASED', 'Дата покупки:');
define('ENTRY_STATUS', 'Статус:');
define('ENTRY_DATE_LAST_UPDATED', 'Последнее изменение:');
define('ENTRY_NOTIFY_CUSTOMER', 'Уведомить покупателя:');
define('ENTRY_NOTIFY_COMMENTS', 'Добавить комментарий:');
define('ENTRY_PRINTABLE', 'Распечатать счёт');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Удалить заказ');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить этот заказ?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Пересчитать количество товара на складе');
define('TEXT_DATE_ORDER_CREATED', 'Дата создания:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Последние изменения:');
define('TEXT_INFO_PAYMENT_METHOD', 'Метод оплаты:');
define('TEXT_PAID', 'Оплачен');
define('TEXT_UNPAID', 'Не оплачен');

define('TEXT_ALL_ORDERS', 'Все заказы');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Обновление заказа');
define('EMAIL_TEXT_ORDER_NUMBER', 'Номер заказа:');
define('EMAIL_TEXT_INVOICE_URL', 'Подробный счёт:');
define('EMAIL_TEXT_DATE_ORDERED', 'Дата заказа:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Комментарии по Вашему заказу: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Ваш заказ получил новый статус:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Новый статус:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Ответьте на это письмо если у Вас есть вопросы.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Ошибка: Такого заказа у нас не существует.');
define('SUCCESS_ORDER_UPDATED', 'Заказ был успешно скорректирован.');
define('WARNING_ORDER_NOT_UPDATED', 'Предупреждение: Ничего не измененно. Заказ не был скорректирован.');

define('ENTRY_ORDER_ID','Заказ №');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">Бесплатно</span>');

define('TEXT_DOWNLOAD_TITLE', 'Статус заказа загрузки');
define('TEXT_DOWNLOAD_STATUS', '');
define('TEXT_DOWNLOAD_FILENAME', 'Название файла');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Дней');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Кол-во раз');

define('TEXT_DOWNLOAD_AVAILABLE', 'Доступно');
define('TEXT_DOWNLOAD_EXPIRED', 'Срок истёк');
define('TEXT_DOWNLOAD_MISSING', 'Нет на сервере');

define('IMAGE_ICON_STATUS_CURRENT', 'Статус - Доступно');
define('IMAGE_ICON_STATUS_EXPIRED', 'Статус - Срок истёк');
define('IMAGE_ICON_STATUS_MISSING', 'Статус - Пропущено');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Загрузка успешно разрещена');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Загрузка успешно запрещена');
define('TEXT_MORE', '... далее');

define('TEXT_INFO_IP_ADDRESS', 'Адрес IP: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Удалить CVV из БД');
define('TEXT_DELETE_CVV_REPLACEMENT','Удалено');
define('TEXT_MASK_CC_NUMBER','Спрятать этот номер');

define('TEXT_INFO_EXPIRED_DATE', 'Дата окончания:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Количество закончившихся:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Комментарии<br />Покупателей');
define('TEXT_COMMENTS_YES', 'Комментарии Покупателей - ДА');
define('TEXT_COMMENTS_NO', 'Комментарии Покупателей - НЕТ');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Поиск покупателя');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Недействительный статус заказа)</span>');

define('BUTTON_TO_LIST', 'Список заказов');
define('SELECT_ORDER_LIST', 'Перейти к заказу:');

// EOF