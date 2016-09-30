<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Wed Mar 23 14:21:26 2016 -0500 Modified in v1.5.5 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Админ Zen Cart :: Искусство электронной коммерции');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('ru_RU.UTF-8', 'en_US', 'en_US.utf8', 'en', 'English_United States.1252');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%d %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%d/%m/%Y'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Мета-теги определены');
define('ICON_METATAGS_OFF', 'Мета-теги не определены');
define('TEXT_LEGEND_META_TAGS', 'Определённые мета-теги:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>Внимание:</strong> Все Ваши мета данные находятся в файле meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'utf-8');
if (function_exists('mb_internal_encoding')) mb_internal_encoding('UTF-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Админ');
define('HEADER_TITLE_SUPPORT_SITE', 'Сайт поддержки');
define('HEADER_TITLE_ONLINE_CATALOG', 'Магазин');
define('HEADER_TITLE_VERSION', 'Версия');
define('HEADER_TITLE_ACCOUNT', 'Аккаунт');
define('HEADER_TITLE_LOGOFF', 'Выход');
//define('HEADER_TITLE_ADMINISTRATION', 'Администрация');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Подарочный сертификат');
  define('TEXT_GV_NAMES','Подарочные сертификаты');
  define('TEXT_DISCOUNT_COUPON', 'Купон на скидку');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Код сертификата');

// text for gender
define('MALE', 'Г-н');
define('FEMALE', 'Г-жа');

define('TEXT_CHECK_ALL', 'Выбрать все');
define('TEXT_UNCHECK_ALL', 'Отмнить все');
define('NONE', 'Нет');

define('TEXT_UNKNOWN', 'Неизвестно');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Конфигурация');
define('BOX_CONFIGURATION_MY_STORE', 'Магазин');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Минимальные значения');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Максимальные значения');
define('BOX_CONFIGURATION_IMAGES', 'Картинки');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Информация о покупателе');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Отгрузка/Упаковка');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Список товаров');
define('BOX_CONFIGURATION_STOCK', 'Склад');
define('BOX_CONFIGURATION_LOGGING', 'Логи');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Опции E-Mail');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Настройки атрибутов');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip сжатие');
define('BOX_CONFIGURATION_SESSIONS', 'Сессии');
define('BOX_CONFIGURATION_REGULATIONS', 'Соглашения');
define('BOX_CONFIGURATION_GV_COUPONS', 'Купоны');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Кредитные карты');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Информация о товаре');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Внешний вид');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Выключение магазина');
define('BOX_CONFIGURATION_NEW_LISTING', 'Список Новинки');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Список Рекомендуемые');
define('BOX_CONFIGURATION_ALL_LISTING', 'Список Все товары');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Главная страница');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Страницы определений');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-страницы');

// modules box text
define('BOX_HEADING_MODULES', 'Модули');
define('BOX_MODULES_PAYMENT', 'Оплата');
define('BOX_MODULES_SHIPPING', 'Доставка');
define('BOX_MODULES_ORDER_TOTAL', 'Итоги');
define('BOX_MODULES_PRODUCT_TYPES', 'Товарные группы');

// categories box text
define('BOX_HEADING_CATALOG', 'Каталог');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Категории/Товары');
define('BOX_CATALOG_PRODUCT_TYPES', 'Товарные группы');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Названия опций');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Значения опций');
define('BOX_CATALOG_MANUFACTURERS', 'Производители');
define('BOX_CATALOG_REVIEWS', 'Отзывы');
define('BOX_CATALOG_SPECIALS', 'Скидки');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Ожидаемые товары');
define('BOX_CATALOG_SALEMAKER', 'Акции');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Менеджер цен');
define('BOX_CATALOG_PRODUCT', 'Товары');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Товары в категориях');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Покупатели');
define('BOX_CUSTOMERS_CUSTOMERS', 'Покупатели');
define('BOX_CUSTOMERS_ORDERS', 'Заказы');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Групповые цены');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Инвойс');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Упаковочный лист');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Зоны/Налоги');
define('BOX_TAXES_COUNTRIES', 'Страны');
define('BOX_TAXES_ZONES', 'Регионы');
define('BOX_TAXES_GEO_ZONES', 'Географические зоны');
define('BOX_TAXES_TAX_CLASSES', 'Виды налогов');
define('BOX_TAXES_TAX_RATES', 'Налоговые ставки');

