<?php
/**
 * Author: Sean Dunagan
 * Created: 9/11/15
 */

class Reverb_ReverbSync_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $controllerAction = $this->getAction();
        $this->_objectId = $controllerAction->getObjectParamName();
        $this->_controller = 'adminhtml_category';
        $this->_blockGroup = $controllerAction->getModuleBlockGroupname();

        parent::__construct();

        $this->_removeButton('delete');
    }

    public function getFormActionUrl()
    {
        $uri_path = $this->getAction()->getUriPathForAction('save');
        return $this->getUrl($uri_path);
    }

    public function getBackUrl()
    {
        return ('reverbSync/' . 'adminhtml_category_sync/index');
    }

    public function getHeaderText()
    {
        return Mage::helper('ReverbSync')->__('Sync Reverb Categories');
    }
}