<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
// include the helper file
require_once(dirname(__FILE__).DS.'helper.php');
 
// get a parameter from the module's configuration
$userCount = $params->get('usercount');
 
// get the items to display from the helper
$items = ModHelloWorldHelper::getItems($userCount);
 
// include the template for display
require(JModuleHelper::getLayoutPath('mod_hello_world'));
