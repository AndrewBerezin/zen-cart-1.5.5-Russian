<?php
/**
* Main Russian language file for installer
* @package Installer
* @copyright Copyright 2003-2016 Zen Cart Development Team
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: Author: AndrewBerezin 03.04.2016 13:58:20 -0500 New in v1.5.5 $
*/
/**
* defining language components for the page
*/
define('META_TAG_TITLE', 'Инсталляция Zen Cart&reg;');
define('HTML_PARAMS','dir="ltr" lang="ru"');
define('ZC_VERSION_STRING', '%s v%s');
define('TEXT_PAGE_HEADING_INDEX', 'Проверка системы');
define('TEXT_INDEX_FATAL_ERRORS', 'Проблемы, которые необходимо решить до установки');
define('TEXT_INDEX_WARN_ERRORS', 'Другие проблемы');
define('TEXT_HEADER_MAIN', 'СОВЕТ: Чтобы получить подробную справку по проблеме кликните по названию поля.');
define('TEXT_INDEX_HEADER_MAIN', 'СОВЕТ: Для некоторых ошибок и предупреждений можно получить дополнительную информацию, кликнув по заголовку ошибки/предупреждения.');
define('TEXT_INSTALLER_CHOOSE_LANGUAGE', 'Выбрать язык');
define('TEXT_HELP_CONTENT_CHOOSE_LANG', 'Zen Cart&reg; мультиязычен, поддерживает столько языков, сколько доступно языковых пакетов. Просто установите необходимый языковой пакет и Ваш магазин будет работать на нескольких языках, вклюяая этот инсталлятор.');

define('TEXT_PAGE_HEADING_SYSTEM_SETUP', 'Параметры системы');
define('TEXT_SYSTEM_SETUP_ADMIN_SETTINGS', 'Параметры Администратора');
define('TEXT_SYSTEM_SETUP_CATALOG_SETTINGS', 'Параметры Каталога');
define('TEXT_SYSTEM_SETUP_ADMIN_SERVER_DOMAIN', 'Домен сервера Админки');
define('TEXT_SYSTEM_SETUP_ADMIN_SERVER_URL', 'URL сервера Админки');
define('TEXT_SYSTEM_SETUP_ADMIN_PHYSICAL_PATH', 'Физический путь к Админке');
define('TEXT_SYSTEM_SETUP_CATALOG_ENABLE_SSL', 'Исользовать SSL для Каталога?');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTP_SERVER_DOMAIN', 'HTTP Домен Каталога');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTP_URL', 'HTTP URL Каталога');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTPS_SERVER_DOMAIN', 'HTTPS Домен Каталога');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTPS_URL', 'HTTPS URL Каталога');
define('TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH', 'Физический путь к Каталогу');
define('TEXT_SYSTEM_SETUP_AGREE_LICENSE', 'Согласен с лицензией: ');
define('TEXT_SYSTEM_SETUP_CLICK_TO_AGREE_LICENSE', '(Отметьте чекбокс, чтобы согласиться на условия лицензии GPL 2. Нажмите на название в левом столбце, чтобы просмотреть лицензию.)');
define('TEXT_SYSTEM_SETUP_ERROR_DIALOG_TITLE', 'Есть проблемы');
define('TEXT_SYSTEM_SETUP_ERROR_DIALOG_CONTINUE', 'Продолжить в любом случае');
define('TEXT_SYSTEM_SETUP_ERROR_CATALOG_PHYSICAL_PATH', 'Возможно проблема в ' . TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH);

define('TEXT_PAGE_HEADING_DATABASE', 'Параметры базы данных');
define('TEXT_DATABASE_HEADER_MAIN', 'Примечание: Вы должны создать базу данных и пользователя MySQL, предоставить доступ к базе данных для этого пользователя, прежде чем перейти на эту страницу. Чтобы получить помощь по компоненте, кликните по названию в левой колонке.');
define('TEXT_DATABASE_SETUP_SETTINGS', 'Основные параметра');
define('TEXT_DATABASE_SETUP_DB_HOST', 'Хост БД: ');
define('TEXT_DATABASE_SETUP_DB_USER', 'Пользователь БД: ');
define('TEXT_DATABASE_SETUP_DB_PASSWORD', 'Пароль БД: ');
define('TEXT_DATABASE_SETUP_DB_NAME', 'Имя БД: ');
define('TEXT_DATABASE_SETUP_DEMO_SETTINGS', 'Демонстрационные данные');
define('TEXT_DATABASE_SETUP_LOAD_DEMO', 'Загрузить демонстрационные данные');
define('TEXT_DATABASE_SETUP_LOAD_DEMO_DESCRIPTION', 'Загрузить демонстрационные данные?');
define('TEXT_DATABASE_SETUP_ADVANCED_SETTINGS', 'Дополнительные параметры');
define('TEXT_DATABASE_SETUP_DB_CHARSET', 'Кодировка БД: ');
define('TEXT_DATABASE_SETUP_DB_PREFIX', 'Префикс: ');
define('TEXT_DATABASE_SETUP_SQL_CACHE_METHOD', 'Кеширование SQL: ');
define('TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS1', '<p>Возникли ошибки при выполнении инсталляционного файла SQL');
define('TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS2', '<br />Смотрите логи ошибок<p>');
define('TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8', 'UTF8 (по умолчанию)');
define('TEXT_DATABASE_SETUP_CHARSET_OPTION_LATIN1', 'Latin1');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_NONE', 'Не кешироваь SQL-запросы');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_DATABASE', 'База данных');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_FILE', 'Файл');
define('TEXT_EXAMPLE_DB_HOST', "обычно 'localhost'");
define('TEXT_EXAMPLE_DB_USER', 'введите имя пользователя MySQL');
define('TEXT_EXAMPLE_DB_PWD', 'введите пароль для пользователя MySQL');
define('TEXT_EXAMPLE_DB_PREFIX', "обычно пустой, или используйте, например, zen_");
define('TEXT_EXAMPLE_DB_NAME', 'введите имя базы данных MySQL');
define('TEXT_EXAMPLE_CACHEDIR', 'как правило, указывает на эквивалент /your/user/home/public_html/zencart/cache folder');

define('TEXT_DATABASE_SETUP_CONNECTION_ERROR_DIALOG_TITLE', 'Возникли некоторые проблемы');
define('TEXT_CREATING_DATABASE', 'Создание базы данных');
define('TEXT_LOADING_CHARSET_SPECIFIC', 'Загрузка специфических данных кодировки БД');
define('TEXT_LOADING_DEMO_DATA', 'Загрузка демонстанционных данных');
define('TEXT_LOADING_PLUGIN_DATA', 'Загрузка пре-инсталляционных плагинов SQL');

define('TEXT_COULD_NOT_UPDATE_BECAUSE_ANOTHER_VERSION_REQUIRED', 'Невозможно обновиться до версии %s. Определена текущая версия %s и сначала надо обновиться до версии %s.');

define('TEXT_PAGE_HEADING_ADMIN_SETUP', 'Установки Административной панели');
define('TEXT_ADMIN_SETUP_USER_SETTINGS', 'Установки Администратора');
define('TEXT_ADMIN_SETUP_USER_NAME', 'Имя Администратора суперпользователя: ');
define('TEXT_EXAMPLE_USERNAME', 'например: Андрей');
define('TEXT_ADMIN_SETUP_USER_EMAIL', 'Емейл Администратора суперпользователя: ');
define('TEXT_EXAMPLE_EMAIL', 'например: my_email@example.com');
define('TEXT_ADMIN_SETUP_USER_EMAIL_REPEAT', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Повторите Емейл: ');
define('TEXT_ADMIN_SETUP_USER_PASSWORD', 'Пароль Администратора: ');
define('TEXT_ADMIN_SETUP_USER_PASSWORD_HELP', '<strong>ВНИМАНИЕ!!</strong>: Ниже указан начальный временный пароль учетной записи администратора-суперпользователя. Обязательно сохраните его в надёжном месте! Будьте внимательны!');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY', 'Директория админки: ');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_DEFAULT', 'Мы не смогли автоматически изменить директорию Административной панели. Вам нужно будет сделать это самостоятельно, прежде чем Вы можете получить доступ к Административной панели магазина.');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_NOT_ADMIN_CHANGED', 'Мы не изменили директорию Административной панели автоматически, так как она уже, кажется, была изменена.');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_CHANGED', 'Директорию Административной панели автоматически переименована.');
define('TEXT_ADMIN_SETUP_NEWSLETTER_SETTINGS', 'Новости');
define('TEXT_ADMIN_SETUP_NEWSLETTER_EMAIL', 'Емейл для новостей: ');
define('TEXT_ADMIN_SETUP_NEWSLETTER_OPTIN', 'Opt In: ');
//define('TEXT_MAIN_ADMIN_SETUP', '');


