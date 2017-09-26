<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Управление рассылками новостей');

define('TABLE_HEADING_NEWSLETTERS', 'Новости');
define('TABLE_HEADING_SIZE', 'Размер');
define('TABLE_HEADING_MODULE', 'Модуль');
define('TABLE_HEADING_SENT', 'Послано');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_NEWSLETTER_MODULE', 'Модуль:');
define('TEXT_NEWSLETTER_TITLE', 'Название:');
define('TEXT_NEWSLETTER_CONTENT', 'Текстовая версия:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'HTML-версия:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Дата добавления:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Дата отправки:');

define('TEXT_INFO_DELETE_INTRO', '- Вы действительно хотите удалить это информационное письмо?');

define('TEXT_PLEASE_WAIT', 'Пожалуйста, ждите ... отправляются emails ..<br /><br />Пожалуйста, не прерывайте этот процесс!<br />');
define('TEXT_FINISHED_SENDING_EMAILS', 'Завершение отправки e-mails!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s email отправлен. <br /><br />Следите за своим почтовым ящиком (' . EMAIL_FROM . ') для того чтобы увидеть:<ul><li>количество возвратов,</li><li>недействительные email адреса,</li><li>просьбы об отписке</li></ul>.');

define('ERROR_NEWSLETTER_TITLE', 'Ошибка: Требуется название письма');
define('ERROR_NEWSLETTER_MODULE', 'Ошибка: Вы не определили режим сообщения');
define('ERROR_PLEASE_SELECT_AUDIENCE','Ошибка: Выберите покупателей');

// EOF