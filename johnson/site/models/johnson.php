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
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 * @since	2.5
	 */
	public function getTable($type = 'Johnson', $prefix = 'JohnsonTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
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
			
			// Get a TableHelloWorld instance
			$table = $this->getTable();
 
			// Load the message
			$table->load($id);
			
			// Assign the message
			$this->msg = $table->greeting;
			
		}
		return $this->msg;
	}
}
