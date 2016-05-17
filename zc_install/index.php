<?php
/**
 * index.php -- This is the main controller file for the Zen Cart installer
 * @package Installer
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Fri Oct 9 15:32:07 2015 -0400 Modified in v1.5.5 $
 */
  define('IS_ADMIN_FLAG',false);

/* Debugging
 *  'silent': suppress all logging
 *  'screen': display-to-screen and also to the /logs/ folder  (synonyms: TRUE or 'TRUE' or 1)
 *  'file':   log-to-file-only   (synonyms: anything other than above options)
 */
  $debug_logging = 'file';

/*
 * Ensure that the include_path can handle relative paths, before we try to load any files
 */
  if (!strstr(ini_get('include_path'), '.')) ini_set('include_path', '.' . PATH_SEPARATOR . ini_get('include_path'));

/*
 * Initialize system core components
 */
  if (!defined('__DIR__')) define('__DIR__', dirname(__FILE__));

  define('DIR_FS_INSTALL', __DIR__ . DIRECTORY_SEPARATOR);
  define('DIR_FS_ROOT', realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR);

  require(DIR_FS_INSTALL . 'includes/application_top.php');

  if ($controller == 'cli') {
    require(DIR_FS_INSTALL . 'includes/cli_controller.php');
  } else {
    require(DIR_FS_INSTALL . $page_directory . '/header_php.php');
    require(DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/html_header.php');
    require(DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/main_template_vars.php');
    require(DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/tpl_main_page.php');
  }
