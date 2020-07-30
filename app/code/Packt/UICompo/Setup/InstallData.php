<?php
//
//namespace Packt\UICompo\Setup;
//
//class InstallData implements InstallDataInterface
//{
//
//    /**
//     * {@inheritdoc}
//     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
//     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
//     * @SuppressWarnings(PHPMD.NPathComplexity)
//     */
//    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
//    {
//        /**
//         * Install messages
//         */
//        $data = [
//            ['name' => 'Bai viet 1',
//             'url_key'=>'bbb',
//             'post_content'=>'Bai viet 1 co 1 noi dung',
//             'tags'=>'baiviet',
//             'status'=>1,
//             'featured_image'=>'anh dep',
//             'created_at'=>null,
//             'updated_at'=>null,
//            ],
//
//        ];
//        foreach ($data as $bind) {
//            $setup->getConnection()
//                ->insertForce($setup->getTable('packt_uicompo_post'), $bind);
//        }
//    }
//}