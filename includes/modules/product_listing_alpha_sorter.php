<?php
/**
 * product_listing_alpha_sorter module
 *
 * @package modules
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Feb 15 13:59:01 2016 -0500 Modified in v1.5.5 $
 */
// BOF UTF-8
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

// build alpha sorter dropdown
  if (PRODUCT_LIST_ALPHA_SORTER == 'true') {
// BOF utf-8
//    if ((int)$_GET['alpha_filter_id'] == 0) {
    if ((int)$_GET['alpha_filter_id'] == 0 || mb_detect_encoding($_GET['alpha_filter_id']) == 'UTF-8') {
// EOF utf-8
      $letters_list[] = array('id' => '0', 'text' => TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES);
    } else {
      $letters_list[] = array('id' => '0', 'text' => TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET);
    }
// BOF localization
    $letters = explode(',', PRODUCTS_LISTING_ALPHA_SORTER_LETTERS);
    for ($j=0,$k=sizeof($letters); $j<$k; $j++) {
      $letters_range = explode('-', $letters[$j]);
      if (!isset($letters_range[1])) $letters_range[1] = $letters_range[0];
      if (mb_detect_encoding($letters_range[0]) == 'UTF-8') {
        $prfx = substr($letters_range[0], 0, 1);
        $from = substr($letters_range[0], 1, 1);
        $to = substr($letters_range[1], 1, 1);
      } else {
        $prfx = '';
        $from = $letters_range[0];
        $to = $letters_range[1];
      }
// BOF utf-8
//      for ($i=ord($letters_range[0]),$n=ord($letters_range[1]); $i<=$n; $i++) {
//        $letters_list[] = array('id' => sprintf('%02d', $i), 'text' => chr($i) );
      for ($i=ord($from),$n=ord($to); $i<=$n; $i++) {
        $letters_list[] = array('id' => $prfx . chr($i), 'text' => $prfx . chr($i) );
// EOF utf-8
      }
    }
/*
    for ($i=65; $i<91; $i++) {
      $letters_list[] = array('id' => sprintf('%02d', $i), 'text' => chr($i) );
    }
    for ($i=48; $i<58; $i++) {
      $letters_list[] = array('id' => sprintf('%02d', $i), 'text' => chr($i) );
    }
*/
// EOF localization
    $zco_notifier->notify('NOTIFY_PRODUCT_LISTING_ALPHA_SORTER_SELECTLIST', $prefix, $letters_list);

    if (TEXT_PRODUCTS_LISTING_ALPHA_SORTER != '') {
      echo '<label class="inputLabel">' . TEXT_PRODUCTS_LISTING_ALPHA_SORTER . '</label>' . zen_draw_pull_down_menu('alpha_filter_id', $letters_list, (isset($_GET['alpha_filter_id']) ? $_GET['alpha_filter_id'] : ''), 'onchange="this.form.submit()"');
    } else {
      echo zen_draw_pull_down_menu('alpha_filter_id', $letters_list, (isset($_GET['alpha_filter_id']) ? $_GET['alpha_filter_id'] : ''), 'onchange="this.form.submit()"');
    }
  }
