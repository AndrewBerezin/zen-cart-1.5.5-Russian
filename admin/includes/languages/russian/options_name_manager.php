<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
*/

define('HEADING_TITLE_OPT', 'Названия опций');
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
define('TABLE_TEXT_MAX_DAYS', 'Активно дней:');
define('TABLE_TEXT_MAX_COUNT', 'Макс кол-во загрузок:');

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
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Макс кол-во:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Сортировка');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Сортировка по умолчанию');
  define('TEXT_SORT',' Сортировка: ');

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
  define('TEXT_OPTION_VALUE_ROWS', 'Строки: ');
  define('TEXT_OPTION_VALUE_SIZE','Размер: ');
  define('TEXT_OPTION_VALUE_MAX','Максимальная длина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Картинки атрибутов:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Директория каринок:');

  define('TEXT_ATTRIBUTES_FLAGS','Атрибут<br />Флаг:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Только для<br />просмотра:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Атрибут бесплатен<br />когда товар бесплатен?');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Сделать по умолчанию?');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Применить скидки<br />выставленные в товаре?');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включить в базовую цену<br />когда товар основан на атрибутах?');

  define('TEXT_PRODUCT_OPTIONS_INFO','Редактировать опции товара?');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Внимание: Товар не найден...');

define('TEXT_SELECT_PRODUCT', ' Выберите товар');
define('TEXT_SELECT_CATEGORY', ' Выберите категорию');
define('TEXT_SELECT_OPTION', 'Выберите название опции');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Добавление ВСЕХ опционных значений для ВСЕХ товаров содержащих эту опцию</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Обновить ВСЕ товары у которых хотя бы одно значение опции и добавить ВСЕ опционные значения для определенной одной опции');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Опции успешно обновлены ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Добавление ВСЕХ опционных значений для ОДНОГО товара в этой опции</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Обновить ОДИН товар у которого хотя бы одно значение опции и добавить ВСЕ опционные значения для определенной одной опции');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Добавление ВСЕХ опционных значений для ОДНОЙ категории в этой опции</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Обновить ОДНУ категорию у которой хотя бы одно значение опции и добавить ВСЕ опционные значения для определенной одной опции');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>Замечание:</strong> Порядок сортировки будет установлен в изначальное положение для этих товаров');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Удаление ВСЕХ опционных значений для ВСЕХ товаров содержащих эту опцию</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Обновить ВСЕ товары у которых хотя бы одно значение опции и удалить ВСЕ опционные значения для определенной одной опции');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Удаление ВСЕХ опционных значений для ОДНОГО товара в этой опции</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Обновить ОДИН товар у которого хотя бы одно значение опции и удалить ВСЕ опционные значения для определенной одной опции');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Удаление ВСЕХ опционных значений для ОДНОЙ категории в этой опции</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Обновить ОДНУ категорию у которой хотя бы одно значение опции и удалить ВСЕ опционные значения для определенной одной опции');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>Замечание:</strong> Все опции и опционные значения будут удалены для этих товаров. Но это не удаляет сами значения опций.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Копирование ВСЕХ опционных значений в другую опцию</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'ВСЕ опционные значения будут скопированы в другую опцию');
define('TEXT_SELECT_OPTION_FROM', 'Копировать из: ');
define('TEXT_SELECT_OPTION_TO', 'Копировать ВСЕ значения этой опции в опцию: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Все успешно скопировалось! ');
define('ERROR_OPTION_VALUES_COPIED', 'Ошибка - нельзя копировать значения опции в эту же опцию! ');
define('ERROR_OPTION_VALUES_NONE', 'Ошибка - у этой опции нет значений - поэтому ничего не скопировалось! ');
define('TEXT_WARNING_BACKUP', 'ВНИМАНИЕ: ПЕРЕД ТЕМ КАК ДЕЛАТЬ ГЛОБАЛЬНЫЕ ИЗМЕНЕНИЯ СДЕЛАЙТЕ РЕЗЕРВНУЮ КОПИЮ!');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Сколько картинок для артибутов в строке? ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Стиль атрибутов для Радио кнопки и Чекбокса: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Максимальная длина и размер для текстовых атрибутов:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Стиль отображения картинки атрибутов:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= картинка под названием опции');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Элемент, картинка и значение опции');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Элемент, картинка и название опции внизу');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Название опции внизу элемента и картинка');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Элемент внизу, картинка и названия опции');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Элемент вверху, картинка и названия опции');

// EOF