// reports box text
define('BOX_HEADING_REPORTS', 'Отчёты');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Просмотренные товары');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Проданные товары');
define('BOX_REPORTS_ORDERS_TOTAL', 'Все заказы');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Товары в дефиците');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Ссылки покупателей');

// tools text
define('BOX_HEADING_TOOLS', 'Инструменты');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Выбор шаблона');
define('BOX_TOOLS_BACKUP', 'Бэкап БД');
define('BOX_TOOLS_BANNER_MANAGER', 'Менеджер баннеров');
define('BOX_TOOLS_CACHE', 'Управление кэшированием');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Определить язык');
define('BOX_TOOLS_FILE_MANAGER', 'Файл-менеджер');
define('BOX_TOOLS_MAIL', 'Отправить почту');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Почтовые рассылки');
define('BOX_TOOLS_SERVER_INFO', 'Информация о сервере');
define('BOX_TOOLS_WHOS_ONLINE', 'Кто в магазине');
define('BOX_TOOLS_STORE_MANAGER', 'Обслуживание магазина');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Разработчику');
define('BOX_TOOLS_SQLPATCH','Установка SQL патчей');
define('BOX_TOOLS_EZPAGES','EZ-Страницы');

define('BOX_HEADING_EXTRAS', 'Дополнения');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Страницы определений');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Главная страница');
define('BOX_TOOLS_DEFINE_CONTACT_US','Контакты');
define('BOX_TOOLS_DEFINE_PRIVACY','Приватность');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Доставка и возврат');
define('BOX_TOOLS_DEFINE_CONDITIONS','Условия использования');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Успешный заказ');
define('BOX_TOOLS_DEFINE_PAGE_2','Страница 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Страница 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Страница 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Локализация');
define('BOX_LOCALIZATION_CURRENCIES', 'Валюта');
define('BOX_LOCALIZATION_LANGUAGES', 'Языки');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Статус заказа');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Купоны');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Очередь');
define('BOX_GV_ADMIN_MAIL', TEXT_GV_NAME . ' Рассылка');
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' Отправлено');
define('BOX_COUPON_ADMIN','Менеджер купонов');
define('BOX_COUPON_RESTRICT','Ограничения купона');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Администраторы');
define('BOX_ADMIN_ACCESS_USERS',  'Администраторы');
define('BOX_ADMIN_ACCESS_PROFILES', 'Профили администраторов');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Регистрация страниц админ-панели');
define('BOX_ADMIN_ACCESS_LOGS', 'Журнал активности админов');

define('IMAGE_RELEASE', 'Выкуп ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Ошибки при заполнении формы!\nИсправьте пожалуйста:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Новый атрибут товара дожен иметь цену\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Новый атрибут товара дожен иметь ценовой префикс\n');

define('JS_PRODUCTS_NAME', '* Для нового товара должно быть определено название\n');
define('JS_PRODUCTS_DESCRIPTION', '* Для нового товара должно быть указано описание\n');
define('JS_PRODUCTS_PRICE', '* Для нового товара должна быть указана цена\n');
define('JS_PRODUCTS_WEIGHT', '* Для нового товара должен быть указан вес\n');
define('JS_PRODUCTS_QUANTITY', '* Для нового товара должно быть указано количество\n');
define('JS_PRODUCTS_MODEL', '* Для нового товара должна быть указана модель\n');
define('JS_PRODUCTS_IMAGE', '* Для нового товара должна быть указана картинка\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Для этого товара необходимо установить новую цену\n');

define('JS_GENDER', '* Поле \'Пол\' должно быть выбрано.\n');
define('JS_FIRST_NAME', '* Поле \'Имя\' должно содержать не менее ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов.\n');
define('JS_LAST_NAME', '* The \'Фамилия\' должно содержать не менее ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов.\n');
define('JS_DOB', '* Поле \'День рождения\' должно иметь формат: xx/xx/xxxx (день/месяц/год).\n');
define('JS_EMAIL_ADDRESS', '* Поле \'E-Mail адрес\' должно содержать не менее ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов.\n');
define('JS_ADDRESS', '* Поле \'Адрес\' должно содержать не менее ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов.\n');
define('JS_POST_CODE', '* Поле \'Индекс\' должно содержать не менее ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов.\n');
define('JS_CITY', '* Поле \'Город\' должно содержать не менее ' . ENTRY_CITY_MIN_LENGTH . ' символов.\n');
define('JS_STATE', '* Поле \'Регион\' должно содержать не менее.\n');
define('JS_STATE_SELECT', '-- Выберите --');
define('JS_ZONE', '* Поле \'Регион\' должно соответствовать выбраной стране.');
define('JS_COUNTRY', '* Поле \'Страна\' дожно быть заполнено.\n');
define('JS_TELEPHONE', '* Поле \'Телефон\' должно содержать не менее ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символов.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Заказ номер %s не существует!');
define('TEXT_NO_ORDER_HISTORY', 'Нет истории заказа');

