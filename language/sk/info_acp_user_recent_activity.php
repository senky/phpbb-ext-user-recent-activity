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
	'ACP_USER_RECENT_ACTIVITY_TITLE'	=> 'Posledná aktivita užívateľa',
	'ACP_SETTINGS'						=> 'Nastavenie',

	'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'	=> 'Nastavenie rozšírenia Posledná aktivita užívateľa bola úspešne zmenená.',

	'ALLOW_USER_RECENT_ACTIVITY'			=> 'Povoliť rozšírenie',
	'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Rozšírenie bude zobrazené v užívateľovom profile.',
	'NUMBER_USER_RECENT_ACTIVITY'			=> 'Maximálny počet príspevkov',
	'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Maximálny počet zobrazených posledných príspevkov užívateľa v jeho profile.',
	'SHOW_USER_RECENT_POST'					=> 'Zobraziť text príspevku',
	'SHOW_USER_RECENT_POST_EXPLAIN'			=> 'Chcete aby sa zobrazoval aj text príspevku?',
	'NUMBER_CHAR_POST'						=> 'Počet znakov',
	'NUMBER_CHAR_POST_EXPLAIN'				=> 'Vložte číslo koľko znakov má byť zobrazených z textu príspevku.',
));
