#
# * SQL Localization script - Set default currency and currencies rating based on RUR
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_93_currency.sql 1.3.8a 17.12.2007 11:07 AndrewBerezin $

# Add RUR and UAH currencies (Rating based on USD).
INSERT INTO currencies VALUES (NULL,'Рубль','RUB','','&nbsp;руб.','.',',','2',26.2314, now());
INSERT INTO currencies VALUES (NULL,'Гривна','UAH','','грн.','.',',','2',5.05, now());

# Set Default currency = RUR
UPDATE configuration SET configuration_value='RUR' WHERE configuration_key='DEFAULT_CURRENCY';

# Update currencies rating CBR 06.04.2016 - http://cbr.ru/currency_base/daily.asp
UPDATE currencies SET value = 1.00000000, last_updated = NOW() WHERE code = 'RUB';
UPDATE currencies SET value = 0.01451587, last_updated = NOW() WHERE code = 'USD';
UPDATE currencies SET value = 0.01277469, last_updated = NOW() WHERE code = 'EUR';
UPDATE currencies SET value = 0.01020807, last_updated = NOW() WHERE code = 'GBP';
UPDATE currencies SET value = 0.01905644, last_updated = NOW() WHERE code = 'CAD';
UPDATE currencies SET value = 0.01918314, last_updated = NOW() WHERE code = 'AUD';
UPDATE currencies SET value = 0.00378937, last_updated = NOW() WHERE code = 'UAH';
