<?php
/**
 * @package admin
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
*/

define('HEADING_TITLE', 'Редактирование страниц определений для: ');
define('NAVBAR_TITLE', 'Редактирование страниц определений');

define('TEXT_INFO_EDIT_PAGE', 'Выберите страницу:');

define('TEXT_INFO_MAIN_PAGE', 'Главная страница');

define('TEXT_INFO_SHIPPINGINFO', 'Доставка и возврат');
define('TEXT_INFO_PRIVACY', 'Безопасность');
define('TEXT_INFO_CONDITIONS', 'Условия');
define('TEXT_INFO_CONTACT_US', 'Контакты');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Успешное оформление заказа');

define('TEXT_INFO_PAGE_2', 'Страница 2');
define('TEXT_INFO_PAGE_3', 'Страница 3');
define('TEXT_INFO_PAGE_4', 'Страница 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Файл не существует: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Ошибка: Этот файл имеет ограниченные права доступа: %s');

define('TEXT_INFO_SELECT_FILE', 'Выберите файл для редактирования ...');
define('TEXT_INFO_EDITING', 'Редактирование файла:');

define('TEXT_INFO_CAUTION','Замечание: Вы должны всегда редактировать файлы расположенные в директории Вашего темплейта, Например: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Перед тем как редактировать, не забудьте сделать резервную копию!');

// EOF