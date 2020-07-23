<?php

namespace Packt\HelloWorld\Plugin\Catalog;

class ProductAround
{
    public function afterGetName($subject)
    {
        return "Hello World";
    }

}
