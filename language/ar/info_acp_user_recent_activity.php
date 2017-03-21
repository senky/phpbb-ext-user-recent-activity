<?php
/**
*
* User Recent Activity extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_USER_RECENT_ACTIVITY_TITLE'	=> 'آخر نشاط العضو',
	'ACP_SETTINGS'						=> 'الإعدادات',

	'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'	=> 'تم تحديث الإعدادات بنجاح.',

	'ALLOW_USER_RECENT_ACTIVITY'			=> 'تفعيل ',
	'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'اختيارك "نعم" يعني ظهور الإضافة في الملف الشخصي للعضو.',
	'NUMBER_USER_RECENT_ACTIVITY'			=> 'عدد المُشاركات ',
	'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'الحد الأقصى لعدد مُشاركات العضو لعرضها في الملف الشخصي للعضو.',
	'SHOW_USER_RECENT_POST'					=> 'عرض نص المُشاركة ',
	'SHOW_USER_RECENT_POST_EXPLAIN'			=> 'اختيارك "نعم" يعني ظهور نص المُشاركة.',
	'NUMBER_CHAR_POST'						=> 'عدد حروف النص ',
	'NUMBER_CHAR_POST_EXPLAIN'				=> 'كم عدد حروف النص التي تريد عرضها ؟ سيتم تعطيل هذا الخيار في حالة تم تحديد "لا" في الخيار السابق : رض نص المُشاركة.',
));
