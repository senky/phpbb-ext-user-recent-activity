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
	'ACP_USER_RECENT_ACTIVITY_TITLE'	=> 'User Recent Activity',
	'ACP_SETTINGS'						=> 'Configurações',

	'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'	=> 'As configurações da extensão Atividade Recente do Usuário foram alteradas com sucesso.',

	'ALLOW_USER_RECENT_ACTIVITY'			=> 'Permitir atividade recente do usuário',
	'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Atividade recente será exibida nos perfis do usuário.',
	'ONLY_MODS'								=> 'Mostrar atividade recente do usuário apenas para administradores e moderadores',
	'ONLY_MODS_EXPLAIN'						=> 'Se definido como Sim, a atividade recente do usuário nos perfis de usuário ficará visível apenas para administradores e moderadores.',
	'NUMBER_USER_RECENT_ACTIVITY'			=> 'Número máximo de posts de atividade recente do usuário',
	'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'	=> 'Número máximo de postagens de atividades recentes do usuário para exibir no perfil de usuários.',
	'SHOW_USER_RECENT_POST'					=> 'Mostrar o texto do post',
	'SHOW_USER_RECENT_POST_EXPLAIN'			=> 'Mostrar o texto do post de atividade recente?',
	'NUMBER_CHAR_POST'						=> 'Número de caracteres de texto post',
	'NUMBER_CHAR_POST_EXPLAIN'				=> 'Insira o número de caracteres a serem exibidos se você estiver permitindo exibir o texto do post.',
));
