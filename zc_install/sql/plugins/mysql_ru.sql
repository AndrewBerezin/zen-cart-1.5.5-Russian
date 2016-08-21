#
# * SQL Localization script - Prepare tables for Localization
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_00_alter_tables.sql 1.5.5a 20.08.2016 19:14:31 AndrewBerezin $

ALTER TABLE products_description CHANGE products_name products_name VARCHAR(255);
ALTER TABLE categories_description CHANGE categories_name categories_name VARCHAR(255);
ALTER TABLE ezpages CHANGE pages_html_text pages_html_text LONGTEXT;
ALTER TABLE zones CHANGE zone_name zone_name VARCHAR(128);
ALTER TABLE zones CHANGE zone_code zone_code VARCHAR(128);
#
# * SQL Localization script - Add ru language and set it as default languages
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_01_ru.sql 1.5.5a 21.08.2016 1:01:07 AndrewBerezin $

# Add Russian language
INSERT INTO languages (languages_id, name, code, image, directory, sort_order) VALUES (NULL,'Russian','ru','icon.gif','russian',1);
UPDATE languages SET sort_order=2 WHERE languages_id=1;
UPDATE configuration SET configuration_value='ru' WHERE configuration_key='DEFAULT_LANGUAGE';
#
# * SQL Localization script - Translate configuration_group table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin eCommerce-Service.com
# * @version $Id: mysql_20_translate_configuration_group.sql 1.3.8a 17.12.2007 11:05 AndrewBerezin $

UPDATE configuration_group SET configuration_group_title='Настройки магазина', configuration_group_description='Общая информация о магазине' WHERE configuration_group_id='1';
UPDATE configuration_group SET configuration_group_title='Минимальные значения', configuration_group_description='Минимальные значения для функций и данных' WHERE configuration_group_id='2';
UPDATE configuration_group SET configuration_group_title='Максимальные значения', configuration_group_description='Максимальные значения для функций и данных' WHERE configuration_group_id='3';
UPDATE configuration_group SET configuration_group_title='Изображения', configuration_group_description='Параметры изображений' WHERE configuration_group_id='4';
UPDATE configuration_group SET configuration_group_title='Информация о покупателе', configuration_group_description='Конфигурация учётной записи покупателя' WHERE configuration_group_id='5';
UPDATE configuration_group SET configuration_group_title='Настройки модулей', configuration_group_description='Скрыто от конфигурации' WHERE configuration_group_id='6';
UPDATE configuration_group SET configuration_group_title='Отгрузка/Упаковка', configuration_group_description='Настройки параметров отгрузки товара' WHERE configuration_group_id='7';
UPDATE configuration_group SET configuration_group_title='Список товаров', configuration_group_description='Конфигурация списка товаров' WHERE configuration_group_id='8';
UPDATE configuration_group SET configuration_group_title='Склад', configuration_group_description='Конфигурация склада' WHERE configuration_group_id='9';
UPDATE configuration_group SET configuration_group_title='Логи', configuration_group_description='Конфигурация логов' WHERE configuration_group_id='10';
UPDATE configuration_group SET configuration_group_title='Соглашения', configuration_group_description='Опции соглашения' WHERE configuration_group_id='11';
UPDATE configuration_group SET configuration_group_title='E-Mail', configuration_group_description='Настройки транспорта электронной почты и формата HTML' WHERE configuration_group_id='12';
UPDATE configuration_group SET configuration_group_title='Настройки атрибутов', configuration_group_description='Настройка атрибутов товаров' WHERE configuration_group_id='13';
UPDATE configuration_group SET configuration_group_title='GZip компрессия', configuration_group_description='Настройка GZip компрессии' WHERE configuration_group_id='14';
UPDATE configuration_group SET configuration_group_title='Сессии', configuration_group_description='Настройка сессий' WHERE configuration_group_id='15';
UPDATE configuration_group SET configuration_group_title='Сертификаты и купоны', configuration_group_description='Подарочные сертификаты и купоны' WHERE configuration_group_id='16';
UPDATE configuration_group SET configuration_group_title='Кредитные карты', configuration_group_description='Принимаемые кредитные карты' WHERE configuration_group_id='17';
UPDATE configuration_group SET configuration_group_title='Страница товара', configuration_group_description='Настройки страницы описания товара' WHERE configuration_group_id='18';
UPDATE configuration_group SET configuration_group_title='Внешний вид', configuration_group_description='Настройка внешнего вида' WHERE configuration_group_id='19';
UPDATE configuration_group SET configuration_group_title='Выключение магазина', configuration_group_description='Настройки параметров выключения магазина' WHERE configuration_group_id='20';
UPDATE configuration_group SET configuration_group_title='Список новых товаров', configuration_group_description='Настройки списка новых товаров' WHERE configuration_group_id='21';
UPDATE configuration_group SET configuration_group_title='Список рекомендуемых товаров', configuration_group_description='Настройки списка рекомендуемых товаров' WHERE configuration_group_id='22';
UPDATE configuration_group SET configuration_group_title='Список всех товаров', configuration_group_description='Настройки списка всех товаров' WHERE configuration_group_id='23';
UPDATE configuration_group SET configuration_group_title='Вид главной страницы', configuration_group_description='Опции отображения (вида) главной страницы' WHERE configuration_group_id='24';
UPDATE configuration_group SET configuration_group_title='Статус страниц', configuration_group_description='Определение статуса страниц' WHERE configuration_group_id='25';
UPDATE configuration_group SET configuration_group_title='Настройки EZ-страниц', configuration_group_description='Настройки EZ-страниц' WHERE configuration_group_id='30';
#
# * SQL Localization script - Translate configuration table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_21_translate_configuration.sql 1.3.8a 12.04.2007 21:17 AndrewBerezin $

