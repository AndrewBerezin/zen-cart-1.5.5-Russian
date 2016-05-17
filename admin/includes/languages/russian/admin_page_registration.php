<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Регистрация страниц админа');
define('TEXT_PAGE_KEY', 'Ключ страницы');
define('TEXT_LANGUAGE_KEY', 'Имя страницы');
define('TEXT_MAIN_PAGE', 'Файл страницы');
define('TEXT_PAGE_PARAMS', 'Параметры страницы');
define('TEXT_MENU_KEY', 'Меню');
define('TEXT_DISPLAY_ON_MENU', 'Показывать в меню?');
define('TEXT_SORT_ORDER', 'Порядок сортировки');

define('TEXT_EXAMPLE_PAGE_KEY', '(например страницаМоегоМодуля)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(например BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(например FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(например option=1 или оставьте пустым)');
define('TEXT_SELECT_MENU', 'Выберите меню');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Не указан Ключ страницы. Все страницы админа должны иметь уникальный Ключ страницы.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Такой Ключ страницы уже существует. Ключ страницыs должен быть уникальным.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Не указана языковая константа "Имя страницы". Для всех страниц админа должны быть указаны языковые константы, которые должны быть определены для использования в ссылках меню.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Указанная языковая константа "Имя страницы" не определена. Проверьте правильность написания.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Не указана константа имени файла страницы.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Указанная константа имени файла страницы не существует. Проверьте правильность написания.');
define('ERROR_MENU_NOT_CHOSEN', 'Меню не выбрано. Вы должны связать новую страницу с пунктом меню даже если она не будет отображаться в этом меню.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Ваша страница админа зарегистрирована.');
