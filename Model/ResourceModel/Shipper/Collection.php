<?php namespace Sg\Grid\Model\ResourceModel\Shipper;



use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'id';

    protected function _construct() {

        $this->_init(\Sg\Grid\Model\Shipper::class,\Sg\Grid\Model\ResourceModel\Shipper::class);

    }



}