UPDATE configuration SET configuration_title='Название магазина', configuration_description='Название вашего магазина' WHERE configuration_key='STORE_NAME';
UPDATE configuration SET configuration_title='Владелец магазина', configuration_description='Владелец вашего магазина' WHERE configuration_key='STORE_OWNER';
UPDATE configuration SET configuration_title='Страна', configuration_description='Страна в которой работает магазин <br /><br /><strong>Внимание: Не забудьте обновить область магазина</strong>' WHERE configuration_key='STORE_COUNTRY';
UPDATE configuration SET configuration_title='Область', configuration_description='Область в которой работает магазин' WHERE configuration_key='STORE_ZONE';
UPDATE configuration SET configuration_title='Порядок сортировки ожидаемых товаров', configuration_description='Порядок сортировки в боксе ожидаемых товаров' WHERE configuration_key='EXPECTED_PRODUCTS_SORT';
UPDATE configuration SET configuration_title='Порядок сортировки ожидаемых товаров в колонке', configuration_description='Порядок сортировки ожидаемых товаров в колонку в боксе ожидаемых товаров' WHERE configuration_key='EXPECTED_PRODUCTS_FIELD';
UPDATE configuration SET configuration_title='Переключение к валюте языка', configuration_description='Автоматическое переключение к валюте языка при его изменении' WHERE configuration_key='USE_DEFAULT_LANGUAGE_CURRENCY';
UPDATE configuration SET configuration_title='Выбор языков', configuration_description='Язык по умолчанию определеяется настройками магазина или браузером клиента?<br /><br />Умолчание: Настройки магазина по умолчанию' WHERE configuration_key='LANGUAGE_DEFAULT_SELECTOR';
UPDATE configuration SET configuration_title='Использовать ЧПУ', configuration_description='Использовать ЧПУ' WHERE configuration_key='SEARCH_ENGINE_FRIENDLY_URLS';
UPDATE configuration SET configuration_title='Показывать корзину после добавления товара', configuration_description='Показывать корзину после добавления товара (или возвращатся к товару)' WHERE configuration_key='DISPLAY_CART';
UPDATE configuration SET configuration_title='Оператор поиска по умолчанию', configuration_description='Операторы поиск по умолчанию' WHERE configuration_key='ADVANCED_SEARCH_DEFAULT_OPERATOR';
UPDATE configuration SET configuration_title='Адрес и телефон магазина', configuration_description='Эти данные используются при распечатывании счетов и показываются в магазине' WHERE configuration_key='STORE_NAME_ADDRESS';
UPDATE configuration SET configuration_title='Показывать количество товара в категории', configuration_description='Показывает сколько товаров находится в категории' WHERE configuration_key='SHOW_COUNTS';
UPDATE configuration SET configuration_title='Десятичный разделитель налога', configuration_description='Введите разделитель десятков в значении налога' WHERE configuration_key='TAX_DECIMAL_PLACES';
UPDATE configuration SET configuration_title='Показывать цену с налогом', configuration_description='Показывать цену включая налог (да) или добавлять налог в конце (нет)' WHERE configuration_key='DISPLAY_PRICE_WITH_TAX';
UPDATE configuration SET configuration_title='Показывать цену с налогом в админке', configuration_description='Показывать цену включая налог (да) или добавлять налог в конце(нет) в админке(счетах)' WHERE configuration_key='DISPLAY_PRICE_WITH_TAX_ADMIN';
UPDATE configuration SET configuration_title='Основа налога на товар', configuration_description='На чем основывается вычисления налога на товар. Это может быть<br />Отгрузка - базируется на адресе отгрузки клиента<br />Фактический адрес - базируется на фактическом адресе клиента<br />Магазин - базируется на адресе магазина если область отгрузки и фактическая область отвечают области магазина' WHERE configuration_key='STORE_PRODUCT_TAX_BASIS';
UPDATE configuration SET configuration_title='Основа налога на отгрузку', configuration_description='На чем основывается вычисление налога на отгрузку. Это может быть<br />Отгрузка - базируется на адресе отгрузки клиента<br />Фактический адрес - базируется на фактическом адресе клиента<br />Магазин - базируется на адресе магазина если область отгрузки и фактическая область отвечают области магазина' WHERE configuration_key='STORE_SHIPPING_TAX_BASIS';
UPDATE configuration SET configuration_title='Статус отображения налога на продажу', configuration_description='Всегда показывать налог на продажу когда количество $0.00?<br />0= Выкл<br />1= Вкл' WHERE configuration_key='STORE_TAX_DISPLAY_STATUS';
UPDATE configuration SET configuration_title='Тайм-аут сессии админа в секундах', configuration_description='введите время в секундах. Умолчание=3600<br />Пример: 3600= 1 час' WHERE configuration_key='SESSION_TIMEOUT_ADMIN';
UPDATE configuration SET configuration_title='Максимальное время для выполняемых процессов', configuration_description='Установите время жизни в секундах для выполняемых процессов. Умолчание=60<br />Пример: 60= 1 минута' WHERE configuration_key='GLOBAL_SET_TIME_LIMIT';
UPDATE configuration SET configuration_title='Уведомлять о наличии новой версии', configuration_description='Автоматически проверять наличие обновлений для системы' WHERE configuration_key='SHOW_VERSION_UPDATE_IN_HEADER';
UPDATE configuration SET configuration_title='Статус магазина', configuration_description='Статус вашего магазина<br />0= обычный<br />1= без цен<br />2= с ценами' WHERE configuration_key='STORE_STATUS';
UPDATE configuration SET configuration_title='Время работы сервера', configuration_description='Отображение времени работы сервера может создавать записи в логах ошибок на некоторых серверах' WHERE configuration_key='DISPLAY_SERVER_UPTIME';
UPDATE configuration SET configuration_title='Проверка несуществующих страниц', configuration_description='Система может проверять наличие несуществующих страниц и перенаправлять на главную страницу. Для отладки вам нужно отключить данную функцию. <br /><br /><strong>Умолчание=вкл</strong><br />Вкл = Отправка несуществуюих страниц \'index\'<br />Выкл = Не искать несуществующие страницы<br />Страница не найдена = показывать страницу Страница не найдена' WHERE configuration_key='MISSING_PAGE_CHECK';
UPDATE configuration SET configuration_title='HTML редактор', configuration_description='выберите HTML/RTF редактор с помощью которого вы хотите составлять emails, рассылки, и описания к товарам' WHERE configuration_key='HTML_EDITOR_PREFERENCE';
UPDATE configuration SET configuration_title='Включить phpBB интеграцию?', configuration_description='Должна ли система синхронизировать ваш новый профиль с форумом phpBB?' WHERE configuration_key='PHPBB_LINKS_ENABLED';
UPDATE configuration SET configuration_title='Показывать количество товара в категории', configuration_description='Показывать количество товара в категории для админа' WHERE configuration_key='SHOW_COUNTS_ADMIN';
UPDATE configuration SET configuration_title='Коэффициент пересчёта курса валюты', configuration_description='Какой "повышающий" коэфициент использовать при автоматическом обновлении курса валюты для Вашего магазина?<br />Т.е., сколько Вы хотите получить дополнительно по отношению к официальному баковскому курсу?<br /><br /><strong>По уолчанию: 1.05 </strong><br />Это означает, что для получения Вашего внутреннего курса банковский курса будет умножен на 1.05.' WHERE configuration_key='CURRENCY_UPLIFT_RATIO';
UPDATE configuration SET configuration_title='Имя', configuration_description='Минимальная длина имени' WHERE configuration_key='ENTRY_FIRST_NAME_MIN_LENGTH';
UPDATE configuration SET configuration_title='Фамилия', configuration_description='Минимальная длина фамилии' WHERE configuration_key='ENTRY_LAST_NAME_MIN_LENGTH';
UPDATE configuration SET configuration_title='Дата рождения', configuration_description='Минимальная длина даты рождения' WHERE configuration_key='ENTRY_DOB_MIN_LENGTH';
UPDATE configuration SET configuration_title='E-Mail', configuration_description='Минимальная длина e-mail' WHERE configuration_key='ENTRY_EMAIL_ADDRESS_MIN_LENGTH';
UPDATE configuration SET configuration_title='Адрес', configuration_description='Минимальная длина адреса' WHERE configuration_key='ENTRY_STREET_ADDRESS_MIN_LENGTH';
UPDATE configuration SET configuration_title='Компания', configuration_description='Минимальная длина компании' WHERE configuration_key='ENTRY_COMPANY_MIN_LENGTH';
UPDATE configuration SET configuration_title='Почтовый индекс', configuration_description='Минимальная длина почтового индекса' WHERE configuration_key='ENTRY_POSTCODE_MIN_LENGTH';
UPDATE configuration SET configuration_title='Город', configuration_description='Минимальная длина города' WHERE configuration_key='ENTRY_CITY_MIN_LENGTH';
UPDATE configuration SET configuration_title='Область', configuration_description='Минимальная длина области' WHERE configuration_key='ENTRY_STATE_MIN_LENGTH';
UPDATE configuration SET configuration_title='Телефонный номер', configuration_description='Минимальная длина телефонного номера' WHERE configuration_key='ENTRY_TELEPHONE_MIN_LENGTH';
UPDATE configuration SET configuration_title='Пароль', configuration_description='Минимальная длина пароля' WHERE configuration_key='ENTRY_PASSWORD_MIN_LENGTH';
UPDATE configuration SET configuration_title='Имя владельца кредитной карты', configuration_description='Минимальная длина имени владельца кредитной карты' WHERE configuration_key='CC_OWNER_MIN_LENGTH';
UPDATE configuration SET configuration_title='Номер кредитной карты', configuration_description='Минимальная длина номера кредитной карты' WHERE configuration_key='CC_NUMBER_MIN_LENGTH';
UPDATE configuration SET configuration_title='Номер CVV кредитной карты', configuration_description='Минимальная длина номера CVV кредитной карты' WHERE configuration_key='CC_CVV_MIN_LENGTH';
UPDATE configuration SET configuration_title='Текст отзыва', configuration_description='Минимальная длина текста отзыва' WHERE configuration_key='REVIEW_TEXT_MIN_LENGTH';
UPDATE configuration SET configuration_title='Лучшие продажи', configuration_description='Минимальное количество товаров для отображения' WHERE configuration_key='MIN_DISPLAY_BESTSELLERS';
UPDATE configuration SET configuration_title='Уже купленные товары', configuration_description='Минимальное количество товаров отображаемых в боксе Данный клиент также приобрелbox' WHERE configuration_key='MIN_DISPLAY_ALSO_PURCHASED';
UPDATE configuration SET configuration_title='Ник', configuration_description='Минимальная длина ника' WHERE configuration_key='ENTRY_NICK_MIN_LENGTH';
UPDATE configuration SET configuration_title='Записи в адресной книге', configuration_description='Максимальное количество записей в адресной книге' WHERE configuration_key='MAX_ADDRESS_BOOK_ENTRIES';
UPDATE configuration SET configuration_title='Количество результатов поиска на страницу', configuration_description='Количество товаров на страницу в результатах поиска' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS';
UPDATE configuration SET configuration_title='Пред/След навигация', configuration_description='Количество номеров страниц в данной навигации на страницу' WHERE configuration_key='MAX_DISPLAY_PAGE_LINKS';
UPDATE configuration SET configuration_title='Товары со скидкой ', configuration_description='Количество товаров со скидкой для отображения' WHERE configuration_key='MAX_DISPLAY_SPECIAL_PRODUCTS';
UPDATE configuration SET configuration_title='Новые товары', configuration_description='Количество новых товаров для отображения в категории' WHERE configuration_key='MAX_DISPLAY_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Ожидаемые товары ', configuration_description='Количество ожидаемых товаров для отображения' WHERE configuration_key='MAX_DISPLAY_UPCOMING_PRODUCTS';
UPDATE configuration SET configuration_title='Список производителей', configuration_description='1 - отображение производителей в окне с промоткой, 0 - ввиде выпадающего меню' WHERE configuration_key='MAX_MANUFACTURERS_LIST';
UPDATE configuration SET configuration_title='Список производителей - проверка наличия товара', configuration_description='Проверяет есть ли и активен ли хотя бф один товар для выбранного производителя<br />0= выкл 1= вкл' WHERE configuration_key='PRODUCTS_MANUFACTURERS_STATUS';
UPDATE configuration SET configuration_title='Список стилей музыки', configuration_description='1 - отображение стилей в окне с промоткой, 0 - ввиде выпадающего меню' WHERE configuration_key='MAX_MUSIC_GENRES_LIST';
UPDATE configuration SET configuration_title='Список звукозаписывающих компаний', configuration_description='1 - отображение компаний в окне с промоткой, 0 - ввиде выпадающего меню' WHERE configuration_key='MAX_RECORD_COMPANY_LIST';
UPDATE configuration SET configuration_title='Длина названия звукозаписывающей компании', configuration_description='Используется в боксе отображения звукозаписывающих компании.Более длинные названия будут обрезатся' WHERE configuration_key='MAX_DISPLAY_RECORD_COMPANY_NAME_LEN';
UPDATE configuration SET configuration_title='Длина названия музыкального стиля', configuration_description='Используется в боксе отображения стилей музыки.Более длинные названия будут обрезатся' WHERE configuration_key='MAX_DISPLAY_MUSIC_GENRES_NAME_LEN';
UPDATE configuration SET configuration_title='Длина названия производителя', configuration_description='Используется в боксе отображения производителей.Более длинные названия будут обрезатся' WHERE configuration_key='MAX_DISPLAY_MANUFACTURER_NAME_LEN';
UPDATE configuration SET configuration_title='Отзывов на страницу', configuration_description='Количество отзывов на страницу' WHERE configuration_key='MAX_DISPLAY_NEW_REVIEWS';
UPDATE configuration SET configuration_title='Количество отзывов для случайного показа', configuration_description='Количество отзывов для случайного показа' WHERE configuration_key='MAX_RANDOM_SELECT_REVIEWS';
UPDATE configuration SET configuration_title='Количество новых товаров для случайного показа', configuration_description='Количество новых товаров для случайного показа' WHERE configuration_key='MAX_RANDOM_SELECT_NEW';
UPDATE configuration SET configuration_title='Количество товаров со скидкой для случайного показа', configuration_description='Количество товаров со скидкой для случайного показа' WHERE configuration_key='MAX_RANDOM_SELECT_SPECIALS';
UPDATE configuration SET configuration_title='Список категорий на строку', configuration_description='Сколько выводить категорий на строку' WHERE configuration_key='MAX_DISPLAY_CATEGORIES_PER_ROW';
UPDATE configuration SET configuration_title='Список новых товаров на страницу', configuration_description='Количество новых товаров на страницу' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_NEW';
UPDATE configuration SET configuration_title='Лучшие продажи', configuration_description='Количество лучших продаж для отображения в боксе' WHERE configuration_key='MAX_DISPLAY_BESTSELLERS';
UPDATE configuration SET configuration_title='Уже купленные товары', configuration_description='Количество товаров отображаемых в боксе Данный клиент также купил' WHERE configuration_key='MAX_DISPLAY_ALSO_PURCHASED';
UPDATE configuration SET configuration_title='Бокс недавние покупки- Внимание: бокс отключен ', configuration_description='Количество товаров в боксе недавние покупки' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX';
UPDATE configuration SET configuration_title='Количество заказов на страницу в истории заказов клиента', configuration_description='Количество заказов на страницу в истории заказов клиента' WHERE configuration_key='MAX_DISPLAY_ORDER_HISTORY';
UPDATE configuration SET configuration_title='Максимальное количество клиентов для отображения на странице клиентов', configuration_description='' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_CUSTOMER';
UPDATE configuration SET configuration_title='Максимальное количество заказов для отображения на странице заказов', configuration_description='' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_ORDERS';
UPDATE configuration SET configuration_title='Максимальное количество товаров для отображения в отчетах', configuration_description='' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_REPORTS';
UPDATE configuration SET configuration_title='Максимальное количество отображаемых товаров из категории', configuration_description='Максимальное количество отображаемых товаров из категории на страницу' WHERE configuration_key='MAX_DISPLAY_RESULTS_CATEGORIES';
UPDATE configuration SET configuration_title='Список товаров на страницу', configuration_description='Максимальное количество товаров на главной странице магазина' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_LISTING';
UPDATE configuration SET configuration_title='Аттрибуты товара', configuration_description='Максимальное количество опциональных названий и значений отображаемых на странице аттрибутов для товара' WHERE configuration_key='MAX_ROW_LISTS_OPTIONS';
UPDATE configuration SET configuration_title='Аттрибуты товара(контроллер)', configuration_description='Максимальное количество аттрибутов отображаемых на страницу в Контроллере аттрибутов' WHERE configuration_key='MAX_ROW_LISTS_ATTRIBUTES_CONTROLLER';
UPDATE configuration SET configuration_title='Аттрибуты товара(загрузки)', configuration_description='Максимальное количество аттрибутов отображаемых на страницу в Загрузках' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER';
UPDATE configuration SET configuration_title='Особенные товары', configuration_description='Количество отображемых особенных товаров на страницу в админке' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN';
UPDATE configuration SET configuration_title='Максимальное количество особенных товаров на главной странице', configuration_description='Максимальное количество особенных товаров на главной странице' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_FEATURED';
UPDATE configuration SET configuration_title='Максимальное количество особенных товаров на страницу', configuration_description='Максимальное количество особенных товаров на страницу' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Случайный показ особенных товаров', configuration_description='Количество особенных товаров для случайного показа' WHERE configuration_key='MAX_RANDOM_SELECT_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Максимальное количество товаров со скидками на главной странице', configuration_description='Максимальное количество товаров со скидками на главной странице' WHERE configuration_key='MAX_DISPLAY_SPECIAL_PRODUCTS_INDEX';
UPDATE configuration SET configuration_title='Ограничение показа новых товаров', configuration_description='Ограничение показа новых товаров<br />0= все товары<br />1= текущий месяц<br />7= 7 дней<br />14= 14 дней<br />30= 30 дней<br />60= 60 дней<br />90= 90 дней<br />120= 120 дней' WHERE configuration_key='SHOW_NEW_PRODUCTS_LIMIT';
UPDATE configuration SET configuration_title='Максимальное количество товара на страницу', configuration_description='Максимальное количество товара на страницу' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_ALL';
UPDATE configuration SET configuration_title='Максимальное количество флагов языка', configuration_description='Количество флагов языка на строку в боксе Языки' WHERE configuration_key='MAX_LANGUAGE_FLAGS_COLUMNS';
UPDATE configuration SET configuration_title='Максимальный размер загружаемого файла', configuration_description='Максимальный размер загружаемого файла<br />Умолчание= 2048000' WHERE configuration_key='MAX_FILE_UPLOAD_SIZE';
UPDATE configuration SET configuration_title='Расширения файлов для загрузки', configuration_description='Список расширений файлов допустимых для загрузки клиентами в систему. Разделяйте несколько значений запятой(,). Не используйте точку(.)<br /><br />Например: \"jpg,jpeg,gif,png,eps,cdr,ai,pdf,tif,tiff,bmp,zip\"' WHERE configuration_key='UPLOAD_FILENAME_EXTENSIONS';
UPDATE configuration SET configuration_title='Максимальное количество деталей заказа на странице заказов в админке', configuration_description='Максимальное количество деталей заказа<br />0 = неограниченно' WHERE configuration_key='MAX_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING';
UPDATE configuration SET configuration_title='Максимальный PayPal IPN в списке админа', configuration_description='Максимальное количество PayPal IPN в списке админа<br />Умолчание 20' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_PAYPAL_IPN';
UPDATE configuration SET configuration_title='Максимальное количество колонок с товарами в менеджере категорий', configuration_description='Максимальное количество колонок с товарами в менеджере категорий<br />3 = умолчание' WHERE configuration_key='MAX_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS';
UPDATE configuration SET configuration_title='Максимальное количество показываемых EZ-страниц', configuration_description='Максимальное количество показываемых EZ-страниц<br />20 = умолчание' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_EZPAGE';
UPDATE configuration SET configuration_title='Ширина миниатюры', configuration_description='Ширина миниатюры в пикселях' WHERE configuration_key='SMALL_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Высота миниатюры', configuration_description='Высота миниатюры в пикселях' WHERE configuration_key='SMALL_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Ширина оригинала', configuration_description='Ширина оригинала в админке' WHERE configuration_key='HEADING_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Высота оригинала', configuration_description='Высота оригинала в админке' WHERE configuration_key='HEADING_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения подкатегории', configuration_description='Ширина изображения подкатегории в пикселях' WHERE configuration_key='SUBCATEGORY_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения подкатегории', configuration_description='Высота изображения подкатегории в пикселях' WHERE configuration_key='SUBCATEGORY_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Рассчитывать размер изображения', configuration_description='Рассчитывать размер изображения?' WHERE configuration_key='CONFIG_CALCULATE_IMAGE_SIZE';
UPDATE configuration SET configuration_title='Запрос изображения', configuration_description='Включает свое отображение несуществующего изображения' WHERE configuration_key='IMAGE_REQUIRED';
UPDATE configuration SET configuration_title='Изображение статуса корзины', configuration_description='Показывать изображение товара в корзине?<br />0= выкл 1= вкл' WHERE configuration_key='IMAGE_SHOPPING_CART_STATUS';
UPDATE configuration SET configuration_title='Ширина изображения корзины', configuration_description='Умолчание = 50' WHERE configuration_key='IMAGE_SHOPPING_CART_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения корзины', configuration_description='Умолчание = 40' WHERE configuration_key='IMAGE_SHOPPING_CART_HEIGHT';
UPDATE configuration SET configuration_title='Ширина иконки категории', configuration_description='Ширина в пикселях иконки категории для страниц с информацией о товаре' WHERE configuration_key='CATEGORY_ICON_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Высота иконки категории', configuration_description='Высота в пикселях иконки категории для страниц с информацией о товаре' WHERE configuration_key='CATEGORY_ICON_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Ширина иконки родительской категории', configuration_description='Ширина в пикселях иконки родительской категории.<br />Родительская категория - категория, содержащая подкатегории.' WHERE configuration_key='SUBCATEGORY_IMAGE_TOP_WIDTH';
UPDATE configuration SET configuration_title='Высота иконки родительской категории', configuration_description='Высота в пикселях иконки родительской категории.<br />Родительская категория - категория, содержащая подкатегории.' WHERE configuration_key='SUBCATEGORY_IMAGE_TOP_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения Информация о товаре', configuration_description='Ширина в пикселях изображения Информация о товаре' WHERE configuration_key='MEDIUM_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения Информация о товаре', configuration_description='Высота в пикселях изображения Информация о товаре' WHERE configuration_key='MEDIUM_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Суффикс среднего изображения Информация о товаре', configuration_description='Суффикс среднего изображения Информация о товаре<br />Умолчание = _MED' WHERE configuration_key='IMAGE_SUFFIX_MEDIUM';
UPDATE configuration SET configuration_title='Суффикс большого изображения Информация о товаре', configuration_description='Суффикс большого изображения Информация о товаре<br />Умолчание = _LRG' WHERE configuration_key='IMAGE_SUFFIX_LARGE';
UPDATE configuration SET configuration_title='Количество дополнительных изображений Информация о товаре на строку', configuration_description='Количество дополнительных изображений Информация о товаре на строку<br />Умолчание = 3' WHERE configuration_key='IMAGES_AUTO_ADDED';
UPDATE configuration SET configuration_title='Ширина изображения товара в списке', configuration_description='Умолчание = 100' WHERE configuration_key='IMAGE_PRODUCT_LISTING_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения товара в списке', configuration_description='Умолчание = 80' WHERE configuration_key='IMAGE_PRODUCT_LISTING_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения нового товара в списке', configuration_description='Умолчание = 100' WHERE configuration_key='IMAGE_PRODUCT_NEW_LISTING_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения нового товара в списке', configuration_description='Умолчание = 80' WHERE configuration_key='IMAGE_PRODUCT_NEW_LISTING_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения нового товара', configuration_description='Умолчание = 100' WHERE configuration_key='IMAGE_PRODUCT_NEW_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения нового товара', configuration_description='Умолчание = 80' WHERE configuration_key='IMAGE_PRODUCT_NEW_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения особенного товара', configuration_description='Умолчание = 100' WHERE configuration_key='IMAGE_FEATURED_PRODUCTS_LISTING_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения особенного товара', configuration_description='Умолчание = 80' WHERE configuration_key='IMAGE_FEATURED_PRODUCTS_LISTING_HEIGHT';
UPDATE configuration SET configuration_title='Ширина изображения товаров', configuration_description='Умолчание = 100' WHERE configuration_key='IMAGE_PRODUCT_ALL_LISTING_WIDTH';
UPDATE configuration SET configuration_title='Высота изображения товаров', configuration_description='Умолчание = 80' WHERE configuration_key='IMAGE_PRODUCT_ALL_LISTING_HEIGHT';
UPDATE configuration SET configuration_title='Изображение товара при отсутствии изображения для него', configuration_description='Использовать изображение-заглушку при отсутствии изображения для товара<br />0= выкл<br />1= вкл' WHERE configuration_key='PRODUCTS_IMAGE_NO_IMAGE_STATUS';
UPDATE configuration SET configuration_title='Изображение товара при отсутствии изображения для него', configuration_description='Использовать изображение-заглушку при отсутствии изображения для товара<br />Умолчание = no_picture.gif' WHERE configuration_key='PRODUCTS_IMAGE_NO_IMAGE';
UPDATE configuration SET configuration_title='Использовать пропорциональные изображения для товаров и категорий', configuration_description='Использовать пропорциональные изображения для товаров и категорий?<br /><br />Внимание: Не используйте высоту 0 или настройки ширины для пропорциональных изображений<br />0= выкл 1= вкл' WHERE configuration_key='PROPORTIONAL_IMAGES_STATUS';
UPDATE configuration SET configuration_title='Email приветствие', configuration_description='Показывать выбор приветствия при создании профиля' WHERE configuration_key='ACCOUNT_GENDER';
UPDATE configuration SET configuration_title='Дата рождения', configuration_description='Показывать поле даты рождения при создании профиля' WHERE configuration_key='ACCOUNT_DOB';
UPDATE configuration SET configuration_title='Компания', configuration_description='Показывать поле компании при создании профиля' WHERE configuration_key='ACCOUNT_COMPANY';
UPDATE configuration SET configuration_title='Адрес 2', configuration_description='Показывать поле адрес 2 при создании профиля' WHERE configuration_key='ACCOUNT_SUBURB';
UPDATE configuration SET configuration_title='Область', configuration_description='Показывать поле область при создании профиля' WHERE configuration_key='ACCOUNT_STATE';
UPDATE configuration SET configuration_title='Показывать области ввиде выпадающего меню?', configuration_description='Показывать области ввиде выпадающего меню?' WHERE configuration_key='ACCOUNT_STATE_DRAW_INITIAL_DROPDOWN';
UPDATE configuration SET configuration_title='ID страны по умолчанию при создании профиля', configuration_description='Установить ID страны по умолчанию при создании профиля:<br />Умолчание 176' WHERE configuration_key='SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY';
UPDATE configuration SET configuration_title='Факс', configuration_description='Показывать поле факса при создании профиля' WHERE configuration_key='ACCOUNT_FAX_NUMBER';
UPDATE configuration SET configuration_title='Показывать бокс рассылки', configuration_description='Показывать бокс рассылки<br />0= выкл<br />1= показывать не выбранным<br />2= показывать выбранным' WHERE configuration_key='ACCOUNT_NEWSLETTER_STATUS';
UPDATE configuration SET configuration_title='Установка приема писем клиентом по умолчанию', configuration_description='Установка приема писем клиентом по умолчанию<br />0= Текст<br />1= HTML' WHERE configuration_key='ACCOUNT_EMAIL_PREFERENCE';
UPDATE configuration SET configuration_title='Статус уведомления о товарах для клиента', configuration_description='Спрашивать клиента о уведомлении о новых товарах после процесса контроля заказа<br />0= не спрашивать<br />1= спрашивать' WHERE configuration_key='CUSTOMERS_PRODUCTS_NOTIFICATION_STATUS';
UPDATE configuration SET configuration_title='Статус клиента в магазине - просматривать магазин и цены', configuration_description='Клиент должен быть допущен к магазину<br />0= без запроса<br />1= должен войти<br />2= может просматривать,но не увидит цен пока не войдет<br />3= только показ' WHERE configuration_key='CUSTOMERS_APPROVAL';
UPDATE configuration SET configuration_title='Статус одобрения клиента - ожидание авторизации', configuration_description='Клиент должен быть авторизирован в магазине<br />0= без запроса<br />1= должен авторизоватся<br />2= может просматривать,но не увидит цен пока не войдет<br />3= может просматривать и может видеть цены,но должен авторизоватся для покупки' WHERE configuration_key='CUSTOMERS_APPROVAL_AUTHORIZATION';
UPDATE configuration SET configuration_title='Авторизация клиента:имя файла', configuration_description='Авторизация клиента:имя файла<br />Умолчание=customers_authorization' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_FILENAME';
UPDATE configuration SET configuration_title='Авторизация клиента:прятать верх', configuration_description='Авторизация клиента:прятать верх <br />(да=прятать нет=показывать)' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_HEADER_OFF';
UPDATE configuration SET configuration_title='Авторизация клиента:прятать левую колонку', configuration_description='Авторизация клиента:прятать левую колонку <br />(да=прятать нет=показывать)' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF';
UPDATE configuration SET configuration_title='Авторизация клиента:прятать правую колонку', configuration_description='Авторизация клиента:прятать правую колонку <br />(да=прятать нет=показывать)' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF';
UPDATE configuration SET configuration_title='Авторизация клиента:прятать низ', configuration_description='Авторизация клиента:прятать низ<br />(да=прятать нет=показывать)' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_FOOTER_OFF';
UPDATE configuration SET configuration_title='Авторизация клиента:прятать цены', configuration_description='Авторизация клиента:прятать цены <br />(да=прятать нет=показывать)' WHERE configuration_key='CUSTOMERS_AUTHORIZATION_PRICES_OFF';
UPDATE configuration SET configuration_title='Статус реферала клиентов', configuration_description='Код реферала клиента создается от<br />0= выкл<br />1= 1ый используемый код дисконтной карточки<br />2= Клиент может создать его сам в профиле' WHERE configuration_key='CUSTOMERS_REFERRAL_STATUS';
UPDATE configuration SET configuration_title='Установленные модули', configuration_description='Список модулей оплаты(имени файлов)разделяется точкой с запятой. Это происходит автоматически (Пример: cc.php;cod.php;paypal.php)' WHERE configuration_key='MODULE_PAYMENT_INSTALLED';
UPDATE configuration SET configuration_title='Установленные модули', configuration_description='Список модулей общего заказа(имени файлов)разделяется точкой с запятой. Это происходит автоматически (Пример: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)' WHERE configuration_key='MODULE_ORDER_TOTAL_INSTALLED';
UPDATE configuration SET configuration_title='Установленные модули', configuration_description='Список модулей отгрузки(имени файлов)разделяется точкой с запятой. Это происходит автоматически (Пример: ups.php;flat.php;item.php)' WHERE configuration_key='MODULE_SHIPPING_INSTALLED';
UPDATE configuration SET configuration_title='Включить модуль оплаты кредитной картой', configuration_description='Включить модуль оплаты кредитной картой?' WHERE configuration_key='MODULE_PAYMENT_CC_STATUS';
UPDATE configuration SET configuration_title='Отправка средних цифр кредитной карты на E-Mail', configuration_description='Если введен e-mail, средние цифры кредитной карты будут отправлены на e-mail(другие цифры будут сохранены в базе данных вместе с зашифрованными средними цифрами)' WHERE configuration_key='MODULE_PAYMENT_CC_EMAIL';
UPDATE configuration SET configuration_title='Собирать и сохранять CVV номера', configuration_description='Собирать и сохранять CVV номера?' WHERE configuration_key='MODULE_PAYMENT_CC_COLLECT_CVV';
UPDATE configuration SET configuration_title='Хранить номер кредитной карты', configuration_description='Хранить номер кредитной карты?' WHERE configuration_key='MODULE_PAYMENT_CC_STORE_NUMBER';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки. Меньшие значения вверху' WHERE configuration_key='MODULE_PAYMENT_CC_SORT_ORDER';
UPDATE configuration SET configuration_title='Область оплаты', configuration_description='Если выбрана область,просто включите данный метод оплаты для данной области' WHERE configuration_key='MODULE_PAYMENT_CC_ZONE';
UPDATE configuration SET configuration_title='Статус заказа', configuration_description='Установите статус заказа совершенного данным модулем оплаты к данному значению' WHERE configuration_key='MODULE_PAYMENT_CC_ORDER_STATUS_ID';
UPDATE configuration SET configuration_title='Включить отгрузку домой', configuration_description='Включить отгрузку домой?' WHERE configuration_key='MODULE_SHIPPING_FLAT_STATUS';
UPDATE configuration SET configuration_title='Плата за отгрузку', configuration_description='Плата за отгрузку для всех заказов использующих данный метод отгрузки' WHERE configuration_key='MODULE_SHIPPING_FLAT_COST';
UPDATE configuration SET configuration_title='Класс налога', configuration_description='Использовать данный класс налога к оплате на отгрузку' WHERE configuration_key='MODULE_SHIPPING_FLAT_TAX_CLASS';
UPDATE configuration SET configuration_title='Основа налога', configuration_description='На какой основе вычисляется налог на отгрузку. Это может быть<br />Отгрузка - базируется на адресе отгрузки клиента<br />Фактический адрес - базируется на фактическом адресе клиента<br />Магазин - базируется на адресе магазина если фактическая и область отгрузки соответствуют области магазина' WHERE configuration_key='MODULE_SHIPPING_FLAT_TAX_BASIS';
UPDATE configuration SET configuration_title='Область отгрузки', configuration_description='Если область выбранан, просто включите данный метод отгрузки для данной зоны' WHERE configuration_key='MODULE_SHIPPING_FLAT_ZONE';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_SHIPPING_FLAT_SORT_ORDER';
UPDATE configuration SET configuration_title='Валюта по умолчанию', configuration_description='Валюта по умолчанию' WHERE configuration_key='DEFAULT_CURRENCY';
UPDATE configuration SET configuration_title='Язык по умолчанию', configuration_description='Язык по умолчанию' WHERE configuration_key='DEFAULT_LANGUAGE';
UPDATE configuration SET configuration_title='Статус заказов по умолчанию для новых заказов', configuration_description='Когда создан новый заказ, данный статус заказа будет применен к нему' WHERE configuration_key='DEFAULT_ORDERS_STATUS_ID';
UPDATE configuration SET configuration_title='Показывать админу configuration_key', configuration_description='Переключитесь вручную к значению 1 для просмотра configuration_key названия в отображении конфигурации' WHERE configuration_key='ADMIN_CONFIGURATION_KEY_ON';
UPDATE configuration SET configuration_title='Страна-отгрузчик', configuration_description='Выберите страну из который вы будете отгружать товары клиентам' WHERE configuration_key='SHIPPING_ORIGIN_COUNTRY';
UPDATE configuration SET configuration_title='Почтовый индекс', configuration_description='Введите почтовый индекс используемый при отгрузке товара клиентам' WHERE configuration_key='SHIPPING_ORIGIN_ZIP';
UPDATE configuration SET configuration_title='Введите максимальный вес единицы отгружаемого товара', configuration_description='Введите максимальный вес единицы отгружаемого товара' WHERE configuration_key='SHIPPING_MAX_WEIGHT';
UPDATE configuration SET configuration_title='Упаковка товара от маленькой до средней - добавьте процент:вес', configuration_description='Какой вес упаковки для товара размером от маленького до большого?<br />Пример: 10% + 1l 10:1<br />10% + 0l 10:0<br />0% + 5l 0:5<br />0% + 0l 0:0' WHERE configuration_key='SHIPPING_BOX_WEIGHT';
UPDATE configuration SET configuration_title='Большие упаковки - добавьте процент:вес', configuration_description='Какой вес упаковки для товара большого размера?<br />Пример: 10% + 1l 10:1<br />10% + 0l 10:0<br />0% + 5l 0:5<br />0% + 0l 0:0' WHERE configuration_key='SHIPPING_BOX_PADDING';
UPDATE configuration SET configuration_title='Показывать количество коробок и статус веса', configuration_description='Показывать отгружаемый вес и количество коробок?<br /><br />0= выкл<br />1= только коробки<br />2= только вес<br />3= и короби и вес' WHERE configuration_key='SHIPPING_BOX_WEIGHT_DISPLAY';
UPDATE configuration SET configuration_title='Показывать расчет отгрузки для корзины', configuration_description='<br />0= выкл<br />1= показывать как кнопку в корзине<br />2= показывать как список на странице с корзиной' WHERE configuration_key='SHOW_SHIPPING_ESTIMATOR_BUTTON';
UPDATE configuration SET configuration_title='Статус бесплатной отгрузки при заказе товара с весом 0', configuration_description='Если при заказе товар ничего не весит,включать ли бесплатную отгрузку?<br />0= нет<br />1= да' WHERE configuration_key='ORDER_WEIGHT_ZERO_STATUS';
UPDATE configuration SET configuration_title='Показывать изображение товара', configuration_description='Показывать изображение товара?' WHERE configuration_key='PRODUCT_LIST_IMAGE';
UPDATE configuration SET configuration_title='Показывать производителя товара', configuration_description='Показывать производителя товара?' WHERE configuration_key='PRODUCT_LIST_MANUFACTURER';
UPDATE configuration SET configuration_title='Показывать модель товара', configuration_description='Показывать модель товара?' WHERE configuration_key='PRODUCT_LIST_MODEL';
UPDATE configuration SET configuration_title='Показывать название товара', configuration_description='Показывать название товара?' WHERE configuration_key='PRODUCT_LIST_NAME';
UPDATE configuration SET configuration_title='Показывать Цена товара/Добавить в корзину', configuration_description='Показывать Цена товара/Добавить в корзину?' WHERE configuration_key='PRODUCT_LIST_PRICE';
UPDATE configuration SET configuration_title='Показывать количество товара', configuration_description='Показывать количество товара?' WHERE configuration_key='PRODUCT_LIST_QUANTITY';
UPDATE configuration SET configuration_title='Показывать вес товара', configuration_description='Показывать вес товара?' WHERE configuration_key='PRODUCT_LIST_WEIGHT';
UPDATE configuration SET configuration_title='Показывать колонку Цена товара/Добавить в корзину(выставить ширину)', configuration_description='Определите ширину колонки Цена товара/Добавить в корзину<br />Умолчание= 125' WHERE configuration_key='PRODUCTS_LIST_PRICE_WIDTH';
UPDATE configuration SET configuration_title='Показывать фильтр Категория/Производитель (0=выкл; 1=вкл)', configuration_description='Показывать фильтр Категория/Производитель?' WHERE configuration_key='PRODUCT_LIST_FILTER';
UPDATE configuration SET configuration_title='Навигация на странице След/Пред (1-верх, 2-низ, 3-верх и низ)', configuration_description='Навигация на странице След/Пред - определите её месторасположение' WHERE configuration_key='PREV_NEXT_BAR_LOCATION';
UPDATE configuration SET configuration_title='Показывать порядок сортировки списка товаров по умолчанию', configuration_description='Порядок сортировки списка товаров по умолчанию?<br />Пример: 2a' WHERE configuration_key='PRODUCT_LISTING_DEFAULT_SORT_ORDER';
UPDATE configuration SET configuration_title='Показывать кнопку Добавить в корзину (0=выкл; 1=вкл)', configuration_description='Показывать кнопку Добавить в корзину?' WHERE configuration_key='PRODUCT_LIST_PRICE_BUY_NOW';
UPDATE configuration SET configuration_title='Показывать статус бокса с количеством нескольких товаров и кнопку Определить расположение', configuration_description='Показывать статус бокса с количеством нескольких товаров и кнопку Определить расположение?<br />0= выкл<br />1= Верх<br />2= Низ<br />3= Верх и низ' WHERE configuration_key='PRODUCT_LISTING_MULTIPLE_ADD_TO_CART';
UPDATE configuration SET configuration_title='Показывать описание товара', configuration_description='Показывать описание товара?<br /><br />0= выкл<br />150= оптимиальная длина, или введите максимальное количество символов для описания' WHERE configuration_key='PRODUCT_LIST_DESCRIPTION';
UPDATE configuration SET configuration_title='Порядок сортировки списка товаров с повышением', configuration_description='Порядок сортировки списка товаров с повышением?<br />Умолчание = +' WHERE configuration_key='PRODUCT_LIST_SORT_ORDER_ASCENDING';
UPDATE configuration SET configuration_title='Порядок сортировки списка товаров с понижением', configuration_description='Порядок сортировки списка товаров с понижением?<br />Умолчание = -' WHERE configuration_key='PRODUCT_LIST_SORT_ORDER_DESCENDING';
UPDATE configuration SET configuration_title='Проверять количество товара', configuration_description='Проверять количество товара в магазине' WHERE configuration_key='STOCK_CHECK';
UPDATE configuration SET configuration_title='Вычитать товар из магазина', configuration_description='Вычитать товар из его общего количества в магазине при его заказе или покупке' WHERE configuration_key='STOCK_LIMITED';
UPDATE configuration SET configuration_title='Разрешить контроль', configuration_description='Разрешить клиентам контроль заказа при нехватке товара в магазине' WHERE configuration_key='STOCK_ALLOW_CHECKOUT';
UPDATE configuration SET configuration_title='Помечать товар которого нет в магазине', configuration_description='Помечать товар которого нет в магазине что бы клиент знал об этом' WHERE configuration_key='STOCK_MARK_PRODUCT_OUT_OF_STOCK';
UPDATE configuration SET configuration_title='Уведомление о необходимости пополнения товаром магазина', configuration_description='Уведомлять когда количество товара в магазине будет очень низким' WHERE configuration_key='STOCK_REORDER_LEVEL';
UPDATE configuration SET configuration_title='Статус товара в магазине когда его количество будет ноль', configuration_description='Показывать товары которых нет в наличии<br /><br />0= статус товара - отключен<br />1= статус товара - включен' WHERE configuration_key='SHOW_PRODUCTS_SOLD_OUT';
UPDATE configuration SET configuration_title='Показывать изображение Продано вместо Добавить в корзину', configuration_description='Показывать изображение Продано вместо Добавить в корзину<br /><br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_PRODUCTS_SOLD_OUT_IMAGE';
UPDATE configuration SET configuration_title='Количество товара в десятках', configuration_description='Показывать какой количество осталось в десятках<br /><br />0= выкл' WHERE configuration_key='QUANTITY_DECIMALS';
UPDATE configuration SET configuration_title='Отображение корзины - кнопка или бокс удаления', configuration_description='Показывать в корзине кнопку или бокс удаления<br /><br />1= кнопка удаления<br />2= бокс удаления<br />3= и кнопка и бокс' WHERE configuration_key='SHOW_SHOPPING_CART_DELETE';
UPDATE configuration SET configuration_title='Отображение корзины - расположение кнопки обновления корзины', configuration_description='Показывать в корзине кнопку обновления корзины с расположением:<br /><br />1= после бокса с количеством<br />2= под всеми товарами<br />3= и после бокса и под товарами' WHERE configuration_key='SHOW_SHOPPING_CART_UPDATE';
UPDATE configuration SET configuration_title='Хранить время создания страницы', configuration_description='Хранить время создания страницы' WHERE configuration_key='STORE_PAGE_PARSE_TIME';
UPDATE configuration SET configuration_title='Папка с логами', configuration_description='Папка и файл где хранится время создания страниц' WHERE configuration_key='STORE_PAGE_PARSE_TIME_LOG';
UPDATE configuration SET configuration_title='Формат даты лога', configuration_description='Формат даты' WHERE configuration_key='STORE_PARSE_DATE_TIME_FORMAT';
UPDATE configuration SET configuration_title='Показывать время создания страницы', configuration_description='Показывать время создания страницы внизу каждой из них<br />Вам не надо хранить время создания страниц для его отображения в магазине' WHERE configuration_key='DISPLAY_PAGE_PARSE_TIME';
UPDATE configuration SET configuration_title='Хранить запросы базы данных', configuration_description='Хранить запросы БД в файле с логом времени создания страниц (PHP4 только)' WHERE configuration_key='STORE_DB_TRANSACTIONS';
UPDATE configuration SET configuration_title='Способ отправки E-Mail', configuration_description='Определите способ, которым будут отправляться письма.<br />По умолчанию используется <strong>PHP</strong>, при этом для обработки используются встроенные функции PHP.<br />Если сервер работает под Windows или MacOS, нужно изменить это значение <strong>SMTP</strong>.<br /><br /><strong>SMTPAUTH</strong> нужно использовать только в том случае, если Ваш сервер требует SMTP авторизацию для отправки сообщений. Вам также необходимо сделать соответствующие настройки параметров доступа.<br /><br /><strong>sendmail</strong> используется для хостингов, работающих под linux/unix и использующих программу sendmail.<br /><strong>"sendmail-f"</strong> используется только для серверов, требующих использования параметра -f для отправки писем. Это параметр безопасности, который часто используются для предотвращения спуфинга. Может вызвать ошибку, если Ваш почтовый сервер не настроен для использования.<br /><br /><strong>Qmail</strong>используется для хостингов, работающих под linux/unix и использующих программу Qmail в качестве обработчика sendmail в /var/qmail/bin/sendmail.' WHERE configuration_key='EMAIL_TRANSPORT';
UPDATE configuration SET configuration_title='SMTP Email пользователь', configuration_description='Введите название почтового ящика (например me@mydomain.com) поддеживаемого вашим хостом' WHERE configuration_key='EMAIL_SMTPAUTH_MAILBOX';
UPDATE configuration SET configuration_title='SMTP Email пароль', configuration_description='Введите пароль для для почтового ящика поддерживаемого вашим хостом' WHERE configuration_key='EMAIL_SMTPAUTH_PASSWORD';
UPDATE configuration SET configuration_title='SMTP Email хост', configuration_description='Введите имя DNS вашего SMTP сервера.<br />Например: mail.mydomain.com<br />или 55.66.77.88' WHERE configuration_key='EMAIL_SMTPAUTH_MAIL_SERVER';
UPDATE configuration SET configuration_title='SMTP Email порт сервера', configuration_description='Введите номер IP порта с которым работает ваш SMTP сервер' WHERE configuration_key='EMAIL_SMTPAUTH_MAIL_SERVER_PORT';
UPDATE configuration SET configuration_title='Конвертирование валюты в текст при отправке на email', configuration_description='Как преобразовывать символы валют при отправке текста на email?<br />Умолчание = &amp;pound;,Ј:&amp;euro;,Ђ' WHERE configuration_key='CURRENCIES_TRANSLATIONS';
UPDATE configuration SET configuration_title='Разделитель строк в E-Mail', configuration_description='Используемая последовательность символов для разделения заголовков в письме.' WHERE configuration_key='EMAIL_LINEFEED';
UPDATE configuration SET configuration_title='Использовать MIME HTML при отправке Emails', configuration_description='Отправлять e-mails в HTML формате' WHERE configuration_key='EMAIL_USE_HTML';
UPDATE configuration SET configuration_title='Проверять E-Mail адрес через DNS', configuration_description='Проверять e-mail адрес через DNS сервер' WHERE configuration_key='ENTRY_EMAIL_ADDRESS_CHECK';
UPDATE configuration SET configuration_title='Отправлять E-Mails', configuration_description='Отправлять E-Mails?' WHERE configuration_key='SEND_EMAILS';
UPDATE configuration SET configuration_title='Включить архивацию Email?', configuration_description='Архивирует отправленные письма,если они хранятся в магазине' WHERE configuration_key='EMAIL_ARCHIVE';
UPDATE configuration SET configuration_title='E-Mail ошибки', configuration_description='Показывать ошибку если непроизошла отправка или email неправильный?' WHERE configuration_key='EMAIL_FRIENDLY_ERRORS';
UPDATE configuration SET configuration_title='Email адрес(отображается в обратной связи)', configuration_description='Email владельца магазина для отображения его клиентам' WHERE configuration_key='STORE_OWNER_EMAIL_ADDRESS';
UPDATE configuration SET configuration_title='Email адрес(отправка писем из магазина)', configuration_description='Email с которого по умолчанию отправляются письма из магазина' WHERE configuration_key='EMAIL_FROM';
UPDATE configuration SET configuration_title='Emails должны отправлятся с \"родного\" домена?', configuration_description='Должен ли почтовй сервер проверять с одного и того же домена отправляется почта из магазина?' WHERE configuration_key='EMAIL_SEND_MUST_BE_STORE';
UPDATE configuration SET configuration_title='Формат Email админа?', configuration_description='Выберите формат почты админа' WHERE configuration_key='ADMIN_EXTRA_EMAIL_FORMAT';
UPDATE configuration SET configuration_title='Отправлять копию письма о подтверждении заказа', configuration_description='Отправлять копию письма о подтверждении заказа на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_ORDER_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе создания профиля', configuration_description='Отправлять копию письма о статусе создания профиля<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма о создании профиля', configuration_description='Отправлять копию письма о создании профиля на следующие адресы: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе сообщения Рассказать знакомому', configuration_description='Отправлять копию письма о статусе сообщения Рассказать знакомому<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма о сообщении Рассказать знакомому', configuration_description='Отправлять копию письма о сообщении Рассказать знакомому на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе отправки дисконтной карточки клиенту', configuration_description='Отправлять копию письма о статусе отправки дисконтной карточки клиенту<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма об отправке дисконтной карточки клиенту', configuration_description='Отправлять копию письма об отправке дисконтной карточки клиенту на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_GV_CUSTOMER_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе отправке дисконтной карточки админу', configuration_description='Отправлять копию письма о статусе отправке дисконтной карточки админу<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_GV_ADMIN_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе отправке дисконтной карточки клиентами админу', configuration_description='Отправлять копию письма о статусе отправке дисконтной карточки клиентами админу на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_GV_ADMIN_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе дисконтной карточки админа', configuration_description='Отправлять копию письма о статусе дисконтной карточки админа<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе отправке дисконтной карточки админом клиентам', configuration_description='Отправлять копию письма о статусе отправке дисконтной карточки админом клиентам на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе заказов', configuration_description='Отправлять копию письма о статусе заказов<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять копию письма о статусе заказов', configuration_description='Отправлять копию письма о статусе заказов на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO';
UPDATE configuration SET configuration_title='Отправлять уведолмение о статусе проверки отзывов', configuration_description='Отправлять уведолмение о статусе проверки отзывов<br />0= выкл 1= вкл' WHERE configuration_key='SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO_STATUS';
UPDATE configuration SET configuration_title='Отправлять уведолмение о статусе проверки отзывов', configuration_description='Отправлять уведолмение о статусе проверки отзывов на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO';
UPDATE configuration SET configuration_title='Выпадающее меню с emails на странице Обратная связь', configuration_description='Выпадающее меню с emails на странице Обратная связь - введите адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='CONTACT_US_LIST';
UPDATE configuration SET configuration_title='Разрешить гостям советовать товар знакомым', configuration_description='Разрешить гостям советовать товар знакомым' WHERE configuration_key='ALLOW_GUEST_TO_TELL_A_FRIEND';
UPDATE configuration SET configuration_title='Обратная связь - показывать адрес и название магазина', configuration_description='Обратная связь - показывать адрес и название магазина<br />0= выкл 1= вкл' WHERE configuration_key='CONTACT_US_STORE_NAME_ADDRESS';
UPDATE configuration SET configuration_title='Отправлять уведолмения о маленьком количестве товара в магазине', configuration_description='Отправлять уведолмения о маленьком количестве товара в магазине<br />0= выкл<br />1= вкл' WHERE configuration_key='SEND_LOWSTOCK_EMAIL';
UPDATE configuration SET configuration_title='Отправлять уведолмения о маленьком количестве товара в магазине', configuration_description='Отправлять уведолмения о маленьком количестве товара в магазине на следующие адреса: имя 1 &lt;email@адрес1&gt;, имя 2 &lt;email@адрес2&gt;' WHERE configuration_key='SEND_EXTRA_LOW_STOCK_EMAILS_TO';
UPDATE configuration SET configuration_title='Показывть ссылку для отписки от рассылки?', configuration_description='Показывть ссылку для отписки от рассылки в боксе Информация?' WHERE configuration_key='SHOW_NEWSLETTER_UNSUBSCRIBE_LINK';
UPDATE configuration SET configuration_title='Отображение количества аудитории', configuration_description='При отображении аудитории сайта,надо ли отображать всех клиентов? <br /><em>(При включении данной функции произойдет постоянная и сильная нагрузка на базу данных)</em>' WHERE configuration_key='AUDIENCE_SELECT_DISPLAY_COUNTS';
UPDATE configuration SET configuration_title='Включить загрузки', configuration_description='Включить загрузку товаров(файлов)' WHERE configuration_key='DOWNLOAD_ENABLED';
UPDATE configuration SET configuration_title='Загрузка через перенаправление', configuration_description='Загрузка через перенаправление<br /><br />Внимание: Установите права на /pub 777 если включено перенаправление' WHERE configuration_key='DOWNLOAD_BY_REDIRECT';
UPDATE configuration SET configuration_title='Загрузка сегментами', configuration_description='Если загрузка через перенаправление отключена, и ваша настройка PHP memory_limit меньше 8 MB, вы должны включить данную функцию, в результате чего файл будет передаватся в ваш браузер или загрузчик маленькими сегментами<br /><br />Нет никакого эффекта от данной функции если включена загрузка через перенаправление' WHERE configuration_key='DOWNLOAD_IN_CHUNKS';
UPDATE configuration SET configuration_title='Время жизни ссылки (в днях)', configuration_description='Установите количество времени в днях когда ссылка будет доступна клиенту. 0 - без ограничений' WHERE configuration_key='DOWNLOAD_MAX_DAYS';
UPDATE configuration SET configuration_title='Количество допустимых загрузок', configuration_description='Количество допустимых загрузок для одного файла. 0 - загрузка запрещена' WHERE configuration_key='DOWNLOAD_MAX_COUNT';
UPDATE configuration SET configuration_title='Значение обновления статуса загрузки', configuration_description='Какой статус заказа сбрасывает Количество загрузок и Время жизни ссылки - Умолчание 4' WHERE configuration_key='DOWNLOADS_ORDERS_STATUS_UPDATED_VALUE';
UPDATE configuration SET configuration_title='Значение статуса заказа для загрузок >= пониженное значение', configuration_description='Значение статуса заказа для загрузокe - Умолчание >= 2' WHERE configuration_key='DOWNLOADS_CONTROLLER_ORDERS_STATUS';
UPDATE configuration SET configuration_title='Значение статуса заказа для загрузок <= повышенное значение', configuration_description='Значение статуса заказа для загрузок - умолчание <= 4' WHERE configuration_key='DOWNLOADS_CONTROLLER_ORDERS_STATUS_END';
UPDATE configuration SET configuration_title='Включить фактор цены', configuration_description='Включить фактор аттрибута цены' WHERE configuration_key='ATTRIBUTES_ENABLED_PRICE_FACTOR';
UPDATE configuration SET configuration_title='Включить дисконт на количество', configuration_description='Включить аттрибут дисконта на количество' WHERE configuration_key='ATTRIBUTES_ENABLED_QTY_PRICES';
UPDATE configuration SET configuration_title='Включить изображение аттрибута', configuration_description='Включить изображение аттрибута' WHERE configuration_key='ATTRIBUTES_ENABLED_IMAGES';
UPDATE configuration SET configuration_title='Включить цену на текст за слово и письмо', configuration_description='Включить аттрибут цены за слово и письмо' WHERE configuration_key='ATTRIBUTES_ENABLED_TEXT_PRICES';
UPDATE configuration SET configuration_title='Цена на текст - пробелы бесплатны', configuration_description='Цена на текст - пробелы бесплатны<br /><br />0= выкл 1= вкл' WHERE configuration_key='TEXT_SPACES_FREE';
UPDATE configuration SET configuration_title='Опциональный тип Только для чтения - пропускать для корзины', configuration_description='Когда товар использует аттрибуты Только для чтенич, кнопка Добавить в корзину должны быть или нет?<br />0= выкл<br />1= вкл' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_READONLY_IGNORED';
UPDATE configuration SET configuration_title='Включить GZip сжатие', configuration_description='0= выкл 1= вкл' WHERE configuration_key='GZIP_LEVEL';
UPDATE configuration SET configuration_title='Папка с сессиями', configuration_description='Если сессии хранятся в файле - определите для них папку' WHERE configuration_key='SESSION_WRITE_DIRECTORY';
UPDATE configuration SET configuration_title='Домен cookie', configuration_description='При выборе значения ДА - будет использоватся текущий домен при создании cookie(рекомендуется)' WHERE configuration_key='SESSION_USE_FQDN';
UPDATE configuration SET configuration_title='Разрешить использование cookie', configuration_description='Разрешить использование сессий при включенных cookie' WHERE configuration_key='SESSION_FORCE_COOKIE_USE';
UPDATE configuration SET configuration_title='Проверять ID сессии через SSL', configuration_description='Проверять ID сессии через SSL при каждом запросе к зашифрованной странице' WHERE configuration_key='SESSION_CHECK_SSL_SESSION_ID';
UPDATE configuration SET configuration_title='Проверять браузер', configuration_description='Проверять браузер клиента при каждом запросе к зашифрованной странице' WHERE configuration_key='SESSION_CHECK_USER_AGENT';
UPDATE configuration SET configuration_title='Проверять IP адрес', configuration_description='Проверять IP адрес клиента при каждом запросе к зашифрованной странице' WHERE configuration_key='SESSION_CHECK_IP_ADDRESS';
UPDATE configuration SET configuration_title='Запретить сессии для роботов', configuration_description='Запретить сессии для роботов' WHERE configuration_key='SESSION_BLOCK_SPIDERS';
UPDATE configuration SET configuration_title='Создавать новые сессии', configuration_description='Создавать новые сессии для генерирования нового ID сессии когда клиент входит или создает профиль (PHP >=4.1 необходим).' WHERE configuration_key='SESSION_RECREATE';
UPDATE configuration SET configuration_title='Статус преобразования IP к хосту', configuration_description='Преобразование IP к хосту' WHERE configuration_key='SESSION_IP_TO_HOST_ADDRESS';
UPDATE configuration SET configuration_title='Длина кода подтверждения', configuration_description='Длина кода подтверждения' WHERE configuration_key='SECURITY_CODE_LENGTH';
UPDATE configuration SET configuration_title='Статус по умолчанию для заказов с нулевым балансом', configuration_description='Статус по умолчанию для заказов с нулевым балансом' WHERE configuration_key='DEFAULT_ZERO_BALANCE_ORDERS_STATUS_ID';
UPDATE configuration SET configuration_title='Новая дисконтная карточка ID#', configuration_description='Выберите карточку' WHERE configuration_key='NEW_SIGNUP_DISCOUNT_COUPON';
UPDATE configuration SET configuration_title='Количество дисконтных карточек', configuration_description='Введите количество - соответствие 10 карточек к 10 долларам' WHERE configuration_key='NEW_SIGNUP_GIFT_VOUCHER_AMOUNT';
UPDATE configuration SET configuration_title='Максимальное количество дисконтных карточек на страницу', configuration_description='Максимальное количество дисконтных карточек на страницу' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS';
UPDATE configuration SET configuration_title='Максимальное количество отчетов о дисконтных карточках на страницу', configuration_description='Максимальное количество отчетов о дисконтных карточках на страницу' WHERE configuration_key='MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS_REPORTS';
UPDATE configuration SET configuration_title='Статус кредитной карточки - VISA', configuration_description='Поддержка VISA 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_VISA';
UPDATE configuration SET configuration_title='Статус кредитной карточки - MasterCard', configuration_description='Поддержка MasterCard 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_MC';
UPDATE configuration SET configuration_title='Статус кредитной карточки - AmericanExpress', configuration_description='Поддержка AmericanExpress 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_AMEX';
UPDATE configuration SET configuration_title='Статус кредитной карточки - Diners Club', configuration_description='Поддержка Diners Club 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_DINERS_CLUB';
UPDATE configuration SET configuration_title='Статус кредитной карточки - Discover Card', configuration_description='Поддержка Discover Card 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_DISCOVER';
UPDATE configuration SET configuration_title='Статус кредитной карточки - JCB', configuration_description='Поддержка JCB 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_JCB';
UPDATE configuration SET configuration_title='Статус кредитной карточки - AUSTRALIAN BANKCARD', configuration_description='Поддержка AUSTRALIAN BANKCARD 0= выкл 1= вкл' WHERE configuration_key='CC_ENABLED_AUSTRALIAN_BANKCARD';
UPDATE configuration SET configuration_title='Статус кредитной карточки - показывать при оплате', configuration_description='Как показывать поддерживаемые кредитные карты на странице оплаты?<br />0= выкл<br />1= как текст<br />2= как изображения' WHERE configuration_key='SHOW_ACCEPTED_CREDIT_CARDS';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_SORT_ORDER';
UPDATE configuration SET configuration_title='Заказы в очереди', configuration_description='Помещать заказы или покупки сделанные с помощью дисконтной карточки в очередь?' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_QUEUE';
UPDATE configuration SET configuration_title='Включая отгрузку', configuration_description='Включая отгрузку в подсчете общей стоимости товара' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_INC_SHIPPING';
UPDATE configuration SET configuration_title='Включая налог', configuration_description='Включая налог в подсчете общей стоимости товара' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_INC_TAX';
UPDATE configuration SET configuration_title='Пересчитывать налог', configuration_description='Пересчитывать налог' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_CALC_TAX';
UPDATE configuration SET configuration_title='Класс налогов', configuration_description='Использовать данный класс налогов когда дисконтная карточка рассматривается как кредитное условие' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_TAX_CLASS';
UPDATE configuration SET configuration_title='Кредит включая налог', configuration_description='Добавить налог к выбранной дисконтной карточке когда кредит передается клиенту' WHERE configuration_key='MODULE_ORDER_TOTAL_GV_CREDIT_TAX';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER';
UPDATE configuration SET configuration_title='Разрешить заказы с низкой стоимостью', configuration_description='Разрешить заказы с низкой стоимостью?' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE';
UPDATE configuration SET configuration_title='Заказы с низкой стоимостью', configuration_description='Добавить заказы с низкой стоимость к заказам стоимость которых ниже данной' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER';
UPDATE configuration SET configuration_title='Стоимость заказа', configuration_description='Для вычисления процента - введите % Пример: 10%<br />Для маленького количества введите - пример: 5 для $5.00' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_FEE';
UPDATE configuration SET configuration_title='Присоединять заказы с низкой стоимость к отправляемым заказам', configuration_description='Присоединять заказы с низкой стоимость к отправляемым заказам' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION';
UPDATE configuration SET configuration_title='Класс налогов', configuration_description='Использовать данный налоговы класс на заказ с маленькой стоимостью' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS';
UPDATE configuration SET configuration_title='Нет заказов с маленькой стоимостью для виртуальных товаров', configuration_description='Нет заказов с маленькой стоимостью для виртуальных товаров' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_VIRTUAL';
UPDATE configuration SET configuration_title='Нет заказов с маленькой стоимостью для дисконтных карточек', configuration_description='Нет заказов с маленькой стоимостью для дисконтных карточек' WHERE configuration_key='MODULE_ORDER_TOTAL_LOWORDERFEE_GV';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_SHIPPING_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER';
UPDATE configuration SET configuration_title='Включить бесплатную отгрузку', configuration_description='Включить бесплатную отгрузку?' WHERE configuration_key='MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING';
UPDATE configuration SET configuration_title='Бесплатная отгрузка для заказов с количеством более ...', configuration_description='Бесплатная отгрузка для заказов с количеством превышающим введеные данные' WHERE configuration_key='MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER';
UPDATE configuration SET configuration_title='Бесплатная отгрузка для отправлемых заказов', configuration_description='Бесплатная отгрузка для отправлемых заказов' WHERE configuration_key='MODULE_ORDER_TOTAL_SHIPPING_DESTINATION';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_SUBTOTAL_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_TAX_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_TAX_SORT_ORDER';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_TOTAL_STATUS';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER';
UPDATE configuration SET configuration_title='Класс налогов', configuration_description='Использовать данный налоговый класс когда дисконтная карточка рассматривается как кредитное условие' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_TAX_CLASS';
UPDATE configuration SET configuration_title='Включая налог', configuration_description='Включая налог в подсчете общей стоимости товара' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_INC_TAX';
UPDATE configuration SET configuration_title='Порядок сортировки', configuration_description='Порядок сортировки' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_SORT_ORDER';
UPDATE configuration SET configuration_title='Включая отгрузку', configuration_description='Включая отгрузку в подсчете общей стоимости товара' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING';
UPDATE configuration SET configuration_title='Данный модуль установлен', configuration_description='' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_STATUS';
UPDATE configuration SET configuration_title='Пересчитывать налог', configuration_description='Пересчитывать налог' WHERE configuration_key='MODULE_ORDER_TOTAL_COUPON_CALC_TAX';
UPDATE configuration SET configuration_title='Статус админ-демо', configuration_description='Включить статус админ-демо?<br />0= выкл 1= вкл' WHERE configuration_key='ADMIN_DEMO';
UPDATE configuration SET configuration_title='Тип выбора опций товара', configuration_description='Количество выбираемых типов опции товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_SELECT';
UPDATE configuration SET configuration_title='Тип опций текстового товара', configuration_description='Количество значений типов опции текстового товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_TEXT';
UPDATE configuration SET configuration_title='Кнопка типа опций товара', configuration_description='Количество значений кнопки для типа опций товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_RADIO';
UPDATE configuration SET configuration_title='Ьокс типа опций товара', configuration_description='Количество значений бокса для типа опций товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_CHECKBOX';
UPDATE configuration SET configuration_title='Тип опций виртуального товара', configuration_description='Количество значений для типа опций виртуального товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_FILE';
UPDATE configuration SET configuration_title='ID для текста и опциональных значений виртуальных товаров', configuration_description='Количество значений для products_options_values_id используемого текстом и аттрибутами файлов' WHERE configuration_key='PRODUCTS_OPTIONS_VALUES_TEXT_ID';
UPDATE configuration SET configuration_title='Загрузить префикс', configuration_description='Префикс используется для дифференциирования между загрузкой опций и другими опциями' WHERE configuration_key='UPLOAD_PREFIX';
UPDATE configuration SET configuration_title='Текстовый префикс', configuration_description='Префикс используется для дифференциирования между текстовыми опциями и другими опциями' WHERE configuration_key='TEXT_PREFIX';
UPDATE configuration SET configuration_title='Тип опций только для чтения', configuration_description='Количество значений для типа опций виртуального товара' WHERE configuration_key='PRODUCTS_OPTIONS_TYPE_READONLY';
UPDATE configuration SET configuration_title='Информация о товарах - порядок сортировки опциональных названий для товаров', configuration_description='Информация о товарах - порядок сортировки опциональных названий для товаров<br />0= порядок сортировки, опциональное название<br />1= опциональное название' WHERE configuration_key='PRODUCTS_OPTIONS_SORT_ORDER';
UPDATE configuration SET configuration_title='Информация о товарах - порядок сортировки аттрибутов опциональных значениц для товаров', configuration_description='Информация о товарах - порядок сортировки аттрибутов опциональных значениц для товаров<br />0= порядок сортировки, цена<br />1= порядок сортировки, опциональное значение названия' WHERE configuration_key='PRODUCTS_OPTIONS_SORT_BY_PRICE';
UPDATE configuration SET configuration_title='Информация о товаре - показывать опциональное значение названия под изображением аттрибута', configuration_description='Информация о товаре - показывать опциональное значение названия под изображением аттрибута?<br />0= выкл 1= вкл' WHERE configuration_key='PRODUCT_IMAGES_ATTRIBUTES_NAMES';
UPDATE configuration SET configuration_title='Информация о товаре - показывать статус сохраненных дисконтов', configuration_description='Информация о товаре - показывать статус сохраненных дисконтов?<br />0= выкл 1= вкл' WHERE configuration_key='SHOW_SALE_DISCOUNT_STATUS';
UPDATE configuration SET configuration_title='Информация о товаре - показывать статус сохраненных дисконтов в долларах или процентах', configuration_description='Информация о товаре - показывать статус сохраненных дисконтов как:<br />1= % выкл 2= $ количество выкл' WHERE configuration_key='SHOW_SALE_DISCOUNT';
UPDATE configuration SET configuration_title='Информация о товаре - показывать статус сохраненных дисконтов в десятичных процентах', configuration_description='Информация о товаре - показывать статус сохраненных дисконтов в десятичных процентах?:<br />Умолчание= 0' WHERE configuration_key='SHOW_SALE_DISCOUNT_DECIMALS';
UPDATE configuration SET configuration_title='Информация о товаре - изображение бесплатного товара или текст', configuration_description='Информация о товаре - изображение бесплатного товара или текст<br />0= текст<br />1= изображение' WHERE configuration_key='OTHER_IMAGE_PRICE_IS_FREE_ON';
UPDATE configuration SET configuration_title='Информация о товаре - изображение товара при запросе цены или текст', configuration_description='Информация о товаре - изображение товара при запросе цены или текст<br />0= текст<br />1= изображение' WHERE configuration_key='PRODUCTS_PRICE_IS_CALL_IMAGE_ON';
UPDATE configuration SET configuration_title='Бокс статуса количества товаров - добавление нового товара', configuration_description='Какое умолчание должно быть у бокса статуса количества товаров при добавлении нового товара?<br /><br />0= выкл<br />1= вкл' WHERE configuration_key='PRODUCTS_QTY_BOX_STATUS';
UPDATE configuration SET configuration_title='Запрос на одобрение отзыва о товаре', configuration_description='Необходим ли запрос на одобрение отзыва о товаре?<br />0= выкл 1= вкл' WHERE configuration_key='REVIEWS_APPROVAL';
UPDATE configuration SET configuration_title='Мета теги - включая цену товара в названии', configuration_description='Мета теги - включая цену товара в названии?<br /><br />0= выкл 1= вкл' WHERE configuration_key='META_TAG_INCLUDE_PRICE';
UPDATE configuration SET configuration_title='Максимальная длина генерируемого описания мета тегами?', configuration_description='Максимальная длина генерируемого описания мета тегами (в словах) Умолчание 50:' WHERE configuration_key='MAX_META_TAG_DESCRIPTION_LENGTH';
UPDATE configuration SET configuration_title='Колонка уже приобретенные товары на строку', configuration_description='Количество товаров в колонке уже приобретенные товары на строку<br />0= выкл или порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_COLUMNS_ALSO_PURCHASED_PRODUCTS';
UPDATE configuration SET configuration_title='Расположение навигации Предыдущая-Следующая', configuration_description='Расположение навигации Предыдущая-Следующая<br />0= выкл<br />1= верх<br />2= низ<br />3= верх и низ' WHERE configuration_key='PRODUCT_INFO_PREVIOUS_NEXT';
UPDATE configuration SET configuration_title='Предыдущий и следующий - порядок сортировки', configuration_description='Сортировка товаров<br />0= по ID товара<br />1= названию товара<br />2= модели товара<br />3= цене и названию товара<br />4= цене и модели товара<br />5= названию и модели товара<br />6= порядок сортировки товаров' WHERE configuration_key='PRODUCT_INFO_PREVIOUS_NEXT_SORT';
UPDATE configuration SET configuration_title='Предыдущий и следующий - статус кнопок и изображений', configuration_description='Настройки кнопок и изображений товара:<br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_PREVIOUS_NEXT_STATUS';
UPDATE configuration SET configuration_title='Предыдущий и следующий - настройки кнопок и изображений', configuration_description='Предыдущий и следующий - настройки кнопок и изображений<br />0= только кнопка<br />1= кнопка и изображение товара<br />2= изображение товара' WHERE configuration_key='SHOW_PREVIOUS_NEXT_IMAGES';
UPDATE configuration SET configuration_title='Предыдущий и следующий - ширина изображения?', configuration_description='Ширина изображения следующий и Предыдущий?' WHERE configuration_key='PREVIOUS_NEXT_IMAGE_WIDTH';
UPDATE configuration SET configuration_title='Предыдущий и следующий - высота изображения?', configuration_description='Высота изображения следующий и Предыдущий?' WHERE configuration_key='PREVIOUS_NEXT_IMAGE_HEIGHT';
UPDATE configuration SET configuration_title='Предыдущий и следующий - навигация включая категории', configuration_description='Изображени категории и название позиционируется над навигацией Следующий и Предыдущий<br />0= выкл<br />1= позиция слева<br />2= позиция по центру<br />3= позиция справа' WHERE configuration_key='PRODUCT_INFO_CATEGORIES';
UPDATE configuration SET configuration_title='Ширина колонки - левые боксы', configuration_description='Ширина колонки - левые боксы<br />в пикселях<br />Умолчание = 150px' WHERE configuration_key='BOX_WIDTH_LEFT';
UPDATE configuration SET configuration_title='Ширина колонки - правые боксы', configuration_description='Ширина колонки - правые боксы<br />в пикселях<br />Умолчание = 150px' WHERE configuration_key='BOX_WIDTH_RIGHT';
UPDATE configuration SET configuration_title='Разделитель в навигации в шапке магазина', configuration_description='Введите разделительный символ для навигации в шапке магазина<br />Умолчание = &amp;nbsp;::&amp;nbsp;' WHERE configuration_key='BREAD_CRUMBS_SEPARATOR';
UPDATE configuration SET configuration_title='Статус ссылок в шапке магазина', configuration_description='Включить ссылки в шапке магазина?<br />0= выкл<br />1= вкл' WHERE configuration_key='DEFINE_BREADCRUMB_STATUS';
UPDATE configuration SET configuration_title='Лучшие продажы - количество пробелов', configuration_description='Лучшие продажы - количество пробелов и символ?<br />Умолчание = &amp;nbsp;' WHERE configuration_key='BEST_SELLERS_FILLER';
UPDATE configuration SET configuration_title='Лучшие продажи - укорачивание названия товара', configuration_description='Какой длины должно быть название товара после чего оно будет укорочено?<br />Умолчание = 35' WHERE configuration_key='BEST_SELLERS_TRUNCATE';
UPDATE configuration SET configuration_title='Лучшие продажи - укороченные названия товаров поддерживаются ...', configuration_description='Лучшие продажи - укороченные названия товаров поддерживаются<br />Умолчание = да' WHERE configuration_key='BEST_SELLERS_TRUNCATE_MORE';
UPDATE configuration SET configuration_title='Бокс категорий - показывать ссылки на скидки', configuration_description='Бокс категорий - показывать ссылки на скидки' WHERE configuration_key='SHOW_CATEGORIES_BOX_SPECIALS';
UPDATE configuration SET configuration_title='Бокс категорий - показывать ссылки на новые товары', configuration_description='Бокс категорий - показывать ссылки на новые товары' WHERE configuration_key='SHOW_CATEGORIES_BOX_PRODUCTS_NEW';
UPDATE configuration SET configuration_title='Бокс статуса корзины', configuration_description='Показывать бокс корзины<br />0= всегда<br />1= когда в ней товар<br />2= когда есть товар,но не тогда,когда она просматривается' WHERE configuration_key='SHOW_SHOPPING_CART_BOX_STATUS';
UPDATE configuration SET configuration_title='Бокс категорий - показывать ссылку на ожидаемые товары', configuration_description='Бокс категорий - показывать ссылку на ожидаемые товары' WHERE configuration_key='SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Бокс категорий - показывать ссылки на все товары', configuration_description='Бокс категорий - показывать ссылки на все товары' WHERE configuration_key='SHOW_CATEGORIES_BOX_PRODUCTS_ALL';
UPDATE configuration SET configuration_title='Статус левой колонки - глобальный', configuration_description='Каким должен быть статус левой колонки?<br />0= выкл<br />1= вкл' WHERE configuration_key='COLUMN_LEFT_STATUS';
UPDATE configuration SET configuration_title='Статус правой колонки - глобальный', configuration_description='Каким должен быть статус правой колонки?<br />0= выкл<br />1= вкл' WHERE configuration_key='COLUMN_RIGHT_STATUS';
UPDATE configuration SET configuration_title='Ширина левой колонки', configuration_description='Ширина левой колонки<br />в пикселях<br />Умолчание = 150px' WHERE configuration_key='COLUMN_WIDTH_LEFT';
UPDATE configuration SET configuration_title='Ширина правой колонки', configuration_description='Ширина правой колонки<br />в пикселях<br />Умолчание = 150px' WHERE configuration_key='COLUMN_WIDTH_RIGHT';
UPDATE configuration SET configuration_title='Разделитель категорий между ссылками статуса', configuration_description='Показывать разделитель категорий между названиями категорий и ссылками?<br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_CATEGORIES_SEPARATOR_LINK';
UPDATE configuration SET configuration_title='Разделитель категорий между названием категории и счетчиком', configuration_description='Каким должен быть разделитель категорий между названием категории и счетчиком?<br />Умолчание = -&amp;gt;' WHERE configuration_key='CATEGORIES_SEPARATOR';
UPDATE configuration SET configuration_title='Разделитель категорий между названием категории и и подкатегориями', configuration_description='Каким должен быть разделитель категорий между названием категории и и подкатегориями?<br />Умолчание = |_&amp;nbsp;' WHERE configuration_key='CATEGORIES_SEPARATOR_SUBS';
UPDATE configuration SET configuration_title='Префикс счетчика товаров в категориях', configuration_description='Префикс счетчика товаров в категориях<br />Умолчание= (' WHERE configuration_key='CATEGORIES_COUNT_PREFIX';
UPDATE configuration SET configuration_title='Суффикс счетчика товаров в категориях', configuration_description='Суффикс счетчика товаров в категориях<br />Умолчание= )' WHERE configuration_key='CATEGORIES_COUNT_SUFFIX';
UPDATE configuration SET configuration_title='Разделитель категорий и подкатегорий', configuration_description='Разделитель категорий и подкатегорий<br />Умолчание= &nbsp;&nbsp;' WHERE configuration_key='CATEGORIES_SUBCATEGORIES_INDENT';
UPDATE configuration SET configuration_title='Категории без товара', configuration_description='Показывать категории без товара?<br />0= выкл<br />1= вкл' WHERE configuration_key='CATEGORIES_COUNT_ZERO';
UPDATE configuration SET configuration_title='Разделение бокса категорий', configuration_description='Разделять бокс категорий для отображения типа товара' WHERE configuration_key='CATEGORIES_SPLIT_DISPLAY';
UPDATE configuration SET configuration_title='Коризна - показывать итог', configuration_description='Показывать итог под корзиной?<br />0= выкл<br />1= вкл: вес и количество товара<br />2= вкл: вес и количество товара, но без веса если он равен 0<br />3= вкл: количество товара' WHERE configuration_key='SHOW_TOTALS_IN_CART';
UPDATE configuration SET configuration_title='Приветствие клиенту - показывается на главной', configuration_description='Показывать приветствие?<br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_CUSTOMER_GREETING';
UPDATE configuration SET configuration_title='Категории - всегда показывать на главной', configuration_description='Всегда показывать категории на главной<br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_CATEGORIES_ALWAYS';
UPDATE configuration SET configuration_title='Главная - загружается с категориями', configuration_description='0= категориями верхних уровней<br />или введите ID# категории' WHERE configuration_key='CATEGORIES_START_MAIN';
UPDATE configuration SET configuration_title='Категории - всегда открыты для показа подкатегорий', configuration_description='Всегда показывать категории и подкатегории<br />0= выкл, показывать только категории<br />1= вкл, показывать категории и подкатегории' WHERE configuration_key='SHOW_CATEGORIES_SUBCATEGORIES_ALWAYS';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 1(верх)', configuration_description='Какие группы баннеров вы хотите использовать в позиции 1?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET1';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 2(верх)', configuration_description='Какие группы баннеров вы хотите использовать в позиции 2?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET2';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 3(верх)', configuration_description='Какие группы баннеров вы хотите использовать в позиции 3?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET3';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 1(низ)', configuration_description='Какие группы баннеров вы хотите использовать в позиции1?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET4';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 2(низ)', configuration_description='Какие группы баннеров вы хотите использовать в позиции 2?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET5';
UPDATE configuration SET configuration_title='Группа показа баннеров - в позиции 3(низ)', configuration_description='Какие группы баннеров вы хотите использовать в позиции 3?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET6';
UPDATE configuration SET configuration_title='Группа показа баннеров - боковой бокс 1', configuration_description='Какие группы баннеров вы хотите использовать в боковых боксах?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET7';
UPDATE configuration SET configuration_title='Группа показа баннеров - боковой бокс 2', configuration_description='Какие группы баннеров вы хотите использовать в боковых боксах?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET8';
UPDATE configuration SET configuration_title='Группа показа баннеров - боковой бокс 1 и 2', configuration_description='Какие группы баннеров вы хотите использовать в боковых боксах 1 и 2?' WHERE configuration_key='SHOW_BANNERS_GROUP_SET_ALL';
UPDATE configuration SET configuration_title='Низ - показывать IP адрес', configuration_description='Показывать IP адрес клиента внизу страницы<br />0= выкл<br />1= вкл' WHERE configuration_key='SHOW_FOOTER_IP';
UPDATE configuration SET configuration_title='Количество скидок на товар - сколько добавлять чистых скидок?', configuration_description='Сколько добавлять чистых скидок к цене товара?' WHERE configuration_key='DISCOUNT_QTY_ADD';
UPDATE configuration SET configuration_title='Количество скидок на товар - сколько отображать на одну строку?', configuration_description='Количество скидок на товар - сколько отображать на одну строку?' WHERE configuration_key='DISCOUNT_QUANTITY_PRICES_COLUMN';
UPDATE configuration SET configuration_title='Порядок сортировки Категорий/Товаров', configuration_description='Порядок сортировки Категорий/Товаров<br />0= по названию категории и товара<br />1= по названию товара<br />2= по модели товара<br />3= по количеству(большему) и названию товара<br />4= по количеству(меньшему) и названию товара<br />5= по цене(большей) и названию товара<br />6= по цене(меньшей) и названию товара' WHERE configuration_key='CATEGORIES_PRODUCTS_SORT_ORDER';
UPDATE configuration SET configuration_title='Глобальные возможности Добавить, Копировать и Удалить плюс опциональные названия и имена', configuration_description='Статус глобальных возможностей Добавить, Копировать и Удалить плюс опциональные названия и имена<br />0= спрятать<br />1= показать<br />2= модель товара' WHERE configuration_key='OPTION_NAMES_VALUES_GLOBAL_STATUS';
UPDATE configuration SET configuration_title='Поперечное меню', configuration_description='Это дает возможность отображать категории как меню под шапкой<br />0= прятать список категорий под шапкой<br />1= показывать список категорий под шапкой' WHERE configuration_key='CATEGORIES_TABS_STATUS';
UPDATE configuration SET configuration_title='Карта сайта - включая ссылки из профиля?', configuration_description='Карта сайта - включая ссылки из профиля?<br />Умолчание: нет' WHERE configuration_key='SHOW_ACCOUNT_LINKS_ON_SITE_MAP';
UPDATE configuration SET configuration_title='Пропускать категории с одним товаром', configuration_description='При пропуске категории с одним товаром,клиент при клике на нее сразу попадает на страницу с данной единицой товара<br />Умолчание: да' WHERE configuration_key='SKIP_SINGLE_PRODUCT_CATEGORIES';
UPDATE configuration SET configuration_title='CSS кнопки', configuration_description='CSS кнопки<br />Использовать CSS кнопки вместо изображений (GIF/JPG)?<br />Стили кнопок должны быть настроены в css файле магазина' WHERE configuration_key='IMAGE_USE_CSS_BUTTONS';
UPDATE configuration SET configuration_title='Выключение магазина', configuration_description='Выключение магазина' WHERE configuration_key='DOWN_FOR_MAINTENANCE';
UPDATE configuration SET configuration_title='Выключение магазина: имя файла', configuration_description='Выключение магазина: имя файла<br />Умолчание=down_for_maintenance' WHERE configuration_key='DOWN_FOR_MAINTENANCE_FILENAME';
UPDATE configuration SET configuration_title='Выключение магазина: скрывать верх', configuration_description='Выключение магазина: скрывать верх' WHERE configuration_key='DOWN_FOR_MAINTENANCE_HEADER_OFF';
UPDATE configuration SET configuration_title='Выключение магазина: скрывать левую колонку', configuration_description='Выключение магазина: скрывать левую колонку' WHERE configuration_key='DOWN_FOR_MAINTENANCE_COLUMN_LEFT_OFF';
UPDATE configuration SET configuration_title='Выключение магазина: скрывать правую колонку', configuration_description='Выключение магазина: скрывать правую колонку' WHERE configuration_key='DOWN_FOR_MAINTENANCE_COLUMN_RIGHT_OFF';
UPDATE configuration SET configuration_title='Выключение магазина: скрывать низ', configuration_description='Выключение магазина: скрывать низ' WHERE configuration_key='DOWN_FOR_MAINTENANCE_FOOTER_OFF';
UPDATE configuration SET configuration_title='Выключение магазина: скрывать цены', configuration_description='Выключение магазина: скрывать цены' WHERE configuration_key='DOWN_FOR_MAINTENANCE_PRICES_OFF';
UPDATE configuration SET configuration_title='Выключение магазина (исключая данный IP)', configuration_description='Данный IP будет иметь доступ к магазину в период его выключения' WHERE configuration_key='EXCLUDE_ADMIN_IP_FOR_MAINTENANCE';
UPDATE configuration SET configuration_title='Уведомление клиентов перед выключением магазина', configuration_description='Уведомлять клиентов перед выключением магазина' WHERE configuration_key='WARN_BEFORE_DOWN_FOR_MAINTENANCE';
UPDATE configuration SET configuration_title='Дата и время уведомления', configuration_description='Дата и время уведомления перед выключением' WHERE configuration_key='PERIOD_BEFORE_DOWN_FOR_MAINTENANCE';
UPDATE configuration SET configuration_title='Показывать когда магазин был выключен', configuration_description='Показывать когда магазин был выключен' WHERE configuration_key='DISPLAY_MAINTENANCE_TIME';
UPDATE configuration SET configuration_title='Показывать период выключения магазина', configuration_description='Показывать период выключения магазина' WHERE configuration_key='DISPLAY_MAINTENANCE_PERIOD';
UPDATE configuration SET configuration_title='Период выключения магазина', configuration_description='Период выключения магазина(чч:мм)' WHERE configuration_key='TEXT_MAINTENANCE_PERIOD_TIME';
UPDATE configuration SET configuration_title='Условия использования в процессе контроля заказа', configuration_description='Показывать условия использования в процессе контроля заказа' WHERE configuration_key='DISPLAY_CONDITIONS_ON_CHECKOUT';
UPDATE configuration SET configuration_title='Уведомление о секретности в процессе контроля заказа', configuration_description='Уведомление о секретности в процессе контроля заказа' WHERE configuration_key='DISPLAY_PRIVACY_CONDITIONS';
UPDATE configuration SET configuration_title='Показывать изображение товара', configuration_description='Показывать изображение товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_IMAGE';
UPDATE configuration SET configuration_title='Показывать количество товара', configuration_description='Показывать количество товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_QUANTITY';
UPDATE configuration SET configuration_title='Показывать кнопку купить сейчас', configuration_description='Показывать кнопку купить сейчас<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_BUY_NOW';
UPDATE configuration SET configuration_title='Показывать название товара', configuration_description='Показывать название товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_NAME';
UPDATE configuration SET configuration_title='Показывать модель товара', configuration_description='Показывать модель товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_MODEL';
UPDATE configuration SET configuration_title='Показывать производителя товара', configuration_description='Показывать производителя товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_MANUFACTURER';
UPDATE configuration SET configuration_title='Показывать цену товара', configuration_description='Показывать цену товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_PRICE';
UPDATE configuration SET configuration_title='Показывать вес товара', configuration_description='Показывать вес товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_WEIGHT';
UPDATE configuration SET configuration_title='Показывать дату добавления товара', configuration_description='Показывать дату добавления товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_NEW_LIST_DATE_ADDED';
UPDATE configuration SET configuration_title='Показывать описание товара', configuration_description='Показывать описание товара - первые 150 символов?<br />0= выкл<br />1= вкл' WHERE configuration_key='PRODUCT_NEW_LIST_DESCRIPTION';
UPDATE configuration SET configuration_title='Показывать товар - порядок сортировки по умолчанию', configuration_description='Какой порядок сортировки должен быть для новых товаров?<br />Умолчание= 6 для нового товара<br /><br />1= название товара<br />2= описание товара<br />3= цена от низкой до высокой<br />4= цена с высокой до низкой<br />5= модель<br />6= дата добавления и описание<br />7= дата добавления<br />8= порядок сортировки' WHERE configuration_key='PRODUCT_NEW_LIST_SORT_DEFAULT';
UPDATE configuration SET configuration_title='ID для новой группы товаров', configuration_description='ID для новой группы товаров' WHERE configuration_key='PRODUCT_NEW_LIST_GROUP_ID';
UPDATE configuration SET configuration_title='Показывать бокс с количеством нескольких товаров и определить расположение кнопки', configuration_description='Показывать бокс с количеством нескольких товаров и определить расположение кнопки?<br />0= выкл<br />1= верх<br />2= низ<br />3= верх и низ' WHERE configuration_key='PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART';
UPDATE configuration SET configuration_title='Показывать изображение товара', configuration_description='Показывать изображение товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_IMAGE';
UPDATE configuration SET configuration_title='Показывать количество товара', configuration_description='Показывать количество товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_QUANTITY';
UPDATE configuration SET configuration_title='Показывать кнопку купить сейчас', configuration_description='Показывать кнопку купить сейчас?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_BUY_NOW';
UPDATE configuration SET configuration_title='Показывать название товара', configuration_description='Показывать название товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_NAME';
UPDATE configuration SET configuration_title='Показывать модель товара', configuration_description='Показывать модель товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_MODEL';
UPDATE configuration SET configuration_title='Показывать производителя товара', configuration_description='Показывать производителя товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_MANUFACTURER';
UPDATE configuration SET configuration_title='Показывать цену товара', configuration_description='Показывать цену товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_PRICE';
UPDATE configuration SET configuration_title='Показывать вес товара', configuration_description='Показывать вес товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_WEIGHT';
UPDATE configuration SET configuration_title='Показывать дату добавления товара', configuration_description='Показывать дату добавления товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_FEATURED_LIST_DATE_ADDED';
UPDATE configuration SET configuration_title='Показывать описание товара', configuration_description='Показывать описание товара - первые 150 символов?' WHERE configuration_key='PRODUCT_FEATURED_LIST_DESCRIPTION';
UPDATE configuration SET configuration_title='Показывать порядок сортировки товаров', configuration_description='Какой показывать порядок сортировки товаров?<br />Умолчание= 1 название товара<br /><br />1= название товара<br />2= описание названия товара<br />3= цена от низкой до высокой<br />4= цена с высокой до низкой<br />5= модель<br />6= описание даты добавления<br />7= дата добавления<br />8= порядок сортировки' WHERE configuration_key='PRODUCT_FEATURED_LIST_SORT_DEFAULT';
UPDATE configuration SET configuration_title='ID группы ожидаемых товаров', configuration_description='ID группы ожидаемых товаров' WHERE configuration_key='PRODUCT_FEATURED_LIST_GROUP_ID';
UPDATE configuration SET configuration_title='Показывать бокс с количеством нескольких товаров и определить расположение кнопки', configuration_description='Показывать бокс с количеством нескольких товаров и определить расположение кнопки?<br />0= выкл<br />1= верх<br />2= низ<br />3= верх и низ' WHERE configuration_key='PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART';
UPDATE configuration SET configuration_title='Показывать изображение товара', configuration_description='Показывать изображение товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_IMAGE';
UPDATE configuration SET configuration_title='Показывать количество товара', configuration_description='Показывать количество товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_QUANTITY';
UPDATE configuration SET configuration_title='Показывать кнопку купить сейчас', configuration_description='Показывать кнопку купить сейчас?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_BUY_NOW';
UPDATE configuration SET configuration_title='Показывать название товара', configuration_description='Показывать название товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_NAME';
UPDATE configuration SET configuration_title='Показывать модель товара', configuration_description='Показывать модель товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_MODEL';
UPDATE configuration SET configuration_title='Показывать производителя товара', configuration_description='Показывать производителя товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_MANUFACTURER';
UPDATE configuration SET configuration_title='Показывать цену товара', configuration_description='Показывать цену товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_PRICE';
UPDATE configuration SET configuration_title='Показывать вес товара', configuration_description='Показывать вес товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_WEIGHT';
UPDATE configuration SET configuration_title='Показывать дату добавления товара', configuration_description='Показывать дату добавления товара?<br /><br />0= выкл<br />1-слева или права<br />2 и 3-порядок сортировки<br />4-после описания' WHERE configuration_key='PRODUCT_ALL_LIST_DATE_ADDED';
UPDATE configuration SET configuration_title='Показывать описание товара', configuration_description='Показывать описание товара - первые 150 символов?' WHERE configuration_key='PRODUCT_ALL_LIST_DESCRIPTION';
UPDATE configuration SET configuration_title='Показывать сортировку товара', configuration_description='Какую показывать сортировку товара?<br />Умолчание= 1 название товара<br /><br />1= название товара<br />2= описание названия товара<br />3= цена от низкой до высокой<br />4= цена с высокой до низкой<br />5= модель<br />6= описание даты добавления<br />7= дата добавления<br />8= порядок сортировки' WHERE configuration_key='PRODUCT_ALL_LIST_SORT_DEFAULT';
UPDATE configuration SET configuration_title='ID всех групп товаров', configuration_description='ID всех групп товаров' WHERE configuration_key='PRODUCT_ALL_LIST_GROUP_ID';
UPDATE configuration SET configuration_title='Показывать бокс с количеством нескольких товаров и определить расположение кнопки', configuration_description='Показывать бокс с количеством нескольких товаров и определить расположение кнопки?<br />0= выкл<br />1= верх<br />2= низ<br />3= верх и низ' WHERE configuration_key='PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART';
UPDATE configuration SET configuration_title='Показывать новые товары на главной странице', configuration_description='Показывать новые товары на главной странице<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MAIN_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице', configuration_description='Показывать ожидаемые товары на главной странице<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать скидки на главной странице', configuration_description='Показывать скидки на главной странице<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MAIN_SPECIALS_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице', configuration_description='Показывать ожидаемые товары на главной странице<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MAIN_UPCOMING';
UPDATE configuration SET configuration_title='Показывать новые товары на главной странице - категории с подкатегориями', configuration_description='Показывать новые товары на главной странице - категории с подкатегориями<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_CATEGORY_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице - категории с подкатегориями', configuration_description='Показывать ожидаемые товары на главной странице - категории с подкатегориями<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать скидки на главной странице - категории с подкатегориями', configuration_description='Показывать скидки на главной странице - категории с подкатегориями<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_CATEGORY_SPECIALS_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице - категории с подкатегориями', configuration_description='Показывать ожидаемые товары на главной странице - категории с подкатегориями<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_CATEGORY_UPCOMING';
UPDATE configuration SET configuration_title='Показывать новые товары на главной странице - ошибки и отсутствующие страницы с товарами', configuration_description='Показывать новые товары на главной странице - ошибки и отсутствующие страницы с товарами<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MISSING_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице - ошибки и отсутствующие страницы с товарами', configuration_description='Показывать ожидаемые товары на главной странице - ошибки и отсутствующие страницы с товарами<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MISSING_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать скидки на главной странице - ошибки и отсутствующие страницы с товарами', configuration_description='Показывать скидки на главной странице - ошибки и отсутствующие страницы с товарами<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MISSING_SPECIALS_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары на главной странице - ошибки и отсутствующие страницы с товарами', configuration_description='Показывать ожидаемые товары на главной странице - ошибки и отсутствующие страницы с товарами<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_MISSING_UPCOMING';
UPDATE configuration SET configuration_title='Показывать новые товары - под списком товаров', configuration_description='Показывать новые товары - под списком товаров<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_LISTING_BELOW_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары - под списком товаров', configuration_description='Показывать ожидаемые товары - под списком товаров<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_LISTING_BELOW_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать скидки - под списком товаров', configuration_description='Показывать скидки - под списком товаров<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_LISTING_BELOW_SPECIALS_PRODUCTS';
UPDATE configuration SET configuration_title='Показывать ожидаемые товары - под списком товаров', configuration_description='Показывать ожидаемые товары - под списком товаров<br />0= выкл или установить порядок сортировки' WHERE configuration_key='SHOW_PRODUCT_INFO_LISTING_BELOW_UPCOMING';
UPDATE configuration SET configuration_title='Новых товаров в колонке на строку', configuration_description='Новых товаров в колонке на строку' WHERE configuration_key='SHOW_PRODUCT_INFO_COLUMNS_NEW_PRODUCTS';
UPDATE configuration SET configuration_title='Ожидаемых товаров в колонке на строку', configuration_description='Ожидаемых товаров в колонке на строку' WHERE configuration_key='SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS';
UPDATE configuration SET configuration_title='Скидок в колонке на строку', configuration_description='Скидок в колонке на строку' WHERE configuration_key='SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS';
UPDATE configuration SET configuration_title='Фильтровать список товаров для текущей верхней категории', configuration_description='Фильтровать список товаров для текущей верхней категории или показывать товары из всех категорий?<br />0= выкл фильтр 1=вкл фильтр' WHERE configuration_key='SHOW_PRODUCT_INFO_ALL_PRODUCTS';
UPDATE configuration SET configuration_title='Настройки главной страницы', configuration_description='Включить на главной странице ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_MAIN_PAGE_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Обратная связь', configuration_description='Включить на странице Обратная связь ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл, Define Text OFF' WHERE configuration_key='DEFINE_CONTACT_US_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Приватность', configuration_description='Включить на странице Приватность ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_PRIVACY_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Отгрузка и возврат', configuration_description='Включить на странице Отгрузка и возврат ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_SHIPPINGINFO_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Условия использования', configuration_description='Включить на странице Условия использования ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_CONDITIONS_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Успешный контроль заказа', configuration_description='Включить на странице Успешный контроль заказа ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_CHECKOUT_SUCCESS_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Дисконтная карточка', configuration_description='Включить на странице Дисконтная карточка ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_DISCOUNT_COUPON_STATUS';
UPDATE configuration SET configuration_title='Настройки страницы Карта магазина', configuration_description='Включить на странице Карта магазина ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_SITE_MAP_STATUS';
UPDATE configuration SET configuration_title='Настройки Страница 2', configuration_description='Включить на Страница 2 ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_PAGE_2_STATUS';
UPDATE configuration SET configuration_title='Настройки Страница 3', configuration_description='Включить на Страница 3 ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_PAGE_3_STATUS';
UPDATE configuration SET configuration_title='Настройки Страница 4', configuration_description='Включить на Страница 4 ссылки/текст?<br />0= вкл ссылки, текст выкл<br />1= ссылки вкл, текст вкл<br />2= ссылки выкл, текст вкл<br />3= ссылки выкл, текст выкл' WHERE configuration_key='DEFINE_PAGE_4_STATUS';
UPDATE configuration SET configuration_title='Статус отображения EZ-страниц(верх)', configuration_description='Отображение содержимого EZ-страниц может быть глобально вкл/выкл из настроек находящихся вверху<br />0 = выкл<br />1 = вкл<br />2= только для IP админа в период выключения магазина' WHERE configuration_key='EZPAGES_STATUS_HEADER';
UPDATE configuration SET configuration_title='Статус отображения EZ-страниц(низ)', configuration_description='Отображение содержимого EZ-страниц может быть глобально вкл/выкл из настроек находящихся внизу<br />0 = выкл<br />1 = вкл<br />2= только для IP админа в период выключения магазина' WHERE configuration_key='EZPAGES_STATUS_FOOTER';
UPDATE configuration SET configuration_title='Статус отображения EZ-страниц(сбоку)', configuration_description='Отображение содержимого EZ-страниц может быть глобально вкл/выкл из настроек находящихся сбоку<br />0 = выкл<br />1 = вкл<br />2= только для IP админа в период выключения магазина' WHERE configuration_key='EZPAGES_STATUS_SIDEBOX';
UPDATE configuration SET configuration_title='Разделитель ссылок вверху EZ-страниц', configuration_description='Разделитель ссылок вверху EZ-страниц<br />Умолчание = &amp;nbsp;::&amp;nbsp;' WHERE configuration_key='EZPAGES_SEPARATOR_HEADER';
UPDATE configuration SET configuration_title='Разделитель ссылок внизу EZ-страниц', configuration_description='Разделитель ссылок внизу EZ-страниц<br />Умолчание = &amp;nbsp;::&amp;nbsp;' WHERE configuration_key='EZPAGES_SEPARATOR_FOOTER';
UPDATE configuration SET configuration_title='Кнопки Пред/След на EZ-страницах', configuration_description='Показывать кнопки Пред/След на EZ-страницах?<br />0=выкл<br />1=\"Продолжить\"<br />2=\"Пред/Продолжить/След\"<br /><br />Умолчание: 2.' WHERE configuration_key='EZPAGES_SHOW_PREV_NEXT_BUTTONS';
UPDATE configuration SET configuration_title='Таблица с содержимым EZ-страниц для разделов', configuration_description='Включить таблицу с содержимым EZ-страниц для разделов?<br />0= выкл<br />1= вкл' WHERE configuration_key='EZPAGES_SHOW_TABLE_CONTENTS';
UPDATE configuration SET configuration_title='EZ-страницы с отключением заголовка страницы', configuration_description='EZ-страницы с отключением заголовка страницы' WHERE configuration_key='EZPAGES_DISABLE_HEADER_DISPLAY_LIST';
UPDATE configuration SET configuration_title='EZ-страницы с отключением низа страницы', configuration_description='EZ-страницы с отключением низа страницы' WHERE configuration_key='EZPAGES_DISABLE_FOOTER_DISPLAY_LIST';
UPDATE configuration SET configuration_title='EZ-страницы с отключением левой колонки страницы', configuration_description='EZ-страницы с отключением левой колонки страницы' WHERE configuration_key='EZPAGES_DISABLE_LEFTCOLUMN_DISPLAY_LIST';
UPDATE configuration SET configuration_title='EZ-страницы с отключением правой колонки страницы', configuration_description='EZ-страницы с отключением правой колонки страницы' WHERE configuration_key='EZPAGES_DISABLE_RIGHTCOLUMN_DISPLAY_LIST';
UPDATE configuration SET configuration_title='Определить статус Страница-Не-Найдена', configuration_description='Разрешить определение текста страницы Страница-Не-Найдена черезе Редактирование страниц?<br />0= Запретить<br />1= Разрешить' WHERE configuration_key='DEFINE_PAGE_NOT_FOUND_STATUS';
UPDATE configuration SET configuration_title='Статус ссылок в шапке магазина', configuration_description='Включить ссылки в шапке магазина?<br />0= выкл<br />1= вкл<br />2= выкл только для домашней страницы' WHERE configuration_key='DEFINE_BREADCRUMB_STATUS';
UPDATE configuration SET configuration_title='Использовать раздельную страницу входа', configuration_description='Страница входа может отображаться в двух режимах: Раздельном и Вертикальном.<br />В Раздельном режиме функции создания учётной записи доступны на отдельной странице, загружаемо после нажатия на кнопку. В Вертикальном режиме функции создания учётной записи доступны на ниже, на этой-же странице.<br />По умолчанию: False' WHERE configuration_key='USE_SPLIT_LOGIN_MODE';
UPDATE configuration SET configuration_title='Статус кредитных карт - SOLO', configuration_description='Принимать карты SOLO 0= нет 1= да' WHERE configuration_key='CC_ENABLED_SOLO';
UPDATE configuration SET configuration_title='Статус кредитных карт - Switch', configuration_description='Принимать карты SWITCH 0= нет 1= да' WHERE configuration_key='CC_ENABLED_SWITCH';
UPDATE configuration SET configuration_title='Статус кредитных карт - Maestro', configuration_description='Принимать карты MAESTRO 0= нет 1= да' WHERE configuration_key='CC_ENABLED_MAESTRO';

