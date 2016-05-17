<?php
/**
 * @package 
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
*/

define('HEADING_CVV', 'Что такое CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover 3 цифры идентификационного номера<br /><br />
                    Для вашей безопасности и безопасности оформления заказа, Вы должны ввести последние цифры вашего идентификационного номера для проверки кредитной карты.<br /><br />
                    Этот номер состоит из 3-х последних цифр на обороте вашей кредитной карты, находящихся рядом с подписью.
                    Этот номер находится справа, после промежутка, после последних цифр вашего номера кредитной карты<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express имеет 4 цифры такого номера.<br /><br />
                    Для вашей безопасности и безопасности оформления заказа, Вы должны ввести последние цифры вашего идентификационного номера для проверки кредитной карты.<br /><br />
                    Кредитная карта American Express. Этот номер состоит из 4-х последних цифр на обороте вашей кредитной карты, находящихся рядом с подписью.
                    Этот номер находится справа, после промежутка, после последних цифр вашего номера кредитной карты.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Закрыть окно [x]');

// EOF