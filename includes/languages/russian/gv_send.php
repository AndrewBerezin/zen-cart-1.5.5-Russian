<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Отправить' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Подтверждение Отправки ' . TEXT_GV_NAME . '');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' отправлен');
define('NAVBAR_TITLE', 'Отправить' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Сообщение от ' . STORE_NAME);
define('HEADING_TEXT','Введите имя, адрес email и сумму отправляемого ' . TEXT_GV_NAME . '. Дополнительная информация <a href="' . zen_href_link(FILENAME_GV_FAQ,'','NONSSL').'">' . GV_FAQ . '</a><br />');
define('ENTRY_NAME', 'Имя получателя:');
define('ENTRY_EMAIL', 'E-Mail адрес получателя:');
define('ENTRY_MESSAGE', 'Ваше сообщение:');
define('ENTRY_AMOUNT', 'Посылаемая сумма:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Пожалуйста заполните имя получателя. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Неверная сумма. Пожалуйста исправьте.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Неверный Email адрес. Пожалуйста исправьте.');
define('MAIN_MESSAGE', 'Вы решили отправить ' . TEXT_GV_NAME . ' на сумму %s своему знакомому %s, его Email адрес: %s. Если данные получателя неверны, Вы можете исправить их нажав на кнопку <strong>"Редактировать</strong>".<br /><br />Текст вашего сообщения:<br /><br />');
define('SECONDARY_MESSAGE', 'Ув %s,<br /><br />' . 'Вы отправили ' . TEXT_GV_NAME . ' ценностью %s %s');
define('PERSONAL_MESSAGE', '%s пишет:');
define('TEXT_SUCCESS', 'Поздравляем, Ваш ' . TEXT_GV_NAME . ' успешно отправлен');
define('TEXT_SEND_ANOTHER', 'Хотите отправить другой ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE','Баланс Вашего счета');

define('EMAIL_GV_TEXT_SUBJECT', 'Этот подарок от %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Поздравляем, Вы получили ' . TEXT_GV_NAME . ' на сумму %s');
define('EMAIL_GV_FROM', 'Этот ' . TEXT_GV_NAME . ' был прислан Вам от %s');
define('EMAIL_GV_MESSAGE', 'в сообщении говориться: ');
define('EMAIL_GV_SEND_TO', 'Здравствуйте, %s');
define('EMAIL_GV_REDEEM', 'Чтобы получить ' . TEXT_GV_NAME . ', откройте ссылку, которая расположена ниже. Пожалуйста запишите ' . TEXT_GV_REDEEM . ': %s  во избежании проблем');
define('EMAIL_GV_LINK', 'Кликните здесь, чтобы активизировать' . TEXT_GV_NAME);
define('EMAIL_GV_VISIT', ' или зайдите сюда ');
define('EMAIL_GV_ENTER', ' и введите код ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Если у Вас возникают проблемы при активации ' . TEXT_GV_NAME . ' с помощью ссылки, указанной выше, ' . "\n" . 
                                ', Вы можете ввести ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' при оформлении заказа.');
define('EMAIL_GV_SHOP_FOOTER', '');

// EOF