<?php
/**
 * @category    MT
 * @package     MT_Widget
 * @copyright   Copyright (C) 2008-2015 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento@cleversoft.co
 */

class MT_Widget_Model_Widget_Source_Parallax_Image_Size{
    public function toOptionArray(){
        $types[] = array('value' => 'cover',    'label' => Mage::helper('mtwidget')->__('cover'));
        $types[] = array('value' => 'contain',   'label' => Mage::helper('mtwidget')->__('contain'));

        return $types;
    }
}