<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_setup.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_DATABASE_SETTINGS', 'Сохранить настройки базы данных');//this comes before TEXT_MAIN
  define('TEXT_MAIN', 'Введите необходимые данные о Вашей базе данных и нажмите <em>Сохранить настройки базы данных</em> для продолжения.');
  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; установка - настройка базы данных');
  define('DATABASE_INFORMATION', 'Информация о базе данных');
  define('DATABASE_OPTIONAL_INFORMATION', 'База данных - Дополнительные установки');
  define('DATABASE_OPTIONAL_INSTRUCTION', 'Мы рекомендуем не менять эти установки, если у Вас нет особой причины для этого.');
  define('DATABASE_TYPE', 'Тип базы данных');
  define('DATABASE_TYPE_INSTRUCTION', 'Выберите тип базы данных');
  define('DATABASE_CHARSET', 'Кодировка/сравнение БД');
  define('DATABASE_CHARSET_INSTRUCTION', 'Выбрать collation БД.');
  define('DATABASE_HOST', 'Сервер базы данных');
  define('DATABASE_HOST_INSTRUCTION', 'Укажите адрес сервера базы данных');
  define('DATABASE_USERNAME', 'Имя пользователя базы данных');
  define('DATABASE_USERNAME_INSTRUCTION', 'Укажите имя пользователя базы данных');
  define('DATABASE_PASSWORD', 'Пароль базы данных');
  define('DATABASE_PASSWORD_INSTRUCTION', 'Укажите пароль доступа базы данных');
  define('DATABASE_NAME', 'Имя базы данных');
  define('DATABASE_NAME_INSTRUCTION', 'Укажите имя базы данных');
  define('DATABASE_PREFIX', 'Префикс таблиц в базе данных');
  define('DATABASE_PREFIX_INSTRUCTION', 'Какой Вы хотите создать префикс в таблицах базы данных. Оставьте пустым для значения по умолчанию');
  define('DATABASE_CREATE', 'Создать базу данных?');
  define('DATABASE_CREATE_INSTRUCTION', 'Вы хотите что бы Zen Cart&reg; сам создал базу данных?');
  define('DATABASE_CONNECTION', 'Постоянное соединение');
  define('DATABASE_CONNECTION_INSTRUCTION', 'Хотите ли Вы включить постоянное соединение с базой данных?');
  define('DATABASE_SESSION', 'Сессии базы данных');
  define('DATABASE_SESSION_INSTRUCTION', 'Хотите ли Вы хранить сессии в базе данных?');
  define('CACHE_TYPE', 'Способ кеширования SQL-запросов');
  define('CACHE_TYPE_INSTRUCTION', 'Выберите метод для кэширования SQL-запросов');
  define('SQL_CACHE', 'Директория сессий и кеширования');
  define('SQL_CACHE_INSTRUCTION', 'Определите директорию для хранения файлов кэша и файлов сессий');
  define('ONLY_UPDATE_CONFIG_FILES','Только обновление CFG файлов');


  define('REASON_TABLE_ALREADY_EXISTS','Невозможно создать таблицу %s так как она уже существует');
  define('REASON_TABLE_DOESNT_EXIST','Невозможно сделать вставку в таблицу %s так как она не создана');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Невозможно вставить configuration_key "%s" так как он уже существует');
  define('REASON_COLUMN_ALREADY_EXISTS','Невозможно добавить колонку %s так как она уже существует');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Невозможно вставить колонку %s так как она не создана');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Невозможно изменить колонку %s так как она не создана');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Невозможно вставить prod-type-layout configuration_key "%s" так как он уже существует');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Невозможно вставить index %s в таблицу %s так как она не создана');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Невозможно вставить primary key в таблицу %s так как она не создана');
  define('REASON_INDEX_ALREADY_EXISTS','Невозможно добавить index %s в таблицу %s так как он уже создан');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Невозможно добавить primary key в таблицу %s так как он уже создан');
  define('REASON_NO_PRIVILEGES','Пользователь %s@%s не имеет %s прав на базу данных');

