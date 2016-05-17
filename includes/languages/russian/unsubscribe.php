<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Отписаться');
define('HEADING_TITLE', 'Отписаться от почтовых сообщений');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Очень жаль что Вы хотите отписаться от наших почтовых рассылок. Если Вы сомневаетесь в безопасности нахождения Вашего e-mail адреса у нас, то пожалуйста прочтите <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span style="text-decoration:underline;">Условия сотрудничества</span></a>.<br /><br />Наши подписчики получают почту только о товаре, ценах и новых акциях.<br /><br />Если Вы всё-же хотите отписаться, то перейдите по ссылке внизу. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Очень жаль что Вы хотите отписаться от наших почтовых рассылок. Если Вы сомневаетесь в безопасности нахождения Вашего e-mail адреса у нас, то пожалуйста прочтите <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span style="text-decoration:underline;">Условия сотрудничества</span></a>.<br /><br />Наши подписчики получают почту только о товаре, ценах и новых акциях.<br /><br />Если Вы все еще хотите отписаться, то перейдите по ссылке внизу. <br /> Вы попадете на страницу Ваших данных где Вы и сможете изменить настройки рассылок. Перед этим Вам нужно будет авторизоваться в нашем магазине.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Ваш e-mail адрес был удален из нашего списка подписчиков как Вы и просили. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />Этот e-mail адрес не найден в нашей базе данных, или был удален ранее из нашего списка подписчиков. <br /><br />');

// EOF