UPDATE configuration SET configuration_title='Статус кредитных карт - Maestro', configuration_description='Принимать карты MAESTRO 0= нет 1= да' WHERE configuration_key='ORDER_COMMENTS_PACKING_SLIP';
#
# * SQL Localization script - Translate product_type_layout table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin eCommerce-Service.com
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
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл требует доставки' WHERE configuration_key='DEFAULT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
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
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл требует доставки' WHERE configuration_key='DEFAULT_PRODUCT_MUSIC_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
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
UPDATE product_type_layout SET configuration_title='Бесплатная доставка по умолчанию', configuration_description='Присваиваить новым товарам по умолчанию статус "Бесплатная доставка"<br />Yes, всегда устанавливать Бесплатную доставку<br />No, всегда отключать бесплатную доставку<br />Special, товар/файл требует доставки' WHERE configuration_key='DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING';
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
#
# * SQL Localization script - Translate orders_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_23_translate_orders_status.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'orders_status'
SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';
INSERT INTO orders_status (orders_status_id, language_id, orders_status_name) SELECT orders_status_id, @languages_ru_id, orders_status_name FROM orders_status;
UPDATE orders_status SET orders_status_name = 'Ожидает проверки' WHERE orders_status_name = 'Pending' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Выполняется' WHERE orders_status_name = 'Processing' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Доставлен' WHERE orders_status_name = 'Delivered' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Изменён' WHERE orders_status_name = 'Update' AND language_id=@languages_ru_id;
#
# * SQL Localization script - Translate product_types table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_24_translate_product_types.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'product_types'
UPDATE product_types SET type_name='Товар - Главный' WHERE type_id=1;
UPDATE product_types SET type_name='Товар - Музыка' WHERE type_id=2;
UPDATE product_types SET type_name='Документ - Главный' WHERE type_id=3;
UPDATE product_types SET type_name='Документ - Товар' WHERE type_id=4;
UPDATE product_types SET type_name='Товар - Бесплатная отгрузка' WHERE type_id=5;
#
# * SQL Localization script - Translate products_options_types table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_25_translate_products_options.sql 1.5.5a 21.08.2016 0:34:56 AndrewBerezin $

