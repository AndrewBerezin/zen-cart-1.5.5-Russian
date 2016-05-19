#
# * SQL Localization script - Translate product_type_layout table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin  eCommerce-Service.com
# * @version $Id: mysql_22_translate_product_type_layout.sql 1.3.8a 17.12.2007 11:02 AndrewBerezin $

UPDATE product_type_layout SET configuration_title='Показывать артикул', configuration_description='Показывать артикул товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_MODEL';
UPDATE product_type_layout SET configuration_title='Показывать вес', configuration_description='Показывать вес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_WEIGHT';
UPDATE product_type_layout SET configuration_title='Показывать вес атрибутов', configuration_description='Показывать вес атрибутов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_WEIGHT_ATTRIBUTES';
UPDATE product_type_layout SET configuration_title='Показывать изготовителя', configuration_description='Показывать изготовителя на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_MANUFACTURER';
UPDATE product_type_layout SET configuration_title='Показывать количество в корзине', configuration_description='Показывать количество в корзине на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_IN_CART_QTY';
UPDATE product_type_layout SET configuration_title='Показывать количество на складе', configuration_description='Показывать количество на складе на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_QUANTITY';
UPDATE product_type_layout SET configuration_title='Показывать количество отзывов', configuration_description='Показывать количество отзывов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_REVIEWS_COUNT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку Отзывы', configuration_description='Показывать кнопку Отзывы на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_REVIEWS';
UPDATE product_type_layout SET configuration_title='Показывать дату поступления', configuration_description='Показывать дату поступления на склад на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_DATE_AVAILABLE';
UPDATE product_type_layout SET configuration_title='Показывать дату добавления', configuration_description='Показывать дату добавления на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_DATE_ADDED';
UPDATE product_type_layout SET configuration_title='Показывать url-адрес товара', configuration_description='Показывать url-адрес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_URL';
UPDATE product_type_layout SET configuration_title='Показывать дополнительные картинки', configuration_description='Показывать дополнительные картинки на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_ADDITIONAL_IMAGES';
UPDATE product_type_layout SET configuration_title='Показывать префикс "от" в цене', configuration_description='Показывать префикс "от" в цене товара с атрибутами на странице товара. ' WHERE configuration_key='SHOW_PRODUCT_INFO_STARTING_AT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку "Сообщить другу"', configuration_description='Показывать кнопку "Сообщить другу" на странице товара.<br /><br />Замечание: выключение данного параметра не отключает бокс "Рассказать другу" в колонках и соответствующую кнопку в этом боксе<br />0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_INFO_TELL_A_FRIEND';
UPDATE product_type_layout SET configuration_title='Показывать "Бесплатная доставка"', configuration_description='Показывать картинку/текст "Бесплатная доставка" в каталоге?' WHERE configuration_key='SHOW_PRODUCT_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH';
UPDATE product_type_layout SET configuration_title='Класс налогов по умолчанию', configuration_description='Какой класс налогов по умолчанию использовать при добавлении новых товаров?' WHERE configuration_key='DEFAULT_PRODUCT_TAX_CLASS_ID';
UPDATE product_type_layout SET configuration_title='Виртуальный товар по умолчанию', configuration_description='Отмечать по умолчанию новый товар как виртуальный?' WHERE configuration_key='DEFAULT_PRODUCT_PRODUCTS_VIRTUAL';
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл  требует доставки' WHERE configuration_key='DEFAULT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
UPDATE product_type_layout SET configuration_title='Показывать артикул', configuration_description='Показывать артикул товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_MODEL';
UPDATE product_type_layout SET configuration_title='Показывать вес', configuration_description='Показывать вес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_WEIGHT';
UPDATE product_type_layout SET configuration_title='Показывать вес атрибутов', configuration_description='Показывать вес атрибутов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_WEIGHT_ATTRIBUTES';
UPDATE product_type_layout SET configuration_title='Показывать исполнителей', configuration_description='Показывать исполнителей на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_ARTIST';
UPDATE product_type_layout SET configuration_title='Показывать жанр', configuration_description='Показывать жанр на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_GENRE';
UPDATE product_type_layout SET configuration_title='Показывать звукозаписывающую компанию', configuration_description='Показывать звукозаписывающую на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_RECORD_COMPANY';
UPDATE product_type_layout SET configuration_title='Показывать количество в корзине', configuration_description='Показывать количество в корзине на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_IN_CART_QTY';
UPDATE product_type_layout SET configuration_title='Показывать количество на складе', configuration_description='Показывать количество на складе на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_QUANTITY';
UPDATE product_type_layout SET configuration_title='Показывать количество отзывов', configuration_description='Показывать количество отзывов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_REVIEWS_COUNT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку Отзывы', configuration_description='Показывать кнопку Отзывы на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_REVIEWS';
UPDATE product_type_layout SET configuration_title='Показывать дату поступления', configuration_description='Показывать дату поступления на склад на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_DATE_AVAILABLE';
UPDATE product_type_layout SET configuration_title='Показывать дату добавления', configuration_description='Показывать дату добавления на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_DATE_ADDED';
UPDATE product_type_layout SET configuration_title='Показывать префикс "от" в цене', configuration_description='Показывать префикс "от" в цене товара с атрибутоами на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_STARTING_AT';
UPDATE product_type_layout SET configuration_title='Показывать дополнительные картинки', configuration_description='Показывать дополнительные картинки на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_ADDITIONAL_IMAGES';
UPDATE product_type_layout SET configuration_title='Показывать кнопку "Сообщить другу"', configuration_description='Показывать кнопку "Сообщить другу" на странице товара.<br /><br />Замечание: выключение данного параметра не отключает бокс "Рассказать другу" в колонках и соответствующую кнопку в этом боксе<br />0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_TELL_A_FRIEND';
UPDATE product_type_layout SET configuration_title='Показывать "Бесплатная доставка"', configuration_description='Показывать картинку/текст "Бесплатная доставка" в каталоге?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH';
UPDATE product_type_layout SET configuration_title='Класс налогов по умолчанию', configuration_description='Какой класс налогов по умолчанию использовать при добавлении новых товаров?' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_TAX_CLASS_ID';
UPDATE product_type_layout SET configuration_title='Виртуальный товар по умолчанию', configuration_description='Отмечать по умолчанию новый товар как виртуальный?' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_PRODUCTS_VIRTUAL';
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл  требует доставки' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
UPDATE product_type_layout SET configuration_title='Показывать количество отзывов', configuration_description='Показывать количество отзывов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_REVIEWS_COUNT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку Отзывы', configuration_description='Показывать кнопку Отзывы на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_REVIEWS';
UPDATE product_type_layout SET configuration_title='Показывать дату поступления', configuration_description='Показывать дату поступления на склад на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_DATE_AVAILABLE';
UPDATE product_type_layout SET configuration_title='Показывать дату добавления', configuration_description='Показывать дату добавления на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_DATE_ADDED';
UPDATE product_type_layout SET configuration_title='Показывать кнопку "Сообщить другу"', configuration_description='Показывать кнопку "Сообщить другу" на странице товара.<br /><br />Замечание: выключение данного параметра не отключает бокс "Рассказать другу" в колонках и соответствующую кнопку в этом боксе<br />0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_TELL_A_FRIEND';
UPDATE product_type_layout SET configuration_title='Показывать url-адрес товара', configuration_description='Показывать url-адрес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_URL';
UPDATE product_type_layout SET configuration_title='Показывать дополнительные картинки', configuration_description='Показывать дополнительные картинки на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_ADDITIONAL_IMAGES';
UPDATE product_type_layout SET configuration_title='Показывать артикул', configuration_description='Показывать артикул товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_MODEL';
UPDATE product_type_layout SET configuration_title='Показывать вес', configuration_description='Показывать вес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_WEIGHT';
UPDATE product_type_layout SET configuration_title='Показывать вес атрибутов', configuration_description='Показывать вес атрибутов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_WEIGHT_ATTRIBUTES';
UPDATE product_type_layout SET configuration_title='Показывать изготовителя', configuration_description='Показывать изготовителя на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_MANUFACTURER';
UPDATE product_type_layout SET configuration_title='Показывать количество в корзине', configuration_description='Показывать количество в корзине на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_IN_CART_QTY';
UPDATE product_type_layout SET configuration_title='Показывать количество на складе', configuration_description='Показывать количество на складе на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_QUANTITY';
UPDATE product_type_layout SET configuration_title='Показывать количество отзывов', configuration_description='Показывать количество отзывов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_REVIEWS_COUNT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку Отзывы', configuration_description='Показывать кнопку Отзывы на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_REVIEWS';
UPDATE product_type_layout SET configuration_title='Показывать дату поступления', configuration_description='Показывать дату поступления на склад на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_DATE_AVAILABLE';
UPDATE product_type_layout SET configuration_title='Показывать дату добавления', configuration_description='Показывать дату добавления на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_DATE_ADDED';
UPDATE product_type_layout SET configuration_title='Показывать url-адрес товара', configuration_description='Показывать url-адрес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_URL';
UPDATE product_type_layout SET configuration_title='Показывать дополнительные картинки', configuration_description='Показывать дополнительные картинки на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_ADDITIONAL_IMAGES';
UPDATE product_type_layout SET configuration_title='Показывать префикс "от" в цене', configuration_description='Показывать префикс "от" в цене товара с атрибутами на странице товара. ' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_STARTING_AT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку "Сообщить другу"', configuration_description='Показывать кнопку "Сообщить другу" на странице товара.<br /><br />Замечание: выключение данного параметра не отключает бокс "Рассказать другу" в колонках и соответствующую кнопку в этом боксе<br />0 - нет, 1 - да.' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_TELL_A_FRIEND';
UPDATE product_type_layout SET configuration_title='Показывать "Бесплатная доставка"', configuration_description='Показывать картинку/текст "Бесплатная доставка" в каталоге?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH';
UPDATE product_type_layout SET configuration_title='Класс налогов по умолчанию', configuration_description='Какой класс налогов по умолчанию использовать при добавлении новых товаров?' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_TAX_CLASS_ID';
UPDATE product_type_layout SET configuration_title='Виртуальный товар по умолчанию', configuration_description='Отмечать по умолчанию новый товар как виртуальный?' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_VIRTUAL';
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл  требует доставки' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
UPDATE product_type_layout SET configuration_title='Показывать артикул', configuration_description='Показывать артикул товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_MODEL';
UPDATE product_type_layout SET configuration_title='Показывать вес', configuration_description='Показывать вес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_WEIGHT';
UPDATE product_type_layout SET configuration_title='Показывать вес атрибутов', configuration_description='Показывать вес атрибутов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_WEIGHT_ATTRIBUTES';
UPDATE product_type_layout SET configuration_title='Показывать изготовителя', configuration_description='Показывать изготовителя на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_MANUFACTURER';
UPDATE product_type_layout SET configuration_title='Показывать количество в корзине', configuration_description='Показывать количество в корзине на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_IN_CART_QTY';
UPDATE product_type_layout SET configuration_title='Показывать количество на складе', configuration_description='Показывать количество на складе на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_QUANTITY';
UPDATE product_type_layout SET configuration_title='Показывать количество отзывов', configuration_description='Показывать количество отзывов на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_REVIEWS_COUNT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку Отзывы', configuration_description='Показывать кнопку Отзывы на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_REVIEWS';
UPDATE product_type_layout SET configuration_title='Показывать дату поступления', configuration_description='Показывать дату поступления на склад на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_DATE_AVAILABLE';
UPDATE product_type_layout SET configuration_title='Показывать дату добавления', configuration_description='Показывать дату добавления на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_DATE_ADDED';
UPDATE product_type_layout SET configuration_title='Показывать url-адрес товара', configuration_description='Показывать url-адрес товара на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_URL';
UPDATE product_type_layout SET configuration_title='Показывать дополнительные картинки', configuration_description='Показывать дополнительные картинки на странице товара. 0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_ADDITIONAL_IMAGES';
UPDATE product_type_layout SET configuration_title='Показывать префикс "от" в цене', configuration_description='Показывать префикс "от" в цене товара с атрибутами на странице товара. ' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_STARTING_AT';
UPDATE product_type_layout SET configuration_title='Показывать кнопку "Сообщить другу"', configuration_description='Показывать кнопку "Сообщить другу" на странице товара.<br /><br />Замечание: выключение данного параметра не отключает бокс "Рассказать другу" в колонках и соответствующую кнопку в этом боксе<br />0 - нет, 1 - да.' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_TELL_A_FRIEND';
UPDATE product_type_layout SET configuration_title='Показывать "Бесплатная доставка"', configuration_description='Показывать картинку/текст "Бесплатная доставка" в каталоге?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH';
UPDATE product_type_layout SET configuration_title='Класс налогов по умолчанию', configuration_description='Какой класс налогов по умолчанию использовать при добавлении новых товаров?' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_TAX_CLASS_ID';
UPDATE product_type_layout SET configuration_title='Виртуальный товар по умолчанию', configuration_description='Отмечать по умолчанию новый товар как виртуальный?' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_PRODUCTS_VIRTUAL';
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл требует доставки' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - мета-тайтл', configuration_description='Включать в Заголовок страницы товара мета-тайтл?' WHERE configuration_key='SHOW_PRODUCT_INFO_METATAGS_TITLE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - наименование ', configuration_description='Включать в Заголовок страницы товара наименование товара?' WHERE configuration_key='SHOW_PRODUCT_INFO_METATAGS_PRODUCTS_NAME_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - артикул ', configuration_description='Включать в Заголовок страницы товара артикул товара?' WHERE configuration_key='SHOW_PRODUCT_INFO_METATAGS_MODEL_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - цена ', configuration_description='Включать в Заголовок страницы товара цену товара?' WHERE configuration_key='SHOW_PRODUCT_INFO_METATAGS_PRICE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - теглайн', configuration_description='Включать в Заголовок страницы товара теглайн?' WHERE configuration_key='SHOW_PRODUCT_INFO_METATAGS_TITLE_TAGLINE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - мета-тайтл', configuration_description='Включать в Заголовок страницы товара мета-тайтл?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_METATAGS_TITLE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - наименование ', configuration_description='Включать в Заголовок страницы товара наименование товара?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_METATAGS_PRODUCTS_NAME_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - артикул ', configuration_description='Включать в Заголовок страницы товара артикул товара?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_METATAGS_MODEL_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - цена ', configuration_description='Включать в Заголовок страницы товара цену товара?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_METATAGS_PRICE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - теглайн', configuration_description='Включать в Заголовок страницы товара теглайн?' WHERE configuration_key='SHOW_PRODUCT_MUSIC_INFO_METATAGS_TITLE_TAGLINE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - мета-тайтл', configuration_description='Включать в Заголовок страницы товара мета-тайтл?' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_METATAGS_TITLE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - наименование ', configuration_description='Включать в Заголовок страницы товара наименование товара?' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_METATAGS_PRODUCTS_NAME_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - теглайн', configuration_description='Включать в Заголовок страницы товара теглайн?' WHERE configuration_key='SHOW_DOCUMENT_GENERAL_INFO_METATAGS_TITLE_TAGLINE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - мета-тайтл', configuration_description='Включать в Заголовок страницы товара мета-тайтл?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_TITLE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - наименование ', configuration_description='Включать в Заголовок страницы товара наименование товара?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_PRODUCTS_NAME_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - артикул ', configuration_description='Включать в Заголовок страницы товара артикул товара?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_MODEL_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - цена ', configuration_description='Включать в Заголовок страницы товара цену товара?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_PRICE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - теглайн', configuration_description='Включать в Заголовок страницы товара теглайн?' WHERE configuration_key='SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_TITLE_TAGLINE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - мета-тайтл', configuration_description='Включать в Заголовок страницы товара мета-тайтл?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_TITLE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - наименование ', configuration_description='Включать в Заголовок страницы товара наименование товара?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_PRODUCTS_NAME_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - артикул ', configuration_description='Включать в Заголовок страницы товара артикул товара?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_MODEL_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - цена ', configuration_description='Включать в Заголовок страницы товара цену товара?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_PRICE_STATUS';
UPDATE product_type_layout SET configuration_title='Заголовок страницы товара - теглайн', configuration_description='Включать в Заголовок страницы товара теглайн?' WHERE configuration_key='SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_TITLE_TAGLINE_STATUS';
UPDATE product_type_layout SET configuration_title='Атрибуты только для показа', configuration_description='Атрибуты только для показа<br />Атрибуты используются только для показа<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTES_DISPLAY_ONLY';
UPDATE product_type_layout SET configuration_title='Атрибуты бесплатные', configuration_description='Атрибуты бесплатные<br />Атрибуты бесплатные, когда товар бесплатный<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTE_IS_FREE';
UPDATE product_type_layout SET configuration_title='Атрибуты используются по умолчанию', configuration_description='Атрибуты используются по умолчанию<br />Атрибуты по умолчанию отмечены как "выбранные"<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTES_DEFAULT';
UPDATE product_type_layout SET configuration_title='Атрибуты со скидкой', configuration_description='Атрибуты со скидкой<br />На атрибуты распространяется скидка установленная на товары<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTES_DISCOUNTED';
UPDATE product_type_layout SET configuration_title='Атрибуты включены в базовую цену', configuration_description='Атрибуты включены в базовую цену<br />Атрибуты включены в базовую цену когда цена основана на атрибутах<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTES_PRICE_BASE_INCLUDED';
UPDATE product_type_layout SET configuration_title='Атрибут требуется', configuration_description='Атрибут требуется<br />Атрибут требуется для текста<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_ATTRIBUTES_REQUIRED';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс цены', configuration_description='Атрибуты - префикс цены<br />Префикс цены у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_PRICE_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс веса', configuration_description='Атрибуты - префикс веса<br />Префикс веса у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_PRODUCTS_ATTRIBUTES_WEIGHT_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты только для показа', configuration_description='Атрибуты только для показа<br />Атрибуты используются только для показа<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTES_DISPLAY_ONLY';
UPDATE product_type_layout SET configuration_title='Атрибуты бесплатные', configuration_description='Атрибуты бесплатные<br />Атрибуты бесплатные, когда товар бесплатный<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTE_IS_FREE';
UPDATE product_type_layout SET configuration_title='Атрибуты используются по умолчанию', configuration_description='Атрибуты используются по умолчанию<br />Атрибуты по умолчанию отмечены как "выбранные"<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTES_DEFAULT';
UPDATE product_type_layout SET configuration_title='Атрибуты со скидкой', configuration_description='Атрибуты со скидкой<br />На атрибуты распространяется скидка установленная на товары<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTES_DISCOUNTED';
UPDATE product_type_layout SET configuration_title='Атрибуты включены в базовую цену', configuration_description='Атрибуты включены в базовую цену<br />Атрибуты включены в базовую цену когда цена основана на атрибутах<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTES_PRICE_BASE_INCLUDED';
UPDATE product_type_layout SET configuration_title='Атрибут требуется', configuration_description='Атрибут требуется<br />Атрибут требуется для текста<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_ATTRIBUTES_REQUIRED';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс цены', configuration_description='Атрибуты - префикс цены<br />Префикс цены у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_PRICE_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс веса', configuration_description='Атрибуты - префикс веса<br />Префикс веса у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_PRODUCTS_ATTRIBUTES_WEIGHT_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты только для показа', configuration_description='Атрибуты только для показа<br />Атрибуты используются только для показа<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTES_DISPLAY_ONLY';
UPDATE product_type_layout SET configuration_title='Атрибуты бесплатные', configuration_description='Атрибуты бесплатные<br />Атрибуты бесплатные, когда товар бесплатный<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTE_IS_FREE';
UPDATE product_type_layout SET configuration_title='Атрибуты используются по умолчанию', configuration_description='Атрибуты используются по умолчанию<br />Атрибуты по умолчанию отмечены как "выбранные"<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTES_DEFAULT';
UPDATE product_type_layout SET configuration_title='Атрибуты со скидкой', configuration_description='Атрибуты со скидкой<br />На атрибуты распространяется скидка установленная на товары<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTES_DISCOUNTED';
UPDATE product_type_layout SET configuration_title='Атрибуты включены в базовую цену', configuration_description='Атрибуты включены в базовую цену<br />Атрибуты включены в базовую цену когда цена основана на атрибутах<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTES_PRICE_BASE_INCLUDED';
UPDATE product_type_layout SET configuration_title='Атрибут требуется', configuration_description='Атрибут требуется<br />Атрибут требуется для текста<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_ATTRIBUTES_REQUIRED';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс цены', configuration_description='Атрибуты - префикс цены<br />Префикс цены у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_PRICE_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс веса', configuration_description='Атрибуты - префикс веса<br />Префикс веса у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_DOCUMENT_GENERAL_PRODUCTS_ATTRIBUTES_WEIGHT_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты только для показа', configuration_description='Атрибуты только для показа<br />Атрибуты используются только для показа<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTES_DISPLAY_ONLY';
UPDATE product_type_layout SET configuration_title='Атрибуты бесплатные', configuration_description='Атрибуты бесплатные<br />Атрибуты бесплатные, когда товар бесплатный<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTE_IS_FREE';
UPDATE product_type_layout SET configuration_title='Атрибуты используются по умолчанию', configuration_description='Атрибуты используются по умолчанию<br />Атрибуты по умолчанию отмечены как "выбранные"<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTES_DEFAULT';
UPDATE product_type_layout SET configuration_title='Атрибуты со скидкой', configuration_description='Атрибуты со скидкой<br />На атрибуты распространяется скидка установленная на товары<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTES_DISCOUNTED';
UPDATE product_type_layout SET configuration_title='Атрибуты включены в базовую цену', configuration_description='Атрибуты включены в базовую цену<br />Атрибуты включены в базовую цену когда цена основана на атрибутах<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTES_PRICE_BASE_INCLUDED';
UPDATE product_type_layout SET configuration_title='Атрибут требуется', configuration_description='Атрибут требуется<br />Атрибут требуется для текста<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_ATTRIBUTES_REQUIRED';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс цены', configuration_description='Атрибуты - префикс цены<br />Префикс цены у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_PRICE_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс веса', configuration_description='Атрибуты - префикс веса<br />Префикс веса у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_ATTRIBUTES_WEIGHT_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты только для показа', configuration_description='Атрибуты только для показа<br />Атрибуты используются только для показа<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTES_DISPLAY_ONLY';
UPDATE product_type_layout SET configuration_title='Атрибуты бесплатные', configuration_description='Атрибуты бесплатные<br />Атрибуты бесплатные, когда товар бесплатный<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTE_IS_FREE';
UPDATE product_type_layout SET configuration_title='Атрибуты используются по умолчанию', configuration_description='Атрибуты используются по умолчанию<br />Атрибуты по умолчанию отмечены как "выбранные"<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTES_DEFAULT';
UPDATE product_type_layout SET configuration_title='Атрибуты со скидкой', configuration_description='Атрибуты со скидкой<br />На атрибуты распространяется скидка установленная на товары<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTES_DISCOUNTED';
UPDATE product_type_layout SET configuration_title='Атрибуты включены в базовую цену', configuration_description='Атрибуты включены в базовую цену<br />Атрибуты включены в базовую цену когда цена основана на атрибутах<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTES_PRICE_BASE_INCLUDED';
UPDATE product_type_layout SET configuration_title='Атрибут требуется', configuration_description='Атрибут требуется<br />Атрибут требуется для текста<br />0= Нет 1= Да' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_ATTRIBUTES_REQUIRED';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс цены', configuration_description='Атрибуты - префикс цены<br />Префикс цены у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_PRICE_PREFIX';
UPDATE product_type_layout SET configuration_title='Атрибуты - префикс веса', configuration_description='Атрибуты - префикс веса<br />Префикс веса у атрибутов по умолчанию<br />Пробел, + или -' WHERE configuration_key='DEFAULT_PRODUCT_FREE_SHIPPING_PRODUCTS_ATTRIBUTES_WEIGHT_PREFIX';