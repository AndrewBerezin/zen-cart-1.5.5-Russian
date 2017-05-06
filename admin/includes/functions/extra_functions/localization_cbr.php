<?php
/**
 * localization_cbr
 *
 * @package Admin
 * @copyright Copyright 2005-2010 Andrew Berezin eCommerce-Service.com
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @link http://www.cbr.ru/scripts/Root.asp?Prtid=SXML
 * @version $Id: localization_cbr.php 1.1.1 20.02.2011 15:32:19 AndrewBerezin $
 */

function quote_cbr_currency($code, $base = DEFAULT_CURRENCY) {
  static $rateCacheCBR;

  if (!isset($rateCacheCBR)) {
    $rateCacheCBR = array();
    $rateCacheCBR['RUR'] = $rateCacheCBR['RUB'] = 1;

    $url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    $data = '';
    // check via file() ... may fail if php file Wrapper disabled.
    $page = @file($url . '?' . $data);
    if (!is_array($page) && function_exists('curl_init')) {
      // check via cURL instead.  May fail if proxy not set, esp with GoDaddy.
      $page = doCurlCurrencyRequest('GET', $url, $data) ;
      $page = explode("\n", $page);
    }
    $page = trim(implode('', $page));

    if ($page != '') {

//        $cbrXML = simplexml_load_string($page);
      preg_match_all("|<CharCode>(.*?)</CharCode>|is", $page, $CharCode);
      preg_match_all("|<Nominal>(.*?)</Nominal>|is", $page, $Nominal);
      preg_match_all("|<Value>(.*?)</Value>|is", $page, $Value);

      if (sizeof($CharCode[1]) != sizeof($Nominal[1]) || sizeof($CharCode[1]) != sizeof($Value[1])) {
        return false;
      }

      for ($i=0, $n=sizeof($CharCode[1]); $i<$n; $i++) {
        $Value[1][$i] = str_replace(',', '.', $Value[1][$i]);
        $rateCacheCBR[$CharCode[1][$i]] = $Value[1][$i]/$Nominal[1][$i];
      }

    }
  }

  if (isset($rateCacheCBR[$code]) && isset($rateCacheCBR[$base])) {
    $rate = $rateCacheCBR[$base]/$rateCacheCBR[$code];
    return (string)$rate;
  } else {
    return false;
  }
}