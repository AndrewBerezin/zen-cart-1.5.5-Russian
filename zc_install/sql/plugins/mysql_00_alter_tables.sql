#
# * SQL Localization script - Prepare tables for Localization
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_00_alter_tables.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

ALTER TABLE products_description CHANGE products_name products_name VARCHAR(255);
ALTER TABLE categories_description CHANGE categories_name categories_name VARCHAR(255);
ALTER TABLE ezpages CHANGE pages_html_text pages_html_text LONGTEXT;
ALTER TABLE db_cache CHANGE cache_data cache_data MEDIUMBLOB DEFAULT NULL;
ALTER TABLE zones CHANGE zone_name zone_name VARCHAR(128);
