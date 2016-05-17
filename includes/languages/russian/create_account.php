<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

define('NAVBAR_TITLE', 'Регистрация');

define('HEADING_TITLE', 'Мои данные');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">ВНИМАНИЕ:</strong> Если Вы уже зарегистрированы на нашем сайте, то введите, пожалуйста, Ваш логин и пароль&nbsp;<a href="%s"><u>здесь</u></a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Спасибо, Ваш запрос на регистрацию ждёт одобрения одобрение.');


// greeting salutation
define('EMAIL_SUBJECT', 'Добро пожаловать в магазин ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Уважаемый господин %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Уважаемая госпожа %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Уважаемый/Уважаемая %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Добро пожаловать в магазин <strong>' . STORE_NAME . '</strong>.' . "\n\n");
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Поздравляем с регистрацией в нашем магазине! Рады сообщить, что мы дарим Вам купон на получение скидки в нашем магазине.' . "\n" . 'Данный купон действителен только для Вас.' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Чтобы воспользоваться Купоном на скидку, в процессе оформления заказа на странице оплаты введите код купона ' . TEXT_GV_REDEEM . ':<br /> %s.' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Купон действителен с %s по %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Также сообщам Вам, что Вы получаете ' . TEXT_GV_NAME . ' на сумму %s' . "\n\n");
define('EMAIL_GV_REDEEM', ' ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' здесь: %s ' . "\n\n" . 'Вы можете использовать ' . TEXT_GV_REDEEM . ' при оплате заказа, при этом номинальная стоимость будет засчитана в качестве оплаты всего или части Вашего заказа.' . "\n\n");
define('EMAIL_GV_LINK', 'Для его активизации перейдите по ссылке: ' . "\n\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Как только Вы добавили ' . TEXT_GV_NAME . ' на Ваш счет, Вы можете использовать ' . TEXT_GV_NAME . ' для себя или послать Купон в подарок другу!' . "\n\n");

define('EMAIL_TEXT', 'Используя свой аккаунт, теперь Вы можете использовать <strong>различные сервисы</strong>, среди которых:' . "\n\n<ul>" .
'<li><strong>История заказов</strong> - Вы можете просматривать свои заказы со всеми подробностями.</li>'. "\n".
'<li><strong>Постоянная корзина</strong> - Любые товары, добавленные в корзину, остаются там до тех пор, пока Вы не удалите или не закажете их.</li>'. "\n".
'<li><strong>Адресная книга</strong> - Мы можем доставить Ваш заказ по любому другому адресу кроме Вашего основного! Это отличное предложение чтобы, например, посылать подарки ко дню рождения или к праздникам!</li>'. "\n".
'<li><strong>Отзывы о товарах и услугах</strong> - Размещать Ваше мнение и отзывы о товарах и поделиться этим мнением с другими покупателями.</li>' . "\n\n</ul>");
define('EMAIL_CONTACT', 'Если у Вас возникли какие-либо вопросы, пишите: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_GV_CLOSURE', 'С уважением,' . "\n\n" . STORE_OWNER . "\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Этот адрес e-mail был получен нами от одного из наших клиентов. Если Вы считаете что произошла ошибка, то напишите нам %s ');

// EOF