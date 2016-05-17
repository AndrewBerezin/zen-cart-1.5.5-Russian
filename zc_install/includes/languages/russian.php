<?php
/**
 * Main English language file for installer
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Apr 24 13:48:29 2014 -0400 Modified in v1.5.4 $
 */
/**
 * defining language components for the page
 */
  define('YES', 'Да');
  define('NO', 'Нет');
  define('REFRESH_BUTTON', 'Перепроверить');
  define('OKAY', 'Выполнено!');

  // Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="ru"');

  // charset for web pages and emails
  define('CHARSET', 'utf-8');

  // META TAG TITLE
  define('META_TAG_TITLE', (defined('TEXT_PAGE_HEADING') ? TEXT_PAGE_HEADING : 'Zen Cart&reg; Установка'));

  define('INSTALLATION_IN_PROGRESS','Устанавливается ...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', 'Найдено несколько проблем, сейчас произойдет переадресация.');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>Внимание:&nbsp; Найдены проблемы</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', 'Ошибка установки: невозможно соединится с БД');
  define('SHOULD_UPGRADE','Вы должны выбрать обновление!');
  define('MUST_UPGRADE','Вы должны выбрать обновление перед установкой Zen Cart&reg;');

  define('UPLOAD_SETTINGS','Максимальный размер файлов должен быть меньше данного значения:.<br />
<em>upload_max_filesize</em> в php.ini %s <br />
<em>post_max_size</em> в php.ini: %s <br />' .
//'<em>Zen Cart&reg;</em> Upload Setting: %s <br />' .
'Вы должны скорретировать настройки в Apache для отключения загрузи или установке лимита на загружаемые файлы.
Смотрите документацию к Apache для более точной информации.');

  define('TEXT_HELP_LINK', ' далее...');
  define('TEXT_CLOSE_WINDOW', '[Закрыть окно]');
  define('STORE_ADDRESS_DEFAULT_VALUE', 'Название магазина
  Адрес
  Страна
  Телефон');

  define('ERROR_TEXT_ADMIN_CONFIGURE', '/admin/includes/configure.php не создан');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', '/includes/configure.php не создан');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', 'Путь отсутствует');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', 'Путь неверен');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', 'Виртуальный HTTP отсутствует');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', 'Виртуальный HTTPS отсутствует');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', 'Виртуальный HTTPS сервер отсутствует');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'Имя пользователя БД отсутствует');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // re-using another one, since message is essentially the same.

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'Хост базы данных отсутствует');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'Имя базы данных отсутствует');
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'SQL файл установки не установлен');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', 'База данных не поддерживается');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', 'Ошибка при соединении с базой данных');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_STORE_ZONE_NEEDS_SELECTION', 'Регион магазина должен быть определён.');
  define('ERROR_CODE_STORE_ZONE_NEEDS_SELECTION', '29');

  define('ERROR_TEXT_DB_NOTEXIST', 'База данных не найдена');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', 'Название магазина отсутствует');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', 'Имя владельца магазина отсутствует');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', 'Email магазина отсутствует');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', 'Email магазина неправильный');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', 'Адрес магазина отсутствует');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', 'Демо SQL файл не создан');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', 'Имя администратора отсутствует');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', 'Email администратора отсутствует');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', 'Email администратора неправильный');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', 'Пароль администратора отсутствует');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', 'Пароли не совпали');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'PHP версия 4.1.2');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'PHP версия не поддерживается');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', 'PHP версия не поддерживается');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'configure.php админа закрыт на запись');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'configure.php магазина закрыт на запись');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'Выбранная директория сессий/кеширования запросов SQL пустая');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'Выбранная директория сессий/кеширования запросов SQL не существует');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'Выбранная директория сессий/кеширования запросов SQL недоступна для записи');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_ADMIN_PASS_INSECURE', 'Пароль слишком простой. Должен содержать буквы и цифры и быть длиной не менее 7 символов.');
define('ERROR_CODE_ADMIN_PASS_INSECURE', '64');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register Globals включены');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe Mode включено');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED','Cache директория должна базироватся на хранении кэша в файле');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED','Невозможно обновить все configure.php файлы с новым префиксом');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE','Невозможно переименовать все таблицы');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH','PHP "session.save_path" закрыта на запись');
define('ERROR_CODE_SESSION_SAVE_PATH','74');

define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME','PHP "magic_quotes_runtime" активна');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME','75');

define('ERROR_TEXT_DB_VER_UNKNOWN','Версия базы данных неизвестна');
define('ERROR_CODE_DB_VER_UNKNOWN','76');

define('ERROR_TEXT_UPLOADS_DISABLED','Загрузка файлов отключена');
define('ERROR_CODE_UPLOADS_DISABLED','77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED','При обновлении необходим пароль администратора');
define('ERROR_CODE_ADMIN_PWD_REQUIRED','78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT','PHP Session поддержка необоходима');
define('ERROR_CODE_PHP_SESSION_SUPPORT','80');

