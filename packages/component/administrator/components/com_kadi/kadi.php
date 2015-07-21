<?php
/**
 * ComKadi
 *
 * @author      Ked <white001goat@gmail.com>
 * @category    Nooku
 * @package     CTA Components
 * @subpackage  Com_Kadi
 *
 * Now, this first touching point (for a component called a 'base file') already is divergent from the main expected flow from standard Joomla
 * and this is because we use Nooku, which falls outside of this experiment; however, I will leave the
 * 'standard' Nooku approach commented in place here while, initially taking the old-fashioned Joomla
 * approach.
 */
 
// NOOKU STYLE
// defined('KOOWA') or die('Protected Resource');
// echo KService::get('com://admin/tenders.dispatcher')->dispatch();

// JPATH_COMPONENT should be pointing directly into the directory that this particular component is housed.
// require_once(JPATH_COMPONENT . '/controller.php');
// adjusted for the standards of MoyoWeb.. fingers crossed
require_once(JPATH_COMPONENT . '/controllers/controller.php');

// Get an instance of the controller prefixed by <name>
$controller = JControllerLegacy::getInstance('Kadi');
 
// Perform the Request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect(); 
