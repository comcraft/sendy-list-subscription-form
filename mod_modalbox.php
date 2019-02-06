<?php
/**
 * Hello World! Module Entry Point
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
   $modal = modModalBoxHelper::getModalBox($params);

   //initiate user session for sign up;
   $session = JFactory::getSession();

   //get the current url to be used in form action.
   $baseUrl = JUri::getInstance() ;

   //assign boolean false to the new_signup variable
   $session->set('news_signup', false);
   $signup = $session->get('news_signup');

require JModuleHelper::getLayoutPath('mod_modalbox', $modal['formType']);
//include the javascript file that will validate and submit the form to the mysqlnd_ms_dump_servers
require_once dirname(__FILE__) . '/js/signup.js';
