<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z drbyte $
 */


define('HEADING_TITLE', 'Послать письмо покупателю (покупателям)');

define('TEXT_CUSTOMER', 'Имя покупателя:');
define('TEXT_SUBJECT', 'Тема письма:');
define('TEXT_FROM', 'От:');
define('TEXT_MESSAGE', 'Текстовое <br />сообщение:');
define('TEXT_MESSAGE_HTML', 'HTML <br />сообщение:');
define('TEXT_SELECT_CUSTOMER', 'Выберите покупателя');
define('TEXT_ALL_CUSTOMERS', 'Все покупатели');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Для всех подписчиков новостей');
define('TEXT_ATTACHMENTS_LIST', 'Прицепить файл: ');
define('TEXT_SELECT_ATTACHMENT', 'Файл <br />на сервере: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD', 'Присоединить <br />для загрузки <br />файл: ');
define('TEXT_ATTACHMENTS_DIR', 'Каталог для загрузок: ');

define('NOTICE_EMAIL_SENT_TO', 'Уведомление: письмо отправлено %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Уведомление: ОШИБКА при отсылке писем всем получателям: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Не выбраны покупатели для отправки писем!');
define('ERROR_NO_SUBJECT', 'Ошибка: Не введена тема.');
define('ERROR_ATTACHMENTS', 'Ошибка:  Выберите что то одно.');

// EOF