#
# * SQL Localization script - Translate product_types table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_24_translate_product_types.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'product_types'
UPDATE product_types SET type_name='Товар - Главный' WHERE type_id=1;
UPDATE product_types SET type_name='Товар - Музыка' WHERE type_id=2;
UPDATE product_types SET type_name='Документ - Главный' WHERE type_id=3;
UPDATE product_types SET type_name='Документ - Товар' WHERE type_id=4;
UPDATE product_types SET type_name='Товар - Бесплатная отгрузка' WHERE type_id=5;
