<?php
/**
 * @category    MT
 * @package     MT_Widget
 * @copyright   Copyright (C) 2008-2014 MagentoThemes.net. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      MagentoThemes.net
 * @email       support@magentothemes.net
 */

class MT_Widget_Model_Widget_Source_Parallax_Overlay{
    public function toOptionArray(){
        $types[] = array('value' => 'none', 'label' => Mage::helper('mtwidget')->__('None'));
        $types[] = array('value' => Mage::getBaseUrl('js').'mt/widget/images/gridtile.png', 'label' => Mage::helper('mtwidget')->__('2 x 2 Black'));
        $types[] = array('value' => Mage::getBaseUrl('js').'mt/widget/images/gridtile_white.png', 'label' => Mage::helper('mtwidget')->__('2 x 2 White'));
        $types[] = array('value' => Mage::getBaseUrl('js').'mt/widget/images/gridtile_3x3.png', 'label' => Mage::helper('mtwidget')->__('3 x 3 Black'));
        $types[] = array('value' => Mage::getBaseUrl('js').'mt/widget/images/gridtile_3x3_white.png', 'label' => Mage::helper('mtwidget')->__('3 x 3 White'));

        return $types;
    }
}
