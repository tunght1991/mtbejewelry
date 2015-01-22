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
class MagenThemes_MTBejewelry_Model_Collection extends Mage_Core_Model_Abstract
{
    public function appendType($collection)
    {
        $entityIds = array();
        foreach ($collection->getItems() as $_itemId => $_item) {
            $entityIds[] = $_item->getEntityId();
        }

        if (sizeof($entityIds) == 0) {
            return $this;
        }
        $readonce = Mage::getSingleton('core/resource')->getConnection('core_read');
        $optionTable = $this->getTableName('catalog/product_option');
        foreach ($collection->getItems() as $_item ) {
            $select = $readonce->fetchAll('SELECT type FROM '.$optionTable.' WHERE product_id='.$_item->getEntityId());
            $_item->setOptionsType($select);
        }

        return $this;
    }

    public function getTableName($modelEntity)
    {
        try {
            $table = Mage::getSingleton('core/resource')->getTableName($modelEntity);
        } catch (Exception $e){
            Mage::throwException($e->getMessage());
        }
        return $table;
    }
}
