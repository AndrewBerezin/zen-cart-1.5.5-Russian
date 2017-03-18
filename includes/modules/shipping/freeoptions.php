<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sat Oct 17 22:52:38 2015 -0400 Modified in v1.5.5 $
 */

  class freeoptions extends base {
    var $code, $title, $description, $icon, $enabled;
    var $ck_freeoptions_total, $ck_freeoptions_weight, $ck_freeoptions_items;

// class constructor
    function __construct() {
      global $order, $db;

      $this->code = 'freeoptions';
      $this->title = MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE;
      $this->description = MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER;
      $this->icon = '';
      $this->tax_class = MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS;
      $this->tax_basis = MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS;

      // disable only when entire cart is free shipping
      if (zen_get_shipping_enabled($this->code)) {
          $this->enabled = ((MODULE_SHIPPING_FREEOPTIONS_STATUS == 'True') ? true : false);
      }

      if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_FREEOPTIONS_ZONE > 0) ) {
        $check_flag = false;
        $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_SHIPPING_FREEOPTIONS_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
        while (!$check->EOF) {
          if ($check->fields['zone_id'] < 1) {
            $check_flag = true;
            break;
          } elseif ($check->fields['zone_id'] == $order->delivery['zone_id']) {
            $check_flag = true;
            break;
          }
		  $check->MoveNext();
        }

        if ($check_flag == false) {
          $this->enabled = false;
        }
      }
    }

// class methods
    function quote($method = '') {
      global $order;
      $order_weight = round($_SESSION['cart']->show_weight(),9);

      // check if anything is configured for total, weight or item
      if ((MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN !='' or MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX !='')) {
        $this->ck_freeoptions_total = true;
      } else {
        $this->ck_freeoptions_total = false;
      }
      if ((MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN !='' or MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX !='')) {
        $this->ck_freeoptions_weight = true;
      } else {
        $this->ck_freeoptions_weight = false;
      }
      if ((MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN !='' or MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX !='')) {
        $this->ck_freeoptions_items = true;
      } else {
        $this->ck_freeoptions_items = false;
      }
      if ($this->ck_freeoptions_total or $this->ck_freeoptions_weight or $this->ck_freeoptions_items) {
        $this->enabled = true;
      } else {
        $this->enabled = false;
      }

      // disabled if nothing validates for total, weight or item
      if ($this->enabled) {
        if ($this->ck_freeoptions_total) {
          switch (true) {
          case ((MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN !='' and MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX !='')):
// free shipping total should not need adjusting
//            if (($_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices()) >= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN and ($_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices()) <= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX) {
            if (($_SESSION['cart']->show_total()) >= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN and ($_SESSION['cart']->show_total()) <= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX) {
              $this->ck_freeoptions_total = true;
            } else {
              $this->ck_freeoptions_total = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN !='')):
//            if (($_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices()) >= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN) {
            if (($_SESSION['cart']->show_total()) >= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN) {
              $this->ck_freeoptions_total = true;
            } else {
              $this->ck_freeoptions_total = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX !='')):
//            if (($_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices()) <= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX) {
            if (($_SESSION['cart']->show_total()) <= MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX) {
              $this->ck_freeoptions_total = true;
            } else {
              $this->ck_freeoptions_total = false;
            }
            break;
          }
        }

        if ($this->ck_freeoptions_weight) {
          switch (true) {
          case ((MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN !='' and MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX !='')):
            if ($order_weight >= MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN and $order_weight <= MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX) {
              $this->ck_freeoptions_weight = true;
            } else {
              $this->ck_freeoptions_weight = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN !='')):
            if ($order_weight >= MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN) {
              $this->ck_freeoptions_weight = true;
            } else {
              $this->ck_freeoptions_weight = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX !='')):
            if ($order_weight <= MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX) {
              $this->ck_freeoptions_weight = true;
            } else {
              $this->ck_freeoptions_weight = false;
            }
            break;
          }
        }

        if ($this->ck_freeoptions_items) {
          switch (true) {
          case ((MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN !='' and MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX !='')):
// free shipping items should not need adjusting
//            if (($_SESSION['cart']->count_contents() - $_SESSION['cart']->free_shipping_items()) >= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN and ($_SESSION['cart']->count_contents() - $_SESSION['cart']->free_shipping_items()) <= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX) {
            if (($_SESSION['cart']->count_contents()) >= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN and ($_SESSION['cart']->count_contents()) <= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX) {
              $this->ck_freeoptions_items = true;
            } else {
              $this->ck_freeoptions_items = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN !='')):
//            if (($_SESSION['cart']->count_contents() - $_SESSION['cart']->free_shipping_items()) >= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN) {
            if (($_SESSION['cart']->count_contents()) >= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN) {
              $this->ck_freeoptions_items = true;
            } else {
              $this->ck_freeoptions_items = false;
            }
            break;
          case ((MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX !='')):
//            if (($_SESSION['cart']->count_contents() - $_SESSION['cart']->free_shipping_items())<= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX) {
            if (($_SESSION['cart']->count_contents())<= MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX) {
              $this->ck_freeoptions_items = true;
            } else {
              $this->ck_freeoptions_items = false;
            }
            break;
          }
        }
      }

