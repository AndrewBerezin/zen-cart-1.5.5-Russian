<?php
/**
 * @package 
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: ssl_check.php 1969 2005-09-13 06:57:21Z drbyte $
*/

define('NAVBAR_TITLE', 'Проверка безопасности');
define('HEADING_TITLE', 'Проверка безопасности');

define('TEXT_INFORMATION', 'Мы обнаружили, что ваш браузер сгенерировал другой  ID Сеанса SSL, чем использовался ранее на наших безопасных страницах.<br /><br />Для обеспечения необходимого уровня безопасности вам понадобится войти в магазин на ваш аккаунт снова, чтобы продолжить делать покупки.<br /><br />Обратите внимание, что например браузер, Konqueror 3.1 нет может генерировать безопасный  ID Сеанс SSL автоматически как это необходимо для безопасности. Если Вы используете такое браузер, мы рекомендуем переключаться на другой браузер как например, <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, or <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>, чтобы продолжать делать ваши покупки.<br /><br />Мы приняли этот уровень безопасности для вашей пользы и извиняемся, если доставили вам любые неудобства.<br /><br />Пожалуйста обратитесь к владельцу магазина если у вас есть любые вопросы, которые имеют отношение к этому требованию, или, чтобы приобретать продукты офлайн.');
define('TEXT_INFORMATION_2', 'Для обеспечения безопасности, вам понадобится войти на Ваш аккаунт снова, чтобы продолжать делать покупки онлайн.');
define('TEXT_INFORMATION_3','Обратите внимание, что например браузер, Konqueror 3.1 нет может генерировать безопасный  ID Сеанс SSL автоматически как это необходимо для безопасности. Если Вы используете такое браузер, мы рекомендуем переключаться на другой браузер как например, <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, or <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>.');
define('TEXT_INFORMATION_4','Мы приняли этот уровень безопасности для вашей пользы и извиняемся, если доставили вам любые неудобства.');
define('TEXT_INFORMATION_5','Пожалуйста обратитесь к владельцу магазина если у вас есть любые вопросы, которые имеют отношение к этому требованию, или, чтобы приобретать продукты офлайн.');

define('BOX_INFORMATION_HEADING', 'Условия и безопасность');
define('BOX_INFORMATION', 'Мы подтверждаем  ID Сеанс SSL автоматически сгенерированный вашим браузером для каждой безопасной страницы открытой по запросу и подтвержденной сервером.<br /><br />Это гарантирует, что именно Вы управляете страницами этого сайта, а не кто-нибудь другой и Ваша конфиденциальная информация, передается в зашифрованном виде.');

// EOF