<?php
/**
 * SUMOHeavy_GlobalMessage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@sumoheavy.com so we can send you a copy immediately.
 *
 * @category   SUMOHeavy
 * @package    SUMOHeavy_GlobalMessage
 * @copyright  Copyright 2013 SUMO Heavy Industries, LLC
 * @license    http://opensource.org/licenses/osl-3.0.php
 * @author     Sean Kennedy <support@sumoheavy.com>
 */
class SUMOHeavy_GlobalMessage_Block_Adminhtml_System_Config_Editor
    extends Mage_Adminhtml_Block_System_Config_Form_Field
    implements Varien_Data_Form_Element_Renderer_Interface
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $element->setWysiwyg(true);
        $element->setConfig(Mage::getSingleton('cms/wysiwyg_config')->getConfig());
        return parent::_getElementHtml($element);
    }
}
