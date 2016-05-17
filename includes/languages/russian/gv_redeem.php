<?php
/**
 * @package 
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: gv_redeem.php 4155 2006-08-16 17:14:52Z ajeh $
*/

define('NAVBAR_TITLE', 'Активация ' . TEXT_GV_NAME);
define('HEADING_TITLE', 'Активация ' . TEXT_GV_NAME);
define('TEXT_INFORMATION', 'Чтобы узнать больше информации о ' . TEXT_GV_NAME . ', посмотрите <a href="' . zen_href_link(FILENAME_GV_FAQ,'','NONSSL').'">' . GV_FAQ . '.</a>');
define('TEXT_INVALID_GV', 'Указанный номер ' . TEXT_GV_NAME . ' либо не существует, либо он был уже использован. Если у Вас есть вопросы, пожалуйста свяжитесь с нами.');
define('TEXT_VALID_GV', 'Поздравляем! Вы успешно активировали свой ' . TEXT_GV_NAME . ' на сумму %s! Теперь Вы можете использовать свой сертификат для совершения покупок в нашем интернет-магазине.');

// EOF