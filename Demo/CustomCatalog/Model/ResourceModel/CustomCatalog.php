<?php
/**
 * @category   Demo
 * @package    Demo_CustomCatalog
 * @author     santosh.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\CustomCatalog\Model\ResourceModel;

class CustomCatalog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('demo_customcatalog', 'customcatalog_id');   //here "demo_customcatalog" is table name and "customcatalog_id" is the primary key of custom table
    }
}