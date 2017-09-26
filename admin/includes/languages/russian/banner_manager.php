<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
*/

define('HEADING_TITLE', 'Управление баннерами');

define('TABLE_HEADING_BANNERS', 'Баннеры');
define('TABLE_HEADING_GROUPS', 'Группы');
define('TABLE_HEADING_STATISTICS', 'Показы/Клики');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Новое окно');
define('TABLE_HEADING_BANNER_ON_SSL', 'Показать SSL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Сортировка');

define('TEXT_BANNERS_TITLE', 'Название баннера:');
define('TEXT_BANNERS_URL', 'Баннер URL:');
define('TEXT_BANNERS_GROUP', 'Группа баннеров:');
define('TEXT_BANNERS_NEW_GROUP', ', или укажите новую группу баннеров');
define('TEXT_BANNERS_IMAGE', 'Картинка:');
define('TEXT_BANNERS_IMAGE_LOCAL', 'Или укажите имя загруженного файла');
define('TEXT_BANNERS_IMAGE_TARGET', 'Загружаемую картинку <br />сохранить в директории:<br /><small>(указанная директория должна <br />заканчиваться косой чертой)</small>');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Предлагаемое расположение картинки баннера на сервере:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>Замечание: Баннеры с HTML-кодом не учитывают клики по баннеру</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML-код:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Порядок сортировки <br />для бокса banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Замечание: Бокс banners_box_all показывает все баннеры группы в порядке сортировки</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Закончить после:');
define('TEXT_BANNERS_OR_AT', ', или после');
define('TEXT_BANNERS_IMPRESSIONS', 'просмотров.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Начать показы:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Примечания:</b><ul><li>Используйте для баннера только картинку или HTML-код, но не оба вида одновременно.</li><li>HTML-код имеет приоритет над картинкой</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Примечания к картинке:</b><ul><li>Для загрузки, директории должны иметь соответствующие разрешения для записи!</li><li>Не заполняйте поле \'сохранить в директории\' если Вы не загружаете картинку на сервер (т.е., Вы используете уже загруженную на сервер картинку).</li><li>Директория указанная в \'сохранить в директории\' должна заканчиваться косой чертой (например, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Окончание срока показа</b><ul><li>Укажите только одно из условий окончания показа.</li><li>Если Вы не планируете автоматически закончить показ баннера, тогда не заполняйте эти поля.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Начало показа:</b><ul><li>Если задано начало показа, то баннер будет активирован в заданную дату.</li><li>Все баннеры с указанной датой начала показа считаются как неактивные пока до наступления данной даты, после наступления даты показа они будут активированы.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Статус баннера:');
define('TEXT_BANNERS_ACTIVE', 'Активен');
define('TEXT_BANNERS_NOT_ACTIVE', 'Не активен');
define('TEXT_INFO_BANNER_STATUS', '<strong>Замечание:</strong> Статус баннера будет обновлен в установленное время');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Баннер в новом окне');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Замечание:</strong> Баннер откроет новое окно');
define('TEXT_BANNERS_ON_SSL', 'Баннер в SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Замечание:</strong> Баннер будет показан в защищенных страницах без ошибок');

define('TEXT_BANNERS_DATE_ADDED', 'Дата добавления:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Спланировано на:<b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Истекает: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Истекает: после <b>%s</b> показов');
define('TEXT_BANNERS_STATUS_CHANGE', 'Измененние статуса: %s');

define('TEXT_BANNERS_DATA', 'Д<br />А<br />Т<br />А');
define('TEXT_BANNERS_LAST_3_DAYS', 'За последние 3 дня');
define('TEXT_BANNERS_BANNER_VIEWS', 'Показ баннера');
define('TEXT_BANNERS_BANNER_CLICKS', 'Баннер клик');

define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить этот баннер?');
define('TEXT_INFO_DELETE_IMAGE', 'Удалить картинку?');

define('SUCCESS_BANNER_INSERTED', 'Баннер включен');
define('SUCCESS_BANNER_UPDATED', 'Баннер обновлен');
define('SUCCESS_BANNER_REMOVED', 'Баннер удален');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Статус баннера изменён.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Ошибка: требовалось название баннера.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Ошибка: требовалась группа баннеров.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Указанная директория не существует.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Указанная директория защищена от записи.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Ошибка: Картинка не существует.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Ошибка: Картинка не может быть удалена.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Ошибка: Неизвестный статус баннера.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Ошибка: Требуется картинка баннера.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория graphs не существует. Пожалуйста, создайте директорию \'graphs\' в папке \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Ошибка: директория graphs - закрыта для записи. Измените разрешения на CMOD 777');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Показывать в SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Новое окно');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Открыть в новом окне - Возможно');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Открыть в новом окне - Невозможно');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Показывать на защищенных страницах - Возможно');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Показывать на защищенных страницах - Невозможно');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Успешно: теперь баннер при клике будет открывать ссылку в новом окне.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Успешно: Теперь баннер будет виден и на SSL-страницах.');

// EOF