define('TEXT_PAGE_HEADING_COMPLETION', 'Установка завершена');
define('TEXT_COMPLETION_HEADER_MAIN', '');
define('TEXT_COMPLETION_INSTALL_COMPLETE', 'Установка завершена.');
define('TEXT_COMPLETION_INSTALL_LINKS_BELOW', 'Вы можете перейти в магазин или админку используя ссылки ниже.');
define('TEXT_COMPLETION_UPGRADE_COMPLETE', 'Обновление завершено.');
define('TEXT_COMPLETION_ADMIN_DIRECTORY_WARNING', 'Мы не смогли автоматически изменить директорию Административной панели. Вам нужно будет сделать это самостоятельно');
define('TEXT_COMPLETION_INSTALLATION_DIRECTORY_WARNING', "Необходимо удалить директорию /zc_install/ чтобы предотвратить переустановку системы и обнуление базы данных!");

define('TEXT_COMPLETION_CATALOG_LINK_TEXT', 'Магазин');
define('TEXT_COMPLETION_ADMIN_LINK_TEXT', 'Админка');

define('TEXT_PAGE_HEADING_DATABASE_UPGRADE', 'Обновление базы данных');
define('TEXT_DATABASE_UPGRADE_HEADER_MAIN', '');
define('TEXT_DATABASE_UPGRADE_STEPS_DETECTED', 'В списке указаны шаги обновления, которые необходимы для базы данных.');
define('TEXT_DATABASE_UPGRADE_LEGEND_UPGRADE_STEPS', 'Пожалуйста, подтвердите шаги обновления');
define('TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS', 'Проверка полномочий администратора (суперпользователя)');
define('TEXT_VALIDATION_ADMIN_CREDENTIALS', 'Для авторизации для обновления базы данных введите имя и пароль суперпользователя.');
define('TEXT_HELP_TITLE_UPGRADEADMINNAME', TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS);
define('TEXT_HELP_CONTENT_UPGRADEADMINNAME', 'Для авторизации для обновления базы данных Вы должны ввести имя и пароль суперпользователя Вашего магазина.<br>Это должно быть имя и пароль, используемые для входа в Административную панель.<br>(Это не пароль для доступа к фтп и не пароль для доступа к панели управления хостингом. Никто не знает этот пароль кроме Вас или владельца магазина. Вы не можете получить этот пароль от Вашей хостинговой компании.)<br>Если Вы заблокированы в магазине и не знаете действительные пароли администратора и не можете войти в административную панель мгазина, то вы можете сделать агрессивный сброс пароля, следуя инструкциям в этой статье: <a href="http://www.zen-cart.com/content.php?44-how-do-i-change-or-reset-my-admin-password" target="_blank">http://www.zen-cart.com/content.php?44-how-do-i-change-or-reset-my-admin-password</a>.');
define('TEXT_DATABASE_UPGRADE_ADMIN_USER', 'Имя');
define('TEXT_DATABASE_UPGRADE_ADMIN_PASSWORD', 'Пароль');
define('TEXT_HELP_TITLE_UPGRADEADMINPWD', 'Пароль ');
define('TEXT_HELP_CONTENT_UPGRADEADMINPWD', TEXT_HELP_CONTENT_UPGRADEADMINNAME);
define('TEXT_VALIDATION_ADMIN_PASSWORD', 'Введите правильный пароль');
define('TEXT_ERROR_ADMIN_CREDENTIALS', 'Не можем подтвердить полномочия указанного администратора.<br><br>' . TEXT_HELP_CONTENT_UPGRADEADMINNAME);
define('TEXT_UPGRADE_IN_PROGRESS', 'Обновление начато. Ниже будет указан процесс обновления...');
define('TEXT_UPGRADE_TO_VER_X_COMPLETED', 'Обновление до версии %s закончено.');
define('TEXT_NO_REMAINING_UPGRADE_STEPS', 'Всё сделано! Нет больше шагов для обновления.');

define ('TEXT_CONTINUE', 'Продолжить');
define ('TEXT_CANCEL', 'Отменить');
define ('TEXT_CONTINUE_FIX', 'Вернуться и исправить');
define ('TEXT_REFRESH', 'Обновить');
define ('TEXT_UPGRADE', 'Обновление...');
define ('TEXT_CLEAN_INSTALL', 'Новая установка');
define ('TEXT_UPDATE_CONFIGURE', 'Обновить конфигурационные файлы');

define('TEXT_NAVBAR_SYSTEM_INSPECTION', 'Проверка системы');
define('TEXT_NAVBAR_SYSTEM_SETUP', 'Установки системы');
define('TEXT_NAVBAR_DATABASE_UPGRADE', 'Обновление базы данных');
define('TEXT_NAVBAR_DATABASE_SETUP', 'Установки базы данных');
define('TEXT_NAVBAR_ADMIN_SETUP', 'Установки администратора');
define('TEXT_NAVBAR_COMPLETION', 'Закончено');
define('TEXT_NAVBAR_PAYMENT_PROVIDERS', 'Провайдера систем оплат');

define('TEXT_ERROR_PROBLEMS_WRITING_CONFIGUREPHP_FILES', 'Возникли проблемы с подготовкой и сохранением файлов configure.php. Установка системы не завершена.<br>Дополнительную техническую информацию Вы можете найти в директории /logs/.');
define('TEXT_ERROR_COULD_NOT_READ_CFGFILE_TEMPLATE', 'Не могу прочитать основной файл шаблона файла конфигурации: %s. Убедитесь что файл существует и доступен для чтения.');
define('TEXT_ERROR_COULD_NOT_WRITE_CONFIGFILE', 'Не могу записать сгенерированный файл конфигурации: %s. Убедитесь что файл существует и доступен для записи.');

