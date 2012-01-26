<?php
/**
 * @version			1.0
 * @package			com.aloq.mod_boilerplate
 * @subpackage	mod_boilerplate
 * @copyright		Copyright (C) 2011 aloq AB, All rights reserved.
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

class modBoilerplateHelper {

	function getSomething() {
		global $mainframe;

		$db = JFactory::getDBO();
		$query = "SELECT * from #__boilerplate WHERE something = 0;";
		$db->setQuery($query);
		$result = $db->loadRowList();
	
		return $result;
	}
	
}
?>