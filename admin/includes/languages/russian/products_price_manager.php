<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: mc12345678  Sun Jan 3 13:54:17 2016 -0500 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Управление ценами');
define('HEADING_TITLE_PRODUCT_SELECT','Для просмотра информации о ценах выберите Категорию с товарами...');

define('TABLE_HEADING_PRODUCTS', 'Товар');
define('TABLE_HEADING_PRODUCTS_MODEL','Артикул');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Товар цена/скидки/распродажа');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Проценты');
define('TABLE_HEADING_AVAILABLE_DATE', 'Доступно');
define('TABLE_HEADING_EXPIRES_DATE','Окончание');
define('TABLE_HEADING_STATUS', 'Состояние');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_PRODUCT_INFO', 'Информация о товаре:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Информация о цене:');
define('TEXT_PRODUCTS_MODEL','Артикул:');
define('TEXT_PRICE', 'Цена');
define('TEXT_PRICE_NET', 'Цена (Без налогов)');
define('TEXT_PRICE_GROSS', 'Цена (С налогом)');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Дата начала:');
define('TEXT_PRODUCTS_STATUS', 'Состояние товара:');
define('TEXT_PRODUCT_AVAILABLE', 'На складе');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Нет на складе');

define('TEXT_PRODUCT_INFO_NONE', 'Выберите товар из ...');
  define('TEXT_PRODUCT_IS_FREE','Товар бесплатный:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Товар обозначен как БЕСПЛАТНО');
  define('TEXT_PRODUCT_IS_CALL','Уточнить цену:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Товар обозначен как УТОЧНИТЬ ЦЕНУ');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Цена зависит от аттрибутов:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Да');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Нет');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Показывать самые низкие цены аттрибутов плюс цена товара');
  define('TEXT_PRODUCTS_MIXED','Разрешить добавлять товар:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Скидка от количества применяется к смешанным атрибутам');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Кол-во мин:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Кол-во в упаковке:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Кол-во макс:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= неограничено<br />1= нет заказа количества/или максимальное');

define('TEXT_FEATURED_PRODUCT_INFO', 'Рекомендованные товары-информация:');
define('TEXT_FEATURED_PRODUCT', 'Товар:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Срок истекает:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Доступен с:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Статус рекомендуемого товара:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Активен');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Неактивен');
define('TEXT_FEATURED_DISABLED', '<strong>Замечание: Информация о товаре отсутствует, истек срок или неактивен статус</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Подтвердите удаление рекомендованного товара');

define('TEXT_SPECIALS_PRODUCT', 'Товар:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Специальная цена:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Специальная цена: (Без налогов)');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Специальная цена: (С налогом)');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Истекает:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Доступна с:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>ЗАМЕЧАНИЕ:</b><ul><li>Вы можете задать скидку в процентах, например: <b>20%</b></li><li>Если вы просто указываете новую цену, то используйте в качестве разделителя \'.\' (точку), например: <b>49.99</b></li><li>Не заполняйте срок истечения если скидка постоянна</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Информация:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Специальный статус:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Активна');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Некативна');
define('TEXT_SPECIALS_NO_GIFTS','Нет скидок в Подарочном Сертификате');
define('TEXT_SPECIAL_DISABLED', '<strong>Замечание: Информация о товаре со скидкой недоступна, истек срок или статус неактивен</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Подтвердите удаление специальной цены товара');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Базовая цена:');
define('TEXT_INFO_PERCENTAGE', 'Процент:');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступна с:');
define('TEXT_INFO_EXPIRES_DATE', 'Истекает:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменение статуса:');
define('TEXT_IMAGE_NONEXISTENT', 'Нет картинки');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Удалить рекомендованные');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить рекомендованные товары?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Определите атрибуты товара и нажмите кнопку</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена базируется на атрибутах');
  define('TEXT_PRODUCTS_PRICE', 'Цена товара: ');
  define('TEXT_SPECIAL_PRICE', 'Специальная цена: ');
  define('TEXT_SALE_PRICE', 'Цена по акции: ');
  define('TEXT_FREE', 'БЕСПЛАТНО');
  define('TEXT_CALL_FOR_PRICE', 'Цена по запросу');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Добавить ' . DISCOUNT_QTY_ADD . ' скидок от количества:');
define('TEXT_BLANKS_INFO','Все скидки не от кол-ва товара будут удалены после обновления');
define('TEXT_INFO_NO_DISCOUNTS', 'Не определены скидки от количества заказываемого товара');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Определение скидок');
define('TEXT_PRODUCTS_DISCOUNT','Скидка');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Минимальное кол-во');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Скидка');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Тип');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Определение цены:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Цена на выходе:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Считать<br />цену: &nbsp; налогом:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Окончательная<br />Цена: &nbsp; Налог:');

define('TEXT_EACH','');
define('TEXT_EXTENDED','всего');

define('TEXT_DISCOUNT_TYPE_INFO', 'Информация по');
define('TEXT_DISCOUNT_TYPE','Тип скидки:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Ценовая скидка от:');

define('DISCOUNT_TYPE_DROPDOWN_0','Нет');
define('DISCOUNT_TYPE_DROPDOWN_1','Процент');
define('DISCOUNT_TYPE_DROPDOWN_2','Новая цена');
define('DISCOUNT_TYPE_DROPDOWN_3','Сумма скидки');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Цена');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Скидка');

define('TEXT_UPDATE_COMMIT','Обновите и подтвердите все изменения в этом окне');

define('TEXT_PRODUCTS_TAX_CLASS', 'Налоги:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Внимание:</strong> Товар ID# %s не соответствует категории ID# %s поэтому товар не был связан!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Текущая категория ID# %s соответствует категории ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Обновить категорию ID# %s чтобы она соотвествовала категории ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Внесите необходимые изменения и нажмите Update чтобы сохранить');
define('PRODUCT_UPDATE_SUCCESS', 'Обновлена информация об изменениях в товаре!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Изменения были прерваны и не сохранились ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Нажмите для начала редактирования ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Только просмотр ... Цена товара сейчас ... Только просмотр');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Внесите необходимые изменения и нажмите Update чтобы сохранить</strong>');

// EOF