define('TEXT_ERROR_STORE_CONFIGURE', "Основной файл /includes/configure.php не существует (не доступен на чтение) или не доступен на запись");
define('TEXT_ERROR_ADMIN_CONFIGURE', "Административный файл /admin/includes/configure.php не существует (не доступен на чтение) или не доступен на запись");
define('TEXT_ERROR_PHP_VERSION', str_replace(array("\n", "\r"), '', 'Неправильная версия PHP.
<p>Используемая Вами версия PHP (' . PHP_VERSION . ') не подходит.</p>
<p>Данная версия Zen Cart&reg; совместима с версиями PHP от 5.2.9 до 7.1.x.<br>
Проверьте сайт <a href="https://www.zen-cart.com">www.zen-cart.com</a> для получения последней версии Zen Cart&reg;.</p>
'));
define('TEXT_ERROR_PHP_VERSION_RECOMMENDED', 'Для обеспечения максимальной безопасности и совместимости Вы должны использовать PHP %s или новее. Установка может быть продолжена, но Вы должны знать, что Ваш сайт не будет соответствовать PCI Compliant при работе на старом программном обеспечении.');
define('TEXT_ERROR_PHP_VERSION_MIN', 'Версия PHP должна быть больше %s');
define('TEXT_ERROR_PHP_VERSION_MAX', 'Версия PHP должна быть меньше %s');
define('TEXT_ERROR_MYSQL_SUPPORT', 'Проблемы с поддержкой MySQL (mysqli). На Вашем сервер отсутствует расширение mysqli для PHP, и без него мы не можем подключиться к вашей базе данных. Обратитесь за помощью в хостинг-компанию.');
define('TEXT_ERROR_LOG_FOLDER', 'Директория ' . DIR_FS_LOGS . ' недоступна для записи');
define('TEXT_ERROR_CACHE_FOLDER', 'Директория ' . DIR_FS_SQL_CACHE . ' недоступна для записи');
define('TEXT_ERROR_IMAGES_FOLDER', 'Директория /images/ недоступна для записи');
define('TEXT_ERROR_DEFINEPAGES_FOLDER', 'Директория /includes/languages/english/html_includes/ недоступна для записи');
define('TEXT_ERROR_MEDIA_FOLDER', 'Директория /media/ недоступна для записи');
define('TEXT_ERROR_PUB_FOLDER', 'Директория ' . DIR_FS_DOWNLOAD_PUBLIC . ' недоступна для записи');

define('TEXT_ERROR_CONFIGURE_REQUIRES_UPDATE', 'Your configure.php file is an old version and requires updating before we can continue.');
define('TEXT_ERROR_HTACCESS_SUPPORT', 'Проблемы с поддержкой .htaccess (неправильно запрещает доступ к файлам, которые должны быть ограничены). [ЗАМЕЧАНИЕ: Если Вы используете Nginx, в конце установки Вам будет предоставлен набор сгенерированных файлов nginx conf, чтобы помочь в разрешении этой ситуации.]');
define('TEXT_ERROR_SESSION_SUPPORT', 'Проблема с поддержкой сессий');
define('TEXT_ERROR_SESSION_SUPPORT_USE_TRANS_SID', 'ini setting session.use_trans_sid is enabled');
define('TEXT_ERROR_SESSION_SUPPORT_AUTO_START', 'ini setting session.auto_start is enabled');
define('TEXT_ERROR_DB_CONNECTION', 'Проблема с коннектом к базе данных');
define('TEXT_ERROR_DB_CONNECTION_DEFAULT', 'Возможно проблема с коннектом к базе данных');
define('TEXT_ERROR_DB_CONNECTION_UPGRADE', 'Probems with database connection based on the entries in your current configure.php');
define('TEXT_ERROR_SET_TIME_LIMIT', 'max_execution_time setting disabled ');
define('TEXT_ERROR_GD', 'GD Extension not enabled');
define('TEXT_ERROR_ZLIB', 'Zlib Extension not enabled');
define('TEXT_ERROR_OPENSSL', 'Openssl Extension not enabled');
define('TEXT_ERROR_CURL', 'Problems with the CURL extension');
define('TEXT_ERROR_UPLOADS', 'Upload Extension not enabled');
define('TEXT_ERROR_XML', 'XML Extension not enabled');
define('TEXT_ERROR_GZIP', 'Gzip Extension not enabled');
define('TEXT_ERROR_EXTENSION_NOT_LOADED', '%s extension does not seem to be loaded');
define('TEXT_ERROR_FUNCTION_DOES_NOT_EXIST', 'PHP function %s does not exist');
define('TEXT_ERROR_CURL_LIVE_TEST', 'Could not use CURL to contact a live server');
define('TEXT_ERROR_HTTPS', 'PRO СОВЕТ: If possible you should already have installed an SSL certificate, and run the installer using https://');
define('TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE', 'An existing configure.php file was found. The installer will attempt to upgrade your database structure if you choose "Upgrade..." below.');
define('TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE_NO_UPDATE', 'An existing configure.php file was found. However your database seems to be current. This suggests you are on a live site. Proceeding with Install will wipe out the current database contents! Are you sure you want to install?');
define('TEXT_ERROR_MULTIPLE_ADMINS_NONE_SELECTED', 'Multiple Admin directories seem to exist. Either remove old admin directories and click Refresh or select the correct admin directory below and click Refresh.');
define('TEXT_ERROR_MULTIPLE_ADMINS_SELECTED', 'Multiple Admin directories seem to exist. If the selected directory below is incorrect, please choose another and click Refresh.');
define('TEXT_ERROR_SUCCESS_NO_ERRORS', 'No errors or warnings were detected on your system. You may continue with the installation.');

define('TEXT_FORM_VALIDATION_REQUIRED', 'Требуется');
define('TEXT_FORM_VALIDATION_AGREE_LICENSE', 'Вы должны согласиться с условиями лицензирования');
define('TEXT_FORM_VALIDATION_CATALOG_HTTPS_URL', 'A URL is required here, even if you have temporarily opted not to enable SSL yet. Try using your normal domain name.');

define('TEXT_NAVBAR_INSTALLATION_INSTRUCTIONS', 'Инструкции по установке');
define('TEXT_NAVBAR_FORUM_LINK', 'Форум');
define('TEXT_NAVBAR_WIKI_LINK', 'ВИКИ');

define('TEXT_HELP_TITLE_HTACCESSSUPPORT', 'поддержка .htaccess');
define('TEXT_HELP_CONTENT_HTACCESSSUPPORT', 'There appears to be a problem with the htaccess support on your server.<br><br>.htaccess support is used to provide security for preventing access to certain files/folders.<br><br>Possible causes of this problem include: maybe you are not using Apache as your Web Server or .htaccess support is disabled or not configured correctly, OR MORE LIKELY: the .htaccess files that come with Zen Cart (in its various subdirectories) have not been uploaded to your server.<br><br><strong>(Note that any file starting with a "." is usually treated as a "hidden" file, so it could be that your FTP program failed to upload these because you have the display/transfer of hidden files turned off in its settings.)</strong><br><br>This message is shown after zc_install attempted to access files on your server that should normally be blocked by the security rules in the built-in .htaccess files.<br><br>You may proceed with installing despite this situation, but be advised that your site is less secure than it ought to be. Your hosting company should be able to assist you with ensuring .htaccess support is enabled in your site.');
define('TEXT_HELP_TITLE_FOLDERPERMS', 'Folder Permissions');
define('TEXT_HELP_CONTENT_FOLDERPERMS', 'The permissions for this folder are not set correctly. This folder needs to be writeable. You can find out more about folder permissions at <a href="http://www.zen-cart.com/content.php?51-how-do-i-set-permissions-on-files-folders" target="_blank">http://www.zen-cart.com/content.php?51-how-do-i-set-permissions-on-files-folders</a>');
define('TEXT_HELP_TITLE_CONNECTIONDATABASECHECK', 'Initial Database Connection');
define('TEXT_HELP_CONTENT_CONNECTIONDATABASECHECK', 'We tried to connect to MySQL using a localhost connection. This failure does not necessarily mean MySQL is not working, as some hosts require an IP address or host name for the MySQL database.<br><br>If you are indeed using localhost for your database server, you should check that MySQL is running correctly.');
define('TEXT_HELP_TITLE_CHECKCURL', TEXT_ERROR_CURL);
define('TEXT_HELP_CONTENT_CHECKCURL', 'CURL is a background process used by (PHP in) your store to connect to external servers and services such as payment and shipping providers to process transactions or get real-time shipping quotes. When we tested CURL functionality on your server we were unable to establish a connection. This could indicate a problem with your webserver configuration. Please contact your hosting company for assistance to enable CURL support on your server.<br><br>If you are a developer running this site on an offline development server then it is unsurprising that CURL cannot connect for this test. CURL is not necessary for development purposes except for testing transactional activity, at which time connecting online will be required.');
define('TEXT_HELP_TITLE_ADMINSERVERDOMAIN', 'Admin Server Domain');
define('TEXT_HELP_CONTENT_ADMINSERVERDOMAIN', "Enter the domain name for accessing your Admin area. It is strongly recommended to use HTTPS (SSL) for this address. Consult your hosting company about enabling SSL on your site.");
define('TEXT_HELP_TITLE_ENABLESSLCATALOG', 'Enable SSL for Storefront?');
define('TEXT_HELP_CONTENT_ENABLESSLCATALOG', "Check this box if you have an SSL certificate on your hosting account and you want Zen Cart&reg; to use it when displaying sensitive pages such as Login, My Account, Checkout, etc.");
define('TEXT_HELP_TITLE_HTTPSERVERCATALOG', 'Storefront HTTP Domain');
define('TEXT_HELP_CONTENT_HTTPSERVERCATALOG', "Enter the domain-part of the URL for your store. eg: http://www.example.com");
define('TEXT_HELP_TITLE_HTTPURLCATALOG', 'Storefront HTTP URL');
define('TEXT_HELP_CONTENT_HTTPURLCATALOG', "Enter the entire URL for your store.  eg: http://www.example.com/zencart/");
define('TEXT_HELP_TITLE_HTTPSSERVERCATALOG', 'Storefront HTTPS Domain');
define('TEXT_HELP_CONTENT_HTTPSSERVERCATALOG', "If you have checked the box above to enable use of SSL during checkout, you must enter here the domain-part of the https URL to your store.<br>This is typically something like:<br>https://www.example.com<br>https://www.hostingcompany.com/~username<br>https://www.hostingcompany.com/~username/subdomain.com");
define('TEXT_HELP_TITLE_HTTPSURLCATALOG', 'Storefront HTTPS URL');
define('TEXT_HELP_CONTENT_HTTPSURLCATALOG', "Enter the https URL to your store. This is typically the same as the HTTPS Domain, followed by the foldername in which your store's files are kept. eg: https://www.example.com/zencart");
define('TEXT_HELP_TITLE_PHYSICALPATH', 'Storefront Physical Path');
define('TEXT_HELP_CONTENT_PHYSICALPATH', "This is the actual path (according to your server's filesystem) where your Zen Cart&reg; files are located. Common examples look like '/users/home/public_html/zencart'. <br>It is important to provide the correct complete path, else Zen Cart&reg; will not be able to find its files in order to run.");



define('TEXT_HELP_TITLE_DBHOST', 'Database Host');
define('TEXT_HELP_CONTENT_DBHOST', "What is the database host?  The database host can be in the form of a host name, such as 'localhost' or 'db1.myserver.com', or as an IP Address, such as '192.168.0.1'. Most hosting companies use 'localhost' here. <br>Your hosting company can tell you what to use, and this information is usually shown on the screen in their control panel where you create the database and assign user permissions to the database.<br>If you need assistance finding this information, consult your hosting company online FAQ documentation.");
define('TEXT_HELP_TITLE_DBUSER', 'Database User');
define('TEXT_HELP_CONTENT_DBUSER', "What is the MySQL username used to connect to the database? An example username is 'myusername_store'.<br>For PCI reasons you should NEVER use 'root' here when running on a server connected to the internet.<br><br>This MySQL user needs the following permissions granted to it: ALTER, CREATE, DELETE, DROP, INDEX, INSERT, LOCK TABLES, SELECT, UPDATE (or just 'Grant All').");
define('TEXT_HELP_TITLE_DBPASSWORD', 'Database Password');
define('TEXT_HELP_CONTENT_DBPASSWORD', "What is the password assigned to the MySQL username you created for this database.");
define('TEXT_HELP_TITLE_DBNAME', 'Database Name');
define('TEXT_HELP_CONTENT_DBNAME', "What is the name of the database used to hold the data? An example database name is 'zencart' or 'myaccount_zencart'.<br>NOTE: You must create this database BEFORE you can proceed with Zen Cart&reg; installation here.<br>You can create your MySQL database using your hosting company's control panel.");
define('TEXT_HELP_TITLE_DEMODATA', TEXT_DATABASE_SETUP_LOAD_DEMO);
define('TEXT_HELP_CONTENT_DEMODATA', "If you choose to load Demo Data, we will install a base set of products and categories, with sales and specials and attributes and more. These are useful for you to play around and see how various combinations can be set up and how they can look on your storefront.<br><br>You can certainly delete the demo products (by hand) later, or once you've toyed with the samples, you can re-run this install and choose to not install the demo data, and thus have a fully clean site for setting up your own new store.");
define('TEXT_HELP_TITLE_DBCHARSET', 'Database Character Set');
define('TEXT_HELP_CONTENT_DBCHARSET', "Most stores will use UTF8.<br>If you don't have a reason to use something else, use UTF8.");
define('TEXT_HELP_TITLE_DBPREFIX', 'Database Tablename Prefix');
define('TEXT_HELP_CONTENT_DBPREFIX', "What is the prefix you would like used for database tables?  Example: <strong>zen_</strong><br><strong class='alert'>СОВЕТ: Leave empty if no prefix is needed.</strong><br />You can use prefixes to allow more than one store to share the same database.");
define('TEXT_HELP_TITLE_SQLCACHEMETHOD', 'SQL Cache Method');
define('TEXT_HELP_CONTENT_SQLCACHEMETHOD', "Default setting is 'none'. Alternatives are 'database' or 'file'. If your server is really slow, use 'none'. If your site is moderately busy, use 'database'. If your site is extremely high traffic, use 'file'. ");
define('TEXT_HELP_TITLE_SQLCACHEDIRECTORY', 'SQL Cache Directory');
define('TEXT_HELP_CONTENT_SQLCACHEDIRECTORY', "Enter the directory to use for file-based caching. This is a directory/folder on your webserver, and its permissions must be set to writable so that the webserver (eg Apache) can write files to it.");

define('TEXT_HELP_TITLE_ADMINUSER', 'Admin Superuser Name');
define('TEXT_HELP_CONTENT_ADMINUSER', "This will be the primary username used to manage your admin access and other admin user accounts. It will have unrestricted privileges.");
define('TEXT_HELP_TITLE_ADMINEMAIL', 'Admin Superuser Email');
define('TEXT_HELP_CONTENT_ADMINEMAIL', "This email address will be used for password recovery in case you forget your password.");
define('TEXT_HELP_TITLE_ADMINEMAIL2', 'Retype Email');
define('TEXT_HELP_CONTENT_ADMINEMAIL2', "Please re-enter the email address. This is just to help catch accidental typos!");
define('TEXT_HELP_TITLE_ADMINPASSWORD', 'Admin Superuser Password');
define('TEXT_HELP_CONTENT_ADMINPASSWORD', "REMEMBER THIS PASSWORD!!!!! This is the default password assigned to the admin username you specified above. You may be asked to change it on first login (thus you can personalize it a bit more at that time). You can always manually change it anytime while you're logged into your Admin.<br><br><strong>REMEMBER THIS PASSWORD, because you will need it to log in to your store!</strong>");
define('TEXT_HELP_TITLE_ADMINDIRECTORY', 'Admin Directory');
define('TEXT_HELP_CONTENT_ADMINDIRECTORY', "We try to rename your admin folder for you automatically, to offer a degree of security-by-obscurity. While we understand that this doesn't make it foolproof, it does discourage unauthorized visitors from attacking your site. You may still consider changing the foldername yourself (just rename the folder to whatever you wish it to be, by using your FTP program or your hosting company's File Manager tool in your hosting control panel).");

define('TEXT_VERSION_CHECK_NEW_VER', 'Доступна новая версия v');
define('TEXT_VERSION_CHECK_NEW_PATCH', 'Доступен новый патч: v');
define('TEXT_VERSION_CHECK_PATCH', 'patch');
define('TEXT_VERSION_CHECK_DOWNLOAD', 'Скачать');
define('TEXT_VERSION_CHECK_CURRENT', 'Your version of Zen Cart&reg; appears to be current.');
define('TEXT_ERROR_NEW_VERSION_AVAILABLE', '<a href="http://www.zen-cart.com/getit">There is a NEWER version of Zen Cart&reg; available, which you can download from </a><a href="http://www.zen-cart.com" style="text-decoration:underline" target="_blank">www.zen-cart.com</a>');

define('TEXT_DB_VERSION_NOT_FOUND', 'A Zen Cart database for %s was not found!');

define('REASON_TABLE_ALREADY_EXISTS','Cannot create table %s because it already exists');
define('REASON_TABLE_DOESNT_EXIST','Cannot drop table %s because it does not exist.');
define('REASON_TABLE_NOT_FOUND','Cannot execute because table %s does not exist.');
define('REASON_CONFIG_KEY_ALREADY_EXISTS','Cannot insert configuration_key "%s" because it already exists');
define('REASON_COLUMN_ALREADY_EXISTS','Cannot ADD column %s because it already exists.');
define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Cannot DROP column %s because it does not exist.');
define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Cannot CHANGE column %s because it does not exist.');
define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Cannot insert prod-type-layout configuration_key "%s" because it already exists');
define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Cannot drop index %s on table %s because it does not exist.');
define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Cannot drop primary key on table %s because it does not exist.');
define('REASON_INDEX_ALREADY_EXISTS','Cannot add index %s to table %s because it already exists.');
define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Cannot add primary key to table %s because a primary key already exists.');


define('TEXT_HELP_TITLE_AGREETOTERMS', 'Согласиться с условиями лицензирования');
define('TEXT_HELP_CONTENT_AGREETOTERMS', "<a href='http://www.gnu.org/licenses/old-licenses/gpl-2.0.ru.html' target='_blank'>Оригинальный текст GPL 2.0 </a><h2>The GNU General Public License (GPL)</h2>

<h3>ПЕРЕВОД НА РУССКИЙ ЯЗЫК GENERAL PUBLIC LICENSE GNU</h3>

<p>автор перевода Елена Тяпкина 20-Mar-2002</p>

<p>This is an unofficial translation of the GNU General Public License
into Russian.  It was not published by the Free Software Foundation, and
does not legally state the distribution terms for software that uses the
GNU GPL - only the original English text of the GNU GPL does that.
However, we hope that this translation will help Russian speakers
understand the GNU GPL better.</p>

<p>Настоящий перевод Стандартной Общественной Лицензии GNU на русский
язык не является официальным. Он не публикуется Free Software Foundation
и не устанавливает имеющих юридическую силу условий для распространения
программного обеспечения, которое распространяется на условиях
Стандартной Общественной Лицензии GNU.  Условия, имеющие юридическую
силу, закреплены исключительно в аутентичном тексте Стандартной
Общественной Лицензии GNU на английском языке. Я надеюсь, что настоящий
перевод поможет русскоязычным пользователям лучше понять содержание
Стандартной Общественной Лицензии GNU.</p>

<h2>GNU GENERAL PUBLIC LICENSE</h2>

<p>Версия 2, июнь 1991г.</p>

<p>Copyright (C) 1989, 1991 Free Software Foundation, Inc.</p>

<p>59 Temple Place - Suite 330, Boston, MA 02111-1307, USA</p>

<p>Каждый вправе копировать и распространять экземпляры настоящей
Лицензии без внесения изменений в ее текст.</p>

<h3>Преамбула</h3>

<p>Большинство лицензий на программное обеспечение лишает вас права
распространять и вносить изменения в это программное обеспечение.
Стандартная Общественная Лицензия GNU, напротив, разработана с целью
гарантировать вам право совместно использовать и вносить изменения в
свободное программное обеспечение, т.е. обеспечить свободный доступ к
программному обеспечению для всех пользователей. Условия настоящей
Стандартной Общественной Лицензии применяются к большей части
программного обеспечения Free Software Foundation, а также к любому
другому программному обеспечению по желанию его автора. (К некоторому
программному обеспечению Free Software Foundation применяются условия
Стандартной Общественной Лицензии GNU для Библиотек). Вы также можете
применять Стандартную Общественную Лицензию к разработанному вами
программному обеспечению.</p>

<p>Говоря о свободном программном обеспечении, мы имеем в виду свободу,
а не безвозмездность. Настоящая Стандартная Общественная Лицензия
разработана с целью гарантировать вам право распространять экземпляры
свободного программного обеспечения (и при желании получать за это
вознаграждение), право получать исходный текст программного обеспечения
или иметь возможность его получить, право вносить изменения в
программное обеспечение или использовать его части в новом свободном
программном обеспечении, а также право знать, что вы имеете все
вышеперечисленные права.</p>

<p>Чтобы защитить ваши права, мы вводим ряд ограничений с тем, чтобы
никто не имел возможности лишить вас этих прав или обратиться к вам с
предложением отказаться от этих прав. Данные ограничения налагают на вас
определенные обязанности в случае, если вы распространяете экземпляры
программного обеспечения или модифицируете программное обеспечение.
</p>

<p>Например, если вы распространяете экземпляры такого программного
обеспечения за плату или бесплатно, вы обязаны передать новым
обладателям все права в том же объеме, в каком они принадлежат вам. Вы
обязаны обеспечить получение новыми обладателями программы ее исходного
текста или возможность его получить. Вы также обязаны ознакомить их с
условиями настоящей Лицензии.</p>

<p>Для защиты ваших прав мы: (1) оставляем за собой авторские права на
программное обеспечение и (2) предлагаем вам использовать настоящую
Лицензию, в соответствии с условиями которой вы вправе воспроизводить,
распространять и/или модифицировать программное обеспечение.</p>

<p>Кроме того, для защиты как нашей репутации, так и репутации других
авторов программного обеспечения, мы уведомляем всех пользователей, что
на данное программное обеспечение никаких гарантий не предоставляется.
Те, кто приобрел программное обеспечение, с внесенными в него третьими
лицами изменениями, должны знать, что они получают не оригинал, в силу
чего автор оригинала не несет ответственности за ошибки в работе
программного обеспечения, допущенные третьими лицами при внесении
изменений.</p>

<p>Наконец, программное обеспечение перестает быть свободным в случае,
если лицо приобретает на него исключительные права.
Недопустимо, чтобы лица, распространяющие
свободное программное обеспечение, могли приобрести исключительные права
на использование данного программного обеспечения и зарегистрировать их
в Патентном ведомстве. Чтобы избежать этого, мы заявляем, что обладатель
исключительных прав обязан предоставить любому лицу права на
использование программного обеспечения либо не приобретать
исключительных прав вообще.</p>

<p>Ниже изложены условия воспроизведения, распространения и модификации
программного обеспечения.</p>

<h3>Условия воспроизведения, распространения и модификации</h3>

<p>0. Условия настоящей Лицензии применяются ко всем видам программного
обеспечения или любому иному произведению, которое содержит указание
правообладателя на то, что данное произведение может распространяться на
условиях Стандартной Общественной Лицензии. Под термином \"Программа\"
далее понимается любое подобное программное обеспечение или иное
произведение. Под термином \"произведение, производное от Программы\"
понимается Программа или любое иное производное произведение в
соответствии с законодательством об авторском праве <a
href=\"#ref2\">[2]</a>, т.е. произведение, включающее в себя Программу или
ее часть, как с внесенными в ее текст изменениями, так и без них и/или
переведенную на другой язык. (Здесь и далее, понятие \"модификация\"
включает в себя понятие перевода в самом широком смысле). Каждый
приобретатель экземпляра Программы именуется в дальнейшем
\"Лицензиат\".</p>

<p>Действие настоящей Лицензии не распространяется на осуществление иных
прав, кроме воспроизведения, распространения и модификации программного
обеспечения.  Не устанавливается ограничений на запуск Программы.
Условия Лицензии распространяются на выходные данные из Программы только
в том случае, если их содержание составляет произведение, производное от
Программы (независимо от того, было ли такое произведение создано в
результате запуска Программы). Это зависит от того, какие функции
выполняет Программа.</p>

<p>1. Лицензиат вправе изготовлять и распространять экземпляры исходного
текста Программы в том виде, в каком он его получил, без внесения в него
изменений на любом носителе, при соблюдении следующих условий: на каждом
экземпляре помещен знак охраны авторского права и уведомление об
отсутствии гарантий; оставлены без изменений все уведомления,
относящиеся к настоящей Лицензии и отсутствию гарантий; вместе с
экземпляром Программы приобретателю передается копия настоящей
Лицензии.</p>

<p>Лицензиат вправе взимать плату за передачу экземпляра Программы, а
также вправе за плату оказывать услуги по гарантийной поддержке
Программы.</p>

<p>2. Лицензиат вправе модифицировать свой экземпляр или экземпляры
Программы полностью или любую ее часть. Данные действия Лицензиата
влекут за собой создание произведения, производного от Программы.
Лицензиат вправе изготовлять и распространять экземпляры такого
произведения, производного от Программы, или собственно экземпляры
изменений в соответствии с пунктом 1 настоящей Лицензии при соблюдении
следующих условий:</p>

<p>а) файлы, измененные Лицензиатом, должны содержать хорошо заметную
пометку, что они были изменены, а также дату внесения изменений;</p>

<p>b) при распространении или публикации Лицензиатом любого
произведения, которое содержит Программу или ее часть или является
производным от Программы или от ее части, Лицензиат обязан передавать
права на использование данного произведения третьим лицам на условиях
настоящей Лицензии, при этом Лицензиат не вправе требовать уплаты
каких-либо лицензионных платежей. Распространяемое произведение
лицензируется как одно целое;</p>

<p>c) если модифицированная Программа при запуске обычно читает команды
в интерактивном режиме, Лицензиат обязан обеспечить вывод на экран
дисплея или печатающее устройство сообщения, которое должно включать в
себя:</p>

