<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: admin_activity.php drbyte Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Управление логом активности админов');
define('HEADING_SUB1', 'Посмотреть или экспортировать логи');
define('HEADING_SUB2', 'Очистить историю');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Формат файла экспорта:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Имя файла экспорта:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Сохранить в файл на сервере? (иначе начнётся загрузка в окне браузера)');
define('TEXT_ACTIVITY_EXPORT_DEST','Сохранить в: ');
define('TEXT_PROCESSED', ' Обрабатывается.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Экспорт закончен. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ПРЕДУПРЕЖДЕНИЕ: Ошибка при экспорте. Не удалось записать в файл ');

define('TEXT_INSTRUCTIONS','<u>ИНСТРУКЦИЯ</u><br />You can use this page to export your Zen Cart&reg; Admin User Access Activity to a CSV file for archiving.<br />You should save this data for use in fraud investigations in case your site is compromised. This is a requirement for PCI Compliance.<br />
<ol><li>Choose whether to display or export to a file.<li>Enter a filename.<li>Click Save to proceed.<li>Choose whether to save or open the file, depending on what your browser offers.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Empty Admin Activity Log table from the database<br />WARNING: BE SURE TO BACKUP YOUR DATABASE before running this update!</strong><br />The Admin Activity Log is a tracking method that records activity in the Admin. <br />Due to its nature it can become very large, very quickly and does need to be cleaned out from time to time.<br />Warnings are given at 50,000 records or 60 days, which ever happens first.<br /><span class="alert">NOTE: For PCI Compliance, you are required to retain admin activity log history for 12 months.<br />It is best to archive your logs by choosing EXPORT TO CSV and clicking Save, above, *BEFORE* purging log data.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">WARNING!: You are about to DELETE *important* audit trail records from your database.</span></strong><br />You should FIRST confirm that you have a reliable BACKUP of your database before proceeding.<br />By proceeding you accept that this information will be deleted and understand your legal responsibilities regarding this data.<br /><br />I understand my responsibilities, and wish to proceed with the deletion by clicking Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Завершена</strong> очистка лога активности администратора');
define('TEXT_NO_RECORDS_FOUND', 'Не найдено ни одной записи при выбранном фильтре.');

define('TEXT_EXPORTFORMAT0', 'Экспорт в HTML (идеально для просмотра на экране)');
define('TEXT_EXPORTFORMAT1', 'Экспорт в CSV (идеально для импорта в таблицы)');
define('TEXT_EXPORTFORMAT2', 'Экспорт в TXT');
define('TEXT_EXPORTFORMAT3', 'Экспорт в XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Какие данные лога Вы хотите посмотреть?');
define('TEXT_EXPORTFILTER0', 'Все данные, независимо от уровня серьёзности.');
define('TEXT_EXPORTFILTER1', 'INFO - Общая информация');
define('TEXT_EXPORTFILTER2', 'NOTICE - Примечания, которые должны периодически пересматриваться');
define('TEXT_EXPORTFILTER3', 'WARNING - Активность, которая должна пересматриваться ежедневно');
define('TEXT_EXPORTFILTER4', 'Обе NOTICE и WARNING.');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Интерпретация данных лога</strong><ul>
<li><strong>Серьёзность</strong> - описывают степень серьёзности следующим образом:
  <ul>
  <li><strong>INFO</strong> относится к общей активности. Это может или не может содержать примечаний.</li>
  <li><strong>NOTICE</strong> относится к деятельности, с использованием более высоких привилегией, и могут включать такие вещи, как создание новых пользователей с правами администратора или добавление новых модулей оплаты. В нем также отмечается, когда какие-либо данные, представленные на веб-странице, включают в себя потенциально опасный контент, такой как теги скриптов и встроенные фреймы iframe, где вредоносное содержимое добавляется к страницам товаров/категорий/страниц. Они должны регулярно пересматриваться на предмет аномалий, таких как несанкционированные действия.</li>
  <li><strong>WARNING</strong> соответствует КРИТИЧЕКСИМ действиям, таких как удаление модулей оплаты или удаления администраторов. Это действия, которые доставить неприятности. Они должны быть рассмотрены очень часто; рекомендуется ежедневно.</li>
  </ul>
</li>
<li><strong>admin_user</strong> - ID и имя администратора. Если не залогинен, то он покажет 0.</li>
<li><strong>page_accessed</strong> - название страницы.</li>
<li><strong>parameters</strong> - остаток URI страницы.</li>
<li><strong>flagged</strong> - если значение равно 1, это означает, что вы должны просмотреть содержимое записанное в поле "postdata" для проверки несанкционированного включения скрипта или iframe или другого потенциально опасного контента. Описание подозрительного контента будет перечислено в поле "внимание".</li>
<li><strong>attention</strong> - будет содержать предложения, связанные с подозрительной деятельностью, которые должны быть рассмотрены в поле "postdata", если оно отмечено</li>
<li><strong>logmessage</strong> - содержит какие-либо сообщения, записанные с помощью системы слежения за активностью, например, установка того или иного модуля.</li>
<li><strong>postdata</strong> - содержит необработанные данные POST (с некоторой конфиденциальной информацией) для удобного обзора в случае вредоносных действий подозревается.</li>
</ul></p>');

// EOF