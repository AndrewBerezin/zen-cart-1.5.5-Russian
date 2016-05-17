#
# * SQL Localization script - Set defaults
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_91_set_defaults.sql 1.3.8a 17.12.2007 10:47 AndrewBerezin $

# Set RU country for Create account default country
UPDATE configuration SET configuration_value = '176' WHERE configuration_key = 'SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY';