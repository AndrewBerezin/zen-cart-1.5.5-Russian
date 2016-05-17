<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
*/

define('HEADING_TITLE', 'Групповые скидки');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Название группы');
define('TABLE_HEADING_GROUP_AMOUNT', 'Процент cкидки');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Новая групповая скидка');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Редактировать групповую скидку');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Удалить групповую скидку');

define('TEXT_NEW_INTRO', 'Внесите необходимую информацию по этой групповой скидке');
define('TEXT_EDIT_INTRO', 'Внесите необходимые изменения');
define('TEXT_DELETE_INTRO', 'Вы уверены что хотите удалить эту групповую скидку?');
define('TEXT_DELETE_PRICING_GROUP', 'Удалить групповую скидку');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>ВНИМАНИЕ:</b> На сегодня %s все еще входят в эту групповую скидку!');

define('TEXT_GROUP_PRICING_NAME', 'Название группы: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Процент cкидки: ');
define('TEXT_DATE_ADDED', 'Дата создания:');
define('TEXT_LAST_MODIFIED', 'Дата модификации:');
define('TEXT_CUSTOMERS', 'Покупатеоей в группе:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ОШИБКА: В данную группу входят несколько покупателей. Пожалуйста подтвердите удаление всех покупателей из этой группы и удаление самой группы.');
define('ERROR_MODULE_NOT_CONFIGURED','ВНИМАНИЕ: Вы определили групповые скидки, но не установили/конфигурировали итоговый модуль Групповая скидка (ot_group_pricing).');

// EOF