# Translate data for table 'products_options_types'
SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';
INSERT INTO products_options_values (products_options_values_id, language_id, products_options_values_name) SELECT products_options_values_id, @languages_ru_id, products_options_values_name FROM products_options_values;
UPDATE products_options_values SET products_options_values_name='ТЕКСТ' WHERE products_options_values_id=0 AND language_id=@languages_ru_id;
UPDATE products_options_types SET products_options_types_name='Выпадающее меню' WHERE products_options_types_id=0;
UPDATE products_options_types SET products_options_types_name='Текст' WHERE products_options_types_id=1;
UPDATE products_options_types SET products_options_types_name='Переключатель' WHERE products_options_types_id=2;
UPDATE products_options_types SET products_options_types_name='Флажок' WHERE products_options_types_id=3;
UPDATE products_options_types SET products_options_types_name='Файл' WHERE products_options_types_id=4;
UPDATE products_options_types SET products_options_types_name='Только для чтения' WHERE products_options_types_id=5;
#
# * SQL Localization script - Translate query_builder table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_26_translate_query_builder.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate the default queries for "all customers" and "all newsletter subscribers"
UPDATE query_builder SET query_name='Все покупатели', query_description='Выдает имена и email адреса всех покупателей для массовой рассылки emails' WHERE query_id=1;
UPDATE query_builder SET query_name='Все подписчики на рассылку', query_description='Выдает имена и email адреса подписчиков на рассылку' WHERE query_id=2;
UPDATE query_builder SET query_name='Неактивные покупатели (>3месяца) (Подписчики)', query_description='Подписчики которые что-то приобрели, но последних три месяца ничего не приобретали' WHERE query_id=3;
UPDATE query_builder SET query_name='Активные покупатели за 3 месяца (Подписчики)', query_description='Подписчики которые являются активными покупателями (что-то приобрели) за последних 3 месяца' WHERE query_id=4;
UPDATE query_builder SET query_name='Активные покупатели за 3 месяца (независимо от статуса подписки)', query_description='Все активные покупатели (которые что-то купили) за последних 3 месяца, игнорируя статус подписки' WHERE query_id=5;
UPDATE query_builder SET query_name='Администратору', query_description='Просто письмо этому администратору' WHERE query_id=6;
UPDATE query_builder SET query_name='Покупателям, которые не совершили покупки', query_description='Для рассылки писем всем покупателям, кто зарегистрировался, но не совершил покупку' WHERE query_id=7;
#
# * SQL Localization script - Translate paypal_payment_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_27_translate_paypal_payment_status.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'paypal_payment_status'
UPDATE paypal_payment_status SET payment_status_name = 'Завершено' WHERE payment_status_id=1;
UPDATE paypal_payment_status SET payment_status_name = 'В очереди' WHERE payment_status_id=2;
UPDATE paypal_payment_status SET payment_status_name = 'Ошибка' WHERE payment_status_id=3;
UPDATE paypal_payment_status SET payment_status_name = 'Запрещено' WHERE payment_status_id=4;
UPDATE paypal_payment_status SET payment_status_name = 'Возмещенный' WHERE payment_status_id=5;
UPDATE paypal_payment_status SET payment_status_name = 'Аннулирование' WHERE payment_status_id=6;
UPDATE paypal_payment_status SET payment_status_name = 'Полностью измененный' WHERE payment_status_id=7;
#
# * SQL Localization script - Translate countries
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_30_disable_countries.sql 1.5.5a 02.08.2016 11:11:25 AndrewBerezin $

