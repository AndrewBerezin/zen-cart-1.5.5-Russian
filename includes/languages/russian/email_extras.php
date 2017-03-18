<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Wed Oct 28 13:08:12 2015 -0400 Modified in v1.5.5 $
 */

    define ('EMAIL_LOGO_FILENAME', 'ru/header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! Искусство электронной коммерции');

  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','<strong>От:</strong>');
  define('OFFICE_EMAIL','<strong>Email:</strong>');

  define('OFFICE_SENT_TO','<strong>Кому:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Email:</strong>');

  define('OFFICE_USE','<strong>Служебная информация:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Имя:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Email:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Факс:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP адрес:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Хост адрес:</strong>');
  define('OFFICE_DATE_TIME','<strong>Дата и время:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');


// email disclaimer
  define('EMAIL_DISCLAIMER', 'Этот адрес e-mail был дан нам Вами или одним из наших клиентов. Если Вы уверены, что Вы получили этот e-mail ошибочно, пожалуйста сообщите нам по адресу %s ');
  define('EMAIL_SPAM_DISCLAIMER','Если Вы не согласны с содержанием письма и считаете это спамом - пожалуйста сообщите нам об этом и мы учтем Ваши пожелания.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nЧтобы отписаться от новостных и информационных рассылок, просто перейдите по следующей ссылке: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
//  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>ВАЖНО:</strong> Для вашей защиты и, чтобы предохранить от злонамеренного использования, все e-mail посланные через этот сайт, зарегистрированы, а их содержимое записано и доступно для владельца магазина. Если Вы уверены, что Вы получили этот e-mail ошибочно, пожалуйста пошлите e-mail для ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>ВАЖНО:</strong> Для вашей защиты и, чтобы предохранить от злонамеренного использования, все e-mail посланные через этот сайт, зарегистрированы, а их содержимое записано и доступно для владельца магазина. Если Вы уверены, что Вы получили этот e-mail ошибочно, пожалуйста сообщите нам об этом по e-mail' . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Данное предупреждение включается во все сообщения с этого сайта:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[РЕГИСТРАЦИЯ]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[ПОСЛАТЬ ПОДАРОЧНЫЙ ВАУЧЕР]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[НОВЫЙ ЗАКАЗ]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ ПО ЗАКАЗУ] №');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Внимание: Товара осталось мало!');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Отчет о малом количестве товара: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Определение отключено');

// EOF