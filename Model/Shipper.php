<?php namespace Sg\Grid\Model;


use Magento\Framework\Model\AbstractModel;

class Shipper extends AbstractModel {
    
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;    

    protected function _construct() {
        $this->_init(\Sg\Grid\Model\ResourceModel\Shipper::class);
    }
    
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }    

}
