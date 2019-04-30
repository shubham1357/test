<?php
/**
 * @category   Demo
 * @package    Demo_CustomCatalog
 * @author     santosh.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\CustomCatalog\Model;

use Magento\Framework\Model\AbstractModel;

class CustomCatalog extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Demo\CustomCatalog\Model\ResourceModel\CustomCatalog');
    }
}