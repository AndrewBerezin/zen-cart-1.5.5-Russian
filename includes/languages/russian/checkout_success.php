<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Mon Mar 23 13:48:06 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Заказ');
define('NAVBAR_TITLE_2', 'Спасибо');

define('HEADING_TITLE', 'Благодарим Вас за покупку!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Уведомлять об изменениях данного товара');
define('TEXT_SEE_ORDERS', 'Вы можете посмотреть историю Ваших заказов перейдя на страницу <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Мои данные</a> кликнув по ссылке "Все заказы".');
define('TEXT_CONTACT_STORE_OWNER', 'Если у Вас возникнут какие-либо вопросы, напишите <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">администрации магазина</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Благодарим за покупки в нашем магазине!');

define('TABLE_HEADING_COMMENTS', 'Введите комментарий для обработанного заказа');

define('FOOTER_DOWNLOAD', 'Вы можете также загрузить Ваши товары впоследствии в \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Номер Вашего заказа:</strong>&nbsp;&nbsp;');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'ЗАМЕЧАНИЕ: Для того, чтобы завершить заказ, была создана временная учётная запись. Вы можете закрыть этот акаунт нажав на кнопку "Выйти". "Выход" также гарантирует, что Вами покупки и Ваша информация станет недоступной другому пользователю этого компьютера. Если Вы хотите продолжить покупки, не стесняйтесь! Вы можете выйти в любой момент, используя ссылку в верхней части страницы.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Спасибо за покупки! Пожалуйста не забудьте Выйти, чтобы быть уверенным что Ваши покупки и Ваша информация станет недоступной другому пользователю этого компьютера.');

define('HEADING_ORDER_NUMBER', 'Заказ #%s');
define('HEADING_ORDER_DATE', 'Дата:');
define('HEADING_ORDER_TOTAL', 'Сумма:');

define('HEADING_DELIVERY_ADDRESS', 'Адрес доставки');
define('HEADING_SHIPPING_METHOD', 'Доставка');

define('HEADING_PRODUCTS', 'Товары');
define('HEADING_TAX', 'Налог');
define('HEADING_TOTAL', 'Итого');
define('HEADING_QUANTITY', 'Кол-во');

define('HEADING_BILLING_ADDRESS', 'Адрес плательщика');
define('HEADING_PAYMENT_METHOD', 'Оплата');

define('HEADING_ORDER_HISTORY', 'История статусов и Комментарии');
define('TEXT_NO_COMMENTS_AVAILABLE', 'Нет комментариев.');
define('TABLE_HEADING_STATUS_DATE', 'Дата');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Статус заказа');
define('TABLE_HEADING_STATUS_COMMENTS', 'Комментарии');
define('QUANTITY_SUFFIX', '&nbsp;шт.  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

// EOF