<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sat Oct 17 21:34:27 2015 -0400 Modified in v1.5.5 $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
/*
  Example usage:

  $heading = array();
  $heading[] = array('params' => 'class="menuBoxHeading"',
                     'text'  => BOX_HEADING_TOOLS,
                     'link'  => zen_href_link(basename($PHP_SELF), ''));

  $contents = array();
  $contents[] = array('text'  => SOME_TEXT);

  $box = new box;
  echo $box->infoBox($heading, $contents);
*/

  class box extends boxTableBlock {
    function __construct() {
      $this->heading = array();
      $this->contents = array();
    }

    function infoBox($heading, $contents) {
      $this->table_row_parameters = 'class="infoBoxHeading"';
      $this->table_data_parameters = 'class="infoBoxHeading"';
      $this->heading = $this->tableBlock($heading);

      $this->table_row_parameters = '';
      $this->table_data_parameters = 'class="infoBoxContent"';
      $this->contents = $this->tableBlock($contents);

      return $this->heading . $this->contents;
    }

    function menuBox($heading, $contents) {
      $this->table_data_parameters = 'class="menuBoxHeading"';
      if (isset($heading[0]['link'])) {
        $this->table_data_parameters .= ' onmouseover="this.style.cursor=\'hand\'" onclick="document.location.href=\'' . $heading[0]['link'] . '\'"';
        $heading[0]['text'] = '&nbsp;<a href="' . $heading[0]['link'] . '" class="menuBoxHeadingLink">' . $heading[0]['text'] . '</a>&nbsp;';
      } else {
        $heading[0]['text'] = '&nbsp;' . $heading[0]['text'] . '&nbsp;';
      }
      $this->heading = $this->tableBlock($heading);

      $this->table_data_parameters = 'class="menuBoxContent"';
      $this->contents = $this->tableBlock($contents);

      return $this->heading . $this->contents;
    }
  }
