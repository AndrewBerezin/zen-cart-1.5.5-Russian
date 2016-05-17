<?php
/**
 * @package 
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: popup_search_help.php 2471 2005-11-29 01:14:18Z drbyte $
*/

define('HEADING_SEARCH_HELP', 'Помощь при поиске');
define('TEXT_SEARCH_HELP', 'Система поиска позволяет Вам искать товары, названия, описания и изготовителей по ключевому слову.<br /><br />При поиске, Вы можете разделять ключевые слова и фразы логическими операторами AND, OR. Например, Вы можете ввести <span style="text-decoration:underline;">Microsoft AND мышь</span>. В результате будет будут выведены ссылки, содержащие оба слова. Тем не менее, если Вы заносите <span style="text-decoration:underline;">мышь OR клавиатура</span>, Вы получите список, который содержит оба или одно из слов, заданных в поиске. Если слова не разделяются символами AND или OR, поиск будет работать с определением OR.<br /><br />Вы можете также найти точно заданные слова заключая их в кавычки. Например, если Вы ищете <span style="text-decoration:underline;">"компьютер настольный"</span>, Вы получите список товаров, которые содержат эту фразу целиком.<br /><br />Скобки могут использоваться, чтобы управлять порядком логических действий. Например, Вы можете ввести <span style="text-decoration:underline;">Microsoft AND (мышь OR клавиатура OR "SQL сервер")</span>.');
define('TEXT_CLOSE_WINDOW', '<span class="pseudolink">Закрыть окно</span> [x]');

// EOF