<ul>

<li>знак охраны авторского права;</li>

<li>уведомление об отсутствии гарантий на Программу (или иное, если
Лицензиат предоставляет гарантии);</li>

<li>указание на то, что пользователи вправе распространять экземпляры
Программы в соответствии с условиями настоящей Лицензии, а также на то,
каким образом пользователь может ознакомиться с текстом настоящей
Лицензии. (Исключение: если оригинальная Программа является
интерактивной, но не выводит в своем обычном режиме работы сообщение
такого рода, то вывод подобного сообщения произведением, производным от
Программы, в этом случае не обязателен).</li>

</ul>

<p>Вышеуказанные условия применяются к модифицированному произведению,
производному от Программы, в целом. В случае если отдельные части
данного произведения не являются производными от Программы, являются
результатом творческой деятельности и могут быть использованы как
самостоятельное произведение, Лицензиат вправе распространять отдельно
такое произведение на иных лицензионных условиях. В случае если
Лицензиат распространяет вышеуказанные части в составе произведения,
производного от Программы, то условия настоящей Лицензии применяются к
произведению в целом, при этом права, приобретаемые сублицензиатами на
основании Лицензии, передаются им в отношении всего произведения,
включая все его части, независимо от того, кто является их авторами.</p>

<p>Целью настоящего пункта 2 не является заявление прав или оспаривание
прав на произведение, созданное исключительно Лицензиатом. Целью
настоящего пункта является обеспечение права контролировать
распространение произведений, производных от Программы, и составных
произведений, производных от Программы.</p>