define('ERROR_TEXT_PHP_AS_CGI','PHP запущен как cgi и это не рекомендуется если сервер работает под Windows');
define('ERROR_CODE_PHP_AS_CGI','81');

define('ERROR_TEXT_DISABLE_FUNCTIONS','Необходимые PHP функции отключены на данном сервере');
define('ERROR_CODE_DISABLE_FUNCTIONS','82');

define('ERROR_TEXT_OPENSSL_WARN','OpenSSL один из способов SSL (https://) поддержки на вашем сайте.<br /><br />Если поддержка является невозможной,проблема может быть в том,что:<br />(a) ваш хостинг не поддерживает SSL<br />(b) ваш сервер не имеет установленного OpenSSL, но возможно другой вид SSL сервиса может быть доступен<br />(c) ваш хост ещё не уведомлен об SSL сертификате, поэтому хотсер может включить SSL поддержку для вашего домена<br />(d) PHP может быть не настроен для работы с OpenSSL.<br /><br />В любом случае когда вы хотите поддержку SSL,вы должны обратится к своему хостинг провайдеру');
define('ERROR_CODE_OPENSSL_WARN','79');

define('ERROR_TEXT_DB_PREFIX_NODOTS','Префикс базы данных может состоять только из букв, цифр и символа подчёркивания');
define('ERROR_CODE_DB_PREFIX_NODOTS','83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART','PHP Session.autostart должен быть отключен.');
define('ERROR_CODE_PHP_SESSION_AUTOSTART','84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID','PHP Session.use_trans_sid должен быть отключен.');
define('ERROR_CODE_PHP_SESSION_TRANS_SID','86');
define('ERROR_TEXT_DB_PRIVS','Необоходимые разрешения для пользователя базы данных');
define('ERROR_CODE_DB_PRIVS','87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES','Произошла ошибка при записи в /includes/configure.php');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES','88');
define('ERROR_TEXT_GD_SUPPORT','GD поддержка');
define('ERROR_CODE_GD_SUPPORT','89');

define('ERROR_TEXT_DB_MYSQL5','Поддержка MySQL 5.7 (и выше) не протестирована');
define('ERROR_CODE_DB_MYSQL5','90');

define('ERROR_TEXT_OPEN_BASEDIR','Возможны проблемы при загрузке файлов или создании резервной копии');
define('ERROR_CODE_OPEN_BASEDIR','92');
define('ERROR_TEXT_CURL_SUPPORT','cURL поддержка не обнаружена');
define('ERROR_CODE_CURL_SUPPORT','93');
define('ERROR_TEXT_CURL_NOT_COMPILED', 'Библиотека cURL не скомпилирована в PHP - сообщите системному администратору');
define('ERROR_TEXT_CURL_PROBLEM_GENERAL', 'Обнаружены проблемы с поддержкой CURL: ');
define('ERROR_TEXT_CURL_SSL_PROBLEM', 'Необходима библиотека cURL с поддержкой SSL. Сообщите системному администратору.');
define('ERROR_CODE_CURL_SSL_PROBLEM','95');

define('ERROR_TEXT_MAGIC_QUOTES_SYBASE','В PHP включёны "magic_quotes_sybase"');
define('ERROR_CODE_MAGIC_QUOTES_SYBASE','94');

