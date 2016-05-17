#
# * SQL Localization script - Add RU address_format
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2010 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2010 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_99_tuninig.sql 1.3.9g 30.09.2010 10:23:30 AndrewBerezin $

UPDATE configuration SET configuration_value = 'True' WHERE  configuration_key = 'SESSION_FORCE_COOKIE_USE' LIMIT 1 ;
UPDATE configuration SET configuration_value = '0' WHERE  configuration_key = 'META_TAG_INCLUDE_PRICE' LIMIT 1 ;
UPDATE configuration SET configuration_value = '0' WHERE  configuration_key = 'META_TAG_INCLUDE_MODEL' LIMIT 1 ;
UPDATE configuration SET configuration_value = '' WHERE configuration_key ='IMAGE_SUFFIX_MEDIUM' LIMIT 1 ;
UPDATE configuration SET configuration_value = '' WHERE configuration_key ='IMAGE_SUFFIX_LARGE' LIMIT 1 ;
