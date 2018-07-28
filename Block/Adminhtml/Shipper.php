<?php
namespace Sg\Grid\Block\Adminhtml;

class Shipper extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_shipper';
		$this->_blockGroup = 'Sg_Grid';
		$this->_headerText = __('Shippers');
		$this->_addButtonLabel = __('Create New Shipper');
		parent::_construct();
	}
}