// BOF Inspect mbstring
define('ERROR_CODE_MBSTRING_SUPPORT','96');
define('ERROR_TEXT_MBSTRING_SUPPORT','Поддержка Multibyte String не обнаружена');
// EOF Inspect mbstring

  $error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'PHP версии 4.1.2 обнаружен');
    define('POPUP_ERROR_TEXT', 'Некоторые релизы PHP версии 4.1.2 имеют ошибку которую создают super global arrays. Это может дать результат в административном разделе Zen Cart&reg; который может стать недоступным. Рекомендуется обновить версию PHP.<br /><br />PHP 4.3.2 или выше является минимумом для работы Zen Cart&reg;.<br />Настоятельно рекомендуется PHP 4.3.11 или выше (в v4.x серии).');

  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', '/admin/includes/configure.php не создан');
    define('POPUP_ERROR_TEXT', 'Файл /admin/includes/configure.php не создан. Вы можете создать его также как пустой файл php или переименовав /admin/includes/dist-configure.php в configure.php.  После его создания, вы должны установить на него права CHMOD 666 или CHMOD 777.');

  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', '/includes/configure.php не создан');
    define('POPUP_ERROR_TEXT', 'Файл /includes/configure.php не создан. Вы можете создать его также как пустой файл php или переименовав /includes/dist-configure.php в configure.php.  После его создания, вы должны установить на него права CHMOD 666 или CHMOD 777 для установки.');

  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', 'Абсолютный путь');
    define('POPUP_ERROR_TEXT', 'Абсолютный путь указывает в какой директории находятся файлы Zen Cart&reg;. Например на linux системах HTML файлы хранятся в /var/www/html. Если вы потом переместите Zen Cart&reg; файлы в директорию \'store\', абсолютный путь будет /var/www/html/store. При установке очень важно указать абсолютный путь.');

  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTP путь');
    define('POPUP_ERROR_TEXT', 'Данный адрес пишется в адресной строке браузера для просмотра Zen Cart&reg; магазина. Если магазин находится в \'root\' вашего домена, путь будет таким \'http://www.yourdomain.com\'. Если файлы магазина будут лежать в директории \'store\' путь будет таким \'http://www.yourdomain.com/store\'.');

  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTPS сервер');
    define('POPUP_ERROR_TEXT', 'Это адрес вашего магазина при работе с SSL сервером. Этот адрес зависит от того, как SSL/Secure режим осуществлен на вашем сервере. Советуем прочитать <a href="http://www.zen-cart.com/modules/xoopsfaq/index.php?cat_id=2#46" target="_blank">Вопросы по HTTPS</a>');

  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTPS путь');
    define('POPUP_ERROR_TEXT', 'Данный адрес вводится в адресной строке браузера для просмотра Zen Cart&reg; магазина в secure/SSL режиме. Советуем прочитать <a href="http://www.zen-cart.com/modules/xoopsfaq/index.php?cat_id=2#46" target="_blank">Вопросы по HTTPS</a>');

  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'Включение SSL');
    define('POPUP_ERROR_TEXT', 'Данная настройка определяет включен ли SSL/Secure (HTTPS:) режим в вашем Zen Cart&reg; магазине.<br /><br />Любай информация введенная в магазине защищается SSL/Secure. Это может быть активировано в администраторском разделе.<br /><br />У вас должен быть доступ к SSL серверу. <br /><br />Если вы не уверены что у вас есть SSL сервер, установите данную настройку в положение Нет, и свяжитесь с вашим хостинг-провадйером для уточнения информации о наличии SSL сервера. Все настройки можно будет изменить после установки в файле configure.php');

  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', 'Абсолютный путь отсутствует');
    define('POPUP_ERROR_TEXT', 'Вы пропустили или не ввели значение в поле абсолютный путь');

  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', 'Абсолютный путь неправильный');
    define('POPUP_ERROR_TEXT', 'Абсолютный путь неправильный, проверьте его и попробуйте ещё раз');

  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTP отсутствует');
    define('POPUP_ERROR_TEXT', 'Вы пропустили или не ввели значение в поле виртуальный HTTP');

  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTPS отсутствует');
    define('POPUP_ERROR_TEXT', 'Вы пропустили или не ввели значени в поле виртуальный HTTPS путь. Введите значение или отключите SSL режим.');

  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', 'Виртуальный HTTPS сервер отсутствует');
    define('POPUP_ERROR_TEXT', 'Вы пропустили или не ввели значени в поле виртуальный HTTPS сервер. Введите значение или отключите SSL режим.');

  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', 'Тип базы данных');
    define('POPUP_ERROR_TEXT', 'Zen Cart&reg; поддерживает несколько типов баз данных. На данный момент полноценная поддержка всех типов не завершена. Доступным является тип базы данных MySQL.');

  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', 'Хост базы данных');
    define('POPUP_ERROR_TEXT', 'Имя сервера на котором ваш хост будет работать с базой данных. В большинстве случаев это \'localhost\'. Если вы сомневаетесь, спросите у своего хостинг провайдера');

  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', 'Имя пользователя базы данных');
    define('POPUP_ERROR_TEXT', 'Все базы данных имеют имя пользователя и пароль для доступа к ним');

  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', 'Пароль базы данных');
    define('POPUP_ERROR_TEXT', 'Все базы данных имеют имя пользователя и пароль для доступа к ним. Пароль к базе данных выдает ваш хостинг-провадйер или вы, в том случае, когда вы сами создаете базу данных.<br /><br />Пароль чувствителен к регистру.');

  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', 'Имя базы данных');
    define('POPUP_ERROR_TEXT', 'Это имя базы данных которую будет использовать Zen Cart&reg;');

  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', 'Префикс базы данных');
    define('POPUP_ERROR_TEXT', 'Zen Cart&reg; позволяет добавлять префикс к таблицам базы данных. Это полезно в том случае, если Вы, кроме магазина, хотите установить что либо ещё в эту же базу данных. Тогда префикс позволяет легко идентифицировать таблицы Zen Cart&reg; по их префиксу.<br /><strong>Если в этом нет необходимости-оставьте поле пустым.</strong><br />Допускается использование цифр, латинских букв и символа подчёркивания.');

  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', 'Создание базы данных');
    define('POPUP_ERROR_TEXT', 'Данное значение отвечает за то, где Zen Cart&reg; создаст базу данных. Большинство хостингов не дают своим клиентам доступа к функции \'create\', но дают возможность самому создать базу данных через cPanel или phpMyAdmin.');

  break;