<p>Размещение произведения, которое не является производным от
Программы, на одном устройстве для хранения информации или носителе
вместе с Программой или произведением, производным от Программы, не
влечет за собой распространения условий настоящей Лицензии на такое
произведение.</p>

<p>3. Лицензиат вправе воспроизводить и распространять экземпляры
Программы или произведения, которое является производным от Программы, в
соответствии с пунктом 2 настоящей Лицензии, в виде объектного кода или
в исполняемой форме в соответствии с условиями п.п.1 и 2 настоящей
Лицензии при соблюдении одного из перечисленных ниже условий:</p>

<p>а) к экземпляру должен прилагаться соответствующий полный исходный
текст в машиночитаемой форме, который должен распространяться в
соответствии с условиями п.п. 1 и 2 настоящей Лицензии на носителе,
обычно используемом для передачи программного обеспечения, либо </p>

<p>b) к экземпляру должно прилагаться действительное в течение трех лет
предложение в письменной форме к любому третьему лицу передать за плату,
не превышающую стоимость осуществления собственно передачи, экземпляр
соответствующего полного исходного текста в машиночитаемой форме в
соответствии с условиями п.п. 1 и 2 настоящей Лицензии на носителе,
обычно используемом для передачи программного обеспечения, либо</p>

<p>c) к экземпляру должна прилагаться полученная Лицензиатом информация
о предложении, в соответствии с которым можно получить соответствующий
исходный текст. (Данное положение применяется исключительно в том
случае, если Лицензиат осуществляет некоммерческое распространение
программы, при этом программа была получена самим Лицензиатом в виде
объектного кода или в исполняемой форме и сопровождалась предложением,
соответствующим условиям пп.b п.3 настоящей Лицензии).</p>

<p>Под исходным текстом произведения понимается такая форма
произведения, которая наиболее удобна для внесения изменений.  Под
полным исходным текстом исполняемого произведения понимается исходный
текст всех составляющих произведение модулей, а также всех файлов,
связанных с описанием интерфейса, и сценариев, предназначенных для
управления компиляцией и установкой исполняемого произведения. Однако, в
качестве особого исключения, распространяемый исходный текст может не
включать того, что обычно распространяется (в виде исходного текста или
в бинарной форме) с основными компонентами (компилятор, ядро и т.д.)
операционной системы, в которой работает исполняемое произведение, за
исключением случаев, когда исполняемое произведение сопровождается таким
компонентом.</p>

<p>В случае если произведение в виде объектного кода или в исполняемой
форме распространяется путем предоставления доступа для копирования его
из определенного места, обеспечение равноценного доступа для копирования
исходного текста из этого же места удовлетворяет требованиям
распространения исходного текста, даже если третьи лица при этом не
обязаны копировать исходный текст вместе с объектным кодом
произведения.</p>

<p>4. Лицензиат вправе воспроизводить, модифицировать, распространять
или передавать права на использование Программы только на условиях
настоящей Лицензии. Любое воспроизведение, модификация, распространение
или передача прав на иных условиях являются недействительными и
автоматически ведут к расторжению настоящей Лицензии и прекращению всех
прав Лицензиата, предоставленных ему настоящей Лицензией. При этом права
третьих лиц, которым Лицензиат в соответствии с настоящей Лицензией
передал экземпляры Программы или права на нее, сохраняются в силе при
условии полного соблюдения ими настоящей Лицензии.</p>

<p>5. Лицензиат не обязан присоединяться к настоящей Лицензии, поскольку
он ее не подписал. Однако только настоящая Лицензия предоставляет право
распространять или модифицировать Программу или произведение,
производное от Программы. Подобные действия нарушают действующее
законодательство, если они не осуществляются в соответствии с настоящей
Лицензией.  Если Лицензиат внес изменения или осуществил распространение
экземпляров Программы или произведения, производного от Программы,
Лицензиат тем самым подтвердил свое присоединение к настоящей Лицензии в
целом, включая условия, определяющие порядок воспроизведения,
распространения или модификации Программы или произведения, производного
от Программы.</p>

<p>6. При распространении экземпляров Программы или произведения,
производного от Программы, первоначальный лицензиар автоматически
передает приобретателю такого экземпляра право воспроизводить,
распространять и модифицировать Программу в соответствии с условиями
настоящей Лицензии. Лицензиат не вправе ограничивать каким-либо способом
осуществление приобретателями полученных ими прав. Лицензиат не несет
ответственности за несоблюдение условий настоящей Лицензии третьими
лицами.</p>

<p>7. Лицензиат не освобождается от исполнения обязательств в
соответствии с настоящей Лицензией в случае, если в результате решения
суда или заявления о нарушении исключительных прав или в связи с
наступлением иных обстоятельств, не связанных непосредственно с
нарушением исключительных прав, на Лицензиата на основании решения суда,
договора или ином основании возложены обязательства, которые
противоречат условиям настоящей Лицензии. В этом случае Лицензиат не
вправе распространять экземпляры Программы, если он не может
одновременно исполнить условия настоящей Лицензии и возложенные на него
указанным выше способом обязательства. Например, если по условиям
лицензионного соглашения сублицензиатам не может быть предоставлено
право бесплатного распространения экземпляров Программы, которые они
приобрели напрямую или через третьих лиц у Лицензиата, то в этом случае
Лицензиат обязан отказаться от распространения экземпляров
Программы.</p>

<p>Если любое положение настоящего пункта при наступлении конкретных
обстоятельств будет признано недействительным или неприменимым,
настоящий пункт применяется за исключением такого положения.  Настоящий
пункт применяется в целом при прекращении вышеуказанных обстоятельств
или их отсутствии.</p>

<p>Целью данного пункта не является принуждение Лицензиата к нарушению
патента или заявления на иные права собственности или к оспариванию
действительности такого заявления. Единственной целью данного пункта
является защита неприкосновенности системы распространения свободного
программного обеспечения, которая обеспечивается за счет общественного
лицензирования. Многие люди внесли свой щедрый вклад в создание большого
количества программного обеспечения, которое распространяется через
данную систему в надежде на ее длительное и последовательное применение.
Лицензиат не вправе вынуждать автора распространять программное
обеспечение через данную систему. Право выбора системы распространения
программного обеспечения принадлежит исключительно его автору.</p>

<p>Настоящий пункт 7 имеет целью четко определить те цели, которые
преследуют все остальные положения настоящей Лицензии.</p>

<p>8. В том случае если распространение и/или использование Программы в
отдельных государствах ограничено соглашениями в области патентных или
авторских прав, первоначальный правообладатель, распространяющий
Программу на условиях настоящей Лицензии, вправе ограничить территорию
распространения Программы, указав только те государства, на территории
которых допускается распространение Программы без ограничений,
обусловленных такими соглашениями. В этом случае такое указание в
отношении территорий определенных государств признается одним из условий
настоящей Лицензии.</p>

<p>9. Free Software Foundation может публиковать исправленные и/или
новые версии настоящей Стандартной Общественной Лицензии. Такие версии
могут быть дополнены различными нормами, регулирующими правоотношения,
которые возникли после опубликования предыдущих версий, однако в них
будут сохранены основные принципы, закрепленные в настоящей версии.</p>

<p>Каждой версии присваивается свой собственный номер. Если указано, что
Программа распространяется в соответствии с определенной версией, т.е.
указан ее номер, или любой более поздней версией настоящей Лицензии,
Лицензиат вправе присоединиться к любой из этих версий Лицензии,
опубликованных Free Software Foundation. Если Программа не содержит
такого указания на номер версии Лицензии Лицензиат вправе присоединиться
к любой из версий Лицензии, опубликованных когда-либо Free Software
Foundation.</p>

