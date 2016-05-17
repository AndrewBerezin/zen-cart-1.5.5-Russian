#
# * SQL Localization script - remove all installed shipping and payment modules
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_90_remove_modules.sql 1.3.8a 17.12.2007 11:19 AndrewBerezin $

DELETE FROM configuration WHERE configuration_group_id=6 AND configuration_key LIKE 'MODULE_SHIPPING_%' AND configuration_key != 'MODULE_SHIPPING_INSTALLED';
UPDATE configuration SET configuration_value = '' WHERE configuration_key = 'MODULE_SHIPPING_INSTALLED';
DELETE FROM configuration WHERE configuration_group_id=6 AND configuration_key LIKE 'MODULE_PAYMENT_%' AND configuration_key != 'MODULE_PAYMENT_INSTALLED';
UPDATE configuration SET configuration_value = '' WHERE configuration_key = 'MODULE_PAYMENT_INSTALLED';
