<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Fri Sep 11 16:00:40 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Заказ');
define('NAVBAR_TITLE_2', 'Информация об оплате - шаг 2');

define('HEADING_TITLE', 'Оформление заказа. Шаг 2 из 3 - Информация об оплате');

define('TABLE_HEADING_BILLING_ADDRESS', 'Адрес плательщика');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Документы о покупке будут отправлены на указанный адрес. Вы можете изменить его нажав на Изменить адрес.');
define('TITLE_BILLING_ADDRESS', 'Адрес:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Информация об оплате');
define('TEXT_SELECT_PAYMENT_METHOD', 'Выберите пожалуйста подходящий для Вас способ оплаты заказа.');
define('TITLE_PLEASE_SELECT', 'Выбрать');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'В настоящее время это единственный способ оплаты, доступный для данного заказа.');
define('TABLE_HEADING_COMMENTS', 'Добавьте комментарии относительно вашего заказа');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'В данный момент не доступны');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Извините, но сейчас мы не принимаем оплату из Вашего региона.</span><br />Свяжитесь с нами для решения этой проблемы.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Продолжение - шаг 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- подтверждение заказа.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Соглашения</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Пожалуйста ознакомтесь и подтвердите Ваше согласие с условиями поставки товара (поставьте отметку о том, что Вы с ними согласны). Текст Вы можете прочитать <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">здесь</span></a>.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Я прочитал и согласен с условиями поставки этого заказа.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Общая сумма: ');
define('TEXT_YOUR_TOTAL','Итого');

// EOF