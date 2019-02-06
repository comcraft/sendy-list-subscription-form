<?php
/**
 * Helper class for Modal Box! module
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_modalbox is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModModalBoxHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getModalBox($params)
    {
         $modal['title'] = $params->get('modal_title');
         $modal['smalltxt'] = $params->get('modal_smalltxt');
         $modal['content'] = $params->get('modal_content');
         $modal['bckgrd'] = $params->get('modal_bkgrd');
         $modal['formType'] = $params->get('formtype');
         $modal['list_id'] = $params->get('list_id');

        return $modal ;
    }

}
