<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 */
  define('HEADING_TITLE', 'Инструментарий разработчика');
  define('TABLE_CONFIGURATION_TABLE', 'Поиск констант');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Успешное</strong> обновление сортированных цен');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Ошибка:</strong> Не найдено совпадений в конфигурационных ключах ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Ошибка:</strong> Не введён ключ конфигурации или текст для поиска...');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Обновить сортированную цену для ВСЕХ товаров</strong><br />чтобы иметь возможность сортировать по цене: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Искать константу или определение в языковом файле</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Ключ или Имя:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Замечание:</strong> КОНСТАНТЫ пишутся прописными буквами.<br />Языковые файлы, функции, классы и т.д. просматриваются, если ничего не найдено в таблицах базы данных, если это выбрано в выпадающем меню');

  define('TABLE_TITLE_KEY', '<strong>Ключ:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Наименование:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Описание:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Группа:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Значение:</strong>');

  define('TEXT_LOOKUP_NONE', 'Нет');
  define('TEXT_INFO_SEARCHING', 'Поиск ');
  define('TEXT_INFO_FILES_FOR', ' в файлах: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Найдено соответствующих строк: ');
  define('TEXT_INFO_FILENAME', 'ИМЯ ФАЙЛА: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Поиск в языковых файлах:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Все языковые файлы для ' . strtoupper($_SESSION['language']) . ' - Каталога и Админа');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Все главные языковые файлы Каталога (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /russian.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Все файлы текущего языка - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Все главные языковые файлы Админа (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /russian.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Все файлы текущего языка Админа (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Все файлы текущего языка Каталога и Админа');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Поиск функций</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Поиск в файлах функций:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Все файлы функций Каталога и Админа');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Все файлы функций Каталога');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Все файлы функций Админа');

  define('TEXT_CLASS_CONSTANT', '<strong>Поиск классов</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Поиск в файлах классов:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Все файлы классов Каталога и Админа');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Все файлы классов Каталога');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Все файлы классов Админа');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Поиск в шаблонах</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Поиск в файлах шаблона:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Все файлы шаблонов - /templates sideboxes /pages и т.д.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Все файлы шаблонов - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Все файлы шаблонов - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Все файлы шаблонов - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Поиск во всех файлах</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Поиск во всех файлах:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Все файлы Каталога и Админа');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Все файлы Каталога');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Все файлы Админа');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Редактирование не доступно');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' или СКРЫТЫЙ');

  define('TEXT_SEARCH_ALL_FILES', 'Искать во ВСЕХ файлах: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Искать в таблицах конфигураций БД: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Тип файла');
  define('TEXT_ALL_FILES_LOOKUP_PHP', 'Только .php');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php и .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', 'Только .css');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html и .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', 'только .js');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Все');

  define('TEXT_CASE_SENSITIVE', 'Учитывать регистр?');
  define('TEXT_CONTEXT_LINES', 'Контекстные строки: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Введите поисковую фразу или паттерн');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Введите имя ключа или фразу');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Введите поисковую фразу');
  define('TEXT_BUTTON_SEARCH', 'Искать');
  define('TEXT_BUTTON_SEARCH_ALT', 'Искать');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Поиск с использоанием паттерна Regex');
  define('TEXT_ERROR_REGEX_FAIL', 'ВНИМАНИЕ: При поиске произовшла ошибка. Если Вы использовали поиск regex/grep, проверьте Ваш паттерн regex на синтаксические ошибки.');


  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Поиск в устанавках конфигурации/Ключах</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Искать:</strong> (поиск параметров конфигурации в именах и описаниях, а также поиск точного совпадения ключей конфигурации)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Секция');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Группа');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Заголовок');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Описание');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Значение');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Название ключа');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Редактировать');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Не найдено ключей конфигурации.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'найдены ключи конфигурации.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'ВВедите слова для поиска в установках');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Поиск');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Поиск (отсортировано по ключам)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Смотреть все');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Сбросить');
  define('TEXT_RESET_BUTTON_ALT', 'Очистить все поля поиска.');

// EOF