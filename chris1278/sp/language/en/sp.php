<?php
/**
*
* @package phpBB Extension - Benutzerdefnierte Sprachvariabelen
* @copyright (c) 2017 ()
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
	'TERMS_OF_USE_CONTENT'				=> 'Hier kommt der Text rein.',
));
