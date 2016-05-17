#
# * SQL Localization script - Translate orders_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_23_translate_orders_status.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'orders_status'
SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';
INSERT INTO orders_status (orders_status_id, language_id, orders_status_name) SELECT orders_status_id, @languages_ru_id, orders_status_name FROM orders_status;
UPDATE orders_status SET orders_status_name = 'Ожидает проверки' WHERE orders_status_name = 'Pending' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Выполняется' WHERE orders_status_name = 'Processing' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Доставлен' WHERE orders_status_name = 'Delivered' AND language_id=@languages_ru_id;
UPDATE orders_status SET orders_status_name = 'Изменён' WHERE orders_status_name = 'Update' AND language_id=@languages_ru_id;
