#
# * SQL Localization script - Add RU/UA geo_zones
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2010 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2010 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_95_geo_zones.sql 1.3.9g 30.09.2010 10:22:15 AndrewBerezin $

# Russia
DELETE FROM geo_zones WHERE geo_zone_id=1;
DELETE FROM zones_to_geo_zones WHERE geo_zone_id=1;
INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (1,'Россия','Российская Федерация', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 176, 0, 1, now());

INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (2,'Украина','Украина', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 220, 0, 2, now());

INSERT INTO geo_zones (geo_zone_id, geo_zone_name, geo_zone_description, date_added) VALUES (3, 'Москва', 'Москва', now());
INSERT INTO zones_to_geo_zones (association_id, zone_country_id, zone_id, geo_zone_id, date_added) VALUES (NULL, 176, 266, 3, now());