define('CATEGORY_PERSONAL', 'Персональные данные');
define('CATEGORY_ADDRESS', 'Адрес');
define('CATEGORY_CONTACT', 'Контакты');
define('CATEGORY_COMPANY', 'Организация');
define('CATEGORY_OPTIONS', 'Опции');

define('ENTRY_GENDER', 'Приветствие:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">обязательно для заполнения</span>');
define('ENTRY_FIRST_NAME', 'Имя:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_LAST_NAME', 'Фамилия:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_DATE_OF_BIRTH', 'День рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(например 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail адрес:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Неправильный формат е-mail адреса!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Такой e-mail уже существует!</span>');
define('ENTRY_COMPANY', 'Название компании:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Группа скидок');
define('ENTRY_STREET_ADDRESS', 'Адрес:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_SUBURB', 'Дополнительный адрес:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Индекс:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов</span>');
define('ENTRY_CITY', 'Город:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">минимиум ' . ENTRY_CITY_MIN_LENGTH . ' символов</span>');
define('ENTRY_STATE', 'Регион:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">обязательно для заполнения</span>');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символов</span>');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Подписка на рассылку:');
define('ENTRY_NEWSLETTER_YES', 'Подписан');
define('ENTRY_NEWSLETTER_NO', 'Не подписан');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Введённый пароль не совпадает с подтверждением');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Новый пароль не принят.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Пароль должен состоять из букв и цифт, быть не менее %s символов, и должен отличаться от последних 4 использованных паролей. Пароль Срок действия пароля истекает через каждые 90 дней.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ОШИБКА: При обработке Ваших данных возникла ошибка. Повторите ввод.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Отправить E-Mail');
define('IMAGE_BACK', 'Назад');
define('IMAGE_BACKUP', 'Резервная копия');
define('IMAGE_CANCEL', 'Отменить');
define('IMAGE_CONFIRM', 'Подтвердить');
define('IMAGE_COPY', 'Копировать');
define('IMAGE_COPY_TO', 'Копировать в');
define('IMAGE_DETAILS', 'Детали');
define('IMAGE_DELETE', 'Удалить');
define('IMAGE_EDIT', 'Редактировать');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Go');
define('IMAGE_FILE_MANAGER', 'Файл-менеджер');
define('IMAGE_ICON_STATUS_GREEN', 'Активный');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Активизировать');
define('IMAGE_ICON_STATUS_RED', 'Неактивный');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Сделать неактивным');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Ошибка - слишком много URL/содержимого введено');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Ошибка');
define('IMAGE_ICON_INFO', 'Информация');
define('IMAGE_INSERT', 'Добавить');
define('IMAGE_LOCK', 'Заблокировать');
define('IMAGE_MODULE_INSTALL', 'Установить модуль');
define('IMAGE_MODULE_REMOVE', 'Удалить модуль');
define('IMAGE_MOVE', 'Переместить');
define('IMAGE_NEW_BANNER', 'Новый баннер');
define('IMAGE_NEW_CATEGORY', 'Новая категория');
define('IMAGE_NEW_COUNTRY', 'Новая страна');
define('IMAGE_NEW_CURRENCY', 'Новая валюта');
define('IMAGE_NEW_FILE', 'Новый файл');
define('IMAGE_NEW_FOLDER', 'Новая папка');
define('IMAGE_NEW_LANGUAGE', 'Новый язык');
define('IMAGE_NEW_NEWSLETTER', 'Новая рассылка');
define('IMAGE_NEW_PRODUCT', 'Новый товар');
define('IMAGE_NEW_SALE', 'Новая акция');
define('IMAGE_NEW_TAX_CLASS', 'Новый налог');
define('IMAGE_NEW_TAX_RATE', 'Новая ставка налога');
define('IMAGE_NEW_TAX_ZONE', 'Новая налоговая Зона');
define('IMAGE_NEW_ZONE', 'Новая зона');
define('IMAGE_OPTION_NAMES', 'Названия опций');
define('IMAGE_OPTION_VALUES', 'Значения опций');
define('IMAGE_ORDERS', 'Заказы');
define('IMAGE_ORDERS_INVOICE', 'Счёт');
define('IMAGE_ORDERS_PACKINGSLIP', 'Упаковка');
define('IMAGE_PERMISSIONS', 'Права доступа');
define('IMAGE_PREVIEW', 'Предпросмотр');
define('IMAGE_RESTORE', 'Восстановить');
define('IMAGE_RESET', 'Сбросить');
define('IMAGE_RESET_PWD', 'Сбросить пароль');
define('IMAGE_SAVE', 'Сохранить');
define('IMAGE_SEARCH', 'Искать');
define('IMAGE_SELECT', 'Выбрать');
define('IMAGE_SEND', 'послать');
define('IMAGE_SEND_EMAIL', 'Отправить E-mail');
define('IMAGE_SUBMIT', 'Отправить');
define('IMAGE_UNLOCK', 'Разблокировать');
define('IMAGE_UPDATE', 'Изменить');
define('IMAGE_UPDATE_CURRENCIES', 'Обновить курс валют');
define('IMAGE_UPLOAD', 'Загрузить');
define('IMAGE_TAX_RATES','Налоговая ставка');
define('IMAGE_DEFINE_ZONES','Определить зоны');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Центр управления ценами');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Обновить цены');
define('IMAGE_ADD_BLANK_DISCOUNTS','Добавить ' . DISCOUNT_QTY_ADD . ' скидок');
define('IMAGE_CHECK_VERSION', 'Проверить обновления Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Мульти-Линкование категорий');

