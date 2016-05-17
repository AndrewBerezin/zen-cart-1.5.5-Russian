<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Sun Oct 18 23:54:03 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Учетные записи покупателей');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Имя');
define('TABLE_HEADING_LASTNAME', 'Фамилия');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Создана');
define('TABLE_HEADING_LOGIN', 'Последний вход');
define('TABLE_HEADING_ACTION', 'Действия');
define('TABLE_HEADING_PRICING_GROUP', 'Группа');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Подписка');
define('TABLE_HEADING_GV_AMOUNT', 'GV Баланс');

define('TEXT_DATE_ACCOUNT_CREATED', 'Дата создания учетной записи:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Последний вход:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Количество входов:');
define('TEXT_INFO_COUNTRY', 'Страна:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Кол-во отзывов:');
define('TEXT_DELETE_INTRO', 'Вы на самом деле хотите удалить покупателя?');
define('TEXT_DELETE_REVIEWS', 'Удалить %s обзор(ы)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Удалить покупателя');
define('TYPE_BELOW', 'Тип ниже');
define('PLEASE_SELECT', 'Выбрать одно');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Количество заказов:');
define('TEXT_INFO_LAST_ORDER','Последний заказ:');
define('TEXT_INFO_ORDERS_TOTAL', 'Всего:');
define('CUSTOMERS_REFERRAL', 'Реферал покупателя<br />Первый купон на скидку');
define('TEXT_INFO_GV_AMOUNT', 'GV Баланс');

define('ENTRY_NONE', 'Ни одного');

define('TABLE_HEADING_COMPANY','Компания');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Сменить пароль покупателя');
define('TEXT_PWDRESET_INTRO', 'Чтобы сменить пароль покупателя, введите новый пароль и подтвердите его. Новый пароль должен соответсвовать правилам создания пароля для покупателя.');
define('TEXT_CUST_NEW_PASSWORD', 'Новый пароль:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Подтвердите пароль:');
define('ERROR_PWD_TOO_SHORT', 'Ошибка: пароль короче, чем требуется.');
define('SUCCESS_PASSWORD_UPDATED', 'Пароль обновлён.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Ваш пароль был изменён администратором магазина. Новый пароль: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Изменён пароль');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Вы изменили пароль покупателя: ' . "\n" . '%s' . "\n\n" . 'ID администратора: %s');

define('CUSTOMERS_AUTHORIZATION', 'Статус доступа');
define('CUSTOMERS_AUTHORIZATION_0', 'Доступ разрешен');
define('CUSTOMERS_AUTHORIZATION_1', 'Ожидание разрешения - должен быть разрешен доступ для просмотра магазина');
define('CUSTOMERS_AUTHORIZATION_2', 'Ожидание разрешения - может быть допущен к просмотру, но не видеть цен');
define('CUSTOMERS_AUTHORIZATION_3', 'Ожидание разрешения - может просматривать с ценами, но не может покупать');
define('CUSTOMERS_AUTHORIZATION_4', 'Запрещён - Не разрешёно входить в магазин');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Внимание: Ваш магазин работает в режиме ограниченного доступа. Покупатель может только просматривать товары');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Внимание: Ваш магазин работает в режиме просмотра товара без показа цен. Покупатель может только просматривать товары без цен');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Ваш статус покупателя изменён. Спасибо за регистрацию в нашем магазине.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Статус покупателя изменён');

define('ADDRESS_BOOK_TITLE', 'Записи адресной книги');
define('PRIMARY_ADDRESS', '(основной адрес)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>ЗАМЕЧАНИЕ:</strong></span> Максимально доступно %s записей в адресной книге.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 из  ');

// EOF