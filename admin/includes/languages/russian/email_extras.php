<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Wed Oct 28 13:08:12 2015 -0400 Modified in v1.5.5 $
 */

  define ('EMAIL_LOGO_FILENAME', 'ru/header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');

  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','От:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO','Послать:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE','Только для внутреннего использования:');
  define('OFFICE_LOGIN_NAME','Login:');
  define('OFFICE_LOGIN_EMAIL','Login e-mail:');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_IP_ADDRESS','IP Адрес:');
  define('OFFICE_HOST_ADDRESS','Адрес хоста:');
  define('OFFICE_DATE_TIME','Дата и Время:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Этот адрес электронной почты был получен нами от одного из наших покупателей. Если Вам кажется, что этот адрес к нам попал по ошибке, пожалуйста напишите нам об этом на адрес %s');
  define('EMAIL_SPAM_DISCLAIMER','');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_catalog_href_link() . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[СЕРТИФИКАТ]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[КУПОН НА СКИДКУ]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[СТАТУС ЗАКАЗА]');
  define('TEXT_UNSUBSCRIBE', "\n\nЧтобы отписаться от писем из нашего магазина - просто перейдите по этой ссылке:\n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Отключено');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Админ предупреждение: Добавлен новый администратор.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Админ предупреждение: В магазин добавлен новый администратор (%s). Добавил администратор %s.' . "\n\n" . 'If you or an authorized administrator did not initiate this change, it is advised that you verify your site security immediately.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Админ предупреждение: Удалён администратор.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administrative alert: Администратор (%s) был удалён из магазина. Удалил администратор %s.' . "\n\n" . 'If you or an authorized administrator did not initiate this change, it is advised that you verify your site security immediately.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Админ предупреждение: Изменён администратор.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Админ предупреждение: У администратора (%s) был изменён адрес email. Старое значение (%s), новое значение (%s). Изменил администратор (%s).');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Админ предупреждение: У администратора (%s) было изменено имя. Старое значение (%s), новое значение (%s). Изменил администратор (%s).');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Админ предупреждение: У администратора (%s) был изменён профиль. Старое значение (%s), новое значение (%s). Изменил администратор (%s).');

// EOF