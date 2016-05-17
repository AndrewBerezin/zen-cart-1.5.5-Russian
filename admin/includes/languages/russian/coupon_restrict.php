<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */

define('HEADING_TITLE', 'Ограничения в товарах/категориях для купона на скидку.');
define('HEADING_TITLE_CATEGORY', 'Ограничения категорий');
define('HEADING_TITLE_PRODUCT', 'Ограничения товаров');

define('HEADER_COUPON_ID', 'Купон ID');
define('HEADER_COUPON_NAME', 'Название купона');
define('HEADER_CATEGORY_ID', 'Категория ID');
define('HEADER_CATEGORY_NAME', 'Название категории');
define('HEADER_PRODUCT_ID', 'Товар ID');
define('HEADER_PRODUCT_NAME', 'Название товара');
define('HEADER_RESTRICT_ALLOW', 'Применить');
define('HEADER_RESTRICT_DENY', 'Отменить');
define('HEADER_RESTRICT_REMOVE', 'Убрать');
define('IMAGE_ALLOW', 'Применить');
define('IMAGE_DENY', 'Отменить');
define('IMAGE_REMOVE', 'Убрать');
define('TEXT_ALL_CATEGORIES', 'Все категории');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Добавить все товары категории');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Удалить все товары категории');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>При Добавлении всех товаров категории, будут добавлены только товары, для которых не были определены ограничения .<br />
                    При Удалении всех товаров категории, будут удалены товары, для которых были определены Deny или Allow.</strong>');

define('TEXT_MANUFACTURER', 'Производитель: ');
define('TEXT_CATEGORY', 'Категория: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Категория не определена');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Товар не определён');