UPDATE countries SET status='0' WHERE countries_iso_code_3!='RUS';
#
# * SQL Localization script - Translate countries
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_30_translate_countries.sql 1.5.5a 02.08.2016 11:11:25 AndrewBerezin $

## http://www.iso.org/iso/en/prods-services/iso3166ma/02iso-3166-code-lists/list-en1.html
## http://www.magnum-opus.ru/wiki/ISO-3166-1
UPDATE countries SET countries_name='Афганистан' WHERE countries_iso_code_3='AFG';
UPDATE countries SET countries_name='Албания' WHERE countries_iso_code_3='ALB';
UPDATE countries SET countries_name='Алжир' WHERE countries_iso_code_3='DZA';
UPDATE countries SET countries_name='Американский Самоа' WHERE countries_iso_code_3='ASM';
UPDATE countries SET countries_name='Андорра' WHERE countries_iso_code_3='AND';
UPDATE countries SET countries_name='Ангола' WHERE countries_iso_code_3='AGO';
UPDATE countries SET countries_name='Ангилья' WHERE countries_iso_code_3='AIA';
UPDATE countries SET countries_name='Антарктика' WHERE countries_iso_code_3='ATA';
UPDATE countries SET countries_name='Антигуа и Барбуда' WHERE countries_iso_code_3='ATG';
UPDATE countries SET countries_name='Аргентина' WHERE countries_iso_code_3='ARG';
UPDATE countries SET countries_name='Армения' WHERE countries_iso_code_3='ARM';
UPDATE countries SET countries_name='Аруба' WHERE countries_iso_code_3='ABW';
UPDATE countries SET countries_name='Австралия' WHERE countries_iso_code_3='AUS';
UPDATE countries SET countries_name='Австрия' WHERE countries_iso_code_3='AUT';
UPDATE countries SET countries_name='Азербайджан' WHERE countries_iso_code_3='AZE';
UPDATE countries SET countries_name='Багамские острова' WHERE countries_iso_code_3='BHS';
UPDATE countries SET countries_name='Бахрейн' WHERE countries_iso_code_3='BHR';
UPDATE countries SET countries_name='Бангладеш' WHERE countries_iso_code_3='BGD';
UPDATE countries SET countries_name='Барбадос' WHERE countries_iso_code_3='BRB';
UPDATE countries SET countries_name='Беларусь' WHERE countries_iso_code_3='BLR';
UPDATE countries SET countries_name='Бельгия' WHERE countries_iso_code_3='BEL';
UPDATE countries SET countries_name='Белиз' WHERE countries_iso_code_3='BLZ';
UPDATE countries SET countries_name='Бенин' WHERE countries_iso_code_3='BEN';
UPDATE countries SET countries_name='Бермуды' WHERE countries_iso_code_3='BMU';
UPDATE countries SET countries_name='Бутан' WHERE countries_iso_code_3='BTN';
UPDATE countries SET countries_name='Боливия' WHERE countries_iso_code_3='BOL';
UPDATE countries SET countries_name='Босния и Герцеговина' WHERE countries_iso_code_3='BIH';
UPDATE countries SET countries_name='Ботсвана' WHERE countries_iso_code_3='BWA';
UPDATE countries SET countries_name='остров Буве' WHERE countries_iso_code_3='BVT';
UPDATE countries SET countries_name='Бразилия' WHERE countries_iso_code_3='BRA';
UPDATE countries SET countries_name='Британские территории Индийского океана' WHERE countries_iso_code_3='IOT';
UPDATE countries SET countries_name='Бруней' WHERE countries_iso_code_3='BRN';
UPDATE countries SET countries_name='Болгария' WHERE countries_iso_code_3='BGR';
UPDATE countries SET countries_name='Буркина Фасо' WHERE countries_iso_code_3='BFA';
UPDATE countries SET countries_name='Бурунди' WHERE countries_iso_code_3='BDI';
UPDATE countries SET countries_name='Камбоджа' WHERE countries_iso_code_3='KHM';
UPDATE countries SET countries_name='Камерун' WHERE countries_iso_code_3='CMR';
UPDATE countries SET countries_name='Канада' WHERE countries_iso_code_3='CAN';
UPDATE countries SET countries_name='острова Зеленого Мыса' WHERE countries_iso_code_3='CPV';
UPDATE countries SET countries_name='Каймановы острова' WHERE countries_iso_code_3='CYM';
UPDATE countries SET countries_name='Центральная Африканская Республика' WHERE countries_iso_code_3='CAF';
UPDATE countries SET countries_name='Чад' WHERE countries_iso_code_3='TCD';
UPDATE countries SET countries_name='Чили' WHERE countries_iso_code_3='CHL';
UPDATE countries SET countries_name='Китайская Народная Республика' WHERE countries_iso_code_3='CHN';
UPDATE countries SET countries_name='остров Рождества' WHERE countries_iso_code_3='CXR';
UPDATE countries SET countries_name='Кокосовые острова' WHERE countries_iso_code_3='CCK';
UPDATE countries SET countries_name='Колумбия' WHERE countries_iso_code_3='COL';
UPDATE countries SET countries_name='Коморские острова' WHERE countries_iso_code_3='COM';
UPDATE countries SET countries_name='Конго' WHERE countries_iso_code_3='COG';
UPDATE countries SET countries_name='острова Кука' WHERE countries_iso_code_3='COK';
UPDATE countries SET countries_name='Коста Рика' WHERE countries_iso_code_3='CRI';
UPDATE countries SET countries_name='Кот-д''Ивуар' WHERE countries_iso_code_3='CIV';
UPDATE countries SET countries_name='Хорватия' WHERE countries_iso_code_3='HRV';
UPDATE countries SET countries_name='Куба' WHERE countries_iso_code_3='CUB';
UPDATE countries SET countries_name='Кипр' WHERE countries_iso_code_3='CYP';
UPDATE countries SET countries_name='Чехия' WHERE countries_iso_code_3='CZE';
UPDATE countries SET countries_name='Дания' WHERE countries_iso_code_3='DNK';
UPDATE countries SET countries_name='Джибути' WHERE countries_iso_code_3='DJI';
UPDATE countries SET countries_name='Доминика' WHERE countries_iso_code_3='DMA';
UPDATE countries SET countries_name='Доминиканская республика' WHERE countries_iso_code_3='DOM';
UPDATE countries SET countries_name='Восточный Тимур' WHERE countries_iso_code_3='TMP';
UPDATE countries SET countries_name='Эквадор' WHERE countries_iso_code_3='ECU';
UPDATE countries SET countries_name='Египет' WHERE countries_iso_code_3='EGY';
UPDATE countries SET countries_name='Сальвадор' WHERE countries_iso_code_3='SLV';
UPDATE countries SET countries_name='Экваториальная Гвинея' WHERE countries_iso_code_3='GNQ';
UPDATE countries SET countries_name='Эритрея' WHERE countries_iso_code_3='ERI';
UPDATE countries SET countries_name='Эстония' WHERE countries_iso_code_3='EST';
UPDATE countries SET countries_name='Эфиопия' WHERE countries_iso_code_3='ETH';
UPDATE countries SET countries_name='Фолклендские' WHERE countries_iso_code_3='FLK';
UPDATE countries SET countries_name='Фарерские острова' WHERE countries_iso_code_3='FRO';
UPDATE countries SET countries_name='Фиджи' WHERE countries_iso_code_3='FJI';
UPDATE countries SET countries_name='Финляндия' WHERE countries_iso_code_3='FIN';
UPDATE countries SET countries_name='Франция' WHERE countries_iso_code_3='FRA';
UPDATE countries SET countries_name='Франция, Метрополия' WHERE countries_iso_code_3='FXX';
UPDATE countries SET countries_name='Французская Гвиана' WHERE countries_iso_code_3='GUF';
UPDATE countries SET countries_name='Французская Полинезия' WHERE countries_iso_code_3='PYF';
UPDATE countries SET countries_name='Французские Южные Территории' WHERE countries_iso_code_3='ATF';
UPDATE countries SET countries_name='Габон' WHERE countries_iso_code_3='GAB';
UPDATE countries SET countries_name='Гамбия' WHERE countries_iso_code_3='GMB';
UPDATE countries SET countries_name='Грузия' WHERE countries_iso_code_3='GEO';
UPDATE countries SET countries_name='Германия' WHERE countries_iso_code_3='DEU';
UPDATE countries SET countries_name='Гана' WHERE countries_iso_code_3='GHA';
UPDATE countries SET countries_name='Гибралтар' WHERE countries_iso_code_3='GIB';
UPDATE countries SET countries_name='Греция' WHERE countries_iso_code_3='GRC';
UPDATE countries SET countries_name='Гренландия' WHERE countries_iso_code_3='GRL';
UPDATE countries SET countries_name='Гренада' WHERE countries_iso_code_3='GRD';
UPDATE countries SET countries_name='Гваделупа' WHERE countries_iso_code_3='GLP';
UPDATE countries SET countries_name='Гуам' WHERE countries_iso_code_3='GUM';
UPDATE countries SET countries_name='Гватемала' WHERE countries_iso_code_3='GTM';
UPDATE countries SET countries_name='Гвинея' WHERE countries_iso_code_3='GIN';
UPDATE countries SET countries_name='Гвинея-Бисау' WHERE countries_iso_code_3='GNB';
UPDATE countries SET countries_name='Гайана' WHERE countries_iso_code_3='GUY';
UPDATE countries SET countries_name='Гаити' WHERE countries_iso_code_3='HTI';
UPDATE countries SET countries_name='острова Герда и МакДональда' WHERE countries_iso_code_3='HMD';
UPDATE countries SET countries_name='Гондурас' WHERE countries_iso_code_3='HND';
UPDATE countries SET countries_name='Гонконг' WHERE countries_iso_code_3='HKG';
UPDATE countries SET countries_name='Венгрия' WHERE countries_iso_code_3='HUN';
UPDATE countries SET countries_name='Исландия' WHERE countries_iso_code_3='ISL';
UPDATE countries SET countries_name='Индия' WHERE countries_iso_code_3='IND';
UPDATE countries SET countries_name='Индонезия' WHERE countries_iso_code_3='IDN';
UPDATE countries SET countries_name='Иран' WHERE countries_iso_code_3='IRN';
UPDATE countries SET countries_name='Ирак' WHERE countries_iso_code_3='IRQ';
UPDATE countries SET countries_name='Ирландия' WHERE countries_iso_code_3='IRL';
UPDATE countries SET countries_name='Израиль' WHERE countries_iso_code_3='ISR';
UPDATE countries SET countries_name='Италия' WHERE countries_iso_code_3='ITA';
UPDATE countries SET countries_name='Ямайка' WHERE countries_iso_code_3='JAM';
UPDATE countries SET countries_name='Япония' WHERE countries_iso_code_3='JPN';
UPDATE countries SET countries_name='Иордания' WHERE countries_iso_code_3='JOR';
UPDATE countries SET countries_name='Казахстан' WHERE countries_iso_code_3='KAZ';
UPDATE countries SET countries_name='Кения' WHERE countries_iso_code_3='KEN';
UPDATE countries SET countries_name='Кирибати' WHERE countries_iso_code_3='KIR';
UPDATE countries SET countries_name='Корейская Народная Демократическая республика' WHERE countries_iso_code_3='PRK';
UPDATE countries SET countries_name='Корея' WHERE countries_iso_code_3='KOR';
UPDATE countries SET countries_name='Кувейт' WHERE countries_iso_code_3='KWT';
UPDATE countries SET countries_name='Кыргызстан' WHERE countries_iso_code_3='KGZ';
UPDATE countries SET countries_name='Лаос' WHERE countries_iso_code_3='LAO';
UPDATE countries SET countries_name='Латвия' WHERE countries_iso_code_3='LVA';
UPDATE countries SET countries_name='Ливан' WHERE countries_iso_code_3='LBN';
UPDATE countries SET countries_name='Лесото' WHERE countries_iso_code_3='LSO';
UPDATE countries SET countries_name='Либерия' WHERE countries_iso_code_3='LBR';
UPDATE countries SET countries_name='Ливия' WHERE countries_iso_code_3='LBY';
UPDATE countries SET countries_name='Лихтенштейн' WHERE countries_iso_code_3='LIE';
UPDATE countries SET countries_name='Литва' WHERE countries_iso_code_3='LTU';
UPDATE countries SET countries_name='Люксембург' WHERE countries_iso_code_3='LUX';
UPDATE countries SET countries_name='Макао' WHERE countries_iso_code_3='MAC';
UPDATE countries SET countries_name='Македония' WHERE countries_iso_code_3='MKD';
UPDATE countries SET countries_name='Мадагаскар' WHERE countries_iso_code_3='MDG';
UPDATE countries SET countries_name='Малави' WHERE countries_iso_code_3='MWI';
UPDATE countries SET countries_name='Малайзия' WHERE countries_iso_code_3='MYS';
UPDATE countries SET countries_name='Мальдивские острова' WHERE countries_iso_code_3='MDV';
UPDATE countries SET countries_name='Мали' WHERE countries_iso_code_3='MLI';
UPDATE countries SET countries_name='Мальта' WHERE countries_iso_code_3='MLT';
UPDATE countries SET countries_name='Маршалловы острова' WHERE countries_iso_code_3='MHL';
UPDATE countries SET countries_name='Мартиника' WHERE countries_iso_code_3='MTQ';
UPDATE countries SET countries_name='Мавритания' WHERE countries_iso_code_3='MRT';
UPDATE countries SET countries_name='Маврикий' WHERE countries_iso_code_3='MUS';
UPDATE countries SET countries_name='Майотта' WHERE countries_iso_code_3='MYT';
UPDATE countries SET countries_name='Мексика' WHERE countries_iso_code_3='MEX';
UPDATE countries SET countries_name='Микронезия' WHERE countries_iso_code_3='FSM';
UPDATE countries SET countries_name='Молдова' WHERE countries_iso_code_3='MDA';
UPDATE countries SET countries_name='Монако' WHERE countries_iso_code_3='MCO';
UPDATE countries SET countries_name='Монголия' WHERE countries_iso_code_3='MNG';
UPDATE countries SET countries_name='Монтсеррат' WHERE countries_iso_code_3='MSR';
UPDATE countries SET countries_name='Марокко' WHERE countries_iso_code_3='MAR';
UPDATE countries SET countries_name='Мозамбик' WHERE countries_iso_code_3='MOZ';
UPDATE countries SET countries_name='Мьянма' WHERE countries_iso_code_3='MMR';
UPDATE countries SET countries_name='Намибия' WHERE countries_iso_code_3='NAM';
UPDATE countries SET countries_name='Науру' WHERE countries_iso_code_3='NRU';
UPDATE countries SET countries_name='Непал' WHERE countries_iso_code_3='NPL';
UPDATE countries SET countries_name='Нидерланды' WHERE countries_iso_code_3='NLD';
UPDATE countries SET countries_name='Антильские острова' WHERE countries_iso_code_3='ANT';
UPDATE countries SET countries_name='Новая Каледония' WHERE countries_iso_code_3='NCL';
UPDATE countries SET countries_name='Новая Зеландия' WHERE countries_iso_code_3='NZL';
UPDATE countries SET countries_name='Никарагуа' WHERE countries_iso_code_3='NIC';
UPDATE countries SET countries_name='Нигер' WHERE countries_iso_code_3='NER';
UPDATE countries SET countries_name='Нигерия' WHERE countries_iso_code_3='NGA';
UPDATE countries SET countries_name='Ниуэ' WHERE countries_iso_code_3='NIU';
UPDATE countries SET countries_name='остров Норфолк' WHERE countries_iso_code_3='NFK';
UPDATE countries SET countries_name='Марианские острова' WHERE countries_iso_code_3='MNP';
UPDATE countries SET countries_name='Норвегия' WHERE countries_iso_code_3='NOR';
UPDATE countries SET countries_name='Оман' WHERE countries_iso_code_3='OMN';
UPDATE countries SET countries_name='Пакистан' WHERE countries_iso_code_3='PAK';
UPDATE countries SET countries_name='Палау' WHERE countries_iso_code_3='PLW';
UPDATE countries SET countries_name='Панама' WHERE countries_iso_code_3='PAN';
UPDATE countries SET countries_name='Папуа - Новая Гвинея' WHERE countries_iso_code_3='PNG';
UPDATE countries SET countries_name='Парагвай' WHERE countries_iso_code_3='PRY';
UPDATE countries SET countries_name='Перу' WHERE countries_iso_code_3='PER';
UPDATE countries SET countries_name='Филиппины' WHERE countries_iso_code_3='PHL';
UPDATE countries SET countries_name='остров Питкэрн' WHERE countries_iso_code_3='PCN';
UPDATE countries SET countries_name='Польша' WHERE countries_iso_code_3='POL';
UPDATE countries SET countries_name='Португалия' WHERE countries_iso_code_3='PRT';
UPDATE countries SET countries_name='Пуэрто-Рико' WHERE countries_iso_code_3='PRI';
UPDATE countries SET countries_name='Катар' WHERE countries_iso_code_3='QAT';
UPDATE countries SET countries_name='Реюньон' WHERE countries_iso_code_3='REU';
UPDATE countries SET countries_name='Румыния' WHERE countries_iso_code_3='ROM';
UPDATE countries SET countries_name='Россия' WHERE countries_iso_code_3='RUS';
UPDATE countries SET countries_name='Руанда' WHERE countries_iso_code_3='RWA';
UPDATE countries SET countries_name='Сент-Китс и Невис' WHERE countries_iso_code_3='KNA';
UPDATE countries SET countries_name='Сент-Люсия' WHERE countries_iso_code_3='LCA';
UPDATE countries SET countries_name='Сент-Винсент и Гренадины' WHERE countries_iso_code_3='VCT';
UPDATE countries SET countries_name='острова Самоа' WHERE countries_iso_code_3='WSM';
UPDATE countries SET countries_name='Сан-Марино' WHERE countries_iso_code_3='SMR';
UPDATE countries SET countries_name='Сан-Томе и Принсипи' WHERE countries_iso_code_3='STP';
UPDATE countries SET countries_name='Саудовская Аравия' WHERE countries_iso_code_3='SAU';
UPDATE countries SET countries_name='Сенегал' WHERE countries_iso_code_3='SEN';
UPDATE countries SET countries_name='Сейшельские острова' WHERE countries_iso_code_3='SYC';
UPDATE countries SET countries_name='Сьерра-Леоне' WHERE countries_iso_code_3='SLE';
UPDATE countries SET countries_name='Сингапур' WHERE countries_iso_code_3='SGP';
UPDATE countries SET countries_name='Словакия' WHERE countries_iso_code_3='SVK';
UPDATE countries SET countries_name='Словения' WHERE countries_iso_code_3='SVN';
UPDATE countries SET countries_name='Соломоновы острова' WHERE countries_iso_code_3='SLB';
UPDATE countries SET countries_name='Сомали' WHERE countries_iso_code_3='SOM';
UPDATE countries SET countries_name='ЮАР' WHERE countries_iso_code_3='ZAF';
UPDATE countries SET countries_name='Южная Георгия и Южные Сандвичевы острова' WHERE countries_iso_code_3='SGS';
UPDATE countries SET countries_name='Испания' WHERE countries_iso_code_3='ESP';
UPDATE countries SET countries_name='Шри Ланка' WHERE countries_iso_code_3='LKA';
UPDATE countries SET countries_name='остров Святой Елены' WHERE countries_iso_code_3='SHN';
UPDATE countries SET countries_name='Сен-Пьер и Микелон' WHERE countries_iso_code_3='SPM';
UPDATE countries SET countries_name='Судан' WHERE countries_iso_code_3='SDN';
UPDATE countries SET countries_name='Суринам' WHERE countries_iso_code_3='SUR';
UPDATE countries SET countries_name='острова Свалбард и Ян Майен' WHERE countries_iso_code_3='SJM';
UPDATE countries SET countries_name='Свазиленд' WHERE countries_iso_code_3='SWZ';
UPDATE countries SET countries_name='Швеция' WHERE countries_iso_code_3='SWE';
UPDATE countries SET countries_name='Швейцария' WHERE countries_iso_code_3='CHE';
UPDATE countries SET countries_name='Сирия' WHERE countries_iso_code_3='SYR';
UPDATE countries SET countries_name='Тайвань' WHERE countries_iso_code_3='TWN';
UPDATE countries SET countries_name='Таджикистан' WHERE countries_iso_code_3='TJK';
UPDATE countries SET countries_name='Танзания' WHERE countries_iso_code_3='TZA';
UPDATE countries SET countries_name='Тайланд' WHERE countries_iso_code_3='THA';
UPDATE countries SET countries_name='Того' WHERE countries_iso_code_3='TGO';
UPDATE countries SET countries_name='Токелау' WHERE countries_iso_code_3='TKL';
UPDATE countries SET countries_name='Тонга' WHERE countries_iso_code_3='TON';
UPDATE countries SET countries_name='Тринидад и Тобаго' WHERE countries_iso_code_3='TTO';
UPDATE countries SET countries_name='Тунис' WHERE countries_iso_code_3='TUN';
UPDATE countries SET countries_name='Турция' WHERE countries_iso_code_3='TUR';
UPDATE countries SET countries_name='Туркменистан' WHERE countries_iso_code_3='TKM';
UPDATE countries SET countries_name='острова Туркс и Кайкос' WHERE countries_iso_code_3='TCA';
UPDATE countries SET countries_name='Тувалу' WHERE countries_iso_code_3='TUV';
UPDATE countries SET countries_name='Уганда' WHERE countries_iso_code_3='UGA';
UPDATE countries SET countries_name='Украина' WHERE countries_iso_code_3='UKR';
UPDATE countries SET countries_name='Арабские Эмираты' WHERE countries_iso_code_3='ARE';
UPDATE countries SET countries_name='Великобритания' WHERE countries_iso_code_3='GBR';
UPDATE countries SET countries_name='Соединенные Штаты Америки' WHERE countries_iso_code_3='USA';
UPDATE countries SET countries_name='Отдаленные Острова США' WHERE countries_iso_code_3='UMI';
UPDATE countries SET countries_name='Уругвай' WHERE countries_iso_code_3='URY';
UPDATE countries SET countries_name='Узбекистан' WHERE countries_iso_code_3='UZB';
UPDATE countries SET countries_name='Вануату' WHERE countries_iso_code_3='VUT';
UPDATE countries SET countries_name='Ватикан' WHERE countries_iso_code_3='VAT';
UPDATE countries SET countries_name='Венесуэла' WHERE countries_iso_code_3='VEN';
UPDATE countries SET countries_name='Вьетнам' WHERE countries_iso_code_3='VNM';
UPDATE countries SET countries_name='Британские Виргинские острова' WHERE countries_iso_code_3='VGB';
UPDATE countries SET countries_name='Американские Виргинские острова' WHERE countries_iso_code_3='VIR';
UPDATE countries SET countries_name='острова Валлис и Футуна' WHERE countries_iso_code_3='WLF';
UPDATE countries SET countries_name='Западная Сахара' WHERE countries_iso_code_3='ESH';
UPDATE countries SET countries_name='Йемен' WHERE countries_iso_code_3='YEM';
UPDATE countries SET countries_name='Югославия' WHERE countries_iso_code_3='YUG';
UPDATE countries SET countries_name='Заир' WHERE countries_iso_code_3='ZAR';
UPDATE countries SET countries_name='Замбия' WHERE countries_iso_code_3='ZMB';
UPDATE countries SET countries_name='Зимбабве' WHERE countries_iso_code_3='ZWE';
UPDATE countries SET countries_name='Эландские Острова' WHERE countries_iso_code_3='ALA';
UPDATE countries SET countries_name='Бонэйр, Синт-Эстатиус и Саба' WHERE countries_iso_code_3='BES';
UPDATE countries SET countries_name='Кюрасао' WHERE countries_iso_code_3='CUW';
UPDATE countries SET countries_name='Гернси' WHERE countries_iso_code_3='GGY';
UPDATE countries SET countries_name='Остров Мэн ' WHERE countries_iso_code_3='IMN';
UPDATE countries SET countries_name='Джерси' WHERE countries_iso_code_3='JEY';
UPDATE countries SET countries_name='Черногория' WHERE countries_iso_code_3='MNE';
UPDATE countries SET countries_name='Государство Палестина' WHERE countries_iso_code_3='PSE';
UPDATE countries SET countries_name='Румыния' WHERE countries_iso_code_3='ROU';
UPDATE countries SET countries_name='Сербия' WHERE countries_iso_code_3='SRB';
UPDATE countries SET countries_name='Синт-Мартен' WHERE countries_iso_code_3='SXM';
UPDATE countries SET countries_name='Южный Судан' WHERE countries_iso_code_3='SSD';
UPDATE countries SET countries_name='Восточный Тимор' WHERE countries_iso_code_3='TLS';
#
# * SQL Localization script - Translate countries
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_31_delete_zones.sql 1.5.5a 02.08.2016 11:11:25 AndrewBerezin $

