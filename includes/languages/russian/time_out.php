<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Сессия закончилась');
define('HEADING_TITLE', 'Сессия закончилась');
define('HEADING_TITLE_LOGGED_IN', 'Извините, но к сожалению Вы не можете сейчас выполнить запрошенное действие. ');
define('TEXT_INFORMATION', '<p>Если Вы делали заказ и связь прервалась, тогда просто авторизируйтесь вновь и Ваша корзина будет восстановлена. Только после этого Вы сможете завершить процедуру оформления заказа.</p><p>Если Вы закончили формирование заказа и хотите просмотреть его еще раз' . (DOWNLOAD_ENABLED == 'true' ? ', либо уже завершили его его и просто хотите восстановить' : '') . ', пожалуйста проследуйте в <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Мои данные</a> чтобы просмотреть заказ.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Вы находитесь в своем аккаунте и можете продолжать покупки.');

define('HEADING_RETURNING_CUSTOMER', 'Войти');
define('TEXT_PASSWORD_FORGOTTEN', 'Забыли пароль?');

// EOF