//  case ('21'):
//    define('POPUP_ERROR_HEADING', 'Соединение с базой данных');
//    define('POPUP_ERROR_TEXT', 'Постоянное соединение с базой данных сокращает нагрузку на нее. Проконсультируйтесь с вашим хостинг-провайдером по данной функции');
//
//  break;
//  case ('22'):
//    define('POPUP_ERROR_HEADING', 'Сессии в базе данных');
//    define('POPUP_ERROR_TEXT', 'Вы можете хранить сессии в файле или в базе данных. При базировании сессий в файле, работа с ними происходит быстрее, <strong>но сессии в базе данных рекомендуемы</strong> для всех магазинов использующих SSL соединения');
//
//  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'Включение SSL');
    define('POPUP_ERROR_TEXT', 'При выборе значения "true", магазин Zen Cart&reg; включит свою поддержку SSL режима. Также необходимо ввести верное значение HTTPS сервера и путь. Эти значения можно узнать у Вашего хостинг-провайдера.<br />Если у Вас еще нет SSL, Вам, возможно, придется купить его. Поддержка SSL включает в себя ежемесячную плату за выделенный IP, а также годовая плата за сертификат.');

  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', 'Хост базы данных отсутствует');
    define('POPUP_ERROR_TEXT', 'Хост базы данных отсутствует,пожалуйста введите его');
  break;

  case ('25'):
    define('POPUP_ERROR_HEADING', 'Имя пользователя базы данных отсутствует');
    define('POPUP_ERROR_TEXT', 'Имя пользователя базы данных отсутствует,пожалуйста введите его');

  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'SQL файл установки не создан');
    define('POPUP_ERROR_TEXT', 'Установщик не может найти .SQL файл для продолжения установки. Он должен находится в \'zc_install\' директории и называтся \'mysql_zencart.sql\'.');

  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', 'База данных не поддерживается');
    define('POPUP_ERROR_TEXT', 'Тип выбранной вами базы данных не поддерживается PHP,версия которого у вас установлена');

  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', 'Соединения с базой данных не произошло');
    define('POPUP_ERROR_TEXT', 'Соединения с базой данных не произошло. Это могло произойти по следующим причинам.<br /><br />
Вы могли дать неверное имя хоста базы данных, или имя пользователя или <em>пароль</em>могут быть неверными. <br /><br />
Вы могли ввести неправильно имя базы данных (<strong>Создана ли база?</strong> <strong>Вы ли её создавали?</strong> -- Внимание: Zen Cart&reg; не создает сам базу данных.).<br /><br />Проверьте пожалуйста ещё раз введенные данные');

  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', 'Невозможно создать базу данных');
    define('POPUP_ERROR_TEXT', 'У вас нет прав для создания пустой базы данных. Вы можете использовать cpanel или phpMyAdmin для создания пустой базы данных');

  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', 'База данных не создана');
    define('POPUP_ERROR_TEXT', 'База данных с именем которое вы ввели не создана. Проверьте факт её создания и правильность вводимого имени базы данных при установке');

  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', 'Не указано имя магазина');
    define('POPUP_ERROR_TEXT', 'Пожалуйста, укажите имя магазина.');

  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', 'Владелец магазина отсутствует');
    define('POPUP_ERROR_TEXT', 'Введите имя владельца магазина.  Данная информация отображается в \'Наши контакты\', \'Добро пожаловать\' email сообщении, и других местах по всему магазину');

  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', 'Email адрес магазина отсутствует');
    define('POPUP_ERROR_TEXT', 'Введите email адрес магазина. Данный адрес используется при отправке сообщений из магазина. Он не отображается на страницах магазина,хотя это можно активировать');

  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', 'Email адрес магазина неправильный');
    define('POPUP_ERROR_TEXT', 'Введите правильный email адрес магазина');

  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', 'Адрес магазина отсутствует');
    define('POPUP_ERROR_TEXT', 'Введите адрес вашего магазина. Он отображается на странице Наши контакты (может быть отключено), и на счетах/упаковке. Настоятельно рекомендуется заполнить данное поле');

  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', 'Демо файл SQL не создан');
    define('POPUP_ERROR_TEXT', 'Проверьте наличие файла в /zc_install/demo/xxxxxxx_demo.sql (xxxxxxx = тип вашей базы данных)');

  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', 'Название магазина');
    define('POPUP_ERROR_TEXT', 'Это используется в отправляемых emails из магазина и в некоторых случаях в заголовке бразуера.');

  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', 'Владелец магазина');
    define('POPUP_ERROR_TEXT', 'Информация о владельце магазина используется в emails отправляемых из магазина');

  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', 'Email владельца');
    define('POPUP_ERROR_TEXT', 'Главный email адрес через который происходит все контакты с магазином');

  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', 'Страна магазина');
    define('POPUP_ERROR_TEXT', 'Очень важно определить это значени для работы с классами налогов и отправке товаров');

  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', 'Область магазина');
    define('POPUP_ERROR_TEXT', 'Область/город/штат в которой находится магазин');

  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', 'Адрес магазина');
    define('POPUP_ERROR_TEXT', 'Используется в счетах и подтверждениях заказа');

  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', 'Язык по умолчанию');
    define('POPUP_ERROR_TEXT', 'Выберите язык магазина по умолчанию.Если вашего языка нет-после установки вы можете его добавить в разделе администратора');

  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', 'Валюта по умолчанию');
    define('POPUP_ERROR_TEXT', 'Выберите валюту магазина по умолчанию.Если вашей валюты нет-после установки вы можете её добавить в разделе администратора');

  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', 'Установка демо товаров');
    define('POPUP_ERROR_TEXT', 'Если вы хотите посмотреть на работу магазина с уже существующими товарами-установите демо товары');

  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', 'Имя администратора отсутствует');
    define('POPUP_ERROR_TEXT', 'Имя администратора необходимо для входа в систему после установки');

  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', 'Email администратора отсутствует');
    define('POPUP_ERROR_TEXT', 'Данное значение необходимо в случае утери пароля администратором');

  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', 'Email администратора неправильный');
    define('POPUP_ERROR_TEXT', 'Введите правильный email');

  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', 'Пароль администратор отсутствует');
    define('POPUP_ERROR_TEXT', 'Введите желаемый пароль администратора');

  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', 'Пароли не совпадают');
    define('POPUP_ERROR_TEXT', 'Введите заново пароль администратора и его подтверждение');

  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', 'Имя администратора');
    define('POPUP_ERROR_TEXT', 'Для входа в систему после установки, понадобится имя администратора');

  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', 'Email адрес администратора');
    define('POPUP_ERROR_TEXT', 'Данное значение необходимо в случае утери пароля администратором');

  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', 'Пароль администратора');
    define('POPUP_ERROR_TEXT', 'Пароль администратора необходим для входа в систему после установки');

  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', 'Подтверждение пароля администратора');
    define('POPUP_ERROR_TEXT', 'Необходимо что бы пароль совпал два раза подряд');

  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'PHP данной версии не поддерживается');
    define('POPUP_ERROR_TEXT', 'PHP который установлен на вашем сервере не поддерживается Zen Cart&reg;. <br /><br />PHP версии 4.3.2 является минимальным требованием');

  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'Файл администратора configure.php закрыт на запись');
    define('POPUP_ERROR_TEXT', '<em><strong>Статьи в помощь:</strong></em><br /><a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">How do I set permissions on files?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=148" target="_blank">What is CHMOD and what do the numbers mean?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=107#configurephp" target="_blank">How do I set permissions for configure.php files for installation?</a><br /><br />Файл <strong>admin/includes/configure.php</strong> только для чтения.<br /><br />Если вы используете Unix или Linux систему, установите права CHMOD 777 или 666 пока Zen Cart&reg; не завершил установку.  Это можно сделать воспользовавшись фтп-клиентом (клик правой кнопкой на файле или редактирование свойств файла).<br /><br />В системе Windows достаточно сделать файл доступным для чтения/записи.<br /><br />На серверах Windows, обычно работающих под IIS, Вам необходимо кликнуть правой кнопкой на файле, затем кликнуть на Security и убедиться, что "Internet Guest Account" или пользователь IUSR_xxxxxxx имеет доступ на чтение/запись.<br /><br /><strong>После того как установка заершена,</strong> Вам необходимо обязательно установить у файла права только на чтение (CHMOD 644 или 444, или в Windows, снять галочку "write", или отметить чек-бокс "the read-only").');

  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'Файл магазина configure.php закрыт на запись');
    define('POPUP_ERROR_TEXT', '<em><strong>Статьи в помощь:</strong></em><br /><a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">How do I set permissions on files?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=148" target="_blank">What is CHMOD and what do the numbers mean?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=107#configurephp" target="_blank">How do I set permissions for configure.php files for installation?</a><br /><br />Файл <strong>includes/configure.php</strong> только для чтения.<br /><br />Если вы используете Unix или Linux систему, установите права CHMOD 777 или 666 пока Zen Cart&reg; не завершил установку.  Это можно сделать воспользовавшись фтп-клиентом (клик правой кнопкой на файле или редактирование свойств файла).<br /><br />В системе Windows достаточно сделать файл доступным для чтения/записи.<br /><br />На серверах Windows, обычно работающих под IIS, Вам необходимо кликнуть правой кнопкой на файле, затем кликнуть на Security и убедиться, что "Internet Guest Account" или пользователь IUSR_xxxxxxx имеет доступ на чтение/запись.<br /><br /><strong>После того как установка заершена,</strong> Вам необходимо обязательно установить у файла права только на чтение (CHMOD 644 или 444, или в Windows, снять галочку "write", или отметить чек-бокс "the read-only").');

  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', 'Префикс таблиц базы данных');
    define('POPUP_ERROR_TEXT', 'Zen Cart&reg; позволяет давать префикс к таблицам базы данных. Это необходимо для того,если вы хотите установить в эту же базу данных кроме магазина, что либо ещё. <br /><strong>Если в этом нет необходимости-оставьте поле пустым.</strong>');

  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'SQL Cache директория');
    define('POPUP_ERROR_TEXT', 'SQL запросы могут кэшироватся в базе данных, в файле на сервере, или не кэшироватся вообще');

  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'SQL Cache метод');
    define('POPUP_ERROR_TEXT', 'Рекомендуется кэширование в базу данных');

  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', 'Session/SQL Cache директория отсутствует');
    define('POPUP_ERROR_TEXT', 'Если вы хотите использовать кэширование запросов Session/SQL в файле, вы должны ввести правильный путь директории на вашем сервере где будет находится данный файл, и убедится что на директорию стоят права на запись');

  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', 'Session/SQL Cache директория не создана');
    define('POPUP_ERROR_TEXT', 'Если вы хотите использовать кэширование запросов Session/SQL в файле, вы должны ввести правильный путь директории на вашем сервере где будет находится данный файл, и убедится что на директорию стоят права на запись');

  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', 'Session/SQL Cache директория закрыта на запись');
    define('POPUP_ERROR_TEXT', 'Если вы хотите использовать кэширование запросов Session/SQL в файле, вы должны ввести правильный путь директории на вашем сервере где будет находится данный файл, и убедится что на директорию стоят права на запись');
  break;

  case ('64'):
    define('POPUP_ERROR_HEADING', 'Подключить форум phpBB к магазину?');
    define('POPUP_ERROR_TEXT', 'Для подключения форума phpBB к магазину Zen Cart&reg;,выберите Да');

  break;
