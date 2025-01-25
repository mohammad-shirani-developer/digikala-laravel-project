<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_features')->delete();
        
        \DB::table('category_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'نوع گوشی موبایل',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:06:12',
                'updated_at' => '2025-01-23 06:06:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'دسته ‌بندی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:06:24',
                'updated_at' => '2025-01-23 06:06:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'مدل',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:06:31',
                'updated_at' => '2025-01-23 06:06:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'زمان معرفی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:06:49',
                'updated_at' => '2025-01-23 06:06:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ابعاد',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:06:56',
                'updated_at' => '2025-01-23 06:06:56',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'وزن',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:07:05',
                'updated_at' => '2025-01-23 06:07:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'نوع سیم کارت',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:07:15',
                'updated_at' => '2025-01-23 06:07:15',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'تعداد سیم کارت',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:07:23',
                'updated_at' => '2025-01-23 06:07:23',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'قابلیت‌های مقاومتی',
                'category_id' => 2,
                'deleted_at' => '2025-01-23 06:08:10',
                'created_at' => '2025-01-23 06:07:51',
                'updated_at' => '2025-01-23 06:08:10',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'تراشه',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:08:14',
                'updated_at' => '2025-01-23 06:08:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'پردازنده‌',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:08:26',
                'updated_at' => '2025-01-23 06:08:26',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'حافظه داخلی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:08:37',
                'updated_at' => '2025-01-23 06:08:37',
            ),
        ));
        
        
    }
}