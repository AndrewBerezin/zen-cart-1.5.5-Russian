<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: bislewl  Wed Jan 20 16:12:13 2016 -0600 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Переслать пароль');

define('TEXT_ADMIN_EMAIL', 'E-mail адрес Админа: ');
define('TEXT_BUTTON_REQUEST_RESET', 'сбросить');
define('TEXT_BUTTON_LOGIN', 'войти');
define('TEXT_BUTTON_CANCEL', 'отменить');

define('ERROR_WRONG_EMAIL', 'Вы ввели неправильный e-mail адрес.');
define('ERROR_WRONG_EMAIL_NULL', 'Введите e-mail адрес');
define('MESSAGE_PASSWORD_SENT', 'Спасибо. Если указанный Вами адрес электронной почты есть в нашей базе данных, то новый пароль будет отправлен на него.<br />Получив письмо, прочитайте его и нажмите кнопку "вход", чтобы войти с новым временным паролем.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Запрос на изменение пароля');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Новый пароль был запрошен с %s.' . "\n\n" . 'Ваш новый временный пароль:' . "\n\n   %s\n\nПри входе Вам будет предложено ввести новый пароль.\n\nЭтот временный пароль действителен в течении 24 часов.\n\n\n");

// EOF