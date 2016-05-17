#
# * SQL Localization script - Translate query_builder table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_26_translate_query_builder.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate the default queries for "all customers" and "all newsletter subscribers"
UPDATE query_builder SET query_name='Все покупатели', query_description='Выдает имена и email адреса всех покупателей для массовой рассылки emails' WHERE query_id=1;
UPDATE query_builder SET query_name='Все подписчики на рассылку', query_description='Выдает имена и email адреса подписчиков на рассылку' WHERE query_id=2;
UPDATE query_builder SET query_name='Неактивные покупатели (>3месяца) (Подписчики)', query_description='Подписчики которые что-то приобрели, но последних три месяца ничего не приобретали' WHERE query_id=3;
UPDATE query_builder SET query_name='Активные покупатели за 3 месяца (Подписчики)', query_description='Подписчики которые являются активными покупателями (что-то приобрели) за последних 3 месяца' WHERE query_id=4;
UPDATE query_builder SET query_name='Активные покупатели за 3 месяца (независимо от статуса подписки)', query_description='Все активные покупатели (которые что-то купили) за последних 3 месяца, игнорируя статус подписки' WHERE query_id=5;
UPDATE query_builder SET query_name='Администратору', query_description='Просто письмо этому администратору' WHERE query_id=6;
UPDATE query_builder SET query_name='Покупателям, которые не совершили покупки', query_description='Для рассылки писем всем покупателям, кто зарегистрировался, но не совершил покупку' WHERE query_id=7;
