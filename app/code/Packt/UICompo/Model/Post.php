<?php

namespace Packt\UICompo\Model;


class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'packt_uicompo_post';

    protected $_cacheTag = 'packt_uicompo_post';

    protected $_eventPrefix = 'packt_uicompo_post';

    protected function _construct()
    {
        $this->_init('Packt\UICompo\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}