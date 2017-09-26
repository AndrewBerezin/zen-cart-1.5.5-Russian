<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
*/

define('HEADING_TITLE', 'Рассылка подарочных сертификатов');

define('TEXT_CUSTOMER', 'Покупатель:');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_FROM', 'От:');
define('TEXT_TO', 'E-mail кому:');
define('TEXT_AMOUNT', 'Сумма');
define('TEXT_MESSAGE', 'Сообщение:');
define('TEXT_RICH_TEXT_MESSAGE', 'Текст <br />Сообщения:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Используйте это для отправки единичных email, при отправке больших партий используйте выпадающее меню</span>');
define('TEXT_SELECT_CUSTOMER', 'Выберите покупателя');
define('TEXT_ALL_CUSTOMERS', 'Все покупатели');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписчикам новостей');

define('NOTICE_EMAIL_SENT_TO', 'Замечание: E-mail отосланы к: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Не выбрано ни одного покупателя.');
define('ERROR_NO_AMOUNT_SELECTED', 'Ошибка: Не указана сумма.');
define('ERROR_NO_SUBJECT', 'Ошибка: Не вписана тема письма.');
define('ERROR_GV_AMOUNT', 'Пожалуйста, введите сумму без символов. Например: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Мы рады предложить Вам ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', ' ' . TEXT_GV_NAME . ' стоимостью ');
define('TEXT_TO_REDEEM', 'Чтобы воспользоваться ' . TEXT_GV_NAME . ', перейдите по ссылке внизу. Затем впишите этот код ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' который является');
define('TEXT_IN_CASE', ' в случае если у Вас возникнут с этим трудности.');
define('TEXT_OR_VISIT', 'или посетив наш интернет-магазин по адресу ');
define('TEXT_ENTER_CODE', ' и введите код Подарочного Сертификата при оформлении заказа');
define('TEXT_CLICK_TO_REDEEM','Кликните чтобы активировать');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Вы только что получили  ' . TEXT_GV_NAME . ' от нашего магазина, из соображений безопасности сумма  ' . TEXT_GV_NAME . ' не была немедленно перечислена Вам. Наш магазин закрепил за Вами эту сумму.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Сумма ' . TEXT_GV_NAME . ' составляет %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Теперь Вы можете посетить наш интернет магазин, зарегистрироваться и послать  ' . TEXT_GV_NAME . ' сумму кому Вы захотите.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

// EOF