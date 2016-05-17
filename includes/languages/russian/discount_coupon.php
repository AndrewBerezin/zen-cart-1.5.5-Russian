<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Купон на скидку');
define('HEADING_TITLE', 'Купон на скидку');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> является не правильным кодом. Попробуйте еще раз повнимательнее.');

define('HEADING_COUPON_HELP', 'Справка');
define('TEXT_CLOSE_WINDOW', 'Закрыть окно [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Вы ввели ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Вам необходимо потратить минимум %s для использования этого купона.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Скидка:</span> %s</p><p class="smallText">Могут быть задействованы некоторые ограничения на пользование этим купоном. Смотрите ниже детали.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Купон действителен с %s по %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Ограничения:</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Ограничения в категориях:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">ограничения в товарах:</p>');
define('TEXT_ALLOW', 'Принять');
define('TEXT_DENY', 'Отказаться');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Этот купон имеет огранияения по товарам.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Действие этого купона распространяются на все категории.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Действие этого купона распространяются на все товары.</p>');
define('TEXT_CAT_ALLOWED', ' (Действителен для этой категории)');
define('TEXT_CAT_DENIED', ' (Не действителен для этой категории)');
define('TEXT_PROD_ALLOWED', ' (Действителен для этого товара)');
define('TEXT_PROD_DENIED', ' (Де действителен для этого товара)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Купон не может быть принят' . TEXT_GV_NAMES . '. лимит 1 купон на заказ.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Воспользоваться купоном на скидку:');
define('TEXT_DISCOUNT_COUPON_ID', 'Ваш код: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Используются ограничения адреса доставки.');

// EOF