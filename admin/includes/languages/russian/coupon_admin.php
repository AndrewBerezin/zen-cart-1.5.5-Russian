<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version GIT: $Id: Author: ajeh  Mon Dec 3 19:32:36 2012 -0500 Modified in v1.5.2 $
*/

define('TOP_BAR_TITLE', 'Статистика');
define('HEADING_TITLE', 'Купоны на скидку');
define('HEADING_TITLE_STATUS', 'Статус:');
define('TEXT_CUSTOMER', 'Покупатель:');
define('TEXT_COUPON', 'Название купона');
define('TEXT_COUPON_ALL', 'Все купоны');
define('TEXT_COUPON_ACTIVE', 'Действующие купоны');
define('TEXT_COUPON_INACTIVE', 'Недействующие купоны');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_UNLIMITED', 'Всегда');
define('TEXT_FROM', 'От:');
define('TEXT_FREE_SHIPPING', 'Бесплатная доставка');
define('TEXT_MESSAGE', 'Сообщение:');
define('TEXT_RICH_TEXT_MESSAGE','Текстоовое сообщение:');
define('TEXT_SELECT_CUSTOMER', 'Выберите покупателя');
define('TEXT_ALL_CUSTOMERS', 'Все покупатели');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписчикам новостей');
define('TEXT_CONFIRM_DELETE', 'Вы уверены что хотите удалить этот купон?');
define('TEXT_SEE_RESTRICT', 'Применить ограничение');

define('TEXT_COUPON_ANNOUNCE','Мы рады предложить Вам купон на специальную скидку от нашего магазина!');

