<?php

namespace Packt\HelloWorld\Controller\Index;
use Magento\Framework\App\Action\Action;

class Collection extends Action
{
    public function execute()
    {
        $productCollection = $this->_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection')->addAttributeToSelect(
                [
                    'name',
                    'price',
                    'image',
                ])->addAttributeToFilter(
                'name', array(
                'like' => '%Bánh kem%'
            ));
        $output = '';
        $productCollection->setDataToAll('price', 20000);

        foreach ($productCollection as $product) {
            $output .= var_dump($product->debug());
        }
        $this->getResponse()->setBody($output);

    }
}
