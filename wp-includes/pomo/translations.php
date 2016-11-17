<?php
/**
 * Class for a set of entries for translation and their associated headers
 *
 * @version $Id: translations.php 718 2012-10-31 00:32:02Z nbachiyski $
 * @package pomo
 * @subpackage translations
 */

require_once dirname(__FILE__) . '/entry.php';

class Gettext_Translations extends Translations {

}

if ( !class_exists( 'NOOP_Translations' ) ):
/**
 * Provides the same interface as Translations, but doesn't do anything
 */
class NOOP_Translations {
	var $entries = array();
	var $headers = array();

	function translate($singular, $context=null) {
		return $singular;
	}
}
endif;
