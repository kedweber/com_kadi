<?php

defined('_JEXEC') or die;

/**
 * ComKadi
 *
 * @author      Ked <white001goat@gmail.com>
 * @category    Nooku
 * @package     Joomla.Administrator
 * @subpackage  Com_Kadi
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Now, this first touching point (for a component called a 'base file') already is divergent from the main expected flow from standard Joomla
 * and this is because we use Nooku, which falls outside of this experiment; however, I will leave the
 * 'standard' Nooku approach commented in place here while, initially taking the old-fashioned Joomla
 * approach.
 */


// !!!! This is likely outdated, as I do not see the logic of checking for _JEXEC being defined and then 
// Having to import the JControllerLegacy manually
jimport('joomla.application.component.controller');

class KadiController extends JControllerLegacy
{
/**
 * Method to display a view.
 *
 * @param   boolean			If true, the view output will be cached
 * @param   array  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
 *
 * @return  JController		This object to support chaining.
 * @since   1.5
 */



    public function __construct(KConfig $config) {
        // the parent construct needs to be called in order to initiate any existing views
        parent::__construct($config)
    }

// The 'task' being passed by kadi.php will autoexecute the method of that name

    public function display($cachable = false, $urlparams = false)
    {
        parent::display();
	return $this;
    }
}
