<?php
//
//namespace Packt\UICompo\Setup;
//
//class UpgradeSchema implements UpgradeSchemaInterface
//{
//    /**
//     * {@inheritdoc}
//     */
//    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
//    {
//        $setup->startSetup();
//        if (version_compare($context->getVersion(), '2.0.1', '<')) {
//            $setup->getConnection()->addColumn(
//                $setup->getTable('greeting_message'),
//                'season',
//                [
//                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                    'length' => 16,
//                    'nullable' => false,
//                    'default' => '',
//                    'comment' => 'Season'
//                ]
//            );
//        }
//        $setup->endSetup();
//    }
//}
namespace Packt\UICompo\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;

        $installer->startSetup();

        if(version_compare($context->getVersion(), '2.0.1', '<')) {
            if (!$installer->tableExists('packt_uicompo_post')) {
                $table = $installer->getConnection()->newTable(
                    $installer->getTable('packt_uicompo_post')
                )
                    ->addColumn(
                        'post_id',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        null,
                        [
                            'identity' => true,
                            'nullable' => false,
                            'primary'  => true,
                            'unsigned' => true,
                        ],
                        'Post ID'
                    )
                    ->addColumn(
                        'name',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        ['nullable => false'],
                        'Post Name'
                    )
                    ->addColumn(
                        'url_key',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Post URL Key'
                    )
                    ->addColumn(
                        'post_content',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        '64k',
                        [],
                        'Post Post Content'
                    )
                    ->addColumn(
                        'tags',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Post Tags'
                    )
                    ->addColumn(
                        'status',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        1,
                        [],
                        'Post Status'
                    )
                    ->addColumn(
                        'featured_image',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Post Featured Image'
                    )->addColumn(
                        'created_at',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                        null,
                        ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                        'Created At'
                    )->addColumn(
                        'updated_at',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                        null,
                        ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                        'Updated At')
                    ->setComment('Post Table');
                $installer->getConnection()->createTable($table);

                $installer->getConnection()->addIndex(
                    $installer->getTable('packt_uicompo_post'),
                    $setup->getIdxName(
                        $installer->getTable('packt_uicompo_post'),
                        ['name','url_key','post_content','tags','featured_image'],
                        \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                    ),
                    ['name','url_key','post_content','tags','featured_image'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                );
            }
        }

        $installer->endSetup();
    }
}