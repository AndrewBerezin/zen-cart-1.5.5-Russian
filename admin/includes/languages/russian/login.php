<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @Localization: Andrew Berezin http://eCommerce-Service.com
 * @version $Id: Author: bislewl  Tue Feb 16 23:14:29 2016 -0600 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Админ логин');
define('HEADING_TITLE_EXPIRED', 'Админ логин - Ваш пароль истек');

define('TEXT_LOGIN','Логин');
define('TEXT_SUBMIT','Отправить');
define('TEXT_ADMIN_NAME', 'Имя');
define('TEXT_ADMIN_PASS', 'Пароль');
define('TEXT_ADMIN_OLD_PASSWORD', 'Старый пароль:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Новый пароль:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Подтвердите пароль:');

define('ERROR_WRONG_LOGIN', '<p>Вы ввели неправильное имя или пароль.</p>');
define('ERROR_SECURITY_ERROR', 'Ошибка безопасности при попытке войти.');

define('TEXT_PASSWORD_FORGOTTEN', 'Переслать пароль');

define('LOGIN_EXPIRY_NOTICE', 'Пожалуйста, помните, что после 15 минут бездействия, Вам будет необходимо снова войти.<br /><br />Примечание: Все пароли истекает через 90 дней, Вам будет предложено ввести новый пароль.');
define('ERROR_PASSWORD_EXPIRED', 'ПРИМЕЧАНИЕ: Ваш пароль истек. Пожалуйста, выберите новый пароль. Ваш пароль <strong>должен содержать как цифры и буквы и состоять минимум из 7 символов.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'По соображениям безопасности, ваш временный пароль должен быть изменен. Пожалуйста, выберите новый пароль. Ваш пароль <strong>должен содержать как цифры и буквы и состоять минимум из 7 символов.</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Админ логин уведомление об ошибке входа');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Важное замечание: было несколько неудачных попыток входа в систему для учетной записи администратора. Для Вашей защиты и для системы безопасности, после 6 попыток аккаунт будет заблокирован в течение минимум 30 минут, в течение которых Вы не сможете войти, даже если Вы помните свой пароль. Непрекращающиеся попытки входа будут продолжать блокировать аккаунт еще на 30 минут. Вы не сможете сделать сброс пароля в течение этого времени. Приносим извинения за неудобства.' . "\n\n" . 'Последняя попытка входа была предпринята с этого IP: %s.' . "\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Примечание: Ваш пароль истек, потому что Ваш сайт перешёл с не-SSL (менее безопасное) на соединение SSL (более безопасное). Изменение пароля в SSL является важным шагом к большей безопасности. Извините за причиненные неудобства. Действуют стандартные правила истечения срока действия пароля.');
