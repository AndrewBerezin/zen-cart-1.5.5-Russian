<?php
/**
 * @package
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
*/

define('NAVBAR_TITLE', TEXT_GV_NAME . ' - вопросы и ответы');
define('HEADING_TITLE', TEXT_GV_NAME . ' - вопросы и ответы');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Как купить ' . TEXT_GV_NAMES . '?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Как отправить ' . TEXT_GV_NAMES . ' кому-либо ещё?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Зачем нужен ' . TEXT_GV_NAMES . '?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Как использовать ' . TEXT_GV_NAMES . ' при оформлении заказа?</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Что делать, если возникают проблемы, вопросы при использовании ' . TEXT_GV_NAMES_A . '?</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Как купить ' . TEXT_GV_NAMES . '?');
define('SUB_HEADING_TEXT',TEXT_GV_NAMES . ' покупается точно так же, как и любой другой товар в нашем магазине, т.е. Вам необходимо положить ' . TEXT_GV_NAME . ' в корзину и оформить заказ! После того как мы получим оплату, Ваш ' . TEXT_GV_NAME . ' будет активирован и добавлен на Ваш персональный счёт ' . TEXT_GV_NAME_V . '. Вы сможете совершать покупки с его помощью, либо подарить свой ' . TEXT_GV_NAMES . ' своим близким, друзьям и знакомым.');
  case '2':
define('SUB_HEADING_TITLE','Как отправить ' . TEXT_GV_NAMES . ' кому-либо ещё?');
define('SUB_HEADING_TEXT','Вам будет предложено отправить оставшуюся сумму на ' . TEXT_GV_NAME_M . ' после оформления заказа, необходимо будте заполнить предложенную форму и нажать кнопку "Продолжить".');

  break;
  case '3':
  define('SUB_HEADING_TITLE','Зачем нужен ' . TEXT_GV_NAMES . '?');
  define('SUB_HEADING_TEXT','' . TEXT_GV_NAMES . ' может быть использован для полной или частичной оплаты заказа (в зависимости от суммы ' . TEXT_GV_NAMES_A . '), оформленного в нашем интернет-магазине, причём остаток средств на ' . TEXT_GV_NAME_M . ' не сгорает, оставшиеся деньги можно использовать в дальнейшем для совершения покупок в нашем интернет-магазине, кроме того, Вы можете подарить свой ' . TEXT_GV_NAMES . ' своим близким и знакомым.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Как использовать ' . TEXT_GV_NAMES . ' при оформлении заказа?');
  define('SUB_HEADING_TEXT','В процессе оформления заказа в нашем интернет-магазине Вам будет предложено воспользоваться ' . TEXT_GV_NAME_M . '.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Что делать, если возникают проблемы, вопросы при использовании ' . TEXT_GV_NAMES_A . '?');
  define('SUB_HEADING_TEXT','Если у Вас появились проблемы, либо вопросы при использовании ' . TEXT_GV_NAMES_A . ', задавайте нам их по адресу '. STORE_OWNER_EMAIL_ADDRESS . '. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Выберите интересующий Вас вопрос.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Пожалуйста введите код погашения Вашего ' . TEXT_GV_NAMES_A . ': ');
  define('TEXT_GV_REDEEM_ID', 'Код погашения:');

// EOF