DELETE FROM zones WHERE zone_country_id NOT IN (176);
#
# * SQL Localization script - Add zones for Russian Federation countries
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2015 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2015 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @link http://www.gnivc.ru/Document.aspx?id=733 Справочник "Субъекты Российской федерации" (ССРФ)
# * @link http://www.constitution.ru/10003000/10003000-5.htm Конституция РФ, Глава 3. Федеративное устройство, Статья 65
# * @link http://ru.wikipedia.org/wiki/Коды_субъектов_Российской_Федерации
# * @Localization: Andrew Berezin eCommerce-Service.com
# * @version $Id: mysql_31_zones_ru.sql 1.4 26.07.2015 15:48:40 AndrewBerezin eCommerce-Service.com $

ALTER TABLE zones CHANGE zone_name zone_name VARCHAR(128);
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '01', 'Республика Адыгея (Адыгея)');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '04', 'Республика Алтай');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '02', 'Республика Башкортостан');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '03', 'Республика Бурятия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '05', 'Республика Дагестан');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '06', 'Республика Ингушетия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '07', 'Кабардино-Балкарская Республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '08', 'Республика Калмыкия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '09', 'Карачаево-Черкесская Республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '10', 'Республика Карелия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '11', 'Республика Коми');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '12', 'Республика Марий Эл');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '13', 'Республика Мордовия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '14', 'Республика Саха (Якутия)');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '15', 'Республика Северная Осетия - Алания');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '16', 'Республика Татарстан (Татарстан)');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '17', 'Республика Тыва');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '18', 'Удмуртская Республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '19', 'Республика Хакасия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '20', 'Чеченская Республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '21', 'Чувашская Республика - Чувашия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '22', 'Алтайский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '23', 'Краснодарский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '24', 'Красноярский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '25', 'Приморский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '26', 'Ставропольский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '27', 'Хабаровский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '28', 'Амурская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '29', 'Архангельская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '30', 'Астраханская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '31', 'Белгородская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '32', 'Брянская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '33', 'Владимирская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '34', 'Волгоградская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '35', 'Вологодская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '36', 'Воронежская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '37', 'Ивановская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '38', 'Иркутская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '39', 'Калининградская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '40', 'Калужская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '41', 'Камчатский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '42', 'Кемеровская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '43', 'Кировская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '44', 'Костромская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '45', 'Курганская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '46', 'Курская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '47', 'Ленинградская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '48', 'Липецкая область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '49', 'Магаданская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '50', 'Московская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '51', 'Мурманская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '52', 'Нижегородская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '53', 'Новгородская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '54', 'Новосибирская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '55', 'Омская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '56', 'Оренбургская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '57', 'Орловская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '58', 'Пензенская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '59', 'Пермский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '60', 'Псковская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '61', 'Ростовская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '62', 'Рязанская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '63', 'Самарская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '64', 'Саратовская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '65', 'Сахалинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '66', 'Свердловская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '67', 'Смоленская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '68', 'Тамбовская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '69', 'Тверская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '70', 'Томская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '71', 'Тульская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '72', 'Тюменская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '73', 'Ульяновская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '74', 'Челябинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '75', 'Забайкальский край');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '76', 'Ярославская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '77', 'Москва');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '78', 'Санкт-Петербург');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '79', 'Еврейская автономная область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '82', 'Республика Крым');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '83', 'Ненецкий автономный округ');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '86', 'Ханты-Мансийский автономный округ');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '87', 'Чукотский автономный округ');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '89', 'Ямало-Ненецкий автономный округ');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (176, '92', 'Севастополь');
#
# * SQL Localization script - Add zones for ex-USSR countries
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2015 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2015 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_52_zones_ex_ussr.sql 1.2 26.07.2015 15:48:59 AndrewBerezin eCommerce-Service.com $

