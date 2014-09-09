<?php
/**
*
* @package phpBB Extension - Crizzo Simple Imprint
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'IMPRINT'			=> 'Imprint',
	'VIEWONLINE_SIMPLEIMPRINT'	=> 'Viewing imprint',
	'SIMPLE_IMPRINT_UPDATED'	=> 'Imprint was successfully updated.',
));