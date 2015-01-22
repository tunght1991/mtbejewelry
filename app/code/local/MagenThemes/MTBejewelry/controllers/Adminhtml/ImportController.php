<?php
/**
 *
 * ------------------------------------------------------------------------------
 * @category     MT
 * @package      MT_Themes
 * ------------------------------------------------------------------------------
 * @copyright    Copyright (C) 2008-2013 MagentoThemes.net. All Rights Reserved.
 * @license      GNU General Public License version 2 or later;
 * @author       MagentoThemes.net
 * @email        support@magentothemes.net
 * ------------------------------------------------------------------------------
 *
 */
?>
<?php
class MagenThemes_MTBejewelry_Adminhtml_ImportController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() {
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mtbejewelry/"));
    }
    public function blocksAction() {
        $config = Mage::helper('mtbejewelry')->getCfg('install/overwrite_blocks');
        Mage::getSingleton('mtbejewelry/import_cms')->importCmsItems('cms/block', 'blocks', $config);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mtbejewelry/"));
    }
    public function pagesAction() {
        $config = Mage::helper('mtbejewelry')->getCfg('install/overwrite_pages');
        Mage::getSingleton('mtbejewelry/import_cms')->importCmsItems('cms/page', 'pages', $config);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mtbejewelry/"));
    }
    public function widgetsAction() {
        Mage::getSingleton('mtbejewelry/import_cms')->importWidgetItems('widget/widget_instance', 'widgets', false);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/mtbejewelry/"));
    }
}
