<?php
/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1
 * @license    GNU/GPL
 */

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 *
 * @package    HelloWorld
 */
class JohnsonViewJohnson extends JView
{
	function display($tpl = null)
	{
		//$greeting = "Hello World!";
		//$this->greeting =$greeting;
		
		// one way of accessing model
		
	//	$model = &$this->getModel();
		
	//	$this->greeting =$model->getGreeting();
	
		// another way to access the model using property getter
		$this->greeting =$this->get('Msg');
		parent::display($tpl);
	}
}