//  case ('65'):
//    define('POPUP_ERROR_HEADING', 'Префикс базы данных phpBB');
//    define('POPUP_ERROR_TEXT', 'Введите префикс таблиц в базе данных для phpBB. Обычно это \'phpBB_\'');
//
//  break;
//  case ('66'):
//    define('POPUP_ERROR_HEADING', 'Имя базы данных phpBB');
//    define('POPUP_ERROR_TEXT', 'Введите имя базы данных для phpBB');
//  break;
//  case ('67'):
//    define('POPUP_ERROR_HEADING', 'Директория phpBB');
//    define('POPUP_ERROR_TEXT', 'Введите пожалуйста абсолютный путь к phpBB');
//  break;
//  case ('68'):
//    define('POPUP_ERROR_HEADING', 'Директория phpBB');
//    define('POPUP_ERROR_TEXT', 'Файл конфигурации phpBB не найден в указанной вами директории');
//  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'Register Globals');
    define('POPUP_ERROR_TEXT', 'Zen Cart&reg; может работать с включённым и выключенным режимом "Register Globals". Выключение "Register Globals" даёт дополнительные возможности обеспечения безопасности.<br /><br />Если Вы хотите отказаться от этого, Вы можете попробовать добавить эти строки в файл .htaccess в корневой директории Вашего магазина (если его нет, то Вам необходимо создать его):<br /><br /><code>php_value session.use_trans_sid off<BR />php_value register_globals off<br />&lt;Files ".ht*"&gt;<BR />deny from all<BR />&lt;/Files&gt;</code><br /><br />или попросить помощи у Вашей хостинговой комании.');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'Safe Mode включен');
    define('POPUP_ERROR_TEXT', 'Безопаность и стабильность работы магазина под угрозой когда Safe Mode включен. Попросите вашего хостинг провайдера изменить на "SAFE_MODE=OFF" в php.ini файле');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', 'Cache директории необходимо использовать кэширование в файл');
    define('POPUP_ERROR_TEXT', 'Если Вы хотите использовать "кэширование SQL-запросов в файлах" в Zen Cart&reg;, Вы должны установить соответствующие права доступа на эту директорию.<br /><br />Опционально Вы можете выбрать "кэширование SQL-запросов в БД" или вовсе отказаться от кеширования, если Вы не хотите использовать директорию кеширования. В этом случае возможно Вам придётся также отключить сохранение сессий ("store sessions").<br /><br />Чтобы установить парвильные права на директорию Вам необходимо через фтп-клиент или контрольную панель хостинга установить CHMOD 666 или 777.<br /><br />Обычно пользователь (userID) Вашего веб-сервера (например: \'apache\' или \'www-user\' или maybe \'IUSR_something\' под Windows) должен иметь все права \'чтения-записи-удаления\' и т.д. для доступа к директории кеширования.');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'Ошибка: Невозможно обновить все файлы configure.php files с новым префиксом');
    define('POPUP_ERROR_TEXT', 'Вы должны вручную отредактировать /includes/configure.php и /admin/includes/configure.php и убедится что "define" для "DB_PREFIX" установлены правильно как и в Zen Cart&reg; таблицах вашей базы данных');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'Ошибка: невозможно применить новый префикс ко всем таблицам');
    define('POPUP_ERROR_TEXT', 'Просмотрите свою базу данных,возможно понадобится её восстановление с резервной копии');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', 'Внимание: PHP "session.save_path" закрыта на запись');
    define('POPUP_ERROR_TEXT', 'Это означает что вы не сможете хранить в данной директории временные файлы,это не является проблемой');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', 'Внимание: PHP "magic_quotes_runtime" активно');
    define('POPUP_ERROR_TEXT', 'Необходимо выключить "magic_quotes_runtime". Когда они включены, возможны 1064 SQL ошибки, и другие проблемы');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', 'Версия базы данных неизвестна');
    define('POPUP_ERROR_TEXT', 'Это не является проблемой,но было хорошо что бы система знала версию базы данных');
  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', 'Загрузка файлов отключена');
    define('POPUP_ERROR_TEXT', 'Загрузка файлов отключена. Что включить её, убедитесь что <em><strong>file_uploads = on</strong></em> на вашем сервере в файле php.ini');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', 'Требуется пароль администратора для обновления');
    define('POPUP_ERROR_TEXT', 'Имя пользователя и пароль администратора необходимы при внесении измененний в базу данных');
  break;
  case ('79'):
    define('POPUP_ERROR_TEXT','OpenSSL один из способов SSL (https://) поддержки на вашем сайте.<br /><br />Если поддержка является невозможной,проблема может быть в том,что:<br />(a) ваш хостинг не поддерживает SSL<br />(b) ваш сервер не имеет установленного OpenSSL, но возможно другой вид SSL сервиса может быть доступен<br />(c) ваш хост ещё не уведомлен об SSL сертификате, поэтому хотсер может включить SSL поддержку для вашего домена<br />(d) PHP может быть не настроен для работы с OpenSSL.<br /><br />В любом случае когда вы хотите поддержку SSL,вы должны обратится к своему хостинг провайдеру');
    define('POPUP_ERROR_HEADING','OpenSSL информация');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'PHP Session поддержка необходима');
    define('POPUP_ERROR_TEXT', 'Вы должны включить PHP Session поддержку на вашем сервере. Это очень важно для работы магазина');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'PHP работает как cgi. Рекомендуется если сервер работает под Windows');
    define('POPUP_ERROR_TEXT', 'Работа PHP как CGI может создать проблемы на Linux/Unix серверах');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'В файле конфигурации PHP на вашем сервере слишком много позиций которые находятся в выключенном состоянии.Это не есть нормально.Свяжитесь с вашим хостинг-провайдером для выяснения проблемы');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING','Недопустимые символы в префиксе таблиц базы данных');
    define('POPUP_ERROR_TEXT','Префикс таблиц базы данных может состять только из цифр, букв латинского алфавита и символа подчёркивания.<br /><br />Пожалуйста выбирайте разные префиксы. <strong>Мы рекомендуем оставлять значенеи по умолчанию</strong> или использовать что-нибудь простое типа "zen_".');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING','PHP Session.autostart должно быть отключено.');
    define('POPUP_ERROR_TEXT','Session.auto_start настройки в вашем файле PHP.INI в положении ON. <br /><br />Желательно отключить данную функцию,обратившись к вашему хостинг-провайдеру</code>');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING','Некоторые компоненты SQL не были установлены при обновлении.');
    define('POPUP_ERROR_TEXT','Это не нарушит работу магазина,скорее всего это произошло из-за того,что были установлены какие то дополнительные модули которые создали такие же ключи в базе данных, какие и необходимо было обновить');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING','PHP Session.use_trans_sid должно быть отключено.');
    define('POPUP_ERROR_TEXT','Данный параметр являет собой угрозу работе сессий и безопаности магазина');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING','Необходимые права для пользователя базы данных');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; необходимы для работы следующие привелегии-уровни привелегий:<ul><li>ALL PRIVILEGES<br /><em>or</em></li><li>SELECT</li><li>INSERT</li><li>UPDATE</li><li>DELETE</li><li>CREATE</li><li>ALTER</li><li>INDEX</li><li>DROP</li></ul>');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING','Ошибка при записи в /includes/configure.php');
    define('POPUP_ERROR_TEXT','Проверьте наличие всех прав доступа к configure.php files<br /><br />- /includes/configure.php<br />- /admin/includes/configure.php<br /><br />Выставление прав на Unix/Linux CHMOD 777 до окончания установки. После установки поставьте на них права 644 или 444');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING','GD поддержка');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; использует GD поддержку в PHP, если она доступна, для работы с изображениями. Требуется версия GD библиотеки не ранее 2.0');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING','MySQL 5 поддерживается не полностью');
    define('POPUP_ERROR_TEXT','Полное тестирование MySQL и Zen-Cart ещё не окончено');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING','Версия PHP недопустима');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; работает под версией PHP 4.3.2 и выше.<br /><br />На версиях ниже данной возможно проявление ошибок и нестабильной работы магазина');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING','open_basedir огрнаичение может создать проблемы');
    define('POPUP_ERROR_TEXT','Это может создать проблемы при загрузке файлов или создании резервной копии.<br /><br />Обратитесь к своему хостинг-провайдеру для решения данной проблемы');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING','cURL поддержка не обнаружена');
    define('POPUP_ERROR_TEXT','Необходима для некоторых модулей оплаты.Если модуль оплаты не функционирует должным образом,обратитесь к хостинг-провадйеру для установки cURL на сервер');
    define('POPUP_ERROR_TEXT','Некоторые модули оплаты и доставки требуют использования cURL для обращения к сторонним серверам для запроса данных в режиме реального времени или авторизации платёжных систем.<br /><br />Если Вы собираетесь использовать модули оплаты PayPal Express Checkout или Website Payments Pro или Authorize.net AIM поддержка Вам НЕОБХОДИМА.<br /><br />Ваш сервер может не поддерживать cURL или в Ваша учётная запись сконфигурирована без активации cURL. Если Вам требуется сторонний инструментарий использующий cURL, Вам нужно поговорить с Вашим хостером для установки cURL поддержки на сервере.<br /><br />Больше информации о CURL Вы можете найти на <a href="http://curl.haxx.se" target="_blank">сайте CURL</a>.');
  break;
  case ('94'):
    define('POPUP_ERROR_HEADING', 'Замечание: В PHP включёны "magic_quotes_sybase"');
    define('POPUP_ERROR_TEXT', 'Лучше выключить "magic_quotes_sybase". При влючённом "magic_quotes_sybase" Вы можете получить ошибку SQL 1064 и други проблемы проблемы с исполнением кода.<br /><br />Если Вы не можете выключить его для всего сервера, можете попытаться выключить его в файлах .htaccess или php.ini Вашего сайта. Обратитесь к Вашему хостинг-провайдеру за помощью.');
  break;
  case ('95'):
    define('POPUP_ERROR_HEADING','Необходима библиотека CURL с поддержкой SSL. Сообщите системному администратору.');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; использует библиотеку CURL и протокол SSL для связи с сервисами некоторых платёжных и доставочных систем.<br />При установке было обнаружено отсутствие поддержки CURL SSL.<br /><br />Вы не сможете воспользоваться модулями оплаты PayPal, Authorize.net, Linkpoint и возможно другими сторонними модулями оплаты/доставки пока не подключите поддержку CURL SSL.<br /><br />Больше информации о CURL Вы можете найти на <a href="http://curl.haxx.se" target="_blank">сайте CURL</a>.');
  break;