# 'Armenia','AM','ARM'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Араратская область', 'Араратская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Армавирская область', 'Армавирская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Гегаркуникская область', 'Гегаркуникская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Ереван', 'Ереван');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Котайкская область', 'Котайкская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Лорийская область', 'Лорийская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Область Вайоц Дзор', 'Область Вайоц Дзор');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Область Арагацотн', 'Область Арагацотн');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Сюникская область', 'Сюникская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Тавушская область', 'Тавушская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (011, 'Ширакская область', 'Ширакская область');
# 'Azerbaijan','AZ','AZE'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Агдашский район', 'Агдашский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Агдамский район', 'Агдамский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Агджабединский район', 'Агджабединский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Агсуинский район', 'Агсуинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Акстафинский район', 'Акстафинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Апшеронский район', 'Апшеронский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Астаринский район', 'Астаринский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Бабекский район', 'Бабекский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Балакенский район', 'Балакенский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Бардинский район', 'Бардинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Бейлаганский район', 'Бейлаганский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Билясуварский район', 'Билясуварский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Габалинский район', 'Габалинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Гаджигабульский район', 'Гаджигабульский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Газахский район', 'Газахский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Гахский район', 'Гахский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Геокчайский район', 'Геокчайский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Геранбойский район', 'Геранбойский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Гобустанский район', 'Гобустанский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Губинский район', 'Губинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Губадлинский район', 'Губадлинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Гусарский район', 'Гусарский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Дашкесанский район', 'Дашкесанский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Джалилабадский район', 'Джалилабадский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Джебраильский район', 'Джебраильский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Джульфинский район', 'Джульфинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Дивичинский район', 'Дивичинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Евлахский район', 'Евлахский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Закатальский район', 'Закатальский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Зангеланский район', 'Зангеланский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Зардабский район', 'Зардабский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Имишлинский район', 'Имишлинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Исмаиллинский район', 'Исмаиллинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Кедабекский район', 'Кедабекский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Кельбаджарский район', 'Кельбаджарский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Кюрдамирский район', 'Кюрдамирский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Лачинский район', 'Лачинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ленкоранский район', 'Ленкоранский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Лерикский район', 'Лерикский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Масаллинский район', 'Масаллинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Нахичеванская Автономная Республика', 'Нахичеванская Автономная Республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Нефтчалинский район', 'Нефтчалинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Огузский район', 'Огузский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ордубадский район', 'Ордубадский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Саатлинский район', 'Саатлинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Сабирабадский район', 'Сабирабадский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Садаракский район', 'Садаракский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Сальянский район', 'Сальянский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Самухский район', 'Самухский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Сиязаньский район', 'Сиязаньский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Тертерский район', 'Тертерский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Товузский район', 'Товузский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Уджарский район', 'Уджарский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Физулинский район', 'Физулинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ханларский район', 'Ханларский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Хачмазский район', 'Хачмазский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ходжалинский район', 'Ходжалинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ходжавендский район', 'Ходжавендский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Хызынский район', 'Хызынский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шарурский район', 'Шарурский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шахбузский район', 'Шахбузский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шекинский район', 'Шекинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шемахинский район', 'Шемахинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шемкирский район', 'Шемкирский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Шушинский район', 'Шушинский район');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (015, 'Ярдымлинский район', 'Ярдымлинский район');
# 'Belarus','BY','BLR'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Брестская область', 'Брестская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Витебская область', 'Витебская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Гомельская область', 'Гомельская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Гродненская область', 'Гродненская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Минская область', 'Минская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (020, 'Могилевская область', 'Могилевская область');
# 'Estonia','EE','EST'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Валгамааский уезд', 'Валгамааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Вильяндимааский уезд', 'Вильяндимааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Вырумааский уезд', 'Вырумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Ида-Вирумааский уезд', 'Ида-Вирумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Йыгевамааский уезд', 'Йыгевамааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Ляэнемааский уезд', 'Ляэнемааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Ляэне-Вирумааский уезд', 'Ляэне-Вирумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Пылвамааский уезд', 'Пылвамааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Пярнумааский уезд', 'Пярнумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Рапламааский уезд', 'Рапламааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Сааремааский уезд', 'Сааремааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Тартумааский уезд', 'Тартумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Харьюский уезд', 'Харьюский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Хийумааский уезд', 'Хийумааский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (067, 'Ярвамаамааский уезд', 'Ярвамаамааский уезд');
# 'Georgia','GE','GEO'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Абхазская автономная республика', 'Абхазская автономная республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Аджарская автономная республика', 'Аджарская автономная республика');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Гурия', 'Гурия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Имерети', 'Имерети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Кахети', 'Кахети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Квемо-Картли', 'Квемо-Картли');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Мцхета-Тианети', 'Мцхета-Тианети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Рача-Лечхуми - Квемо Сванети', 'Рача-Лечхуми - Квемо Сванети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Республика Южная Осетия', 'Республика Южная Осетия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Самцхе-Джавахети', 'Самцхе-Джавахети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Самегрело - Земо-Сванети', 'Самегрело - Земо-Сванети');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Тбилиси', 'Тбилиси');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (080, 'Шида - Картли', 'Шида - Картли');
# 'Kazakhstan','KZ','KAZ'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Акмолинская область', 'Акмолинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Актюбинская область', 'Актюбинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Алматинская область', 'Алматинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Атырауская область', 'Атырауская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Восточно-Казахстанская область', 'Восточно-Казахстанская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Жамбылская область', 'Жамбылская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Западно-Казахстанская область', 'Западно-Казахстанская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Карагандинская область', 'Карагандинская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Кзылординская область', 'Кзылординская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Костанайская область', 'Костанайская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Мангистауская область', 'Мангистауская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Павлодарская область', 'Павлодарская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Северо-Казахстанская область', 'Северо-Казахстанская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (109, 'Южно-Казахстанская область', 'Южно-Казахстанская область');
# 'Kyrgyzstan','KG','KGZ'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Баткенская область', 'Баткенская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Джалал-Абадская область', 'Джалал-Абадская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Иссык-Кульская область', 'Иссык-Кульская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Нарынская область', 'Нарынская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Ошская область', 'Ошская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Таласская область', 'Таласская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (115, 'Чуйская область', 'Чуйская область');
# 'Latvia','LV','LVA'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Аизкраукленский', 'Аизкраукленский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Алуксненский', 'Алуксненский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Балвский', 'Балвский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Бауский', 'Бауский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Валкский', 'Валкский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Валмиерский', 'Валмиерский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Вентспилсский', 'Вентспилсский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Вентспилс', 'Вентспилс');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Гулбенский', 'Гулбенский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Давгавпилский', 'Давгавпилский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Даугавпилс', 'Даугавпилс');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Добелский', 'Добелский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Екабпилский', 'Екабпилский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Елгавский', 'Елгавский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Елгава', 'Елгава');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Краславский', 'Краславский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Кулдигский', 'Кулдигский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Ледзенский', 'Ледзенский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Лепайский', 'Лепайский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Лиепая', 'Лиепая');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Лимбажский', 'Лимбажский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Мадонский', 'Мадонский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Огрский', 'Огрский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Прейльский', 'Прейльский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Резекненский', 'Резекненский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Резекне', 'Резекне');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Рига', 'Рига');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Рижский', 'Рижский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Салдуский', 'Салдуский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Талсинский', 'Талсинский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Тукумский', 'Тукумский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Цесиский', 'Цесиский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (117, 'Юрмала', 'Юрмала');
# 'Lithuania','LT','LTU'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Kлайпедский уезд', 'Kлайпедский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Maриямпольский уезд', 'Maриямпольский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Tяльшяйский уезд', 'Tяльшяйский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Алитусский уезд', 'Алитусский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Вильнюсский уезд', 'Вильнюсский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Каунасский уезд', 'Каунасский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Панявежский уезд', 'Панявежский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Таурагский уезд', 'Таурагский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Утянский уезд', 'Утянский уезд');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (123, 'Шяуляйский уезд', 'Шяуляйский уезд');
# 'Moldova, Republic of','MD','MDA'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Балти', 'Балти');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Единет', 'Единет');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Кагул', 'Кагул');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Кишенёв', 'Кишенёв');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Лапушна', 'Лапушна');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Оргей', 'Оргей');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Сорока', 'Сорока');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Тараклия', 'Тараклия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Тигина', 'Тигина');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (140, 'Унгены', 'Унгены');
# 'Tajikistan','TJ','TJK'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (207, 'Ленинабадская область', 'Ленинабадская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (207, 'Мухтори-Кухистони-Бадахшони', 'Мухтори-Кухистони-Бадахшони');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (207, 'Хатлонская область', 'Хатлонская область');
# 'Turkmenistan','TM','TKM'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (216, 'Ахал', 'Ахал');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (216, 'Балкан', 'Балкан');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (216, 'Дашховуз', 'Дашховуз');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (216, 'Лебап', 'Лебап');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (216, 'Мары', 'Мары');
# 'Ukraine','UA','UKR'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Винницкая область', 'Винницкая область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Волынская область', 'Волынская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Днепропетровская область', 'Днепропетровская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Донецкая область', 'Донецкая область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Житомирская область', 'Житомирская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Закарпатская область', 'Закарпатская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Запорожская область', 'Запорожская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Ивано-Франковская область', 'Ивано-Франковская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Киевская область', 'Киевская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Кировоградская область', 'Кировоградская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Луганская область', 'Луганская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Львовская область', 'Львовская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Николаевская область', 'Николаевская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Одесская область', 'Одесская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Полтавская область', 'Полтавская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Ровенская область', 'Ровенская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Сумская область', 'Сумская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Тернопольская область', 'Тернопольская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Харьковская область', 'Харьковская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Херсонская область', 'Херсонская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Хмельницкая область', 'Хмельницкая область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Черновицкая область', 'Черновицкая область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Черниговская область', 'Черниговская область');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (220, 'Черкасская область', 'Черкасская область');
# 'Uzbekistan','UZ','UZB'
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Андижанский', 'Андижанский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Бухарский', 'Бухарский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Джизакский', 'Джизакский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Каракалпакия', 'Каракалпакия');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Кашкадарьинский', 'Кашкадарьинский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Навоийский', 'Навоийский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Наманганский', 'Наманганский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Самаркандский', 'Самаркандский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Сурхандарьинский', 'Сурхандарьинский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Сырдарьинский', 'Сырдарьинский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Ташкентский', 'Ташкентский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Ферганский', 'Ферганский');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (226, 'Хорезмский', 'Хорезмский');
#
# * SQL Localization script - Add RU/UA geo_zones
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2010 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2010 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_95_geo_zones.sql 1.3.9g 30.09.2010 10:22:15 AndrewBerezin $

