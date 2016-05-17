<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Войти');
define('NAVBAR_TITLE_2', 'Забыли пароль?');

define('HEADING_TITLE', 'Забыли пароль?');

define('TEXT_MAIN', 'Укажите адрес Вашей электронной почты и мы вышлем Вам новый пароль.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Новый пароль');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Запрос на получение нового пароля был получен от ' . $_SERVER['REMOTE_ADDR'] . '.' . "\n\n" . 'Ваш новый пароль для доступа в "' . STORE_NAME . '" :' . "\n\n" . ' %s' . "\n\nПосле того, как Вы войдете в магазин используя новый пароль, Вы сможете поменять его на странице своего аккаунта.");

define('SUCCESS_PASSWORD_SENT', 'Ваш новый пароль мы выслали на указанный Вами адрес электронной почты.');

// EOF