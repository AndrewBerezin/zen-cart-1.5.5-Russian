#
# * SQL Localization script - Translate configuration_group table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin  eCommerce-Service.com
# * @version $Id: mysql_20_translate_configuration_group.sql 1.3.8a 17.12.2007 11:05 AndrewBerezin $

UPDATE configuration_group SET configuration_group_title='Настройки магазина', configuration_group_description='Общая информация о магазине' WHERE configuration_group_id='1';
UPDATE configuration_group SET configuration_group_title='Минимальные значения', configuration_group_description='Минимальные значения для функций и данных' WHERE configuration_group_id='2';
UPDATE configuration_group SET configuration_group_title='Максимальные значения', configuration_group_description='Максимальные значения для функций и данных' WHERE configuration_group_id='3';
UPDATE configuration_group SET configuration_group_title='Изображения', configuration_group_description='Параметры изображений' WHERE configuration_group_id='4';
UPDATE configuration_group SET configuration_group_title='Информация о покупателе', configuration_group_description='Конфигурация учётной записи покупателя' WHERE configuration_group_id='5';
UPDATE configuration_group SET configuration_group_title='Настройки модулей', configuration_group_description='Скрыто от конфигурации' WHERE configuration_group_id='6';
UPDATE configuration_group SET configuration_group_title='Отгрузка/Упаковка', configuration_group_description='Настройки параметров отгрузки товара' WHERE configuration_group_id='7';
UPDATE configuration_group SET configuration_group_title='Список товаров', configuration_group_description='Конфигурация списка товаров' WHERE configuration_group_id='8';
UPDATE configuration_group SET configuration_group_title='Склад', configuration_group_description='Конфигурация склада' WHERE configuration_group_id='9';
UPDATE configuration_group SET configuration_group_title='Логи', configuration_group_description='Конфигурация логов' WHERE configuration_group_id='10';
UPDATE configuration_group SET configuration_group_title='Соглашения', configuration_group_description='Опции соглашения' WHERE configuration_group_id='11';
UPDATE configuration_group SET configuration_group_title='E-Mail', configuration_group_description='Настройки транспорта электронной почты и формата HTML' WHERE configuration_group_id='12';
UPDATE configuration_group SET configuration_group_title='Настройки атрибутов', configuration_group_description='Настройка атрибутов товаров' WHERE configuration_group_id='13';
UPDATE configuration_group SET configuration_group_title='GZip компрессия', configuration_group_description='Настройка GZip компрессии' WHERE configuration_group_id='14';
UPDATE configuration_group SET configuration_group_title='Сессии', configuration_group_description='Настройка сессий' WHERE configuration_group_id='15';
UPDATE configuration_group SET configuration_group_title='Сертификаты и купоны', configuration_group_description='Подарочные сертификаты и купоны' WHERE configuration_group_id='16';
UPDATE configuration_group SET configuration_group_title='Кредитные карты', configuration_group_description='Принимаемые кредитные карты' WHERE configuration_group_id='17';
UPDATE configuration_group SET configuration_group_title='Страница товара', configuration_group_description='Настройки страницы описания товара' WHERE configuration_group_id='18';
UPDATE configuration_group SET configuration_group_title='Внешний вид', configuration_group_description='Настройка внешнего вида' WHERE configuration_group_id='19';
UPDATE configuration_group SET configuration_group_title='Выключение магазина', configuration_group_description='Настройки параметров выключения магазина' WHERE configuration_group_id='20';
UPDATE configuration_group SET configuration_group_title='Список новых товаров', configuration_group_description='Настройки списка новых товаров' WHERE configuration_group_id='21';
UPDATE configuration_group SET configuration_group_title='Список рекомендуемых товаров', configuration_group_description='Настройки списка рекомендуемых товаров' WHERE configuration_group_id='22';
UPDATE configuration_group SET configuration_group_title='Список всех товаров', configuration_group_description='Настройки списка всех товаров' WHERE configuration_group_id='23';
UPDATE configuration_group SET configuration_group_title='Вид главной страницы', configuration_group_description='Опции отображения (вида) главной страницы' WHERE configuration_group_id='24';
UPDATE configuration_group SET configuration_group_title='Статус страниц', configuration_group_description='Определение статуса страниц' WHERE configuration_group_id='25';
UPDATE configuration_group SET configuration_group_title='Настройки EZ-страниц', configuration_group_description='Настройки EZ-страниц' WHERE configuration_group_id='30';
