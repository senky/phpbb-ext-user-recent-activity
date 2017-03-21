<?php
/**
*
* User Recent Activity extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
	'ACP_USER_RECENT_ACTIVITY_TITLE'	=> 'Poslední aktivita užívatele',
	'ACP_SETTINGS'						=> 'Nastavení',

	'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'	=> 'Nastavení rozšíření Poslední aktivita užívatele byla úspěšně změnená.',

	'ALLOW_USER_RECENT_ACTIVITY'			=> 'Povolit rozšíření',
	'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Rozšíření bude zobrazeno v užívatelském profilu.',
	'NUMBER_USER_RECENT_ACTIVITY'			=> 'Maximální počet příspěvků',
	'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Maximální počet zobrazených posledních příspěvků užívatele v jeho profilu.',
	'SHOW_USER_RECENT_POST'					=> 'Zobrazit text příspěvku',
	'SHOW_USER_RECENT_POST_EXPLAIN'			=> 'Chcete aby se zobrazoval i text příspěvku?',
	'NUMBER_CHAR_POST'						=> 'Počet znaků',
	'NUMBER_CHAR_POST_EXPLAIN'				=> 'Vložte číslo kolik znaků má být zobrazených z textu příspěvku.',
));