<p>10. В случае если Лицензиат намерен включить часть Программы в другое
свободное программное обеспечение, которое распространяется на иных
условиях, чем в настоящей Лицензии, ему следует испросить письменное
разрешение на это у автора программного обеспечения. Разрешение в
отношении программного обеспечения, права на которое принадлежат Free
Software Foundation, следует испрашивать у Free Software Foundation. В
некоторых случаях Free Software Foundation делает исключения. При
принятии решения Free Software Foundation будет руководствоваться двумя
целями: сохранение статуса свободного для любого произведения,
производного от свободного программного обеспечения Free Software
Foundation и обеспечение наиболее широкого совместного использования
программного обеспечения.</p>

<p><strong>ОТСУТСТВИЕ ГАРАНТИЙНЫХ ОБЯЗАТЕЛЬСТВ</strong></p>

<p>11. ПОСКОЛЬКУ НАСТОЯЩАЯ ПРОГРАММА РАСПРОСТРАНЯЕТСЯ БЕСПЛАТНО,
ГАРАНТИИ НА НЕЕ НЕ ПРЕДОСТАВЛЯЮТСЯ В ТОЙ СТЕПЕНИ, В КАКОЙ ЭТО
ДОПУСКАЕТСЯ ПРИМЕНИМЫМ ПРАВОМ. НАСТОЯЩАЯ ПРОГРАММА ПОСТАВЛЯЕТСЯ НА
УСЛОВИЯХ \"КАК ЕСТЬ\". ЕСЛИ ИНОЕ НЕ УКАЗАНО В ПИСЬМЕННОЙ ФОРМЕ, АВТОР
И/ИЛИ ИНОЙ ПРАВООБЛАДАТЕЛЬ НЕ ПРИНИМАЕТ НА СЕБЯ НИКАКИХ ГАРАНТИЙНЫХ
ОБЯЗАТЕЛЬСТВ, КАК ЯВНО ВЫРАЖЕННЫХ, ТАК И ПОДРАЗУМЕВАЕМЫХ, В ОТНОШЕНИИ
ПРОГРАММЫ, В ТОМ ЧИСЛЕ ПОДРАЗУМЕВАЕМУЮ ГАРАНТИЮ ТОВАРНОГО СОСТОЯНИЯ ПРИ
ПРОДАЖЕ И ПРИГОДНОСТИ ДЛЯ ИСПОЛЬЗОВАНИЯ В КОНКРЕТНЫХ ЦЕЛЯХ, А ТАКЖЕ
ЛЮБЫЕ ИНЫЕ ГАРАНТИИ. ВСЕ РИСКИ, СВЯЗАННЫЕ С КАЧЕСТВОМ И
ПРОИЗВОДИТЕЛЬНОСТЬЮ ПРОГРАММЫ, НЕСЕТ ЛИЦЕНЗИАТ. В СЛУЧАЕ ЕСЛИ В
ПРОГРАММЕ БУДУТ ОБНАРУЖЕНЫ НЕДОСТАТКИ, ВСЕ РАСХОДЫ, СВЯЗАННЫЕ С
ТЕХНИЧЕСКИМ ОБСЛУЖИВАНИЕМ, РЕМОНТОМ ИЛИ ИСПРАВЛЕНИЕМ ПРОГРАММЫ, НЕСЕТ
ЛИЦЕНЗИАТ.</p>

<p>12. ЕСЛИ ИНОЕ НЕ ПРЕДУСМОТРЕНО ПРИМЕНЯЕМЫМ ПРАВОМ ИЛИ НЕ СОГЛАСОВАНО
СТОРОНАМИ В ДОГОВОРЕ В ПИСЬМЕННОЙ ФОРМЕ, АВТОР И/ИЛИ ИНОЙ
ПРАВООБЛАДАТЕЛЬ, КОТОРЫЙ МОДИФИЦИРУЕТ И/ИЛИ РАСПРОСТРАНЯЕТ ПРОГРАММУ НА
УСЛОВИЯХ НАСТОЯЩЕЙ ЛИЦЕНЗИИ, НЕ НЕСЕТ ОТВЕТСТВЕННОСТИ ПЕРЕД ЛИЦЕНЗИАТОМ
ЗА УБЫТКИ, ВКЛЮЧАЯ ОБЩИЕ, РЕАЛЬНЫЕ, ПРЕДВИДИМЫЕ И КОСВЕННЫЕ УБЫТКИ (В
ТОМ ЧИСЛЕ УТРАТУ ИЛИ ИСКАЖЕНИЕ ИНФОРМАЦИИ, УБЫТКИ, ПОНЕСЕННЫЕ
ЛИЦЕНЗИАТОМ ИЛИ ТРЕТЬИМИ ЛИЦАМИ, НЕВОЗМОЖНОСТЬ РАБОТЫ ПРОГРАММЫ С ЛЮБОЙ
ДРУГОЙ ПРОГРАММОЙ И ИНЫЕ УБЫТКИ).  АВТОР И/ИЛИ ИНОЙ ПРАВООБЛАДАТЕЛЬ В
СООТВЕТСТВИИ С НАСТОЯЩИМ ПУНКТОМ НЕ НЕСУТ ОТВЕТСТВЕННОСТИ ДАЖЕ В ТОМ
СЛУЧАЕ, ЕСЛИ ОНИ БЫЛИ ПРЕДУПРЕЖДЕНЫ О ВОЗМОЖНОСТИ ВОЗНИКНОВЕНИЯ ТАКИХ
УБЫТКОВ.</p>

<h3>Порядок применения условий Стандартной Общественной Лицензии к
созданной вами программе</h3>

<p>Если вы создали новую программу и хотите, чтобы она принесла
наибольшую пользу обществу, лучший способ достичь этого — сделать вашу
программу свободной, когда каждый сможет распространять ее и вносить в
нее изменения в соответствии с условиями настоящей Лицензии.</p>

<p>В этих целях Программа должна содержать приведенное ниже уведомление.
Наиболее правильным будет поместить его в начале исходного текста
каждого файла для максимально ясного указания на то, что гарантии на
данную программу не предоставляются.  Каждый файл в любом случае должен
содержать знак охраны авторского права и пояснение, где можно
ознакомиться с полным текстом уведомления.</p>

<blockquote>

<p>[одна строка с наименованием Программы и кратким описанием ее
назначения]</p>

<p> &copy; имя (наименование) автора или иного правообладателя, год
первого опубликования программы</p>

<p>Данная программа является свободным программным обеспечением. Вы
вправе распространять ее и/или модифицировать в соответствии с условиями
версии 2 либо по вашему выбору с условиями более поздней версии
Стандартной Общественной Лицензии GNU, опубликованной Free Software
Foundation.</p>

<p>Мы распространяем данную программу в надежде на то, что она будет вам
полезной, однако НЕ ПРЕДОСТАВЛЯЕМ НА НЕЕ НИКАКИХ ГАРАНТИЙ, в том числе
ГАРАНТИИ ТОВАРНОГО СОСТОЯНИЯ ПРИ ПРОДАЖЕ и ПРИГОДНОСТИ ДЛЯ ИСПОЛЬЗОВАНИЯ
В КОНКРЕТНЫХ ЦЕЛЯХ. Для получения более подробной информации
ознакомьтесь со Стандартной Общественной Лицензией GNU.</p>

<p>Вместе с данной программой вы должны были получить экземпляр
Стандартной Общественной Лицензии GNU. Если вы его не получили, сообщите
об этом в Free Software Foundation, Inc., 59 Temple Place - Suite 330,
Boston, MA 02111-1307, USA.</p>

</blockquote>

<p>Также укажите, как можно связаться с вами по электронной или обычной
почте.</p>

<p>Если программа работает в интерактивном режиме, сделайте так, чтобы
при запуске в интерактивном режиме выводилось короткое сообщение в
соответствии с образцом:</p>

<blockquote>

<p>Gnomovision version 69, &copy; имя автора, год первого опубликования
программы</p>

<p>Gnomovision распространяется БЕЗ ВСЯКИХ ГАРАНТИЙ; чтобы ознакомиться
с более подробной информацией, наберите \"show w\". Данная программа
является свободным программным обеспечением и вы можете распространять
ее в соответствии с условиями Стандартной Общественной Лицензии GNU. Для
получения более подробной информации, наберите \"show c\".</p>

</blockquote>

<p>При введении предлагаемых команд <code>\"show w\"</code> и <code>\"show
c\"</code> на экран должны выводиться соответствующие пункты Стандартной
Общественной Лицензии. Не обязательно использовать именно команды
<code>\"show w\"</code> и <code>\"show c\"</code>. В зависимости от функций
программы, команды могут вызываться нажатием кнопки мыши или быть
добавлены в меню программы.</p>

