<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: DrByte  Tue Jan 5 15:06:15 2016 -0500 Modified in v1.5.5 $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'Искусство электронной коммерции');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('ru_RU.UTF-8', 'en_US', 'en_US.utf8', 'en', 'English_United States.1252');
  @setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%d %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
		function zen_date_raw($date, $reverse = false) {
		  if ($reverse) {
		    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
		  } else {
		    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
		  }
		}
	}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'RUB');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'UTF-8');
mb_internal_encoding('UTF-8');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'запросов с');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME','Подарочный сертификат');
define('TEXT_GV_NAMES','Подарочный сертификат');
define('TEXT_GV_NAMES_A','Подарочного сертификата');
define('TEXT_GV_NAME_V','Подарочных сертификатов');
define('TEXT_GV_NAME_M','Подарочном сертификате');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM','Код погашения');

// used for redeem code sidebox
define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
define('BOX_GV_REDEEM_INFO', 'Код погашения: ');

// text for gender
define('MALE', 'Г-н');
define('FEMALE', 'Г-жа');
define('MALE_ADDRESS', 'Г-н');
define('FEMALE_ADDRESS', 'Г-жа');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[обзор]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Каталог');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Бренды');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Новинки');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Новинки...');

define('BOX_HEADING_FEATURED_PRODUCTS', 'Мы рекомендуем');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Мы рекомендуем...');
define('TEXT_NO_FEATURED_PRODUCTS', 'В ближайшее время мы составим список рекомендуемых товаров.');

define('TEXT_NO_ALL_PRODUCTS', 'В ближайшее время мы составим список всех товаров.');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Все товары...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Поиск');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Расширенный поиск');

// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Скидки');
define('CATEGORIES_BOX_HEADING_SPECIALS','Скидки...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Отзывы');
define('BOX_REVIEWS_WRITE_REVIEW', 'Напишите Ваш отзыв!');
define('BOX_REVIEWS_NO_REVIEWS', 'К настоящему времени нет отзывов для этого товара');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s Звезд!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Корзина');
  define('BOX_SHOPPING_CART_EMPTY', 'Ваша корзина пуста...');
  define('BOX_SHOPPING_CART_DIVIDER', 'шт.-&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'История заказов');

// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Лидеры продаж');
define('BOX_HEADING_BESTSELLERS_IN', 'Лидеры продаж <br />&nbsp;');

// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Сообщения');
define('BOX_NOTIFICATIONS_NOTIFY', 'Сообщите мне о новинках <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Не сообщайте мне о новинках <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Изготовитель');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Домашняя страница %s ');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Другие его товары');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Выбор языка');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Выбор валюты');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Информация:');
define('BOX_INFORMATION_PRIVACY', 'Приватность');
define('BOX_INFORMATION_CONDITIONS', 'О нас и условия работы');
define('BOX_INFORMATION_SHIPPING', 'Оплата и доставка');
define('BOX_INFORMATION_CONTACT', 'Контакты');
define('BOX_INFORMATION_UNSUBSCRIBE', 'Отписаться от новостей');

define('BOX_INFORMATION_SITE_MAP', 'Карта сайта');

// information box text in sideboxes/more_information.php - were TUTORIAL_
define('BOX_HEADING_MORE_INFORMATION', 'Дополнительная информация');
define('BOX_INFORMATION_PAGE_2', 'Page 2');
define('BOX_INFORMATION_PAGE_3', 'Page 3');
define('BOX_INFORMATION_PAGE_4', 'Page 4');

//New billing address text
define('SET_AS_PRIMARY' , 'Сделать основным адресом доставки');
define('NEW_ADDRESS_TITLE', 'Адрес плательщика');

// javascript messages
define('JS_ERROR', 'Ошибки при заполнении формы! Исправьте, пожалуйста:');

  define('JS_REVIEW_TEXT', '* Пожалуйста, добавьте несколько слов в Ваш комментарий. Отзыв должен состоять хотя бы из ' . REVIEW_TEXT_MIN_LENGTH . ' символов.');
  define('JS_REVIEW_RATING', '* Оцените, пожалуйста, этот товар.');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите, пожалуйста, метод оплаты для Вашего заказа.');

define('JS_ERROR_SUBMITTED', 'Эта форма уже отправлена. Пожалуйста нажмите Ok и ждите завершения этого процесса.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Введите, пожалуйста, способ оплаты для Вашего заказа.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Подтвердите пожалуйста согласие с условиями выполнения заказа, поставив отметку ниже.');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Пожалуйста, подтвердите, согласие с условиями секретности,поставив отметку ниже.');

