<?php

namespace Sg\Grid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Contact Resource Model
 *
 * @author      Pierre FAY
 */
class Shipper extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('serg_shippers', 'id');
    }
}


