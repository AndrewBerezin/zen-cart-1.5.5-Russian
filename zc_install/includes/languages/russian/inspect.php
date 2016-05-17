<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: inspect.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; установка - проверка системы');
  define('INSTALL_BUTTON', ' Установка '); // this comes before TEXT_MAIN
  define('UPGRADE_BUTTON', 'Обновить Cfg файлы'); // this comes before TEXT_MAIN
  define('DB_UPGRADE_BUTTON', 'Обновить базу данных'); // this comes before TEXT_MAIN
//Button meanings: (to be made into help-text for future version):
// "Install" = make new configure.php files, regardless of existing contents.  Load new database by dropping old tables.
// "Upgrade" = read old configure.php files, and write new ones using new structure. Upgrade database, instead of wiping and new install
// "Database Upgrade" = don't write the configure.php files -- simply jump to the database-upgrade page. Only displayed if detected database version is new enough to not require configure.php file updates.

  define('TITLE_DOCUMENTATION', 'Документация');
  define('TEXT_DOCUMENTATION', '<h3>Вы уже прочитали инструкцию по установке?</h3><a href="%s" target="_blank">Инструкция по установке</a> может очень помочь.<br />Здесь Вы можете найти информацию об уровнях доступа, которые Вам необходимо установить для различных директорий и файлов и другие детал пре- и пост-устновки. Вы также можете воспользоваться <a href="http://tutorials.zen-cart.com/" target="_blank">онлайн справочником</a> и другими полезными ресурсами.');

  define('TEXT_MAIN', 'Подождите пока инсталлятор проверит наличие необходимых функций на вашем сервере для нормальной работы Zen Cart&reg;. &nbsp;Пожалуйста исправьте все ошибки перед продолжением установки. &nbsp;Потом кликните по кнопке <em>'.INSTALL_BUTTON.'&nbsp;</em> для продолжения');
  define('SYSTEM_INSPECTION_RESULTS', 'Результат проверки системы');
  define('OTHER_INFORMATION', 'Другая системная информация (только для ознакомления)');
  define('OTHER_INFORMATION_DESCRIPTION', 'Данная информация не является важной');

  define('NOT_EXIST','Не найдено');
  define('WRITABLE','Доступно на запись');
  define('UNWRITABLE',"<span class='errors'>Закрыто на запись</span>");
  define('UNKNOWN','Неизвестно');
  define('ON','Вкл');
  define('OFF','Выкл');
  define('OK','OK');

  define('UPGRADE_DETECTION','Доступен режим обновления');
  define('LABEL_PREVIOUS_INSTALL_FOUND','Zen Cart&reg; уже установлен');
  define('LABEL_PREVIOUS_VERSION_NUMBER','База данных Zen Cart&reg; v%s');
  define('LABEL_PREVIOUS_VERSION_NUMBER_UNKNOWN','<em>Версия базы данных не может быть определена точно, это может быть из-за неправильных префиксов в самой базе, или из-за настроек базы данных. <br /><br />Внимание: Используйте обновление только в том случае,когда вы уверены, что ваш файл configure.php содержит верные настройки</em>');
  define('LABEL_UPGRADE_VS_INSTALL', 'Установка или обновление?');
  define('LABEL_INSTALL', 'Готовы к установке? (При этом удалятся все существующие данные! Это не ОБНОВЛЕНИЕ!!!)');

  define('IMAGE_STOP_BEFORE_UPGRADING', '<div class="center"><img src="includes/templates/template_default/images/stop.gif" border="0" alt="ПРЕДУПРЕЖДЕНИЕ: Убедитесь в том, что Вы сделал правильный выбор." /></div>');

  define('LABEL_ACTION_SELECTION_INSTRUCTIONS','<p class="errors extralarge"><span class="center">NOTE:</span><br />Если Вы выбрали "Обновление", то обязательно выберите ниже "<span style="text-decoration: underline;">Обновление Базы Данных</span>", чтобы сохранить Ваши данные.</p><p class="extralarge">Если Вы выберите "Установка", Вы удалите все Ваши данные из базы.</p>');

  define('DISPLAY_PHP_INFO','PHP Инфо: ');
  define('VIEW_PHP_INFO_LINK_TEXT','Просмотреть PHPINFO на Вашем сервере');
  define('LABEL_WEBSERVER','Сервер');
  define('LABEL_MYSQL_AVAILABLE','MySQL поддержка');
  define('LABEL_MYSQL_VER','MySQL версия');
  define('LABEL_DB_PRIVS','Права базы данных');
  define('LABEL_POSTGRES_AVAILABLE','PostgreSQL поддержка');
  define('LABEL_PHP_VER','PHP версия');
  define('LABEL_PHP_OS','PHP O/S');
  define('LABEL_REGISTER_GLOBALS','Register Globals');
  define('LABEL_SET_TIME_LIMIT','PHP Max Execution Time на страницу');
  define('LABEL_DISABLED_FUNCTIONS','Отключенные PHP функции');
  define('LABEL_SAFE_MODE','PHP Safe Mode');
  define('LABEL_CURRENT_CACHE_PATH','Текущая SQL Cache директория');
  define('LABEL_SUGGESTED_CACHE_PATH','Рекомендуемая SQL Cache директория');
  define('LABEL_HTTP_HOST','HTTP хост');
  define('LABEL_PATH_TRANLSATED','Транслированный путь');
  define('LABEL_REALPATH', 'Реальный путь');
  define('LABEL_PHP_API_MODE','PHP API Mode');
  define('LABEL_PHP_MODULES','Активные модули PHP');
  define('LABEL_PHP_EXT_SESSIONS','PHP поддержка сессий');
  define('LABEL_PHP_SESSION_AUTOSTART','PHP Session.AutoStart');
  define('LABEL_PHP_EXT_SAVE_PATH','PHP Session.Save_Path');
  define('LABEL_PHP_EXT_CURL','PHP поддержка cURL');
  define('LABEL_CURL_NONSSL','CURL NON-SSL Capability');
  define('LABEL_CURL_SSL','CURL SSL Capability');
  define('LABEL_CURL_NONSSL_PROXY','CURL NON-SSL Capability via Proxy');
  define('LABEL_CURL_SSL_PROXY','CURL SSL Capability via Proxy');
  define('LABEL_PHP_MAG_QT_RUN','PHP настройки magic_quotes_runtime');
  define('LABEL_PHP_MAG_QT_SYBASE','PHP установки magic_quotes_sybase');
  define('LABEL_PHP_EXT_GD','PHP поддержка GD');
  define('LABEL_GD_VER','GD версия');
  define('LABEL_PHP_EXT_OPENSSL','PHP поддержка OpenSSL');
  define('LABEL_PHP_UPLOAD_STATUS','PHP поддержка Upload');
  define('LABEL_PHP_EXT_PFPRO','PHP поддержка Payflow Pro');
  define('LABEL_PHP_EXT_ZLIB','PHP поддержка ZLIB Compression');
  define('LABEL_PHP_SESSION_TRANS_SID','PHP session.use_trans_sid');
  define('LABEL_DISK_FREE_SPACE','Свободное место на диске сервера');
  define('LABEL_XML_SUPPORT','PHP поддержка XML');
  define('LABEL_OPEN_BASEDIR','PHP ограничения open_basedir');
  define('LABEL_UPLOAD_TMP_DIR','PHP директория TMP для загрузки файлов');
  define('LABEL_SENDMAIL_FROM','PHP sendmail \'from\'');
  define('LABEL_SENDMAIL_PATH','PHP sendmail path');
  define('LABEL_SMTP_MAIL','PHP SMTP назначение');
  define('LABEL_GZIP', 'PHP Output Buffering (gzip)');
  define('LABEL_INCLUDE_PATH','PHP include_path');

  define('LABEL_CRITICAL','Критические значения');
  define('LABEL_RECOMMENDED','Рекомендуемые значения');
  define('LABEL_OPTIONAL','Опциональные значения');

  define('LABEL_EXPLAIN','&nbsp;Подробнее');
  define('LABEL_FOLDER_PERMISSIONS','Права на файлы и папки');
  define('LABEL_WRITABLE_FILE_INFO', 'Чтобы инсталлятор мог сохранить введённые Вами на следующих старницах, установки, файлы configure.php длжны быть доступны для записи.');
  define('LABEL_WRITABLE_FOLDER_INFO','Чтобы большинство функции Zen Cart&reg; работало правильно, Вам необходимо установить на некоторые файлы/директории права "Запись". Ниже приведён список директорий, для которых необходим доступ "чтение-запись", одновременно с рекомендуемыми значениями CHMOD. Пожалуйста скорректируйте эти значения перед тем, как продолжать установку.
Перезагрузите страницу в браузере для проверки установок.<br /><br />Некоторые хостинги не разрешают установку CHMOD 777, только 666. Начните с установки большего значения и затем переключайтесь на меньшее, если в этом есть необходимость.');
// BOF Inspect mbstring
  define('LABEL_PHP_EXT_MBSTRING','PHP поддержка Multibyte String');
// EOF Inspect mbstring