// BOF Inspect mbstring
  case ('96'):
    define('POPUP_ERROR_HEADING','Необходима библиотека Multibyte String.');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; использует библиотеку Multibyte String для работы со строками в UTF-8.<br />При установке было обнаружено отсутствие поддержки Multibyte String.<br /><br />Вы не сможете работать пока не подключите поддержку Multibyte String.<br /><br />Больше информации о Multibyte String Вы можете найти на <a href="http://ru.php.net/manual/en/book.mbstring.php" target="_blank">сайте PHP</a>.');
  break;
// EOF Inspect mbstring

}

define('TEXT_VERSION_CHECK_NEW_VER', 'Доступна новая версия v');
define('TEXT_VERSION_CHECK_NEW_PATCH', 'Доступен новый патч: v');
define('TEXT_VERSION_CHECK_PATCH', 'патч');
define('TEXT_VERSION_CHECK_DOWNLOAD', 'Загрузить');
define('TEXT_VERSION_CHECK_CURRENT', 'Ваша версия Zen Cart&reg; последняя.');
define('TEXT_ERROR_NEW_VERSION_AVAILABLE', '<a href="http://www.zen-cart.com/getit">Доступна нова версия Zen Cart&reg;, Вы можете загрузить её с </a><a href="http://www.zen-cart.com" style="text-decoration:underline" target="_blank">www.zen-cart.com</a>');
define('LABEL_ZC_VERSION_CHECK', 'Версия Zen Cart:');