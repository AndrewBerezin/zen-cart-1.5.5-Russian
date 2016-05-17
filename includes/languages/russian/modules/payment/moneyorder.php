<?php
/**
 * @package
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $

*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Чек/Денежный перевод');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Оплатите Чек/Денежный перевод для:<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Отправьте извещение об оплате по адресу:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Ваш заказ не будет запущен в работу, пока мы не получим оплату.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "'Оплатите Чек/Денежный перевод для:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nОтправьте извещение об оплате по адресу:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Ваш заказ не будет запущен в работу, пока мы не получим оплату.');

// EOF