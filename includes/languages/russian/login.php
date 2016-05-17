<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Вход');
define('HEADING_TITLE', 'Регистрация');

define('HEADING_NEW_CUSTOMER', 'Вниманию новых покупателей:');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Новые покупатели');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Регистрация в <strong>' . STORE_NAME . '</strong> позволит Вам быстрее совершать покупки, отслеживать статус текущих заказов, просматривать свои предыдущие заказы, получать скидки.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'У Вас есть счёт в PayPal? Хотите платить быстро кредитной картой? Используйте кнопку PayPal для использования Экспресс Оплаты.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Или</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Создание профиля в <strong>' . STORE_NAME . '</strong> позволит Вам быстрее совершать покупки, отслеживать статус текущих заказов, просматривать свои предыдущие заказы.');

define('HEADING_RETURNING_CUSTOMER', 'Если Вы уже зарегистрированы, войдите в магазин');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Зарегистрированные покупатели');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Чтобы продолжить, пожалуйста, войдите в <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', 'Забыли пароль?');

define('TEXT_LOGIN_ERROR', '<span class="bold">Ошибка</span>: Неправильно указан E-Mail или пароль.');
define('TEXT_VISITORS_CART', '<span class="bold">Примечание:</span>&nbsp;Содержимое Вашей &quot;корзины посетителя&quot; будет объединено с содержимым Вашей &quot;постоянной корзины&quot; как только Вы подтвердите регистрацию. <a href="javascript:session_win();">[Подробнее]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Конфиденциальность</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Пожалуйста ознакомьтесь с нашими условиями конфиденциальности и поставьте отметку о согласии с ними. С текстом условий конфиденциальности Вы можете ознакомиться </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">здесь</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Я прочитал и согласен с Вашими условиями конфиденциальности.</span>');

define('ERROR_SECURITY_ERROR', 'Ошибка безопасности при попытке войти в магазин.');

define('TEXT_LOGIN_BANNED', 'Ошибка: Доступ запрещён.');

// EOF