define('IMAGE_ICON_STATUS_ON', 'Статус - Активно');
define('IMAGE_ICON_STATUS_OFF', 'Статус - Неактивно');
define('IMAGE_ICON_LINKED', 'Связанный товар');

define('IMAGE_REMOVE_SPECIAL','Удалить скидку');
define('IMAGE_REMOVE_FEATURED','Удалить рекомендуемый товар');
define('IMAGE_INSTALL_SPECIAL', 'Добавить скидку');
define('IMAGE_INSTALL_FEATURED', 'Добавить рекомендованный товар');

define('TEXT_VERSION_CHECK_BUTTON', 'Проверить наличие новой версии');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'Посмотреть лог активности');

define('ICON_PRODUCTS_PRICE_MANAGER','Центр управления ценами');
define('ICON_COPY_TO', 'Копировать в');
define('ICON_CROSS', 'Недействительно');
define('ICON_CURRENT_FOLDER', 'Текущая директория');
define('ICON_DELETE', 'Удалить');
define('ICON_EDIT', 'Редактировать');
define('ICON_ERROR', 'Ошибка');
define('ICON_FILE', 'Файл');
define('ICON_FILE_DOWNLOAD', 'Загрузка');
define('ICON_FOLDER', 'Папка');
//define('ICON_LOCKED', 'Заблокировано');
define('ICON_MOVE', 'Переместить в');
define('ICON_PERMISSIONS', 'Доступ');
define('ICON_PREVIOUS_LEVEL', 'Предыдущий уровень');
define('ICON_PREVIEW', 'Предпросмотр');
define('ICON_RESET', 'Сбросить');
define('ICON_STATISTICS', 'Статистика');
define('ICON_SUCCESS', 'Успешно');
define('ICON_TICK', 'Истинно');
//define('ICON_UNLOCKED', 'Разблокировать');
define('ICON_WARNING', 'Предупреждение');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страница: %s из %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> администраторов');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> баннеров)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> категорий)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> стран)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> покупателей)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> валют)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> рекомендуемых)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> языков)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> производителей)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> рассылок новостей)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> заказов)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> состояний заказов)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> груп цен)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> товаров)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> товарных групп)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> ожидаемых товаров)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> отзывов о товарах)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> акций)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> товаров со скидками)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> налоговых классов)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> шаблонов)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> налоговых зон)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> налоговых ставок)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> зон)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'по умолчанию');
define('TEXT_SET_DEFAULT', 'Установить по умолчанию');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Требуется!</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Ошибка: Не указана валюта по умолчанию. Сделайте это в Локализация->Валюта');

