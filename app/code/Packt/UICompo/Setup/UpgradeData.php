<?php
//
//namespace Packt\UICompo\Setup;
//
//class UpgradeData implements UpgradeDataInterface
//{
//    /**
//     * {@inheritdoc}
//     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
//     */
//    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
//    {
//        $setup->startSetup();
//        if ($context->getVersion()
//            && version_compare($context->getVersion(), '2.0.1') < 0
//        ) {
//            $table = $setup->getTable('greeting_message');
//            $setup->getConnection()
//                ->insertForce($table, ['message' => 'Happy Thanksgiving', 'season' => 'fall']);
//
//            $setup->getConnection()
//                ->update($table, ['season' => 'winter'], 'greeting_id IN (1,2)');
//        }
//        $setup->endSetup();
//    }
//}