<?php

namespace Packt\HelloWorld\Block\Adminhtml\Subscription;

use use Magento\Backend\Helper\Data;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Grid\Extended;use Magento\Backend\Block\Widget\Grid as WidgetGrid;
use Packt\HelloWorld\Model\ResourceModel\Subscription\Collection;

class Grid extends Extended
{
    /**
     * @var \Packt\HelloWorld\Model\Resource\Subscription\
     * Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param Context
     * $context
     * @param Data $backendHelper
     * @param
     * Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $backendHelper,
        Collection $subscriptionCollection,
        array $data = []
    ) {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }

    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);

        return parent::_prepareCollection();
    }
}
