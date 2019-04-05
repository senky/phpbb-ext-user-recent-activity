<?php
/**
*
* User Recent Activity extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 2.1.1] (https://github.com/phpBBTraducoes)
* 
* @copyright (c) 2019 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
	'USER_RECENT_ACTIVITY'	=> 'Atividade recente de %s', 
	'DATE'					=> 'Data',
));
