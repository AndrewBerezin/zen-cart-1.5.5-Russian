<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
*/

define('HEADING_TITLE_OPT', 'Опции товара');
define('HEADING_TITLE_VAL', 'Значения опций');
define('HEADING_TITLE_ATRIB', 'Атрибуты товара');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_OPT_NAME', 'Название опции');
define('TABLE_HEADING_OPT_VALUE', 'Значение опции');
define('TABLE_HEADING_OPT_PRICE', 'Цена');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Префикс');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_DOWNLOAD', 'Загружаемые товары:');
define('TABLE_TEXT_FILENAME', 'Название файла:');
define('TABLE_TEXT_MAX_DAYS', 'Срок истекает:');
define('TABLE_TEXT_MAX_COUNT', 'Максимальное количество загрузок:');

define('TEXT_WARNING_OF_DELETE', 'У этой опции есть товары и значения - удаление чревато необратимыми последствиями.');
define('TEXT_OK_TO_DELETE', 'У этой опции нет товаров связанных с ней - можно смело удалять.<br />Внимание: Все значения для этой опции также будут удалены.');
define('TEXT_OPTION_ID', 'ID опции');
define('TEXT_OPTION_NAME', 'Название опции');
define('TABLE_HEADING_OPT_DISCOUNTED','Со скидкой');

define('ATTRIBUTE_WARNING_DUPLICATE','Произошло дублирование атрибутов - атрибуты не были добавлены'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Дублируемые атрибуты существуют - атрибуты не были изменены'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Опции атрибутов и значения не соответствуют - атрибуты не были добавлены'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Опции атрибутов и значения не соответствуют - атрибуты не были изменены'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Возможно дублирование названия опции'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Возможно дублирование значения опции'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','ИЗМЕНЕНИЕ'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','УДАЛЕНИЕ'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','ДОБАВЛЕНИЕ НОВЫХ АТРИБУТОВ'); // title
define('TEXT_DOWNLOADS_DISABLED','Замечание: Загрузки отключены');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Дни:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Макс количество:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Сортировка');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Сортировка по умолчанию');
  define('TEXT_SORT','Сорт.: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Префикс');
  define('TABLE_HEADING_OPT_WEIGHT','Вес');
  define('TABLE_HEADING_OPT_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPT_DEFAULT','По умолчанию');

  define('TABLE_HEADING_YES','Да');
  define('TABLE_HEADING_NO','Нет');

  define('TABLE_HEADING_OPT_TYPE', 'Тип опции'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Размер');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Макс');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Строки');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Комментарии');

  define('TEXT_OPTION_VALUE_COMMENTS','Комментарии: ');
  define('TEXT_OPTION_VALUE_SIZE','Размер: ');
  define('TEXT_OPTION_VALUE_MAX','Маскимальная длина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Картинки атрибутов:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Директория каринок:');

  define('TEXT_ATTRIBUTES_FLAGS','Атрибут<br />Флаг:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Только для<br />просмотра:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Атрибут бесплатен<br />когда товар бесплатен?');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Сделать по умолчанию?');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Применить скидки<br />выставленные в товаре?');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включить в базовую цену<br />когда товар основан на атрибутах?');

  define('TEXT_PRODUCT_OPTIONS_INFO','Редактировать опции товара?');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Копировать во ВСЕ товары, у которых Имя и Значение Опций ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Выберете Имя и Значение Опции, которая в настоящее время существует у товара или товары, которым Вы затем хотите скопировать другое имя и значение Опции для всех товаров с этим существующем именем и значением Опции');
  define('TEXT_SELECT_OPTION_FROM', 'Соответсвующее Имя Опции:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Соответсвующее Значение Опции:');
  define('TEXT_SELECT_OPTION_TO', 'Имя Опции для добавления:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Значение Опции для добавления:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Оставьте пустым для ВСЕХ товаров<br />введите ID категории для изменяемых Товаров');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Копировать Имя/Значение Опции Товарам с существующим Именем Опции ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Выберете Имя и Значение Опции, которая в настоящее время существует у товара или товары, чтобы добавить ко всем товарам, или только к товарам выбранной категории, которые имеют выбранное Имя Опции.
                                                   <br /><strong>Например:</strong> Добавить Имя Опции: Цвет Значение Опции: Красный всем Товарам с Именем Опции: Размер
                                                   <br /><strong>Например:</strong> Добавить Имя Опции: Цвет Значение Опции: Зелёный со значением по умолчанию от Товара ID: 34 всем Товарам с Именем Опции: Размер
                                                   <br /><strong>Например:</strong> Добавить Имя Опции: Цвет Значение Опции: Зелёный со значением по умолчанию от Товара ID: 34 всем Товарам с Именем Опции: Размер для Категории ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Имя Опции, добавлемое к:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Добавляемое Имя Опции:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Добавляемое Имя Опции:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Значение Атрибутов по умолчанию от Товара ID# или оставьте пустым для отсутствия значения по умолчанию:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как существующие Атрибуты Товара должны обрабатываться?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','Сначала <strong>Удаляться</strong>, затем копируются новые атрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновляются</strong> существующие атрибуты новыми значениями и ценами');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Игнорируются</strong> существующие атрибуты и добавляются только новые атрибуты');

  define('TEXT_INFO_FROM', ' от: ');
  define('TEXT_INFO_TO', ' к: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Ошибка: Дублируется Имя и Значение Опции');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Ошибка: Пропущено Имя и Значение выбранной Опции');
  define('ERROR_OPTION_VALUES_NONE', 'Ошибка: Ничего не найдено для копирования');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Успешно сокпировано! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Ошибка: Пропущено Имя/Значение Опции для Товара ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Удалить соотвествующие Атрибуты у ВСЕХ товаров у которых Имя и Значение Опции ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Выберете Имя и Значение Опции, которая в настоящее время существует у товара или товары, если Вы хотите удалить у ВСЕХ Товаров, или только Товарам одной категории');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Соответсвующее Имя Опции:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Соответсвующее Значение Опции:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Ошибка: Пропущено Имя и Значение выбранной Опции');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Успешно: Удаление: ');

// EOF