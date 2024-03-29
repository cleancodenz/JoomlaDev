<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');


// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_helloworld')) 
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Set some global property
//$document = JFactory::getDocument();
//$document->addStyleDeclaration('.icon-48-helloworld {background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
 
// require helper file
JLoader::register('HelloWorldHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'helloworld.php');
 
// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('HelloWorld');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
