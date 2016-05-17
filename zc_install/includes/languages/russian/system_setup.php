<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: system_setup.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_SYSTEM_SETTINGS', 'Сохранить системные настройки'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', "Введите необходимые значения для системной настройки и нажмите  <em>".SAVE_SYSTEM_SETTINGS.'</em> для продолжения.');
  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; установка - установка системы');
  define('SERVER_SETTINGS', 'Настройки сервера/сайта');
  define('PHYSICAL_PATH', 'Абсолютный путь к Zen Cart&reg;');
  define('PHYSICAL_PATH_INSTRUCTION', 'Абсолютный путь к<br />директории Zen Cart&reg;<br />Без завершающего слеша.');
  define('VIRTUAL_HTTP_PATH', 'URL магазина Zen Cart&reg;');
  define('VIRTUAL_HTTP_PATH_INSTRUCTION', 'Виртуальный путь/URL к<br />директории Zen Cart&reg;<br />Без завершающего слеша.');
  define('VIRTUAL_HTTPS_PATH', 'HTTPS URL сервера');
  define('VIRTUAL_HTTPS_PATH_INSTRUCTION', 'Полный виртуальный путь к<br />безопасной директории Zen Cart&reg;<br />Без завершающего слеша.');
  define('VIRTUAL_HTTPS_SERVER', 'HTTPS домен');
  define('VIRTUAL_HTTPS_SERVER_INSTRUCTION', 'Виртуальный сервер для<br />безопасной директории Zen Cart&reg;<br />Без завершающего слеша.');
  define('TEXT_SSL_INTRO', '<strong>У Вас уже есть SSL Сертификат? Если да, то введите ниже детали.</strong> Если это Ваша первая установка, то подставляемые значения являются "наиболее вероятными". Пожалуйста сверьте информацию с Вашим хостинг-провайдером чтобы быть уверенным в правильности указываемых данных.');
  define('TEXT_SSL_WARNING', 'Если Вы уже работаете с SSL Сертификатом, укажите ниже Ваши установки SSL. <br /><strong>НЕ АКТИВИРУЙТЕ SSL здесь, если у Вас SSL не активирован на Вашем хостинге.</strong> Если Вы активировали SSL, а указанный Вами адрес SSL не работоспособен, то Вы не сможете работать ни с админом, ни с магазином. Вы можете активировать SSL позже, отредактировав Ваши конфигурационные файлы.');
  define('SSL_OPTIONS', 'Детали SSL');
  define('ENABLE_SSL', 'Включить SSL');
  define('ENABLE_SSL_INSTRUCTION', 'Хотите ли Вы включить Secure Sockets Layer (SSL) в пользовательском разделе?<br />');
  define('ENABLE_SSL_ADMIN', 'Включить SSL в административном разделе');
  define('ENABLE_SSL_ADMIN_INSTRUCTION', 'Хотите ли Вы включить Secure Sockets Layer (SSL) в административном разделе?<br />
Оставьте это значение НЕТ если Вы не уверены в работе SSL.');
  define('REDISCOVER', 'Повторное определение умолчаний для данного хостинга');

