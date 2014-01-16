<?php
/**
 * SUMOHeavy_GlobalMessage
 *
 * @category   SUMOHeavy
 * @package    SUMOHeavy_GlobalMessage
 * @copyright  Copyright 2013 SUMO Heavy Industries, LLC
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
