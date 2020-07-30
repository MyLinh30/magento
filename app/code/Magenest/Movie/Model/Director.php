<?php

namespace Magenest\Movie\Model;

class Director extends \Magento\Framework\Model\AbstractModel
{
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINED = 'declined';
    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
    public function _construct()
    {
        $this->_init('Magenest\Movie\Model\ResourceModel\Director');
    }
}