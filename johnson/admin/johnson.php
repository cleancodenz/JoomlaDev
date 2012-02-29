<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// Set some global property
//$document = JFactory::getDocument();
//$document->addStyleDeclaration('.icon-48-johnson {background-image: url(../media/com_johnson/images/tux-48x48.png);}');

// require helper file
JLoader::register('JohnsonHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'johnsonhelpper.php');
 

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('Johnson');
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();