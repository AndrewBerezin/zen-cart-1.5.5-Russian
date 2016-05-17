<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Mon Dec 28 17:31:37 2015 -0500 Modified in v1.5.5 $
 */

  define('HEADING_TITLE', 'Центр обслуживания магазина');
  define('TABLE_CONFIGURATION_TABLE', 'Поиск CONSTANT');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Успешное</strong> обновление порядка сортировки Атрибутов');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Успешное</strong> обновление порядка сортировки цен');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Успешное</strong> обнуление счётчиков просмотренных товарв');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Успешное</strong> обнуление счётчиков заказаных товаров');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Успешное</strong> обновление всех Мастер категорий для связанных товаров к первоначальному начению');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Успешное</strong> обновление счетчика к значению: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Ошибка:</strong> Ничего найдено ... Поиск завершен ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Ошибка:</strong> Ничего не введено для поиска ... Поиск завершен');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Установить счётчик <br />в новое значение:</strong>');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Обновить порядок сортировки для ВСЕХ товаров<br />к сортировке по отображаемым ценам:</strong> ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Обнулить счётчик "просмотрено" у всех товаров</strong>: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Обнулить счётчик "заказано" у всех товаров</strong>: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Вернуть все ID Мастер категорий </strong><br />для использования связаными товарами и ценами: ');

  define('TEXT_NEW_ORDERS_ID', 'Новый номер заказа');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Укажите номер следующего заказа</strong><br />Примечание: Вы не можете установить номер заказа меньше существующих.');
  define('TEXT_MSG_NEXT_ORDER', 'Номер следующего заказа будет %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Указанный номер существует, номер следующего заказа установлен в: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Из-за ограничений базы данных, нельзя задать номер заказа больше 2000000000. Пожалуйста, выберите меньшее значение.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Поиск констант или определений в языковых файлах</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Ключ или Название:');
 define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Замечание:</strong> константы всегда пишутся заглавными буквами, например DIR_WS_CATALOG.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Поиск определений в языковых файлах</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Поиск текста:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>Замечание:</strong> При поиске не важен регистр. ');

  define('TABLE_TITLE_KEY', '<strong>Ключ:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Заголовок:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Описание:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Группа:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Значение:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Поиск в языковых файлах:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Везде');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Во всех файлах в admin:' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'В языковом файле в catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'russian.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'В таких файлах как - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'В языковом файле в admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'russian.php.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Во всех файлах в Админе в (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Во всех файлах в - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Изменения невозможны');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' Или, HIDDEN');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Оптимизируйте базу данных</strong> чтобы освободить неиспользуемое пространство удалённых записей.<br />Опционально можно запускать ежемесячно или еженедельно на на занятой базе.<br />(Лучше запускать при простое базы.)');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Оптимизация Таблиц базы данных в процессе. Это может занять несколько минут. Пожалуйста, подождите. Предыдущее меню вновь появятся, когда оптимизация закончится...');
 define('SUCCESS_DB_OPTIMIZE', 'Оптимизация Базы Данных - обработано таблиц: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Очистка файлов отладки</strong><br /><strong>ВНИМАНИЕ!: </strong>Zen Cart записывает сообщения об ошибках PHP в целях отладки и многие модули оплаты могут создавать записи отладки для диагностинования проблем связи. <br />Кликнув здесь вы навсегда очистите ВСЕ записи журнала с ошибками PHP и сообщениями модулей PayPal, Authorize.net, и Linkpoint/FirstData.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Файлы лога отладки очищены');

// EOF