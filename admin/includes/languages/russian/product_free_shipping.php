<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: product_free_shipping.php 15883 2010-04-11 16:41:26Z wilt $
*/

define('HEADING_TITLE', 'Каталог');
define('HEADING_TITLE_GOTO', 'Перейти к:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Каталог');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Сортировка');

define('TABLE_HEADING_PRICE','Цена/Скидка/Акция');
define('TABLE_HEADING_QUANTITY','Кол-во');

define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_STATUS', 'Статус');

define('TEXT_CATEGORIES', 'Категории:');
define('TEXT_SUBCATEGORIES', 'Подкатегории:');
define('TEXT_PRODUCTS', 'Товары:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Цена:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Класс налогов:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Средняя процентная ставка:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Кол-во:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_DATE_AVAILABLE', 'Товар доступен с:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_IMAGE_NONEXISTENT', 'Картинка не найдена');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Введите пожалуйста новую категорию или товар<br>&nbsp;<br><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Для дополнительной информации посетите <a href="http://%s" target="blank">домашнюю страницу товара</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Товар был добавлен в наш каталог %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Этот товар будет в продаже с %s.');

define('TEXT_EDIT_INTRO', 'Внесите необходимые изменеия');
define('TEXT_EDIT_CATEGORIES_ID', 'ID категории:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Картинка категории:');
define('TEXT_EDIT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_INFO_COPY_TO_INTRO', 'Выберите пожалуйста новую категорию, куда Вы хотите скопировать этот товар');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Текущие категории:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Новая категория');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Редактировать категорию');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Удалить категорию');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Переместить категорию');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Удалить товар');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Переместить товар');
define('TEXT_INFO_HEADING_COPY_TO', 'Копировать в:');

define('TEXT_DELETE_CATEGORY_INTRO', 'Вы действительно хотите удалить эту категорию?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Вы действительно хотите удалить этот товар?<br /><br /><strong>Внимание:</strong> Для связанных товаров<br />1. Если Вы удаляете товар из Мастер Категории, то удостоверьтесь, что Мастер-Категория была изменена.<br />2. Отметьте категории, из которых надо удалить товар.');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ПРЕДУПРЕЖДЕНИЕ:</b> Есть еще %s субкатегории связанные с этой категорией!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ПРЕДУПРЕЖДЕНИЕ:</b> Есть еще %s товары связанные с этой категорией!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Пожалуйста выберите товар для перемещения <b>%s</b> в');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Пожалуйста выберите категорию для перемещения <b>%s</b> в');
define('TEXT_MOVE', 'Переместить <b>%s</b> в:');

define('TEXT_NEW_CATEGORY_INTRO', 'Пожалуйста, занесите следующую информацию для этой категории');
define('TEXT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_CATEGORIES_IMAGE', 'Логотип категории:');
define('TEXT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_PRODUCTS_STATUS', 'Статус товара:');
define('TEXT_PRODUCTS_VIRTUAL', 'Виртуальный товар:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Всегда бесплатная доставка:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Показывать бокс количества:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Дата начала продажи:');
define('TEXT_PRODUCT_AVAILABLE', 'Есть на складе');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Нет на складе');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Да, пропустить адрес доставки');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Нет, адрес доставки требуется');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Да, всегда бесплатная доставка');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Нет, обычные правила доставки');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Специальный, комбинация Товар/Загружаемый файл требует адрес доставки');
define('TEXT_PRODUCTS_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Да показывать бокс количества товаров');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Нет не показывать бокс количества товаров');

define('TEXT_PRODUCTS_MANUFACTURER', 'Производитель:');
define('TEXT_PRODUCTS_NAME', 'Название:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Описание товара:');
define('TEXT_PRODUCTS_QUANTITY', 'Количество в упаковке:');
define('TEXT_PRODUCTS_MODEL', 'Артикул:');
define('TEXT_PRODUCTS_IMAGE', 'Картинка товара:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Загрузить в директорию:');
define('TEXT_PRODUCTS_URL', 'URL товара:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(без http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Цена товара (без налога):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Цена товара (с налогом):');
define('TEXT_PRODUCTS_WEIGHT', 'Вес:');

define('EMPTY_CATEGORY', 'Очистить категорию');

define('TEXT_HOW_TO_COPY', 'Метод копирования:');
define('TEXT_COPY_AS_LINK', 'Связать товар');
define('TEXT_COPY_AS_DUPLICATE', 'Дублировать товар');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Только для дублированных товаров ...');
  define('TEXT_COPY_ATTRIBUTES','Копировать атрибуты товара в дубликат?');
  define('TEXT_COPY_ATTRIBUTES_YES','Да');
  define('TEXT_COPY_ATTRIBUTES_NO','Нет');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Текущий товар: ');
  define('TABLE_HEADING_MODEL', 'Артикул');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Изменения атрибутов для товара ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Удалить <strong>ВСЕ</strong> атрибуты товара для:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копировать атрибуты в товар или вставить из категории:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копировать атрибуты в другой <strong>товар</strong> из:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копировать атрибуты в другую <strong>категорию</strong> из:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Каким образом существующие атрибуты товара переместить?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначало, затем применить новые атрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> с новыми настройками/ценами, затем применить');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Пропустить</strong> и добавить только новые атрибуты');

  define('SUCCESS_ATTRIBUTES_DELETED','Атрибуты успешно удалены');
  define('SUCCESS_ATTRIBUTES_UPDATE','Атрибуты успешно обновлены');

  define('ICON_ATTRIBUTES','Характеристики атрибутов');

  define('TEXT_CATEGORIES_IMAGE_DIR','Загрузить в директорию:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Внимание: Если не отображать бокс количества товара то, по умолчанию будет стоять 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Внимание: Если не отображать бокс количества товара то, по умолчанию будет стоять 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Пожалуйста выберите:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Характеристики атрибута для:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Загрузить: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Цена товара основана на атрибутах:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Да');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Нет');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Отбражаемая цена будет включать в себя цены атрибутов плюс базовую цену товара');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Отбражаемая цена будет включать в себя цены атрибутов плюс базовую цену товара');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Минимальное количество товара:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Количество в упаковке:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Максимальное количество товара:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Неограничено, 1 = Без бокса количество или максимум');

  define('TEXT_PRODUCTS_MIXED','Смешанное количество Минимум/Упаковка:<br /><small>(cуммировать количество товара по атрибутам)</small>');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Бесплатный товар');
  define('TEXT_PRODUCT_IS_FREE','Товар бесплатный:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Товар из серии - Бесплатный товар');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Товар из серии - Бесплатный товар');

  define('TEXT_PRODUCT_IS_CALL','Цена по запросу:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Товар из серии - Цена по запросу');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Товар из серии - Цена по запросу');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропустить новые атрибуты </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Применить новые атрибуты из </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обновить из атрибутов </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Отметьте какие мета-теги Товара должны быть включены:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Наименование товара:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Заголовок:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Артикул:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Цена:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Заголовок/Tagline:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Мета-тег Заголовок:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Мета-тег Ключевые слова:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Мета-тег Описание:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">ИСКЛЮЧЕНО</span>');

// EOF