define('CATEGORY_COMPANY', 'Организация');
define('CATEGORY_PERSONAL', 'Ваши персональные данные');
define('CATEGORY_ADDRESS', 'Ваш адрес');
define('CATEGORY_CONTACT', 'Контактная информация');
define('CATEGORY_OPTIONS', 'Выберите подписку на новости нашего магазина');
define('CATEGORY_PASSWORD', 'Ваш пароль');
define('CATEGORY_LOGIN', 'Ваш офис');
define('PULL_DOWN_DEFAULT', 'Выберите');
define('PLEASE_SELECT', 'Пожалуйста выберите...');
define('TYPE_BELOW', 'Напечатайте Ваш выбор ниже...');

define('ENTRY_COMPANY', 'Фирма:');
define('ENTRY_COMPANY_ERROR', 'Пожалуйста, введите название фирмы.');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Приветствие:');
define('ENTRY_GENDER_ERROR', 'Пожалуйста, выберите приветствие.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Имя:');
define('ENTRY_FIRST_NAME_ERROR', 'Вы правильно ввели своё имя? Наша система требует как минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' знаков. Пожалуйста, попробуйте ещё раз.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Фамилия:');
define('ENTRY_LAST_NAME_ERROR', 'Вы правильно ввели свою фамилию? Наша система требует как минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' знаков. Пожалуйста, попробуйте ещё раз.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Вы правильно ввели дату рождения? Наша система требует ввод даты рождения в формате: DD/MM/YYYY (например 30/05/1958)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS', 'E-mail:'); // define('ENTRY_EMAIL_ADDRESS', 'Адрес электронной почты:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Вы правильно ввели адрес электронной почты? Он должен содержать не менее ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' знаков. Пожалуйста, попробуйте ещё раз.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Извините, но наша система не может распознать Ваш адрес электронной почты. Пожалуйста, попробуйте ещё раз.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Такой E-Mail уже существует в нашей базе данных -- попробуйте войти в систему с этим адресом. Если Вы больше не используете этот адрес, Вы можете скорректировать его на странице Вашего профиля.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_NICK', 'Ник для форума:');
define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
define('ENTRY_NICK_DUPLICATE_ERROR', 'Этот ник уже используется на форуме. Попробуйте ещё раз.');
define('ENTRY_NICK_LENGTH_ERROR', 'Попробуйте ещё раз. Наша система требует в нике как минимум ' . ENTRY_NICK_MIN_LENGTH . ' знаков.');
define('ENTRY_STREET_ADDRESS', 'Адрес:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Адрес должен содержать ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' знаков.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Адрес (дополнительно):');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Почтовый индекс:');
define('ENTRY_POST_CODE_ERROR', 'Почтовый индекс должен содержать как минимум ' . ENTRY_POSTCODE_MIN_LENGTH . 'знаков.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Город:');
define('ENTRY_CUSTOMERS_REFERRAL', 'Код реферала:');

define('ENTRY_CITY_ERROR', 'Название города должно содержать как минимум ' . ENTRY_CITY_MIN_LENGTH . ' знака.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Регион:');
define('ENTRY_STATE_ERROR', 'Ваш регион должен иметь не меньше ' . ENTRY_STATE_MIN_LENGTH . ' знаков.');
define('ENTRY_STATE_ERROR_SELECT', 'Выберите регион из списка.');
define('ENTRY_STATE_TEXT', '*');
define('JS_STATE_SELECT', '-- Пожалуйста выберите --');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', 'Выберите страну из списка.');
define('ENTRY_COUNTRY_TEXT', '*(уже выбрана)');
define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Ваш телефонный номер должен содержать как минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' знаков.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Подписаться на новости магазина:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Подписан');
define('ENTRY_NEWSLETTER_NO', 'Неподписан');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Пароль:');
define('ENTRY_PASSWORD_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' знака.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Ваш повторный пароль должен соответсвовать первому паролю.');
define('ENTRY_PASSWORD_TEXT', '* (минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Подтвердите пароль:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Текущий пароль:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' знаков.');
define('ENTRY_PASSWORD_NEW', 'Новый пароль:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Ваш новый пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' знаков.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Ваш повторный пароль должен соответсвовать первому паролю.');
define('PASSWORD_HIDDEN', '--скрыт--');

define('FORM_REQUIRED_INFORMATION', '* Поля, обязательные для заполнения');
  define('ENTRY_REQUIRED_SYMBOL', '*');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Результат:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано с <b>%d</b> по <b>%d</b> (Всего товаров <b>%d</b>)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показано с <b>%d</b> по <b>%d</b> (Всего Заказов <b>%d</b>)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано с <b>%d</b> по <b>%d</b> (Всего Отзывов <b>%d</b>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Показано с <b>%d</b> по <b>%d</b> (Всего новых товаров <b>%d</b>)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показано <b>%d</b> с <b>%d</b> (Всего скидок <b>%d</b>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Показано <strong>%d</strong> с <strong>%d</strong> (из <strong>%d</strong> рекомендуемых товаров)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Показано <strong>%d</strong> с <strong>%d</strong> (из <strong>%d</strong> товаров)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Первая страница');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Предыдущая страница');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Следующая страница');
define('PREVNEXT_TITLE_LAST_PAGE', 'Последняя страница');
define('PREVNEXT_TITLE_PAGE_NO', 'Страница %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Предшествующая установка %d страниц');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Следующая установка %d страниц');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Первая');
define('PREVNEXT_BUTTON_PREV', '[&lt;&nbsp;Предыдущая]');
define('PREVNEXT_BUTTON_NEXT', '[Следующая&nbsp;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'Последняя&gt;&gt;');

define('TEXT_BASE_PRICE','Базовая цена: ');

define('TEXT_CLICK_TO_ENLARGE', 'Увеличить картинку');

define('TEXT_SORT_PRODUCTS', 'Сортировка товаров ');
define('TEXT_DESCENDINGLY', 'по убыванию');
define('TEXT_ASCENDINGLY', 'по возрастанию');
define('TEXT_BY', ' по ');

define('TEXT_REVIEW_BY', ' %s');
define('TEXT_REVIEW_WORD_COUNT', '%s слова');
define('TEXT_REVIEW_RATING', 'Рейтинг: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Дата добавления: %s');
define('TEXT_NO_REVIEWS', 'К настоящему времени нет отзывов о товаре.');

define('TEXT_NO_NEW_PRODUCTS', 'На сегодня нет новых товаров.');

define('TEXT_UNKNOWN_TAX_RATE', 'Налог');

define('TEXT_REQUIRED', '<span class="errorText">Обязательно</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Предупреждение: директория инсталляции находится в: %s. Пожалуйста удалите эту директорию по соображениям безопасности.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Предупреждение: Файл конфигурации доступен для записи: %s. Это - потенциальный риск безопасности. Пожалуйста установите необходимые права доступа к этому файлу (только чтение, обычно CHMOD 644 или 444). Возможно Вам необходимо воспользоваться файл-менеджером контрольной панели хостинга для изменения прав доступа. Читайте статью в <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">справочнике</a>.');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Ошибка: Не могу удалить указанный файл. Из-за серверных установок ограничения доступа Вам необходимо воспользоваться доступом через ФТП для удаления файла.');
  define('WARNING_SESSION_AUTO_START', 'Предупреждение: опция session.auto_start включена - отключите эту php характеристику в php.ini и перезапустите сервер.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Предупреждение: директория товаров на загрузку не существует: ' . DIR_FS_DOWNLOAD . '. Загружаемые товары не будут работать пока эта директория не будет правильной.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Предупреждение: Директория SQL кеш не существует: ' . DIR_FS_SQL_CACHE . '. Кеширование SQL не будет работать пока эта директория не будет создана.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Предупреждение: Директория SQL кеш не доступна на запись: ' . DIR_FS_SQL_CACHE . '. Кеширование SQL не будет работать пока не будут установлены правильные права доступа.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Вашу базу данных необходимо обновить до текущей версии. Для определения необходимого уровня обновления посмотрите Admin->Tools->Server Information.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ПРЕДУПРЕЖДЕНИЕ: Не могу найти языковой файл: ');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Срок действия введенный для кредитной карточки недействителен. Пожалуйста проверьте дату и пытайтесь снова.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Введенный номер кредитной карточки недействителен. Пожалуйста проверьте цифры и пытайтесь снова.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Номер кредитной карты начинается с %s. Возможно Вы ошиблись, мы не принимаем этот тип кредитных карт. Пожалуйста попробуйте ещё раз или используёте другую карту.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Купон на скидку');
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Баланс ');
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Ваш счет');
define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
define('ERROR_REDEEMED_AMOUNT', 'Поздравляем, Вы реализовали ');
define('ERROR_NO_REDEEM_CODE', 'Вы не ввели ' . TEXT_GV_REDEEM . '.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Неправильные' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
define('TABLE_HEADING_CREDIT', 'Доступный кредит');
define('GV_HAS_VOUCHERA', 'Вы имеете деньги на вашем ' . TEXT_GV_NAME . ' счету. Если Вы хотите <br />
 Вы можете послать эти деньги <a class="pageResults" href="');

define('GV_HAS_VOUCHERB', '"><strong>email</strong></a> кому нибудь');
define('ENTRY_AMOUNT_CHECK_ERROR', 'У Вас нет фондов (денег) на счету чтобы воспользоваться ими.');
define('BOX_SEND_TO_FRIEND', 'Послать' . TEXT_GV_NAME . ' ');

define('VOUCHER_REDEEMED', TEXT_GV_NAME . ' Погашен');
define('CART_COUPON', 'Купон на скидку :');
define('CART_COUPON_INFO', 'подробнее');
  define('TEXT_SEND_OR_SPEND','Доступный баланс на Вашем ' . TEXT_GV_NAME . ' счёте. Вы можете потратить их или подарить их кому-нибудь другому. Чтобы подарить их нажмите эту кнопку.');
  define('TEXT_BALANCE_IS', 'Ваш баланс ' . TEXT_GV_NAME . ' : ');
  define('TEXT_AVAILABLE_BALANCE', 'Ваш счёт ' . TEXT_GV_NAME . '');

// payment method is GV/Discount
define('PAYMENT_METHOD_GV', 'Подарочный сертификат/Купон');
define('PAYMENT_MODULE_GV', 'GV/DC');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Доступные кредиты');

define('TEXT_INVALID_REDEEM_COUPON', 'Неправильный код купона');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Вы должны потратить как минимум %s, чтобы использовать этот купон');
define('TEXT_INVALID_STARTDATE_COUPON', 'Этот купон пока не активирован');
define('TEXT_INVALID_FINISHDATE_COUPON', 'Срок действия этого купона истек');
define('TEXT_INVALID_USES_COUPON', 'Это купон не может быть использован ');
define('TIMES', ' раз.');
define('TIME', ' раз.');
define('TEXT_INVALID_USES_USER_COUPON', 'Этим купоном можно пользоваться максимум: %s. Вы уже использовали купон это количество раз. ');
define('REDEEMED_COUPON', 'купон стоит ');
define('REDEEMED_MIN_ORDER', 'при заказах свыше ');
define('REDEEMED_RESTRICTIONS', ' [Ограничения в товарах/категориях применить]');
define('TEXT_ERROR', 'Возникла ошибка');
define('TEXT_INVALID_COUPON_PRODUCT', 'Данный код купона недействителен для какого-либо товара в Вашей корзине.');
  define('TEXT_VALID_COUPON', 'Наши поздравления! Вы выкупили скидочный купон!');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Введённый Вами код купона не действителен для выбранного Вами адреса.');

// more info in place of buy now
define('MORE_INFO_TEXT','... подробнее');

// IP Address
define('TEXT_YOUR_IP_ADDRESS','Ваш IP адрес: ');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION','Информация об адресе');

// cart contents
 define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Количество в корзине: ');
 define('PRODUCTS_ORDER_QTY_TEXT','Добавить в корзину: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Товар добавлен в корзину...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Выбранные товары добавлены в корзину...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','кг');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','кг');
  define('TEXT_SHIPPING_BOXES', 'Упаковки');

// Discount Savings
 define('PRODUCT_PRICE_DISCOUNT_PREFIX','Вы экономите: ');
 define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
 define('PRODUCT_PRICE_DISCOUNT_AMOUNT','');

// Sale Maker Sale Price
 define('PRODUCT_PRICE_SALE','Акция месяца: ');

//universal symbols
 define('TEXT_NUMBER_SYMBOL', '№ ');

// banner_box
 define('BOX_HEADING_BANNER_BOX','Обратите внимание!');
 define('TEXT_BANNER_BOX','Эти товары мы рекомендуем...');

// banner box 2
 define('BOX_HEADING_BANNER_BOX2','Наши партнеры');
 define('TEXT_BANNER_BOX2','Они достойны Вашего внимания!');

 // banner_box - all
 define('BOX_HEADING_BANNER_BOX_ALL','Спонсоры');
 define('TEXT_BANNER_BOX_ALL','Перейдите к нашим спонсорам...');

// boxes defines
 define('PULL_DOWN_ALL','Выберите');
 define('PULL_DOWN_MANUFACTURERS','Все производители');
// shipping estimator
 define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Выбор');

// general Sort By
define('TEXT_INFO_SORT_BY','Сортировать по: ');

// close window image popups
 define('TEXT_CLOSE_WINDOW',' - Кликните на картинке, чтобы закрыть');
// close popups
 define('TEXT_CURRENT_CLOSE_WINDOW','[ закрыть окно ]');

// iii 031104 added: File upload error strings
define('ERROR_FILETYPE_NOT_ALLOWED', 'Ошибка: неприемлемый тип файла.');
define('WARNING_NO_FILE_UPLOADED', 'Предупреждение: не загружено ни одного файла.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Поздравляем: файл сохранен успешно.');
define('ERROR_FILE_NOT_SAVED', 'Ошибка: Файл не сохранен.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Ошибка: пункт назначения нечитаемый.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Ошибка: пункт назначения не существует.');
  define('ERROR_FILE_TOO_BIG', 'Внимание: слишком большой файл для загрузки!<br />Заказ может быть размещён, но пожалуйста свяжитесь с администрацией магазина для решения проблемы загрузки файла');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'Внимание! Магазин будет закрыт на реконструкцию: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'Внимание! Магазин закрыт на реконструкцию');

define('PRODUCTS_PRICE_IS_FREE_TEXT','Это БЕСПЛАТНО!!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Узнать цену');
define('TEXT_CALL_FOR_PRICE','Узнать цену');

  define('TEXT_INVALID_SELECTION',' Вы выбрали неправильную отметку: ');
  define('TEXT_ERROR_OPTION_FOR',' On the Option for: ');
  define('TEXT_INVALID_USER_INPUT', 'Требуется ввод пользователя<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Минимум: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Упаковок: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В корзине:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Добавить дополнительно:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','максимум:');

  define('TEXT_PRODUCTS_MIX_OFF','*добавление невозможно');
  define('TEXT_PRODUCTS_MIX_ON','*добавление возможно');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Вы не можете смешивать Опции для этого товара для получения минимального количества.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Значения смешанных Опций включено<br />');

  define('ERROR_MAXIMUM_QTY','- Максимальное количество товара уже добавленно в корзину ');
  define('ERROR_CORRECTIONS_HEADING','Исправьте следующее: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'Количество, добавленное в корзину, было скорректировано. Данный товар не доступен в дробные количествах. Количество товара: ');
  define('ERROR_QUANTITY_CHANGED_FROM', ', изменено: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' вместо ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','Внимание! Загрузка файла не возможна, пока мы не получим подтверждение оплаты');
  define('TEXT_FILESIZE_BYTES', ' байтов');
  define('TEXT_FILESIZE_MEGS', ' Мб');

// shopping cart errors
  define('ERROR_PRODUCT','<br />Товар: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />К сожалению, на данный момент, этот товар удалён.<br />Он будет удалён из корзины.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br />Товар: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />К сожалению выбранная опция данного товара была удалена.<br />Этот товар будет удален из корзины.');
  define('ERROR_PRODUCT_QUANTITY_MIN',', ... ошибка минимального количества - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... указано неправильное количество единиц в упаковке - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br />... неправильно выбрано значение опции ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br />Вы заказали всего: ');
  define('ERROR_PRODUCT_QUANTITY_MAX','... Ошибка максимального количества - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', имеет ограничение минимального количества.');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART','... Ошибка количества упаковок - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART','... Ошибка максимального количества - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'Замечание: Для Вашего удобства текущая корзина была объединена с Вашей корзиной, оставшейся с Вашего последнего визита. Пожалуйста, ознакомьтесь с содержимом Вашей корзины перед оформлением покупки.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Количество было изменено в соответствии с тем, что есть в наличии.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Информация покупателя не может быть верифицирована!<br />Пожалуйста, войдите снова или пересоздайте Ваш аккаунт...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Рекомендуемые товары');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Новинки %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Ожидаемые товары');
  define('TABLE_HEADING_DATE_EXPECTED', 'Дата поступления');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Горячее предложение %s');

  define('CAPTION_UPCOMING_PRODUCTS','Эти товары скоро поступят на склад');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','таблица содержит список товаров, которые скоро поступят на склад, и ожидаемую дату поступления');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Бесплатно!');

// customer login
define('TEXT_SHOWCASE_ONLY','Контакты');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE','Цена недоступна');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Зарегистрируйтесь, чтобы увидеть цены');
// set for show room only
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Только режим просмотра');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Цена недоступна');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'Ожидание подтверждения');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Войти в магазин');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Оформление заказа не доступно - требуется подтверждение');


// text pricing
define('TEXT_CHARGES_WORD','Цена суммируется из:');
define('TEXT_PER_WORD','<br />Цена за слово: ');
define('TEXT_WORDS_FREE',' Слово бесплатно ');
define('TEXT_CHARGES_LETTERS','Цена суммируется из:');
define('TEXT_PER_LETTER','<br />Цена за букву: ');
define('TEXT_LETTERS_FREE',' Буква бесплатна ');
define('TEXT_ONETIME_CHARGES','*сумма за один раз = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*сумма за один раз = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Получите скидку от количества');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Кол-во');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Цена');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Опция получения одноразовой скидки от количества');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' максимально знаков доступно');
  define('TEXT_REMAINING','сохранение');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Расчет доставки:');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Пожалуйста <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Войдите</span></a>, чтобы рассчитать стоимость доставки.');
  define('CART_SHIPPING_METHOD_TEXT','Доступные способы доставки:');
  define('CART_SHIPPING_METHOD_RATES','Стоимость');
  define('CART_SHIPPING_METHOD_TO','Адрес доставки: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Адрес доставки: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Войдите</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Бесплатная доставка');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Загрузки');
  define('CART_SHIPPING_METHOD_RECALCULATE','Пересчитать');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Адрес:');
  define('CART_OT','Общая стоимость:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Товаров в корзине: ');
  define('CART_SELECT','Выберите');
  define('ERROR_CART_UPDATE', '<strong>Пожалуйста, обновите Ваш заказ.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Обновить заказ');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Ваша сессия истекла. Пожалуйста, обновите Вашу корзину.');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Стоимость доставки рассчитана для выбранного Вами адреса:');

