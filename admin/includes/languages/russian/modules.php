<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Tue Dec 29 15:53:14 2015 -0500 Modified in v1.5.5 $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Модули оплаты');
define('HEADING_TITLE_MODULES_SHIPPING', 'Модули доставки');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Модули итогов');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Модули товарных групп');

define('TABLE_HEADING_MODULES', 'Модули');
define('TABLE_HEADING_SORT_ORDER', 'Сортировать');
define('TABLE_HEADING_ORDERS_STATUS','Статус заказов');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_MODULE_DIRECTORY', 'Директория модулей:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ОШИБКА: модуль не загружен из-за отсутствующего языкового файла: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ПРЕДУПРЕЖДЕНИЕ: Были изменены настройки магазина');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Это автоматическое письмо, предупреждающее Вас об изменениях в настройках магазина: ' . "\n\n" . 'Примечание: изменены параметры модуля [%s]. Изменения произведены администратором %s.' . "\n\n" . 'Если Вы не инициировали эти изменения, обязательно срочно проверьте настройки.' . "\n\n" . 'Если Вы уже в курсе этих изменений, проигнорируйте это сообщение.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Это автоматическое письмо, предупреждающее Вас об изменениях в настройках магазина: ' . "\n\n" . 'Примечание: установлен модуль [%s]. Изменения произведены администратором %s.' . "\n\n" . 'Если Вы не инициировали эти изменения, обязательно срочно проверьте настройки.' . "\n\n" . 'Если Вы уже в курсе этих изменений, проигнорируйте это сообщение.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Это автоматическое письмо, предупреждающее Вас об изменениях в настройках магазина: ' . "\n\n" . 'Примечание: модуль [%s] был удалён. Изменения произведены администратором %s.' . "\n\n" . 'Если Вы не инициировали эти изменения, обязательно срочно проверьте настройки.' . "\n\n" . 'Если Вы уже в курсе этих изменений, проигнорируйте это сообщение.');
define('TEXT_DELETE_INTRO', 'Вы уверены что хотите удалить этот модуль?');
define('TEXT_WARNING_SSL_EDIT', 'ВНИМАНИЕ: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">По соображениям безопасности, редактирование этого модуля отключено, пока Ваша админка настроена для SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ВНИМАНИЕ: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">По соображениям безопасности, установка этого модуля отключена, пока Ваша админка настроена для SSL</a>.');
define('WARNING_MODULES_MISSING_KEYS', '<span class="alert">Отсутствуют ключи - Сохранить, Удалить, Установить и Реконфигурировать</span>');

// EOF