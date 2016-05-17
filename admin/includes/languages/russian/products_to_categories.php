<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Связывание товара с несколькими категориями');
define('HEADING_TITLE2','Категории и товары');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Категории доступные для связывания');

define('TABLE_HEADING_PRODUCTS_ID', 'ID товара');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_MODEL', 'Артикул');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'Редактирование товара на основе информации о категории');
define('TEXT_PRODUCTS_ID', 'Товар ID# ');
define('TEXT_PRODUCTS_NAME', 'Товар: ');
define('TEXT_PRODUCTS_MODEL', 'Артикул: ');
define('TEXT_PRODUCTS_PRICE', 'Цена: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Обновить связи категорий');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Выберите товар для связывания');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Выберите товар для связывания с категориями: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Текущее количество связанных категорий: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'В этом разделе Вы сможете быстро скопировать (связать) товар в одну или несколько категорий .<br />Вы также может связать ВСЕ товары из какой-то одной категории с другой или удалить связанные товары из другой категории. (смотрите ниже дополнительные инструкции)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Каждый товар привязан к Мастер категории, независимо от того со сколькими категориями он связан. Это может быть установлено через выпадающее меню в Мастере категорий .<br />
Товар сейчас связан с категориями отмеченными в чек-боксе. Чтобы добавить новую категорию (категории) просто отметьте чек-бокс напротив нужных категорий. Чтобы удалить свзязанные товары просто снимите флажок..<br />
Когда Вы внесёте все необходимые изменения просто нажмите ' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Глобальные изменения связей и установка по умолчанию ID Мастера категорий');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>Внимание:</strong> Вы сначала должны установить ID мастер категории перед тем как измененять связанные категории');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Копировать ВСЕ товары этой категории как СВЯЗАННЫЕ товары в другую категорию</strong><br />Например: ВСЕ товары из 8 категории связываем (копируем) с категорией 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Выбрать ВСЕ товары из этой категории: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Связать с категорией: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Копировать товары как СВЯЗАННЫЕ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'Внимание: Товары были перемещены и больше не связаны с категорией');
define('WARNING_COPY_LINKED', 'Внимание: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Неправильная категория для связывания товара из: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Неправильная категория для связывания товара с: ');
define('WARNING_NO_CATEGORIES_ID', 'Внимание: ни одна категория не была выбрана - никаких изменений');
define('SUCCESS_COPY_LINKED', 'Успешно обновление - Все товары теперь связаны');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Категория для связывания товара из: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Категория для связывания товара с: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'Внимание: Копирование в неправльную категорию связывания завершено: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>Внимание: Товары уже были связаны, поэтому никаких изменений не произошло</strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Удалить все товары в категории, связанные с другой категорией</strong><br />Наприимер: указав 8 и 22 Вы удалите все товары категории 8 из категории 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Выбрать все товары в категории: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Удалить связанные из категории: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Удалить связанные товары ');

define('WARNING_REMOVE_LINKED', 'Внимание: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Неправильная категория для удаления связанных товаров из: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Неправильная категория для удаления связанных товаров с: ');
define('SUCCESS_REMOVE_LINKED', 'Удачное удаление всех связанных товаров');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Категория для удаления связанных товаров из: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Категория для удаления связанных товаров с: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>Внимание: Никаких изменений потому, что не было связанных товаров</strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>Внимание: Конфликт ID мастер категории</strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ID мастер категории: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'Замечание: Мастер категория используется для глобального изменения цен в связанных товарах, например: Акции<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Чтобы решить эту проблему, Вы были перенаправлены к первому товару вызвавшему конфликт. Переустановите ID Мастер категории чтобы он не конфликтовал с ID Мастер категории которую Вы пытаетесь удалить. Когда будет все решено, Вы сможет решить свои задачи.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Конфликт возник в категории: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' И идет В категорию: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Успешное обновление связанных товаров');
define('WARNING_MASTER_CATEGORIES_ID', 'Внимание: Не выбрана мастер категория!');

define('TEXT_PRODUCTS_ID_INVALID', 'Предупреждение: Неправильный ID товара или товар не выбран');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Замечание: ID товара не нужен для связывания всех товаров одной категории с другой категорией.<br />Однако, задав ID товара Вы получите список всех доступных для связи категорий и их номерами ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Установить у всех товаров в выбранной категории данную категорию как новую мастер категорию.</strong><br />Например: Установить категорию 22 - установит для ВСЕХ товаров в категории 22 эту категорию как мастер категорию');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Установить ID мастер категории для всех товаров в категории: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Установить ID мастер категории');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Внимание: Выбрана неправильная категория ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Успешное обновление всех товаров в новой мастер категории ID для категории: ');

// EOF