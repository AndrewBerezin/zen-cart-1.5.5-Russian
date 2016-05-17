<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: document_product_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */

define('TEXT_PRODUCT_NOT_FOUND', 'Извините, товар не найден.');
define('TEXT_CURRENT_REVIEWS', 'Текущие отзывы:');
define('TEXT_MORE_INFORMATION', 'Для дополнительной информации посетите <a href="%s" target="_blank">домашнюю страницу товара</a>.');
define('TEXT_DATE_ADDED', 'Этот товар поступил в магазин %s.');
define('TEXT_DATE_AVAILABLE', 'Этот товар будет в магазине с %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Наши клиенты также заказывают с этим товаром...');
define('TEXT_PRODUCT_OPTIONS', 'Выберите:');
define('TEXT_PRODUCT_MANUFACTURER', 'Произведено: ');
define('TEXT_PRODUCT_WEIGHT', 'Вес доставки: ');
define('TEXT_PRODUCT_QUANTITY', ' упаковок в магазине');
define('TEXT_PRODUCT_MODEL', 'Артикул: ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Товар ');
define('PREV_NEXT_FROM', ' от ');
define('IMAGE_BUTTON_PREVIOUS','Предыдущий товар');
define('IMAGE_BUTTON_NEXT','Следующий товар');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Вернуться к списку товаров');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'Новинки %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Ожидаются');
//define('TABLE_HEADING_DATE_EXPECTED', 'Когда ожидаются');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [было: ');
define('TEXT_ATTRIBUTE_IS_FREE',' теперь: Бесплатно]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Этот товар можно купить только один раз');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Доступны скидки от количества');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');

// EOF