// multiple product add to cart
 define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
 define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
 define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
 define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Вы экономите при таких скидках');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Экономьте заказывая больше!');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Вы экономите при таких скидках');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Скидки распространяются и на дополнительные опции товара');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Скидки от количества недоступны (не действуют)...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- СБРОСИТЬ - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Названию');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Названию по убыванию');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Цене по возрастанию');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Цене по убыванию');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Артикулу');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Более новому товару');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Более старому товару');
define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Сортировке магазина');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Срок действия ссылки');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Осталось');
  define('HEADING_DOWNLOAD', 'Чтобы загрузить Ваши файлы, нажмите на кнопку и в появившемся меню выберите "Сохранить".');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Имя файла');
  define('TABLE_HEADING_PRODUCT_NAME','Название товара');
  define('TABLE_HEADING_BYTE_SIZE','Размер файла');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Неограничен');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');
  define('PAYMENT_JAVASCRIPT_DISABLED', 'Мы не можем продолжить оформление заказа из-за отключенного JavaScript. Для продолженияоформления Вам нужно включить его');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Количество');
  define('TABLE_HEADING_PRODUCTS', 'Наименование');
  define('TABLE_HEADING_TOTAL', 'Всего');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Конфиденциальность');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Пожалуйста, подтвердите, что Вы согласны с нашими условиями конфиденциальности. С данными условиями Вы можете ознакомиться <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">здесь</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Я прочитал и согласен с вашими условиями конфиденциальности.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Детали адреса');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Дополнительная контактная информация');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Ваш возраст');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Детали логина');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Как Вы узнали о нас?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Извините, но мы больше не принимаем оплаты или доставку в "%s". Пожалуйста, обновите этот адрес, чтобы продолжить.');

  define('ENTRY_EMAIL_PREFERENCE','Рассылка писем и новостей');
  define('ENTRY_EMAIL_HTML_DISPLAY','Формат писем - HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Формат писем - текст');
  define('EMAIL_SEND_FAILED','ОШИБКА: Не могу отправить письмо: "%s" <%s> с темой: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Ошибка - Не могу соединится с базой данных');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">Ошибка 0071: проблема с базой данных. Требуется обслуживание.</a>');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ВНИМАНИЕ: HEADER дополнительных страниц - только для IP Админа');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ВНИМАНИЕ: FOOTER дополнительных страниц - только для IP Админа');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ВНИМАНИЕ: Боковые боксы дополнительных страниц - только для IP Админа');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Товары, начинающиеся на букву...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Сброс --');

///////////////////////////////////////////////////////////
// include email extras
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
 if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
 $template_dir_select = $template_dir . '/';
 } else {
 $template_dir_select = '';
 }
 require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS

// EOF