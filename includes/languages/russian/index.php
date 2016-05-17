<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: index.php 19537 2011-09-20 17:14:44Z drbyte $
 */

define('TEXT_MAIN','This is the main define statement for the page for russian when no template defined file exists. It is located in: <strong>/includes/languages/russian/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Добро пожаловать <span class="greetUser">Гость!</span> <a href="%s">Войти</a> в магазин.');
} else {
  define('TEXT_GREETING_GUEST', 'Добро пожаловать в наш интернет-каталог.');
}

define('TEXT_GREETING_PERSONAL', 'Приветствуем Вас <span class="greetUser">%s</span>! Хотите посмотреть <a href="%s">новинки</a>?');

define('TEXT_INFORMATION', ''); // Define your main Index page copy here.

//moved to russian
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Новинки %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Ожидаемые товары');
//define('TABLE_HEADING_DATE_EXPECTED', 'Дата поступления');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Предлагаем товары');
  define('TABLE_HEADING_IMAGE', 'Фото');
  define('TABLE_HEADING_MODEL', 'Артикул');
  define('TABLE_HEADING_PRODUCTS', 'Наименование');
  define('TABLE_HEADING_MANUFACTURER', 'Бренд');
  define('TABLE_HEADING_QUANTITY', 'Количество');
  define('TABLE_HEADING_PRICE', 'Цена');
  define('TABLE_HEADING_WEIGHT', 'Вес');
  define('TABLE_HEADING_BUY_NOW', 'Купить');
  define('TEXT_NO_PRODUCTS', 'Нет ни одного товара в этой категории.');
  define('TEXT_NO_PRODUCTS2', 'Нет ни одного товара данного бренда.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Количество товара: ');
  define('TEXT_SHOW', 'Фильтровать результат по:');
  define('TEXT_BUY', 'Купить ');
  define('TEXT_NOW', ' сейчас');
  define('TEXT_ALL_CATEGORIES', 'Все категории');
  define('TEXT_ALL_MANUFACTURERS', 'Все бренды');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Добро пожаловать в наш интернет-магазин!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Добро пожаловать в наш интернет-магазин!');
}

// EOF