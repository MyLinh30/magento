<?php

namespace Packt\HelloWorld\Setup;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Setup\CategorySetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $categorySetupFactory;

    public function __construct(CategorySetupFactory $categorySetupFactory)
    {
        $this->categorySetupFactory = $categorySetupFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.2') < 0) {
            $categorySetup = $this->categorySetupFactory->create(['setup' => $setup]);
            $entityTypeId = $categorySetup->getEntityTypeId(Product::ENTITY);
            $categorySetup->addAttribute(
                $entityTypeId,
                'helloworld_label',
                [
                'type' => 'varchar',
                'label' => 'HeloWorld label',
                'input' => 'text',
                'required' => false,
                'visible_on_front' => true,
                'apply_to' => 'simple,configurable,virtual,bundle,downloadable',
                'unique' => false,
                'group' => 'HelloWorld'
            ]
            );
        }
    }
}
