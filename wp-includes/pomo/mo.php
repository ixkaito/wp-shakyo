<?php
/**
 * Class for working with MO files
 *
 * @version $Id: mo.php 718 2012-10-31 00:32:02Z nbachiyski $
 * @package pomo
 * @subpackage mo
 */

require_once dirname(__FILE__) . '/translations.php';
require_once dirname(__FILE__) . '/streams.php';

if ( !class_exists( 'MO' ) ):
class MO extends Gettext_Translations {

	var $_nplurals = 2;
}
endif;