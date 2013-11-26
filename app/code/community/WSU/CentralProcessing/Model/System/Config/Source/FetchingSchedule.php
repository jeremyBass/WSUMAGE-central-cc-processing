<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Wsu
 * @package     Wsu_Centralprocessing
 * @copyright   Copyright (c) 2012+ Wsu. (http://wsu.edu)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Source model for available settlement report fetching intervals
 */
class Wsu_Centralprocessing_Model_System_Config_Source_FetchingSchedule
{
    public function toOptionArray()
    {
        
        return array (
            1 => Mage::helper('centralprocessing')->__("Daily"),
            3 => Mage::helper('centralprocessing')->__("Every 3 days"),
            7 => Mage::helper('centralprocessing')->__("Every 7 days"),
            10 => Mage::helper('centralprocessing')->__("Every 10 days"),
            14 => Mage::helper('centralprocessing')->__("Every 14 days"),
            30 => Mage::helper('centralprocessing')->__("Every 30 days"),
            40 => Mage::helper('centralprocessing')->__("Every 40 days"),
        );
    }
}