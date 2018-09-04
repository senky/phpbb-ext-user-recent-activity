<?php
/**
 *
 * User Recent Activity. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Jakub Senko <jakubsenko@gmail.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_RECENT_ACTIVITY_TITLE'	=> 'Activité récente des membres',
	'ACP_SETTINGS'						=> 'Paramètres',

	'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'	=> 'Les paramètres de l’extension « User Recent Activity » ont été modifiés avec succès !',

	'ALLOW_USER_RECENT_ACTIVITY'			=> 'Autoriser l’activité récente',
	'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Permet d’afficher l’activité récente dans les profils des membres.',
	'ONLY_MODS'								=> 'Afficher l’activité récente du membre uniquement aux modérateurs et administrateurs',
	'ONLY_MODS_EXPLAIN'						=> 'Permet d’afficher l’activité récente des membres uniquement dans les profils des modérateurs et des administrateurs.',
	'NUMBER_USER_RECENT_ACTIVITY'			=> 'Nombre maximum de messages dans l’activité récente du membre',
	'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Permet de saisir le nombre maximum de messages à afficher dans l’activité récente dans le profil des membres.',
	'SHOW_USER_RECENT_POST'					=> 'Afficher le texte des messages',
	'SHOW_USER_RECENT_POST_EXPLAIN'			=> 'Permet d’afficher le texte des messages dans l’activité récente dans le profil des membres.',
	'NUMBER_CHAR_POST'						=> 'Nombre de caractères à afficher dans le texte des messages',
	'NUMBER_CHAR_POST_EXPLAIN'				=> 'Permet de saisir le nombre de caractères à afficher dans le texte des messages lorsque l’option « Afficher le texte des messages » est activée.',
));
