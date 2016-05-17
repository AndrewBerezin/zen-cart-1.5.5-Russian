<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
*/

define('HEADING_TITLE', 'Категории: ');

define('HEADING_TITLE_OPT', 'Опции товара');
define('HEADING_TITLE_VAL', 'Значения товара');
define('HEADING_TITLE_ATRIB', 'Управление атрибутами');
define('HEADING_TITLE_ATRIB_SELECT','Выберите категорию для просмотра атрибутов!');

define('TEXT_PRICES_AND_WEIGHTS', 'Цена/Вес');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Фактор цены: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Компенсация: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Одноразово:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Одноразовый фактор: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Компенсация: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Атрибуты - скидка от количества:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Атрибуты - скидка от количества - одноразово:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Цена за слово:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- слово бесплатно:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Цена за букву:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- буква бесплатна:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_OPT_NAME', 'Название опции');
define('TABLE_HEADING_OPT_VALUE', 'Значение опции');
define('TABLE_HEADING_OPT_PRICE', 'Цена');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Префикс');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_DOWNLOAD', 'Загружаемые товары:');
define('TABLE_TEXT_FILENAME', 'Название файла:');
define('TABLE_TEXT_MAX_DAYS', 'Действителен до:');
define('TABLE_TEXT_MAX_COUNT', 'Максимальное кол-во загрузок:');
define('TABLE_HEADING_OPT_DISCOUNTED','Скидка');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Базовая цена');
define('TABLE_HEADING_PRICE_TOTAL','Всего: Одноразово:');
define('TEXT_WARNING_OF_DELETE', 'Эта опция имеет товары и значения прикрепленные к ней - удаление приведет к необратимым результатам.');
define('TEXT_OK_TO_DELETE', 'Эта опция не имеет товары и значений прикрепленных к ней - удаление возможно.');
define('TEXT_OPTION_ID', 'ID опции');
define('TEXT_OPTION_NAME', 'Название опции');

define('ATTRIBUTE_WARNING_DUPLICATE','Дублирование атрибутов - атрибуты не были добавлены'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Дублирование существующих атрибутов - атрибуты не были обновлены'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Опции атрибутов и значение опций не содержали записей - атрибуты не были добавлены'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Опции атрибутов и значение опций не содержали записей - атрибуты не были обновлены'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Возможно дублирование-название опции уже существует'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Возможно дублирование-значение опции уже существует'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','ИЗМЕНЕНИЕ'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','УДАЛЕНИЕ'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','ДОБАВЛЕНИЕ НОВЫХ АТРИБУТОВ'); // title
define('TEXT_DOWNLOADS_DISABLED','Внимание: Загрузки запрещены');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Дни:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Максимально:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Порядок сортировки по умолчанию');
  define('TEXT_SORT','Сортировка: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Префикс');
  define('TABLE_HEADING_OPT_WEIGHT','Вес');
  define('TABLE_HEADING_OPT_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPT_DEFAULT','По умолчанию');

  define('TABLE_HEADING_OPT_TYPE', 'Тип опции'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Размер');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Максимально');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Строки');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Коментарии');

  define('TEXT_OPTION_VALUE_COMMENTS','Коментарии: ');
  define('TEXT_OPTION_VALUE_SIZE','Отображение размера: ');
  define('TEXT_OPTION_VALUE_MAX','Максимальная длина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Образец картинки атрибутов:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Директория картинки атрибутов:');

  define('TEXT_ATTRIBUTES_FLAGS','Атрибут<br />символ:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Использовать для<br/>отображения?:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Атрибут тоже бесплатен<br/>когда товар бесплатен?:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Атрибут по умолчанию<br/>сделать выделенным:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Применить ту же скидку<br/>для товаров?:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включить в базовую цену<br />если цена основана на атрибутах?');
  define('TEXT_ATTRIBUTES_REQUIRED','Требуется атрибут<br />for Text:');

  define('LEGEND_BOX','Статус:');
  define('LEGEND_KEYS','ВЫКЛ/ВКЛ');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Только просмотр');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Бесплатно');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'По умолчанию');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Со скидкой');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Базовая цена');
  define('LEGEND_ATTRIBUTES_REQUIRED','Требуется');
  define('LEGEND_ATTRIBUTES_IMAGES','Картинка');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Правильное/неправильное<br />название файла');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','НАЧАЛЬНАЯ СОРТИРОВКА');
  define('TEXT_PRODUCTS_LISTING','Список товаров для: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Не выбран товар');
  define('TEXT_NO_ATTRIBUTES_DEFINED','У этого товара нет атрибутов ID#');

  define('TEXT_PRODUCTS_ID','Товары ID#');
  define('TEXT_ATTRIBUTES_DELETE','УДАЛИТЬ ВСЕ');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Копировать в товары');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Копировать в категорию');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Изменение атрибутов для товаров ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Удалить <strong>ВСЕ</strong> атрибуты товаров для:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копировать атрибуты в товар или вставить из категории:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','ТОВАР');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копировать атрибуты в другой <strong>ТОВАР</strong> из ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Выбрать товар чтобы скопировать все его атрибуты в:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','КАТЕГОРИЯ');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Выбрать категорию чтобы скопировать все ее атрибуты в:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копировать атрибуты во все товары <strong>КАТЕГОРИИ</strong> из товара ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как поступить с уже существующими атрибутами?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначало, затем перекопировать новые атрибуты ');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> с новыми настройками/ценами, и только потом добавить старые атрибуты');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Пропустить</strong> и добавить только новые атрибуты');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Успешное обновление порядка сортировки для ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Не выбран ни один атрибут для обновления порядка сортировки ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED','Атрибуты успешно удалены');
  define('SUCCESS_ATTRIBUTES_UPDATE','Атрибуты успешно обновлены');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Нет выбранной категории для копирования');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - в категорию: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Вы уверены что хотите удалить все атрибуты для ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропустить новые атрибуты </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Вставить новые атрибуты из </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обновить из атрибута </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','Просмотр атрибутов');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','Просмотр отображаемых атрибутов для ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>ВЫБЕРИТЕ:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Определите настройки атрибута и потом примените их </strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена основана на атрибутах');
  define('TEXT_PRODUCTS_PRICE', 'Цена товаров: ');
  define('TEXT_SPECIAL_PRICE', 'Цена скидки: ');
  define('TEXT_SALE_PRICE', 'Цена акции: ');
  define('TEXT_FREE', 'Бесплатно');
  define('TEXT_CALL_FOR_PRICE', 'Цена по запросу');
  define('TEXT_SAVE_CHANGES','Обновить и сохранить изменения:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Без добавления в корзину');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Подтвердите удаление всех значений товарных опций для опции ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Название товара: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Название опции: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Все значений опций успешно удалены для опции: ');

// EOF