#
# * SQL Localization script - Translate orders_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_77_translate_demo.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'orders_status'
SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';

INSERT INTO categories_description (categories_id, language_id, categories_name, categories_description) SELECT categories_id, @languages_ru_id, categories_name, categories_description FROM categories_description;
INSERT INTO manufacturers_info (manufacturers_id, languages_id, manufacturers_url, url_clicked, date_last_click) SELECT manufacturers_id, @languages_ru_id, manufacturers_url, '0', NULL FROM manufacturers_info;
INSERT INTO products_description (products_id, language_id, products_name, products_description, products_url, products_viewed) SELECT products_id, @languages_ru_id, products_name, products_description, products_url, '0' FROM products_description;

INSERT INTO products_options (products_options_id, language_id, products_options_name) SELECT products_options_id, @languages_ru_id, products_options_name FROM products_options;
UPDATE products_options SET products_options_name = 'Цвет' WHERE products_options_name = 'Color' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Размер' WHERE products_options_name = 'Size' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Модель' WHERE products_options_name = 'Model' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Память' WHERE products_options_name = 'Memory' AND language_id=@languages_ru_id;
UPDATE products_options SET products_options_name = 'Версия' WHERE products_options_name = 'Version' AND language_id=@languages_ru_id;