define('TEXT_NONE', '--нет--');
define('TEXT_TOP', 'Вверх');
define('PLEASE_SELECT', 'Выберите...');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Ошибка: Директории "%s" не существует.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Ошибка: Не разрешена запись в %s.');
define('ERROR_FILE_NOT_SAVED', 'Ошибка: Загружаемый файл не сохранен.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Ошибка: Недопустимый тип загружаемого файла %s.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Успешно: Загружаемый файл %s сохранен успешно.');
define('WARNING_NO_FILE_UPLOADED', 'Предупреждение: файл не загрузился.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Предупреждение: загрузка файлов отключена в файле конфигурации php.ini .');
define('ERROR_ADMIN_SECURITY_WARNING', 'Предупреждение: Ваш логин в Админ не безопасный. У Вас сохранились настройки по умолчанию: Admin admin или Вы не удалили/изменили demo demoonly<br />Для обеспечения безопасности Вашего магазина необходимо как можно быстрее изменить настройки<br />Идите в Инструменты->Настройки Админа для изменения логина и пароля.<br />Для обеспечения дополнительной безопасности для Админа см. /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Вашу база данных необходимо пропатчить до более поздей версии. Для просмотра уровня патчей смотрите Инструменты->Информация о Сервере.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ПРЕДУПРЕЖДЕНИЕ:</strong> В настоящий момент сайт установлен в состояние "Технические работы"...<br />Замечание: Вы не сможите тестировать большинство модулей оплаты и доставки.');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ПРЕДУПРЕЖДЕНИЕ: Эти файлы должны быть удалены из соображений безопасности: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'ПРЕДУПРЕЖДЕНИЕ БЕЗОПАСНОСТИ: Директория установки обнаружена в: ' . DIR_FS_CATALOG . 'zc_install. Пожалуйста удалите эту директорию из соображений безопасности.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'ПРЕДУПРЕЖДЕНИЕ: Ваш конфигурационный файл: %s доступен на запись. Это потенциальная проблема безопасности - пожалуйста установите правильные права доступа к данному файлу (только чтение, обычно CHMOD 644 или 444).  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Смотри статью в ФАК</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ПРЕДУПРЕЖДЕНИЕ: Не могу найти языковой файл: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ОШИБКА: Удаление модуля запрещено: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ПРЕДУПРЕЖДЕНИЕ: Пожалуйста ознакомьтесь с вероятной активностью XSS:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Ошибка: Не могу удалить указанный файл. Из-за серверных ограничений Вы можете удалить файл используя ФТП.');
define('WARNING_SESSION_AUTO_START', 'Предупреждение: включена опция session.auto_start - выключите эту опцию PHP в php.ini (возможно понадобится рестарт вебсервера для того, чтобы изменения вступили в силу).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Предупреждение: Не существует директория скачиваемых товаров: ' . DIR_FS_DOWNLOAD . '. Скачиваемые товары не будут работать пока директория не будет создана.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Предупреждение: Не существует директория кеширования SQL: ' . DIR_FS_SQL_CACHE . '. Кеширование SQL не будет работать пока директория не будет создана.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Предупреждение: Директория кеширования SQL не доступна на запись: ' . DIR_FS_SQL_CACHE . '. Кеширование SQL не будет работать пока у директории не будут установлены соответствующие права.');

define('_JANUARY', 'Январь');
define('_FEBRUARY', 'Февраль');
define('_MARCH', 'Март');
define('_APRIL', 'Апрель');
define('_MAY', 'Май');
define('_JUNE', 'Июнь');
define('_JULY', 'Июль');
define('_AUGUST', 'Август');
define('_SEPTEMBER', 'Сентябрь');
define('_OCTOBER', 'Октябрь');
define('_NOVEMBER', 'Ноябрь');
define('_DECEMBER', 'Декабрь');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> подарочных сертификатов)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> купонов)');

define('TEXT_VALID_PRODUCTS_LIST', 'Список товаров');
define('TEXT_VALID_PRODUCTS_ID', 'ID товара');
define('TEXT_VALID_PRODUCTS_NAME', 'Название товара');
define('TEXT_VALID_PRODUCTS_MODEL', 'Модель товара');

define('TEXT_VALID_CATEGORIES_LIST', 'Список категорий');
define('TEXT_VALID_CATEGORIES_ID', 'ID категории');
define('TEXT_VALID_CATEGORIES_NAME', 'Название категории');

