<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * HelloWorld component helper.
 */
abstract class JohnsonHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_JOHNSON_SUBMENU_MESSAGES'),
		                         'index.php?option=com_johnson', $submenu == 'messages');
		JSubMenuHelper::addEntry(JText::_('COM_JOHNSON_SUBMENU_CATEGORIES'),
		                         'index.php?option=com_categories&view=categories&extension=com_johnson',
		                         $submenu == 'categories');
		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-helloworld ' .
		                               '{background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('COM_JOHNSON_ADMINISTRATION_CATEGORIES'));
		}
	}
}