define('TEXT_TO_REDEEM', 'Вы можете воспользоваться этим купоном при оформлении заказа. Просто введите этот код в требуемое поле и подтвердите.');
define('TEXT_IN_CASE', ' в случае если у Вас возникнут проблемы. ');
define('TEXT_VOUCHER_IS', 'Код купона ');
define('TEXT_REMEMBER', 'Не потеряйте этот код. Перед тем как закрыть это письмо убедитесь, что Вы его сохранили.');
define('TEXT_VISIT', 'Наш магазин находится по адресу ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' и введите код купона ');
define('TEXT_COUPON_HELP_DATE', '<p><p>Купон действителен с %s и по %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Купон действителен с %s и по %s</p></p>');

define('TABLE_HEADING_ACTION', 'Действие');

define('CUSTOMER_ID', 'ID покупателя');
define('CUSTOMER_NAME', 'Имя покупателя');
define('REDEEM_DATE', 'Дата до которой действует купон');
define('IP_ADDRESS', 'IP Адрес');

define('TEXT_REDEMPTIONS', 'Погашения купона');
define('TEXT_REDEMPTIONS_TOTAL', 'Всего');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Для этого покупателя');
define('TEXT_NO_FREE_SHIPPING', 'Нет бесплатной доставки');

define('NOTICE_EMAIL_SENT_TO', 'Замечание: E-mail послать: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Нет ни одного выбранного покупателя.');
define('ERROR_NO_SUBJECT', 'Ошибка: Не были введены данные.');

define('COUPON_NAME', 'Название купона');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Номинал');
define('COUPON_CODE', 'Код купона');
define('COUPON_STARTDATE', 'Начало действия купона');
define('COUPON_FINISHDATE', 'Конец действия купона');
define('COUPON_FREE_SHIP', 'Бесплатная доставка');
define('COUPON_DESC', 'Описание купона');
define('COUPON_MIN_ORDER', 'Сумма минимального заказа');
define('COUPON_USES_COUPON', 'Сколько раз можно использовать купон при оформлении заказов');
define('COUPON_USES_USER', 'Сколько раз может использовать этот купон один покупатель');
define('COUPON_PRODUCTS', 'Купон действителен только для указанных товаров');
define('COUPON_CATEGORIES', 'Купон действителен только для указанных категорий');
define('VOUCHER_NUMBER_USED', 'Купон использован раз');
define('DATE_CREATED', 'Дата создания');
define('DATE_MODIFIED', 'Дата изменения');
define('TEXT_HEADING_NEW_COUPON', 'Создать новый купон');
define('TEXT_NEW_INTRO', 'Заполните следующую информацию для нового купона.<br />');
define('COUPON_ZONE_RESTRICTION', 'Зона действия купона: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Зона действия купона не обязательна.');

define('ERROR_NO_COUPON_AMOUNT', 'Не указан номинал купона');
define('ERROR_NO_COUPON_NAME', 'Не указано имя купона ');
define('ERROR_COUPON_EXISTS', 'Купон с этим кодом уже существует');

define('COUPON_NAME_HELP', 'Короткое название купона');
define('COUPON_AMOUNT_HELP', 'Номинал купона может быть указан в абсолютной величине или в процентах. Чтобы указать скидку в процентах - поставьте символ % в конце суммы.');
define('COUPON_CODE_HELP', 'Вы можете ввести свой код здесь, или оставить поле пустым и программа сама сгенерирует код.');
define('COUPON_STARTDATE_HELP', 'Дата, начиная с которой, купон будет активен и его можно будет использовать при оформлении заказов.');
define('COUPON_FINISHDATE_HELP', 'Дата, после которой купон уже нельзя будет применить при оформлении заказов.');
define('COUPON_FREE_SHIP_HELP', 'Отметьте данное поле, если Вы хотите чтобы покупатель, использующий купон при оформлении заказа, получил бесплатную доставку своего заказа. Внимание! Данная опция не может совместно использоваться с "Номиналом купона", т.е. нельзя сразу дать покупателю вычет суммы (или скидку) по купону и одновременно бесплатную доставку, только что-то одно, либо вычет (или скидка), либо бесплатная доставка. Данная опция учитывает "Сумму минимального заказа", т.е. Вы можете, например, давать покупателю, использующему купон, бесплатную доставку, только если сумма его заказа выше определённой Вами, а можете и не ограничивать сумму минимального заказа и давать бесплатную доставку всем, кто использует купон при оформлении заказа.');

define('COUPON_DESC_HELP', 'Здесь идет описание купона для покупателя');
define('COUPON_MIN_ORDER_HELP', 'Минимальная сумма заказа с которой начинает действовать купон');
define('COUPON_USES_COUPON_HELP', 'Максимальное количество раз, которое может быть использован купон. Оставьте пустым для безлимитного пользования.');
define('COUPON_USES_USER_HELP', 'Максимальное количество раз, которое может быть использован купон одним покупателем. Оставьте пустым для безлимитного пользования.');
define('COUPON_PRODUCTS_HELP', 'Разделяя запятой введите ID тех товаров, на которые будет распространяться купон скидки. Оставьте пустым если нет ограничений.');
define('COUPON_CATEGORIES_HELP', 'Разделяя запятой введите номера тех категорий, на которые будет распространяться скидочный купон. Например: 34_10, 65_15. Оставьте пустым если нет ограничений.');
define('COUPON_BUTTON_PREVIEW', 'Просмотр');
define('COUPON_BUTTON_CONFIRM', 'Подтвердить');
define('COUPON_BUTTON_BACK', 'Назад');

define('COUPON_ACTIVE', 'Статус');
define('COUPON_START_DATE', 'Дата начала');
define('COUPON_EXPIRE_DATE', 'Срок истекает');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Купон не может быть деактивирована.<br />Попробуйте изменить Приглашение Купона для удаления этой. Смотри Админ -> Конфигурация -> GV Купоны');
define('SUCCESS_COUPON_DISABLED', 'Успешно! Купон был деактивирован.');
define('TEXT_COUPON_NEW', 'Используйте новый код купона:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'Внимание! Купон создан. Копия отменена для купона: ');
define('TEXT_CONFIRM_COPY', 'Вы точно хотите копировать данный купон в другой купон?');
define('SUCCESS_COUPON_DUPLICATE', 'Успешно! Купон был продублирован.<br /><br />Проверьте название купона и дату.');

// EOF