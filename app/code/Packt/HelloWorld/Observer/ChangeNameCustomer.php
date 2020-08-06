<?php

namespace Packt\HelloWorld\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\AlreadyExistsException;

class ChangeNameCustomer implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        // TODO: Implement execute() method.
    }
    //    protected $_customerCollectionFactory;
//    public function __construct(\Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory)
//    {
//        $this->_customerCollectionFactory = $customerCollectionFactory;
//    }
//
//    public function execute(Observer $observer)
//    {
//        $customer = $observer->getCustomer();
//        $customer->setData('firstname','Magenest');
//
////        if($customerCollection->getSize()>0){
////            throw new AlreadyExistsException(
////                __('A customer with the same Mobile already exists .')
////            );
////
////        }
//        // TODO: Implement execute() method.
//    }

}