# Russia
DELETE FROM geo_zones WHERE geo_zone_id=1;
DELETE FROM zones_to_geo_zones WHERE geo_zone_id=1;
INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (1,'Россия','Российская Федерация', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 176, 0, 1, now());

INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (2,'Украина','Украина', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 220, 0, 2, now());

INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (3, 'Москва', 'Москва', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 176, 266, 3, now());
#
# * SQL Localization script - remove all installed shipping and payment modules
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_90_remove_modules.sql 1.3.8a 17.12.2007 11:19 AndrewBerezin $

DELETE FROM configuration WHERE configuration_group_id=6 AND configuration_key LIKE 'MODULE_SHIPPING_%' AND configuration_key != 'MODULE_SHIPPING_INSTALLED';
UPDATE configuration SET configuration_value = '' WHERE configuration_key = 'MODULE_SHIPPING_INSTALLED';
DELETE FROM configuration WHERE configuration_group_id=6 AND configuration_key LIKE 'MODULE_PAYMENT_%' AND configuration_key != 'MODULE_PAYMENT_INSTALLED';
UPDATE configuration SET configuration_value = '' WHERE configuration_key = 'MODULE_PAYMENT_INSTALLED';
#
# * SQL Localization script - Set defaults
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_91_set_defaults.sql 1.3.8a 17.12.2007 10:47 AndrewBerezin $

# Set RU country for Create account default country
UPDATE configuration SET configuration_value = '176' WHERE configuration_key = 'SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY';
#
# * SQL Localization script - Set taxes classes and ratings
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_92_set_taxes.sql 1.3.8a 17.12.2007 10:47 AndrewBerezin $

# Delete demo tax class and add ru/ua real tax classes
DELETE FROM tax_class WHERE tax_class_id=1;
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (1, 'НДС 18%', 'НДС 18%', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (2, 'НДС 10%', 'НДС 10%', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (3, 'НДС не облагается', 'НДС не облагается', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (4, 'НДС 20%', 'НДС 20%', now());

# Delete demo tax rate and add ru/ua real tax ratings
DELETE FROM tax_rates WHERE tax_class_id=1;
INSERT INTO tax_rates VALUES (1, 1, 1, 1, 18.0000, 'НДС 18%', NULL, now());
INSERT INTO tax_rates VALUES (2, 1, 2, 2, 10.0000, 'НДС 10%', NULL, now());
INSERT INTO tax_rates VALUES (3, 2, 4, 1, 20.0000, 'НДС 20%', NULL, now());
INSERT INTO tax_rates VALUES (4, 1, 3, 3, 0.0000, 'НДС не облагается', NULL, now());
#
# * SQL Localization script - Set default currency and currencies rating based on RUR
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_93_currency.sql 1.3.8a 17.12.2007 11:07 AndrewBerezin $

# Add RUR and UAH currencies (Rating based on USD).
INSERT INTO currencies VALUES (NULL,'Рубль','RUB','','&nbsp;руб.','.',',','2',26.2314, now());
INSERT INTO currencies VALUES (NULL,'Гривна','UAH','','грн.','.',',','2',5.05, now());

# Set Default currency = RUR
UPDATE configuration SET configuration_value='RUR' WHERE configuration_key='DEFAULT_CURRENCY';

# Update currencies rating CBR 06.04.2016 - http://cbr.ru/currency_base/daily.asp
UPDATE currencies SET value = 1.00000000, last_updated = NOW() WHERE code = 'RUB';
UPDATE currencies SET value = 0.01451587, last_updated = NOW() WHERE code = 'USD';
UPDATE currencies SET value = 0.01277469, last_updated = NOW() WHERE code = 'EUR';
UPDATE currencies SET value = 0.01020807, last_updated = NOW() WHERE code = 'GBP';
UPDATE currencies SET value = 0.01905644, last_updated = NOW() WHERE code = 'CAD';
UPDATE currencies SET value = 0.01918314, last_updated = NOW() WHERE code = 'AUD';
UPDATE currencies SET value = 0.00378937, last_updated = NOW() WHERE code = 'UAH';
#
# * SQL Localization script - Add RU address_format
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_94_address_format.sql 1.3.9g 30.09.2010 9:48:02 11:07 AndrewBerezin $

# Add RU address_format
INSERT INTO address_format VALUES (NULL, '$firstname $lastname$cr$streets$cr $city$cr$state_name$cr$country$cr$postcode', '$city / $country');
SET @insert_id := LAST_INSERT_ID();
UPDATE countries SET address_format_id=@insert_id WHERE countries_iso_code_3='RUS';
UPDATE countries SET address_format_id=@insert_id WHERE countries_iso_code_3='UKR';
#
# * SQL Localization script - Translate orders_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_77_translate_demo.sql 1.5.5a 21.08.2016 0:34:28 AndrewBerezin $

# Translate data for table 'orders_status'
SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';
INSERT INTO categories_description (categories_id, language_id, categories_name, categories_description) SELECT categories_id, @languages_ru_id, categories_name, categories_description FROM categories_description;
INSERT INTO manufacturers_info (manufacturers_id, languages_id, manufacturers_url, url_clicked, date_last_click) SELECT manufacturers_id, @languages_ru_id, manufacturers_url, '0', NULL FROM manufacturers_info;
INSERT INTO products_description (products_id, language_id, products_name, products_description, products_url, products_viewed) SELECT products_id, @languages_ru_id, products_name, products_description, products_url, '0' FROM products_description;
INSERT INTO products_options (products_options_id, language_id, products_options_name) SELECT products_options_id, @languages_ru_id, products_options_name FROM products_options;
UPDATE products_options SET products_options_name = 'Цвет' WHERE products_options_name = 'Color' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Размер' WHERE products_options_name = 'Size' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Модель' WHERE products_options_name = 'Model' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Память' WHERE products_options_name = 'Memory' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Версия' WHERE products_options_name = 'Version' AND language_id=@languages_ru_id;
#
# * SQL Localization script - Add RU address_format
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2010 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2010 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_99_tuninig.sql 1.3.9g 30.09.2010 10:23:30 AndrewBerezin $

UPDATE configuration SET configuration_value = 'True' WHERE configuration_key = 'SESSION_FORCE_COOKIE_USE' LIMIT 1 ;
UPDATE configuration SET configuration_value = '0' WHERE configuration_key = 'META_TAG_INCLUDE_PRICE' LIMIT 1 ;
UPDATE configuration SET configuration_value = '0' WHERE configuration_key = 'META_TAG_INCLUDE_MODEL' LIMIT 1 ;
UPDATE configuration SET configuration_value = '' WHERE configuration_key ='IMAGE_SUFFIX_MEDIUM' LIMIT 1 ;
UPDATE configuration SET configuration_value = '' WHERE configuration_key ='IMAGE_SUFFIX_LARGE' LIMIT 1 ;