/*
echo 'I see count: ' . $_SESSION['cart']->count_contents() . ' free count: ' . $_SESSION['cart']->free_shipping_items() . '<br>' .
'I see weight: ' . $_SESSION['cart']->show_weight() . '<br>' .
'I see total: ' . $_SESSION['cart']->show_total() . ' free price: ' . $_SESSION['cart']->free_shipping_prices() . '<br>' .
'Final check ' . ($this->ck_freeoptions_total ? 'T: YES ' : 'T: NO ') . ($this->ck_freeoptions_weight ? 'W: YES ' : 'W: NO ') . ($this->ck_freeoptions_items ? 'I: YES ' : 'I: NO ') . '<br>';
*/

// final check for display of Free Options
      if ($this->ck_freeoptions_total or $this->ck_freeoptions_weight or $this->ck_freeoptions_items) {
        $this->enabled = true;
      } else {
        $this->enabled = false;
      }

      if ($this->enabled) {
        $this->quotes = array('id' => $this->code,
                              'module' => MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE,
                              'methods' => array(array('id' => $this->code,
                                                       'title' => MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY,
                                                       'cost'  => MODULE_SHIPPING_FREEOPTIONS_COST + MODULE_SHIPPING_FREEOPTIONS_HANDLING)));

        if ($this->tax_class > 0) {
          $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
        }

        if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);
      }

      return $this->quotes;
    }

    function check() {
      global $db;
      if (!isset($this->_check)) {
        $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_FREEOPTIONS_STATUS'");
        $this->_check = $check_query->RecordCount();
      }
      return $this->_check;
    }

    function install() {
      global $db;
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Разрешить модуль Условная бесплатная доставка', 'MODULE_SHIPPING_FREEOPTIONS_STATUS', 'True', 'Условная бесплатная доставка исользуется для показа Бесплатной доставки при использовании других модулей доставки. Он может быть использован: Всегда, в зависимости от Суммы заказа, Веса заказа или Общего количества.
Модуль Условная бесплатная доставка не показывается, когда показывается модуль Бесплатная доставка.<br /><br />
Если установить Сумма заказа >= 0.00 и <= ничего (оставив пустым), то модуль Условная бесплатная доставка будет показываться со всеми модулями доставки за исключением модуля Бесплатная доставка.<br /><br />
Замечание: Если оставить пустыми все значения Сумма заказа, Вес и Общее количество, то модуль будет деактивирован.<br /><br />
Замечание: Модуль Условная бесплатная доставка не показывается, если модуль Бесплатная доставка используется на базе 0 веса.
Смотри: модуль Бесплатная доставка<br /><br />Хотите использовать модуль Условная бесплатная доставка?', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Стоимость доставки', 'MODULE_SHIPPING_FREEOPTIONS_COST', '0.00', 'Стоимость доставки должна быть $0.00', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Накладные расходы', 'MODULE_SHIPPING_FREEOPTIONS_HANDLING', '0', 'Накладные расходы для данного способа доставки.', '6', '0', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Сумма заказа >=', 'MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN', '0.00', 'Бесплатная доставка при Сумме заказа >=', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Сумма заказа <=', 'MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX', '', 'Бесплатная доставка при Сумме заказа <=', '6', '0', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Вес >=', 'MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN', '', 'Бесплатная доставка при Весе >=', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Вес <=', 'MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX', '', 'Бесплатная доставка при Весе <=', '6', '0', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Общее количество >=', 'MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN', '', 'Бесплатная доставка при Общем количестве >=', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Общее количество <=', 'MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX', '', 'Бесплатная доставка при Общем количестве <=', '6', '0', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Налог', 'MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS', '0', 'Использовать следующий класс налогов.', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Базис налога', 'MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS', 'Shipping', 'Базис для расчёта налога. Возможные варианты:<br />Shipping - Налог рассчитывается по адресу доставки<br />Billing - Налог рассчитывается по адресу плательщика<br />Store - Налог рассчитывается по адресу магазина, если зона доставки/плательщика совпадает с зоной магазина', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Зона доставки', 'MODULE_SHIPPING_FREEOPTIONS_ZONE', '0', 'Если выбрана зона, то данный модуль доставки будет виден только покупателям из этой зоны.', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Порядок сортировки', 'MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER', '0', 'Порядок сортировки', '6', '0', now())");
    }

   function remove() {
     global $db;
     $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key LIKE  'MODULE\_SHIPPING\_FREEOPTIONS\_%'");
   }

    function keys() {
      return array('MODULE_SHIPPING_FREEOPTIONS_STATUS', 'MODULE_SHIPPING_FREEOPTIONS_COST', 'MODULE_SHIPPING_FREEOPTIONS_HANDLING', 'MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN', 'MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX', 'MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN', 'MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX', 'MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN', 'MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX', 'MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS', 'MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS', 'MODULE_SHIPPING_FREEOPTIONS_ZONE', 'MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER');
    }
  }
?>