<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: freeoptions.php 3830 2006-06-21 23:47:16Z ajeh $
 */

if (IS_ADMIN_FLAG === true) {
  define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Условная бесплатная доставка');
} else {
  define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Бесплатная доставка');
}
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Условная бесплатная доставка используется для показа Бесплатной доставки когда показываются другие способы доставки.
Она можнт базироваться на: Показывать всегда, Сумме заказа, Весе заказа или Общее количество.
Модуль Условная бесплатная доставка не показывается, когда показывается модуль Бесплатная доставка.<br /><br />
Если установить Сумма заказа >= 0.00 и <= ничего (оставив пустым), то модуль Условная бесплатная доставка будет показываться со всеми модулями доставки за исключением модуля Бесплатная доставка.<br /><br />
Замечание: Если оставить пустыми все значения Сумма заказа, Вес и Общее количество, то модуль будет деактивирован.<br /><br />
Замечание: Модуль Условная бесплатная доставка не показывается, если модуль Бесплатная доставка используется на базе 0 веса.
Смотри: модуль Бесплатная доставка<br /><br />
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Бесплатная доставка');

// EOF