<p>Если вы создали программу в порядке выполнения служебных обязанностей
или служебного задания работодателя либо для образовательного учреждения
(школы, ВУЗа и т.д.) в период обучения или работы в данном
образовательном учреждении, вам следует получить в случае необходимости
письменный отказ от исключительных прав на использование данной
программы. Нижеприведенный текст вы можете
использовать в качестве образца, заменив соответствующие имена и
наименования:</p>

<blockquote>

<p>ЗАО \"АБВ\" настоящим отказывается от всех исключительных прав на
использование программы для ЭВМ \"Gnomovision\", автором которой является
Иванов Алексей Петрович, и передает все исключительные права на
использование указанной программы ее автору, Иванову Алексею Петровичу.
</p>

<p>Подпись руководителя организации, печать, 1 января 2001г.</p>

<p>[Фамилия, Имя, Отчество], Генеральный директор</p>

</blockquote>

<p>Стандартная Общественная Лицензия GNU запрещает включать вашу
программу в программы, использование которых ограничено их
правообладателями. Если ваша программа является библиотекой подпрограмм,
вероятно, более полезным будет разрешить связывание программ,
использование которых ограничено их правообладателями, с вашей
библиотекой. В этом случае вам следует использовать Стандартную
Общественную Лицензию GNU для Библиотек вместо настоящей Лицензии.</p>

<h3>Примечания переводчика</h3>

<ol>

<li id=\"ref1\"> в параграфе 7 Преамбулы в английском
тексте Стандартной Общественной Лицензии GNU упоминается патент на
программное обеспечение (Software Patents). В начале 90х годов XX века
Апелляционный суд Федерального округа США предпринял попытку установить,
когда изобретение, частью которого является программное обеспечение,
является патентоспособным.  Суд постановил, что в этом случае следует
провести экспертизу в отношении произведения в целом. Изобретение не
будет признано патентоспособным, если оно представляет собой
исключительно математический алгоритм. Однако, если положенный в основу
изобретения способ при помощи программного обеспечения позволяет
получить конкретные, промышленно применимые результаты, в этом случае
изобретение является патентоспособным.  В отличие от США, в РФ в
соответствии с Патентным законом от 23.09.1992г. не признаются
патентоспособными изобретениями программы для вычислительных машин.
Защита программ для ЭВМ осуществляется на основании норм
законодательства об авторском праве.  Исключительные права на программу
для ЭВМ принадлежат автору или иному правообладателю, который приобрел
их на основании договора или ином основании, предусмотренном законом.
Правообладатель всех имущественных прав на программу для ЭВМ в течение
срока действия авторского права может по своему желанию зарегистрировать
программу для ЭВМ путем подачи заявки в Патентное ведомство РФ.</li>

<li id=\"ref2\"> — Здесь имеется в виду национальное
законодательство страны лицензиара.</li>

<li id=\"ref3\">

<p> — В соответствии с Законом РФ \"Об
авторском праве и смежных правах\" авторское право на произведение,
созданное в порядке выполнения служебных обязанностей или служебного
задания работодателя (служебное произведение), принадлежит автору
служебного произведения. Исключительные права на использование
служебного произведения (в том числе программы для ЭВМ) принадлежат
лицу, с которым автор состоит в трудовых отношениях (работодателю), если
в договоре между ними и автором не предусмотрено иное. Данное положение
не распространяется на создание в порядке выполнения служебных
обязанностей или служебного задания работодателя энциклопедий,
энциклопедических словарей, периодических и продолжающихся сборников
научных трудов, газет, журналов и других периодических изданий. Издателю
энциклопедий, энциклопедических словарей, периодических и продолжающихся
изданий принадлежат исключительные права на использование таких изданий.
Авторы произведений, включенных в такие издания, сохраняют
исключительные права на использование своих произведений независимо от
издания в целом.</p>

<p> В соответствии с п.7 ст. 39 Закона РФ &quot;Об образовании&quot;
образовательному учреждению принадлежит право собственности в том числе
на продукты интеллектуального и творческого труда, являющиеся
результатом деятельности образовательного учреждения.  Аналогичная норма
содержится в Федеральном законе РФ &quot;О высшем и послевузовском
профессиональном образовании&quot; (ФЗ от 22 августа 1996г. №125-ФЗ).</p>

</li>

</ol>

<p>My goal was not just a verbal translation of English text of GNU
General Public License in Russian, but a translation, which will follow
the rules of current legislation of Russian Federation on copyrights. I
hope that this will help to use GNU General Public License when
distributing free software in Russian Federation. Below you may find
some comments (in Russian) on current legislation of Russian
Federation.</p>

<p>Моей целью был не просто перевод Стандартной Общественной Лицензии
GNU, который бы максимально точно соответствовал аутентичному тексту на
английском языке, но также учитывал нормы действующего законодательства
РФ об авторском праве, что увеличило бы возможность использовать
Стандартную Общественную Лицензию GPL для распространения свободного
программного обеспечения на территории РФ.  Ниже Вы можете ознакомиться
с некоторыми комментариями относительно действующего законодательства
РФ.</p>

<p>В настоящее время на территории Российской Федерации порядок
воспроизведения, распространения и модификации программного обеспечения
регулируется Законом РФ \"О правовой охране программ для ЭВМ и баз
данных\" от 23.09.1992г. №3523-1 и Законом РФ \"Об авторском праве и
смежных правах\" от 09.07.1993г. №5351-1.</p>

<p>С целью наибольшего соответствия настоящего неофициального перевода
Стандартной Общественной Лицензии GNU на русский язык нормам
действующего законодательства РФ об авторском праве, ниже приводятся
основные понятие, используемые в тексте перевода, и их определения в
соответствии с указанными выше Законами РФ:</p>

<dl>

<dt>Программное обеспечение</dt>

<dd>данное понятие не применяется в указанных Законах, однако оно
является наиболее общепринятым при обозначении программ для ЭВМ в
переводах лицензионных соглашений, в частности Лицензионных соглашений с
конечным пользователем (EULA), на русский язык. В силу этого понятие
\"Программное обеспечение\" используется в тексте перевода для обозначения
понятия \"программа для ЭВМ\". Под программой для ЭВМ в Законе РФ
понимается объективная форма представления совокупности данных и команд,
предназначенных для функционирования электронных вычислительных машин
(ЭВМ) и других компьютерных устройств с целью получения определенного
результата, включая подготовительные материалы, полученные в ходе
разработки программы для ЭВМ, и порождаемые ею аудиовизуальные
отображения.</dd>

<dt>Исключительные права на использование произведения</dt>

<dd> означает право осуществлять или разрешать следующие действия:
воспроизводить произведение (право на воспроизведение); распространять
экземпляры произведения любым способом: продавать, сдавать в прокат и
так далее (право на распространение); публично показывать произведение
(право на публичный показ), переводить произведение (право на перевод);
переделывать, аранжировать или другим образом перерабатывать
произведение (право на переработку), а также иные права в соответствии с
Законом РФ \"Об авторском праве и смежных правах\".</dd>

<dt>Исключительные (или имущественные) права на использование программы
для ЭВМ</dt>

<dd>означает исключительное право осуществлять и (или) разрешать
осуществление следующих действий: выпуск в свет программы для ЭВМ,
воспроизведение программы для ЭВМ (полное или частичное) в любой форме,
любыми способами, распространение программы для ЭВМ, модификацию
программы для ЭВМ, в том числе перевод программы для ЭВМ с одного языка
на другой, а также иное использование в соответствии с Законом РФ \"О
правовой охране программ для ЭВМ и баз данных\".</dd>

<dt>Воспроизведение Программного Обеспечения</dt>

<dd> это изготовление одного или более экземпляров Программного
обеспечения в любой материальной форме, а также его запись в память
ЭВМ.</dd>

<dt>Модификация (переработка) Программного Обеспечения</dt>

<dd>любые его изменения, не являющиеся адаптацией.</dd>

<dt>Распространение Программного Обеспечения</dt>

<dd> это предоставление доступа для воспроизведения в любой материальной
форме Программного Обеспечения, в том числе сетевыми и иными способами,
а также путем продажи, проката, сдачи в наем, предоставление взаймы,
включая импорт для любой из этих целей.</dd>

</dl>

<p>&copy; Елена Тяпкина, 2001г.</p>");