define('DEFINE_LANGUAGE','Выбрать язык:');

define('BOX_ENTRY_COUNTER_DATE','Счетчик хитов активирован:');
define('BOX_ENTRY_COUNTER','Счетчик хитов:');

// not installed
define('NOT_INSTALLED_TEXT','Не установлен');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Сортировка значений опций');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Обновить порядок сортировки атрибутов согласно установок по умолчанию</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Обновить все товары\' Порядок сортировки атрибутов</strong><br />согласно установок по умолчанию:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Сортировка опций');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Управление атрибутами');

// generic model
  define('TEXT_MODEL','Модель:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Размещение боксов');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s в ожидании подтверждения ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Очередь');
  define('IMAGE_ORDER','Заказ');

  define('IMAGE_DISPLAY','Показано');
  define('IMAGE_UPDATE_SORT','Обновить порядок сортировки');
  define('IMAGE_EDIT_PRODUCT','Изменить товар');
  define('IMAGE_EDIT_ATTRIBUTES','Изменить атрибуты');
  define('TEXT_NEW_PRODUCT', 'Новый товар: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Опции и значения');
  define('TEXT_PRODUCTS_PRICE_MANAGER','Центр управления ценами');
  define('TEXT_PRODUCT_EDIT','Изменить товар');
  define('TEXT_ATTRIBUTE_EDIT','Изменить атрибуты');
  define('TEXT_PRODUCT_DETAILS','Просмотр товара');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Сумма акционной скидки');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Процент');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Новая цена');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Мин:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Кол-во:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В корзине:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Дополнительно добавить:');

  define('TEXT_PRODUCTS_MIX_OFF','* Нет смешанных опций');
  define('TEXT_PRODUCTS_MIX_ON','* Есть смешанные опции');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Фильтр поиска: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Поиск: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Поиск товаров (через запятую)');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Поиск товаров Наименование/Модель');

  define('PREV_NEXT_PRODUCT', 'Товары: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Категория выключена</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Товар выключен</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Включен админ демо-режим. Некоторые функции недоступны');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Включен админ демо-режим. Некоторые функции недоступны - <strong>ПРИМЕЧАНИЕ: Включено переопределение Админа</strong>');
  define('ERROR_ADMIN_DEMO','Включен админ демо-режим ... все сделанные Вами изменения будут недействительны');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Доступна новая версия V');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Доступны новые изменения: V');
  define('TEXT_VERSION_CHECK_PATCH','изменения');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Загрузить здесь');
  define('TEXT_VERSION_CHECK_CURRENT','Ваша версия Zen Cart&reg; последняя.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Показано с <b>%d</b> по <b>%d</b> (из <b>%d</b> загрузок)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Управление загрузками');

define('BOX_CATALOG_FEATURED','Рекомендуемые товары');

define('ERROR_NOTHING_SELECTED', 'Вы ничего не выбрали... Поэтому никаких изменений :)');
define('TEXT_STATUS_WARNING','<strong>Замечание:</strong> статус АВТО включен/выключен когда данные определены');

define('TEXT_LEGEND_LINKED', 'Связанные товары');
define('TEXT_MASTER_CATEGORIES_ID','Мастер-категория:');
define('TEXT_LEGEND', 'СТАТУС: ');
define('TEXT_LEGEND_STATUS_OFF', 'ВЫКЛ ');
define('TEXT_LEGEND_STATUS_ON', 'ВКЛ ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>Замечание: Мастер-категория используется для работы с ценами<br />влияет также на цены в связанных товарах, например: Акции</strong>');
define('TEXT_YES', 'Да');
define('TEXT_NO', 'Нет');
define('TEXT_CANCEL', 'Отменить');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Ошибка в конфигурации доставки!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Внимание:</strong> Не определен почтовый индекс магазина. Смотри конфигурацию | Доставка/Упаковка для настроек.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Внимание:</strong> нулевой вес сконфигурирован для бесплатной доставки и поэтому модуль бесплатной доставки не работает');
define('ERROR_USPS_STATUS', '<strong>Внимание:</strong> USPS shipping module is either missing the username, or it is set to TEST rather than PRODUCTION and will not work.<br />If you cannot retrieve USPS Shipping Quotes, contact USPS to activate your Web Tools account on their production server. 1-800-344-7779 or icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'ЗАМЕЧАНИЕ: Нет ни одного активного модуля доставки. Пожалуйста, сконфигурируйте модули доставки.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'ЗАМЕЧАНИЕ: Нет ни одного активного модуля оплаты. Пожалуйста, сконфигурируйте модули оплаты.');

