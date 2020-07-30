<?php

namespace Packt\HelloWorld\Plugin\Catalog;

class ProductAround
{

//    public function aroundGetName($interceptedInput)
//    {
//        return "Ten san pham dung Arround";
//    }
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $name = "Before Method";
        return $name;
    }

//    public function afterGetName(\Magento\Catelog\Model\Product $subject,$name)
//    {
//        $name = "After";
//        return [$name];
//    }




}
