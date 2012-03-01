<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class JohnsonViewDefaultView extends JView
{
	/**
	 * HelloWorlds view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;
 
		// Set the toolbar
		$this->addToolBar();
		
		// Display the template
		parent::display($tpl);
	}
	
/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
		// the second param will be used to construct the css class for title
		$canDo = JohnsonHelper::getActions();
		
		JToolBarHelper::title(JText::_('COM_JOHNSON_MANAGER_HELLOWORLDS'),'johnson');
		
		if ($canDo->get('core.create')) 
		{
			
			JToolBarHelper::addNew('johnsonsingle.add','JTOOLBAR_NEW');
				
			
		}
		if ($canDo->get('core.edit')) 
		{
			JToolBarHelper::editList('johnsonsingle.edit', 'JTOOLBAR_EDIT');
		}
		if ($canDo->get('core.delete')) 
		{
			JToolBarHelper::deleteList('', 'johnsonsingles.delete', 'JTOOLBAR_DELETE');
		}
		if ($canDo->get('core.admin')) 
		{
			JToolBarHelper::divider();
			JToolBarHelper::preferences('com_johnson');
		}
		
		
	}
}