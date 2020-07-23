<?php

namespace Packt\HelloWorld\Block\Adminhtml;
use Magento\Backend\Block\Widget\Grid\Container;

class Subscription extends Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Packt_HelloWorld';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}
