#
# * SQL Localization script - Add RU address_format
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_94_address_format.sql 1.3.9g 30.09.2010 9:48:02 11:07 AndrewBerezin $

# Add RU address_format
INSERT INTO address_format VALUES (NULL, '$firstname $lastname$cr$streets$cr $city$cr$state_name$cr$country$cr$postcode', '$city / $country');
SET @insert_id := LAST_INSERT_ID();
UPDATE countries SET address_format_id=@insert_id WHERE countries_iso_code_3='RUS';
UPDATE countries SET address_format_id=@insert_id WHERE countries_iso_code_3='UKR';
