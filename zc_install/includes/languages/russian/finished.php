<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: finished.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('TEXT_MAIN',"<h2>Поздравляем!</h2><h3>Вы успешно установили Zen Cart&reg;!</h3>
<h2>Дальнейшие действия</h2>
Для обеспечения безопасности, до того, как Вы дадите доступ к магазину остальным, Вам необходимо установить права \"<strong>только для чтения</strong>\" на файлы <strong>configure.php</strong> находяшийся в директориях <strong>/admin/includes/</strong> и <strong>/includes/</strong>.<br /><br />
Также необходимо удалить или переименовать директорию <strong>/zc_install</strong> во избежания повторной установки и удаление Вашей базы данных! Пока Вы этого не сделате, Вам будет об этом напоминать предупреждающее сообщение. <br/>
<h2>Конфигурация</h2>
Чтобы получить полезную информацию о конфигурировании и настройке Вашего магазина, мы советуем Вам начать с <a href=\"http://tutorials.zen-cart.com\"><strong>чтения справочника</strong></a> на официальном сайте поддержки.<br />
Если у Вас есть вопросы, то это лучшее место где их можно задать!<br /><br /> 
Также <strong>важно</strong> чтобы Вы ознакомились с <strong>документацией</strong> в директории <strong><a href=\"../docs\" target=\"_blank\">/docs</a> </strong>Вашего сайта. <a href=\"../docs\" target=\"_blank\">Вы можете посмотреть список документации.</a>
<h2>Важно</h2>Наиболее важный инструментарий, который Вы сможете использовать при настройке Вашего магазина, это <strong>Инструментарий разработчика</strong>, в <strong>Админе, меню Инструменты</strong>. Вы можете использовать его для поиска практически всего, что Вы захотите настроить или изменить, особенно текста, отображается на сайте.<br /><br />
Наиболее важная концепция, с которой Вы хотите познакомиться чтобы настроить свой сайт - это наша <em><strong>шаблонная система</strong></em>.  Есть несколько очень полезных статей о шаблонной системе в нашем <a href=\"http://tutorials.zen-cart.com\">онлайн справочнике</a>.
<h2>Дополнительно</h2>
<p><a href=\"http://www.zen-cart.com/wiki\" target=\"_blank\">Zen Cart&reg; Wiki</a> - полезное место для поиска советов и подсказок!</p>
<br />
<p><a href=\"http://www.zen-cart.su/\" target=\"_blank\">Русский Zen Cart&reg; </a> - о Zen Cart&reg; на русском языке: форум, новости, статьи, советы, обсуждения, локализация, модули.</p>
<p>

  Мы рады, что Вы выбрали Zen Cart&reg; для решений задач Вашей электронной коммерции!<br />
  <br />
" . 
'Посетите нас на <a href="http://www.zen-cart.com">www.zen-cart.com</a>' . '
и на <a href="http://www.zen-cart.su">www.zen-cart.su</a>
</p>

' .
'<p>Нажмите на кнопку <em>Переход в магазин</em> для входа в магазин или нажмите на кнопку <em>Переход в администраторскую</em> для входа в раздел администратора</p>');

  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; установка - окончена');
  define('STORE', 'Переход в магазин');
  define('ADMIN', 'Переход в администраторскую');
