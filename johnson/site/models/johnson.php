<?php
/**
 * Hello Model for Hello World Component
 * 
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_2
 * @license    GNU/GPL
 */
 
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );
 
/**
 * Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class JohnsonModelJohnson extends JModel
{
	/**
	 * @var string msg
	 */
	protected $msg;
    /**
    * Gets the greeting
    * @return string The greeting to be displayed to the user
    */
    function getGreeting()
    {
        return 'Hello, World! from model';
    }
    
/**
	 * Get the message
	 * @return string The message to be displayed to the user
	 */
	public function getMsg() 
	{
		if (!isset($this->msg)) 
		{
			$id = JRequest::getInt('id');
			switch ($id) 
			{
				case 2:
					$this->msg = 'Good bye World!';
					break;
				default:
				case 1:
					$this->msg = 'Hello World!';
					break;
			}
		}
		return $this->msg;
	}
}
