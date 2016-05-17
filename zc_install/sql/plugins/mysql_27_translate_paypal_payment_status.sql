#
# * SQL Localization script - Translate paypal_payment_status table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_27_translate_paypal_payment_status.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Translate data for table 'paypal_payment_status'
UPDATE paypal_payment_status SET payment_status_name = 'Завершено' WHERE payment_status_id=1;
UPDATE paypal_payment_status SET payment_status_name = 'В очереди' WHERE payment_status_id=2;
UPDATE paypal_payment_status SET payment_status_name = 'Ошибка' WHERE payment_status_id=3;
UPDATE paypal_payment_status SET payment_status_name = 'Запрещено' WHERE payment_status_id=4;
UPDATE paypal_payment_status SET payment_status_name = 'Возмещенный' WHERE payment_status_id=5;
UPDATE paypal_payment_status SET payment_status_name = 'Аннулирование' WHERE payment_status_id=6;
UPDATE paypal_payment_status SET payment_status_name = 'Полностью измененный' WHERE payment_status_id=7;
