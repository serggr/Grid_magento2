<?php

namespace Sg\grid\Controller\Adminhtml\Shipper;




use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute() {
        /** @var \Magento\Framework\View\Result\Page $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}

