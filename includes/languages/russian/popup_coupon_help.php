<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version GIT: $Id: Author: DrByte  Wed Nov 6 20:54:59 2013 -0500 Modified in v1.5.2 $
 */

define('HEADING_COUPON_HELP', 'Купон на скидку. Помощь');
define('TEXT_CLOSE_WINDOW', 'Закрыть окно [x]');
define('TEXT_COUPON_HELP_HEADER', 'Поздравляем, Вы активировали Купон на скидку.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Название : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Купон номиналом %s может быть использован для оплаты Вашего заказа');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Вам нужно потратить %s, чтобы использовать Купон');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Этот купон дает Вам скидку на оплату пересылки');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Купон скидки : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Купон скидки действителен с %s по %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />ОГРАНИЧЕНИЯ: Товары/Категории');
define('TEXT_COUPON_HELP_CATEGORIES', 'Категории');
define('TEXT_COUPON_HELP_PRODUCTS', 'Товары');
define('TEXT_ALLOW', 'Допущено');
define('TEXT_DENY', 'Нет доступа');

define('TEXT_ALLOWED', ' (Допущено)');
define('TEXT_DENIED', ' (Нет доступа)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Этот купон действителен для определеённых товаров.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Этот купон действителен для всех категорий.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Этот купон действителен для всех товаров.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Купоны на скидку не могут быть использованы для приобретения ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Используются ограничения адреса доставки.');

// EOF