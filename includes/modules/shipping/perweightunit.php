<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sat Oct 17 22:52:38 2015 -0400 Modified in v1.5.5 $
 */
/**
 * "Per Weight Unit" shipping module, allowing you to offer per-unit-rate shipping options
 *
 */
class perweightunit extends base {
  /**
   * $code determines the internal 'code' name used to designate "this" payment module
   *
   * @var string
   */
  var $code;
  /**
   * $title is the displayed name for this payment method
   *
   * @var string
   */
  var $title;
  /**
   * $description is a soft name for this payment method
   *
   * @var string
   */
  var $description;
  /**
   * module's icon
   *
   * @var string
   */
  var $icon;
  /**
   * $enabled determines whether this module shows or not... during checkout.
   *
   * @var boolean
   */
  var $enabled;
  /**
     * Constructor
   *
   * @return perweightunit
   */
  function __construct() {
    global $order, $db;

    $this->code = 'perweightunit';
    $this->title = MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_TITLE;
    $this->description = MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_DESCRIPTION;
    $this->sort_order = MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER;
    $this->icon = '';
    $this->tax_class = MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS;
    $this->tax_basis = MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS;

    // disable only when entire cart is free shipping
    if (zen_get_shipping_enabled($this->code)) {
      $this->enabled = ((MODULE_SHIPPING_PERWEIGHTUNIT_STATUS == 'True') ? true : false);
    }

    if ($this->enabled) {
      // check MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD is in
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD'");
      if ($check_query->EOF) {
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Handling Per Order or Per Box', 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD', 'Order', 'Do you want to charge Handling Fee Per Order or Per Box?', '6', '0', 'zen_cfg_select_option(array(\'Order\', \'Box\'), ', now())");
      }
    }

    if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_PERWEIGHTUNIT_ZONE > 0) ) {
      $check_flag = false;
      $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . "
                             where geo_zone_id = '" . MODULE_SHIPPING_PERWEIGHTUNIT_ZONE . "'
                             and zone_country_id = '" . (int)$order->delivery['country']['id'] . "'
                             order by zone_id");
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
  /**
   * Obtain quote from shipping system/calculations
   *
   * @param string $method
   * @return array
   */
  function quote($method = '') {
    global $order, $shipping_weight, $shipping_num_boxes;

    $total_weight_units = $shipping_weight;
    $this->quotes = array('id' => $this->code,
                          'module' => MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_TITLE,
                          'methods' => array(array('id' => $this->code,
                                                   'title' => MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_WAY,
                                                   'cost' => MODULE_SHIPPING_PERWEIGHTUNIT_COST * ($total_weight_units * $shipping_num_boxes) +
                                                   (MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD == 'Box' ? MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING * $shipping_num_boxes : MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING) ) ));


    if ($this->tax_class > 0) {
      $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
    }

    if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

    return $this->quotes;
  }
  /**
   * Check to see whether module is installed
   *
   * @return boolean
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_PERWEIGHTUNIT_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    return $this->_check;
  }
  /**
   * Install the shipping module and its configuration settings
   *
   */
  function install() {
    global $db;
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Разрешить модуль По весу товара', 'MODULE_SHIPPING_PERWEIGHTUNIT_STATUS', 'True', 'Вы хотите разрешить модуль доставки По весу товара?<br /><br />Стоимость доставки для единицы веса * Общий вес заказа', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Стоимость доставки для единицы веса', 'MODULE_SHIPPING_PERWEIGHTUNIT_COST', '1', 'Замечание: Если Вы используете данный модуль доставки, убедитесь, что проверили параметры настройки Тары в Отгрузке/Упаковке и установили наибольший вес, достаточный для цены, например 5000.00 и настроить параметры Маленьких и Больших упаковок, которые также добавятся к цене.<br /><br />Стоимость доставки рассчитыватся как Стоимость доставки для единицы веса * Общий вес заказа.', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Накладные расходы', 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING', '0', 'Накладные расходы для данного способа доставки.', '6', '0', now())");

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Накладные расходы на весь заказ или на коробку?', 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD', 'Order', 'Накладные расходы добавлять на весь заказ или на коробку?', '6', '0', 'zen_cfg_select_option(array(\'Order\', \'Box\'), ', now())");

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Налог', 'MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS', '0', 'Использовать следующий класс налогов.', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Базис налога', 'MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS', 'Shipping', 'Базис для расчёта налога. Возможные варианты:<br />Shipping - Налог рассчитывается по адресу доставки<br />Billing - Налог рассчитывается по адресу плательщика<br />Store - Налог рассчитывается по адресу магазина, если зона доставки/плательщика совпадает с зоной магазина', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Зона доставки', 'MODULE_SHIPPING_PERWEIGHTUNIT_ZONE', '0', 'Если выбрана зона, то данный модуль доставки будет виден только покупателям из этой зоны.', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Порядок сортировки', 'MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER', '0', 'Порядок сортировки', '6', '0', now())");
  }
  /**
   * Remove the module and all its settings
   *
   */
  function remove() {
    global $db;
    $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key LIKE  'MODULE\_SHIPPING\_PERWEIGHTUNIT\_%'");
  }
  /**
   * Internal list of configuration keys used for configuration of the module
   *
   * @return array
   */
  function keys() {
    return array('MODULE_SHIPPING_PERWEIGHTUNIT_STATUS', 'MODULE_SHIPPING_PERWEIGHTUNIT_COST', 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING', 'MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD', 'MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS', 'MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS', 'MODULE_SHIPPING_PERWEIGHTUNIT_ZONE', 'MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER');
  }
}
?>