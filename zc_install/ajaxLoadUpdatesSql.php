<?php
/**
 * ajaxLoadUpdatesSql.php
 * @package Installer
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Fri Oct 9 15:32:07 2015 -0400 New in v1.5.5 $
 */
define('IS_ADMIN_FLAG', false);
if (!defined('__DIR__')) define('__DIR__', dirname(__FILE__));
define('DIR_FS_INSTALL', __DIR__ . '/');
define('DIR_FS_ROOT', realpath(__DIR__ . '/../') . '/');

require(DIR_FS_INSTALL . 'includes/application_top.php');

$error = FALSE;
$errorList = array();
$db_type = 'mysql';
$updateList = array(
        '1.2.7'=>array('required'=>'1.2.6'),
        '1.3.0'=>array('required'=>'1.2.7'),
        '1.3.5'=>array('required'=>'1.3.0'),
        '1.3.6'=>array('required'=>'1.3.5'),
        '1.3.7'=>array('required'=>'1.3.6'),
        '1.3.8'=>array('required'=>'1.3.7'),
        '1.3.9'=>array('required'=>'1.3.8'),
        '1.5.0'=>array('required'=>'1.3.9'),
        '1.5.1'=>array('required'=>'1.5.0'),
        '1.5.2'=>array('required'=>'1.5.1'),
        '1.5.3'=>array('required'=>'1.5.2'),
        '1.5.4'=>array('required'=>'1.5.3'),
        '1.5.5'=>array('required'=>'1.5.4'),
        );

$systemChecker = new systemChecker();
$dbVersion = $systemChecker->findCurrentDbVersion();
$updateVersion = str_replace('version-', '', $_POST['version']);
$updateVersion = str_replace('_', '.', $updateVersion);
$versionInfo = $updateList[$updateVersion];

// $errorList[] = "I have $dbVersion. POST=" . $_POST['version'] . ' which asks for updateVersion=' . $updateVersion . '; therefore versionRequired=' . $versionInfo[required];

if ($versionInfo['required'] != $dbVersion)
{
  $error = TRUE;
  $errorList[] = sprintf(TEXT_COULD_NOT_UPDATE_BECAUSE_ANOTHER_VERSION_REQUIRED, $updateVersion, $dbVersion, $versionInfo['required']);
}
if (!$error)
{
  require_once(DIR_FS_INSTALL . 'includes/classes/class.zcDatabaseInstaller.php');
  $file = DIR_FS_INSTALL . 'sql/updates/' . $db_type . '_upgrade_zencart_' . str_replace('.', '', $updateVersion) . '.sql';
  $options = $systemChecker->getDbConfigOptions();
  $dbInstaller = new zcDatabaseInstaller($options);
  $result = $dbInstaller->getConnection();
  $errorUpg = $dbInstaller->parseSqlFile($file);
}
echo json_encode(array('error'=>$error, 'version'=>$_POST['version'], 'errorList'=>$errorList));
