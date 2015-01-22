<?php
/**
 * @category    MT
 * @package     MT_Filter
 * @copyright   Copyright (C) 2008-2014 MagentoThemes.net. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      MagentoThemes.net
 * @email       support@magentothemes.net
 */

class MT_Filter_Block_Catalog_Layer_Filter_Discount extends Mage_Catalog_Block_Layer_Filter_Abstract{
    public function __construct(){
        parent::__construct();
        $this->_filterModelName = 'mtfilter/layer_filter_discount';
    }
}
