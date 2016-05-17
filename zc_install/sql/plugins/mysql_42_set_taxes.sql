#
# * SQL Localization script - Set taxes classes and ratings
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_92_set_taxes.sql 1.3.8a 17.12.2007 10:47 AndrewBerezin $

# Delete demo tax class and add ru/ua real tax classes
DELETE FROM tax_class WHERE tax_class_id=1;
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (1, 'НДС 18%', 'НДС 18%', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (2, 'НДС 10%', 'НДС 10%', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (3, 'НДС не облагается', 'НДС не облагается', now());
INSERT INTO tax_class (tax_class_id, tax_class_title, tax_class_description, date_added) VALUES (4, 'НДС 20%', 'НДС 20%', now());

# Delete demo tax rate and add ru/ua real tax ratings
DELETE FROM tax_rates WHERE tax_class_id=1;
INSERT INTO tax_rates VALUES (1, 1, 1, 1, 18.0000, 'НДС 18%', NULL, now());
INSERT INTO tax_rates VALUES (2, 1, 2, 2, 10.0000, 'НДС 10%', NULL, now());
INSERT INTO tax_rates VALUES (3, 2, 4, 1, 20.0000, 'НДС 20%', NULL, now());
INSERT INTO tax_rates VALUES (4, 1, 3, 3, 0.0000, 'НДС не облагается', NULL, now());
