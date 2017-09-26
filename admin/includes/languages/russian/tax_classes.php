<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: tax_classes.php 7167 2007-10-03 23:02:17Z drbyte $
 */

define('HEADING_TITLE', 'Список налогов');

define('TABLE_HEADING_TAX_CLASS_ID', 'ID');
define('TABLE_HEADING_TAX_CLASSES', 'Налоговые классы');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте любые нужные изменения');
define('TEXT_INFO_CLASS_TITLE', 'Название класа налогов:');
define('TEXT_INFO_CLASS_DESCRIPTION', 'Описание:');
define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_INSERT_INTRO', 'Пожалуйста, внесите требуемую информацию для новой страны');
define('TEXT_INFO_DELETE_INTRO', 'Вы на самом деле хотите удалить налог?');
define('TEXT_INFO_HEADING_NEW_TAX_CLASS', 'Новый класс налогов');
define('TEXT_INFO_HEADING_EDIT_TAX_CLASS', 'Изменить');
define('TEXT_INFO_HEADING_DELETE_TAX_CLASS', 'Удалить');
define('ERROR_TAX_RATE_EXISTS_FOR_CLASS', 'ОШИБКА: Нельзя удалять этот Налоговый Класс - к нему присоединены Налоговые Ставки.');
define('ERROR_TAX_RATE_EXISTS_FOR_PRODUCTS', 'ОШИБКА: Нельзя удалять этот Налоговый Класс - к нему присоединены %s товаров.');

// EOF