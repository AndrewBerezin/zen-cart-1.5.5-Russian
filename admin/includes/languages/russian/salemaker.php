<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
*/

define('HEADING_TITLE', 'Акции');
define('TABLE_HEADING_SALE_NAME', 'Название акции');
define('TABLE_HEADING_SALE_DEDUCTION', 'Скидка акции');
define('TABLE_HEADING_SALE_DATE_START', 'Начало действия акции');
define('TABLE_HEADING_SALE_DATE_END', 'Конец действия акции');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_SALEMAKER_NAME', 'Название акции:');
define('TEXT_SALEMAKER_DEDUCTION', 'Скидка акции:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Тип скидки:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Ценовой диапазон от:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ДО&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Если товар уже находится в Скидках:');
define('TEXT_SALEMAKER_DATE_START', 'Начало действия акции:');
define('TEXT_SALEMAKER_DATE_END', 'Конец действия акции:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Или</b> определить категории к которым применить эту акцию:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Здесь можно получить подсказку.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Подробнее)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Немедленно');
define('TEXT_SALEMAKER_NEVER', 'Никогда');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Сделайте здесь отметку если Вы хотите чтобы эта акция применилась ко <b>всем товарам</b>:');
define('TEXT_SALEMAKER_TOP', 'Весь каталог');
define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_DATE_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Последнее изменение статуса:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Особые условия:');
define('TEXT_INFO_DEDUCTION', 'Скидка акции:');
define('TEXT_INFO_PRICERANGE_FROM', 'Ценовой диапазон от:');
define('TEXT_INFO_PRICERANGE_TO', ' ДО ');
define('TEXT_INFO_DATE_START', 'Начало:');
define('TEXT_INFO_DATE_END', 'Конец:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Игнорировать если товар был в Скидках - применить к базовой цене товара и переписать если товар находится в стандартном модуле Скидок');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Игнорировать акцию если товар в Скидках - не применять акцию если товар находится в стандартном модуле Скидок');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Применить скидки акции к Скидкам - применить скидку к ценам в стандартном модуле Скидок (переписать)');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Скидка от суммы');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Процентно');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Новая цена');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Копировать эту акцию');
define('TEXT_INFO_COPY_INTRO', 'Введите название чтобы скопировать из<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Удалить акцию');
define('TEXT_INFO_DELETE_INTRO', 'Вы уверены что хотите полностью удалить акцию?');
define('TEXT_MORE_INFO', '(подробнее)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Предупреждение: %s акций уже содержат данную категорию');

// EOF