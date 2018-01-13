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
        'ACP_USER_RECENT_ACTIVITY_TITLE'        => 'Letzte Benutzeraktivitäten',
        'ACP_SETTINGS'                                                => 'Einstellungen',

        'ACP_USER_RECENT_ACTIVITY_SETTING_SAVED'        => 'Letzte Benutzeraktivitäten Erweiterungseinstellungen wurden erfolgreich geändert.',

        'ALLOW_USER_RECENT_ACTIVITY'                        => 'Letzte Benutzeraktivitäten aktivieren',
        'ALLOW_USER_RECENT_ACTIVITY_EXPLAIN'        => 'Letzte Benutzeraktivitäten werden in den Benutzerprofilen angezeigt.',
        'NUMBER_USER_RECENT_ACTIVITY'                        => 'Maximale Anzahl an angezeigten aktuellsten Beiträgen',
        'NUMBER_USER_RECENT_ACTIVITY_EXPLAIN'        => 'Die maximale Anzahl der aktuellsten Beiträge, die im jeweiligen Benutzerprofil angezeigt werden sollen.',
        'SHOW_USER_RECENT_POST'                                        => 'Zeige den Beitragstext an',
        'SHOW_USER_RECENT_POST_EXPLAIN'                        => 'Sollen die aktuellsten Beitragstexte angezeigt werden?',
        'NUMBER_CHAR_POST'                                                => 'Die Anzahl der Beitragszeichen',
        'NUMBER_CHAR_POST_EXPLAIN'                                => 'Gebe ein, wie viele Zeichen der aktuellsten Beiträge angezeigt werden sollen, sofern du die Anzeige der Beitragstexte erlaubt hast.',
));