// text pricing
define('TEXT_CHARGES_WORD','Вычисленная цена:');
define('TEXT_PER_WORD','<br />Цена за слово: ');
define('TEXT_WORDS_FREE',' Слово(а) бесплатно ');
define('TEXT_CHARGES_LETTERS','Вычисленная цена:');
define('TEXT_PER_LETTER','<br />Цена за букву: ');
define('TEXT_LETTERS_FREE',' Буква(ы) бесплатна ');
define('TEXT_ONETIME_CHARGES','*одноразовая = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '* одноразовая = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Опция - Скидка от количества');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Кол-во');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','ЦЕНА');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Опция - Скидка от количества - одноразовая');
define('TEXT_CATEGORIES_PRODUCTS', 'Выберите категорию с товаром');
define('TEXT_PRODUCT_TO_VIEW', 'Для просмотра выберите товар и нажмите ПРОСМОТР ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID Мастер-категории неправильный');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Предупреждение:</strong> Этот товар связан с другими категориями, но не определена мастер-категория!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Товар "Цена по запросу"');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Бесплатный товар');

define('TEXT_PRODUCT_WEIGHT_UNIT','кг');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Макс:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Экономия:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% скидка');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;скидка');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Акция:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена определяется атрибутами');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','У Вас не определён HTML редактор или отключен JavaScript, Вы можете ввести HTML-текст вручную');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Заметка: Вы используете режим TEXT в своих email. Если вы хотите послать письмо в HTML Вам нужно включить "использовать MIME HTML" в настройках E-mail</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Заметка: Вы используете режим TEXT в своих email. Если вы хотите послать письмо в HTML Вам нужно включить "использовать MIME HTML" в настройках E-mail</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Вы видите этот текст потому что мы отправили Вам email в HTML формате но Ваш почтовый клиент не отображает HTML сообщения.");
define('ENTRY_EMAIL_PREFERENCE','Email-формат настройки:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Выберите "none" или "optout" отключить ВСЕ email, включая письма с деталями заказа');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-только');
define('ENTRY_EMAIL_NONE_DISPLAY','Никогда');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Отписаться от новостных сообщений!');
define('ENTRY_NOTHING_TO_SEND','Вы не ввели никакого сообщения');
define('EMAIL_SEND_FAILED','ERROR: Ошибка при отсылке email на: "%s" <%s> с темой: "%s"');

  define('EDITOR_NONE', 'Текст');
  define('TEXT_EDITOR_INFO', 'Текстовый редактор');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Вы выбрали HTML-редактор в "Конфигурация -> Мой магазин", но директория \'/editors/\' не обнаружена. Пожалуйста отключите HTML-редактор или загрузите файлы редактора в директорию \'' . DIR_WS_CATALOG . 'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Сортировка товаров');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Сортировка товаров, Название товара');
  define('TEXT_SORT_PRODUCTS_NAME', 'Название товара');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Модель товара');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Кол-во товара +, Название товара');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Кол-во товара -, Название товара');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Цена товара +, Название товара');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Цена товара -, Название товара');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Сортировка категорий, Название категории');
  define('TEXT_SORT_CATEGORIES_NAME', 'Название категории');

  define('TEXT_SELECT_MAIN_DIRECTORY', 'Основная директория картинок');

  define('TABLE_HEADING_YES','Да');
  define('TABLE_HEADING_NO','Нет');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Или введите имя файла картинки на сервере:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Заменить существующую картинку?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ВНИМАНИЕ: Название файла было изменено, но его не удалось переписать ');
  define('TEXT_IMAGES_DELETE', '<strong>Удалить картинку?</strong> Замечание: Удаляя картинку у товара Вы не удаляете файл картинки с сервера:');
  define('TEXT_IMAGE_CURRENT', 'Картинка: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'ВНИМАНИЕ: Вы не определили название опции!');
  define('ERROR_DEFINE_OPTION_VALUES', 'ВНИМАНИЕ: Вы не определили значение опции!');
  define('ERROR_DEFINE_PRODUCTS', 'ВНИМАНИЕ: Вы не определили ни одного товара!');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Предупреждение: Для данного товара не установлена основная категория (Master Categories)');

define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Добавить включая подкатегории');
define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Добавить исключая подкатегории');

define('BUTTON_PREVIOUS_ALT','Предыдущий товар');
define('BUTTON_NEXT_ALT','Следующий товар');

define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Управление ссылками на категории');
define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Копировать товар в несколько категорий');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Глобальное Копирование, Добавление и Удаление отключено');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Глобальные операции - ВКЛ');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Глобальные операции - ВЫКЛ');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Ошибка: Нельзя связать товар в этой же категории.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Директория картинок закрыта для записи: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория картинок не существует: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Ошибка: Категория не может быть перемещена в свою подкатегорию.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Ошибка: Нельзя переместить товар в эту же категорию или в ту категорию, где этот товар уже присутствует.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Ошибка: Категория содержит товары!');
  define('SUCCESS_CATEGORY_MOVED', 'Успешно! Категория перемещена...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Ошибка: Нельзя перемещать категорию в саму себя! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Внимание: Заголовок EZ-страниц - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Внимание: Подвал EZ-страниц - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Внимание: Бокс EZ-страниц - Только для IP админа');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Внимание: Этот товар помечен как - Бесплатная доставка, Адрес доставки не требуется<br />Если все товары в заказе отмечены таким образом, то необходимо установить модуль Виртуальных товаров.');
  define('TEXT_VIRTUAL_EDIT','Внимание: Этот товар помечен как - Бесплатная доставка, Адрес доставки не требуется<br />Если все товары в заказе отмечены таким образом, то необходимо установить модуль Виртуальных товаров.');
  define('TEXT_FREE_SHIPPING_PREVIEW','Внимание: Этот товар отмечен как - Бесплатная доставка, Адрес доставки требуется<br />Если товары отмечены таким образом, то необходимо установить Модуль бесплатной доставки');
  define('TEXT_FREE_SHIPPING_EDIT','Внимание: Этот товар отмечен как - Бесплатная доставка, Адрес доставки требуется<br />Если товары отмечены таким образом, то необходимо установить Модуль бесплатной доставки');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Внимание: Лог-файл активности админов ведется уже больше двух месяцев. Пришла пора его очистить ...');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Внимание: Лог-файл активности админов насчитывает свыше 50,000 записей. Пришла пора его очистить ...');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Зайдите в Центр обслуживания магазина (меню Инструменты - обслуживание магазина) и обнулите лог-файл активности админов');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Лог активности админов. Формат: %s. Фильтр: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Неудачная попытка входа администратора: ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Попытка зайти в заблокированный аккаунт:');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Попытка входа без CSRF-токена.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Попытка входа без имени.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Неверный пароль при попытке сброса пароля для: ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'ЗАМЕЧАНИЕ: Категория содержит подкатегории<br />поэтому товар не может быть добавлен');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ПРЕДУПРЕЖДЕНИЕ! Приглашение Купона истекает через %s дней');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'ВНИМАНИЕ: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Ваша директория /admin/ должна быть переименована во что-нибудь менее очевидное</a> для предотвращения неавторизованного доступа и атак.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'ПРЕДУПРЕЖДЕНИЕ: Подсистема email выключена. Письма не будут отправляться до тех пор, пока Вы её не активируете в Admin->Configuration->Email Options.');
define('TEXT_CURRENT_VER_IS', 'Текущая версия - ');
define('ERROR_NO_DATA_TO_SAVE', 'ОШИБКА: Данные переданные Вами - пустые. ВАШИ ИЗМЕНЕНИЯ *НЕ БУДУТ* СОХРАНЕНЫ. Возможно у Вас проблемы с браузером или интернет-связью.');
define('TEXT_HIDDEN', 'Скрытый');
define('TEXT_VISIBLE', 'Видимый');
define('TEXT_HIDE', 'Скрыть');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'Нет Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Товарные группы');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">Ошибка 0071: проблема с базой данных. Требуется обслуживание.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'Курс %s (%s) был обновлён %s через %s.');
define('ERROR_CURRENCY_INVALID', 'Ошибка: Курс обмена для %s (%s) не обновлён через %s. Проверьте правильность кода валюты.');
define('WARNING_PRIMARY_SERVER_FAILED', 'Предупреждение: Основной сервер курса валют (%s) недоступен для %s (%s) - пробуем использовать запасной сервер.');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));

// EOF
