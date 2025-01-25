<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_feature_values')->delete();
        
        \DB::table('category_feature_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_feature_id' => 1,
                'value' => 'سیستم عامل اندروید',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:15:39',
                'updated_at' => '2025-01-23 06:15:39',
            ),
            1 => 
            array (
                'id' => 2,
                'category_feature_id' => 1,
                'value' => 'سیستم عامل iOS',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:03',
                'updated_at' => '2025-01-23 06:16:03',
            ),
            2 => 
            array (
                'id' => 3,
                'category_feature_id' => 2,
                'value' => '‌میان‌رده',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:17',
                'updated_at' => '2025-01-23 06:16:17',
            ),
            3 => 
            array (
                'id' => 4,
                'category_feature_id' => 2,
                'value' => 'پرچم‌دار',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:25',
                'updated_at' => '2025-01-23 06:16:25',
            ),
            4 => 
            array (
                'id' => 5,
                'category_feature_id' => 2,
                'value' => 'پرچم‌دار',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:31',
                'updated_at' => '2025-01-23 06:16:31',
            ),
            5 => 
            array (
                'id' => 6,
                'category_feature_id' => 3,
                'value' => 'Galaxy A۵۵',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:46',
                'updated_at' => '2025-01-23 06:16:46',
            ),
            6 => 
            array (
                'id' => 7,
                'category_feature_id' => 3,
                'value' => 'Galaxy Z Fold۵',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:16:54',
                'updated_at' => '2025-01-23 06:16:54',
            ),
            7 => 
            array (
                'id' => 8,
                'category_feature_id' => 3,
                'value' => 'iPhone ۱۱ A۲۲۲۳',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:03',
                'updated_at' => '2025-01-23 06:17:03',
            ),
            8 => 
            array (
                'id' => 9,
                'category_feature_id' => 4,
                'value' => '۱۱ مارس ۲۰۲۴',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:16',
                'updated_at' => '2025-01-23 06:17:16',
            ),
            9 => 
            array (
                'id' => 10,
                'category_feature_id' => 4,
                'value' => '۱۰ سپتامبر ۲۰۱۹',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:22',
                'updated_at' => '2025-01-23 06:17:22',
            ),
            10 => 
            array (
                'id' => 11,
                'category_feature_id' => 4,
                'value' => '۲۶ جولای ۲۰۲۳',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:27',
                'updated_at' => '2025-01-23 06:17:27',
            ),
            11 => 
            array (
                'id' => 12,
                'category_feature_id' => 5,
                'value' => '۱۶۱.۱x۷۷.۴x۸.۲ میلی‌متر',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:41',
                'updated_at' => '2025-01-23 06:17:41',
            ),
            12 => 
            array (
                'id' => 13,
                'category_feature_id' => 5,
                'value' => '۸.۳x۷۵.۷x۱۵۰.۹ میلی‌متر',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:46',
                'updated_at' => '2025-01-23 06:17:46',
            ),
            13 => 
            array (
                'id' => 14,
                'category_feature_id' => 5,
                'value' => '۶.۱×۱۲۹.۹×۱۵۴.۹ میلی‌متر',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:17:53',
                'updated_at' => '2025-01-23 06:17:53',
            ),
            14 => 
            array (
                'id' => 15,
                'category_feature_id' => 6,
                'value' => '۲۱۳ گرم',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:06',
                'updated_at' => '2025-01-23 06:18:06',
            ),
            15 => 
            array (
                'id' => 16,
                'category_feature_id' => 6,
                'value' => '۱۹۴ گرم',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:14',
                'updated_at' => '2025-01-23 06:18:14',
            ),
            16 => 
            array (
                'id' => 17,
                'category_feature_id' => 6,
                'value' => '۲۵۳ گرم',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:20',
                'updated_at' => '2025-01-23 06:18:20',
            ),
            17 => 
            array (
                'id' => 18,
                'category_feature_id' => 7,
            'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:32',
                'updated_at' => '2025-01-23 06:18:32',
            ),
            18 => 
            array (
                'id' => 19,
                'category_feature_id' => 7,
            'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:41',
                'updated_at' => '2025-01-23 06:18:41',
            ),
            19 => 
            array (
                'id' => 20,
                'category_feature_id' => 7,
            'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:47',
                'updated_at' => '2025-01-23 06:18:47',
            ),
            20 => 
            array (
                'id' => 21,
                'category_feature_id' => 8,
                'value' => 'دو عدد',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:18:58',
                'updated_at' => '2025-01-23 06:18:58',
            ),
            21 => 
            array (
                'id' => 22,
                'category_feature_id' => 8,
                'value' => 'یک عدد',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:19:13',
                'updated_at' => '2025-01-23 06:19:13',
            ),
            22 => 
            array (
                'id' => 23,
                'category_feature_id' => 10,
                'value' => 'Exynos ۱۴۸۰',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:19:33',
                'updated_at' => '2025-01-23 06:19:33',
            ),
            23 => 
            array (
                'id' => 24,
                'category_feature_id' => 10,
            'value' => 'Apple A۱۳ Bionic (۷ nm+) Chipset',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:19:42',
                'updated_at' => '2025-01-23 06:19:42',
            ),
            24 => 
            array (
                'id' => 25,
                'category_feature_id' => 10,
            'value' => 'Qualcomm Snapdragon ۸ Gen ۲ (۴ nm) Chipset',
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:19:52',
                'updated_at' => '2025-01-23 06:19:52',
            ),
            25 => 
            array (
                'id' => 26,
                'category_feature_id' => 11,
                'value' => 'Octa-core (۴x۲.۷۵ GHz Cortex-A۷۸ &amp; ۴x۲.۰ GHz',
                    'deleted_at' => NULL,
                    'created_at' => '2025-01-23 06:20:35',
                    'updated_at' => '2025-01-23 06:20:35',
                ),
                26 => 
                array (
                    'id' => 27,
                    'category_feature_id' => 11,
                    'value' => 'Dual-core Lightning + Quad-core Thunder CPU',
                    'deleted_at' => NULL,
                    'created_at' => '2025-01-23 06:20:46',
                    'updated_at' => '2025-01-23 06:20:46',
                ),
                27 => 
                array (
                    'id' => 28,
                    'category_feature_id' => 11,
                    'value' => '۱x Cortex-X۳ + ۲x Cortex-A۷۱۵ + ۲x Cortex-A۷۱۰',
                    'deleted_at' => NULL,
                    'created_at' => '2025-01-23 06:20:56',
                    'updated_at' => '2025-01-23 06:20:56',
                ),
                28 => 
                array (
                    'id' => 29,
                    'category_feature_id' => 12,
                    'value' => '۲۵۶ گیگابایت',
                    'deleted_at' => NULL,
                    'created_at' => '2025-01-23 06:21:11',
                    'updated_at' => '2025-01-23 06:21:11',
                ),
                29 => 
                array (
                    'id' => 30,
                    'category_feature_id' => 12,
                    'value' => '۱۲۸ گیگابایت',
                    'deleted_at' => NULL,
                    'created_at' => '2025-01-23 06:21:18',
                    'updated_at' => '2025-01-23 06:21:18',
                ),
            ));
        
        
    }
}