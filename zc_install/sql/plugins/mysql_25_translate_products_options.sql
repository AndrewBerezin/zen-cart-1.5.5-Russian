#
# * SQL Localization script - Translate products_options_types table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_25_translate_products_options.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'products_options_types'

UPDATE products_options_types SET products_options_types_name='Выпадающее меню' WHERE products_options_types_id=0;
UPDATE products_options_types SET products_options_types_name='Текст' WHERE products_options_types_id=1;
UPDATE products_options_types SET products_options_types_name='Переключатель' WHERE products_options_types_id=2;
UPDATE products_options_types SET products_options_types_name='Флажок' WHERE products_options_types_id=3;
UPDATE products_options_types SET products_options_types_name='Файл' WHERE products_options_types_id=4;
UPDATE products_options_types SET products_options_types_name='Только для чтения' WHERE products_options_types_id=5;

SELECT @languages_ru_id:=languages_id FROM languages WHERE code='ru';
INSERT INTO products_options_values (products_options_values_id, language_id, products_options_values_name) SELECT products_options_values_id, @languages_ru_id, products_options_values_name FROM products_options_values;
UPDATE products_options_values SET products_options_values_name='ТЕКСТ' WHERE products_options_values_id=0 AND language_id=@languages_ru_id;
