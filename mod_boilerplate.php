<?php
/**
 * @version			1.0
 * @package			com.aloq.mod_boilerplate
 * @subpackage	mod_boilerplate
 * @copyright		Copyright (C) 2011 aloq AB, All rights reserved.
 */

// no direct access
defined('_JEXEC') or die;

require_once (dirname(__FILE__).DS.'helper.php');

$something = modBoilerplateHelper::getSomething();

require JModuleHelper::getLayoutPath('mod_boilerplate', $params->get('layout', 'default'));
