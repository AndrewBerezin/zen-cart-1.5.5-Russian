#
# * SQL Localization script - Prepare tables for Localization
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2016 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2016 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_00_alter_tables.sql 1.5.5a 20.08.2016 19:14:31 AndrewBerezin $

ALTER TABLE products_description CHANGE products_name products_name VARCHAR(255);
ALTER TABLE categories_description CHANGE categories_name categories_name VARCHAR(255);
ALTER TABLE ezpages CHANGE pages_html_text pages_html_text LONGTEXT;
ALTER TABLE zones CHANGE zone_name zone_name VARCHAR(128);
ALTER TABLE zones CHANGE zone_code zone_code VARCHAR(128);
