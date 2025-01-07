<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'کالای دیجیتال',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:48:38',
                'updated_at' => '2025-01-07 11:48:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'موبایل',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:48:59',
                'updated_at' => '2025-01-07 11:48:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'لب تاپ',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:49:27',
                'updated_at' => '2025-01-07 11:49:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'گوشی آیفون',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:49:38',
                'updated_at' => '2025-01-07 11:49:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'گوشی سامسونگ',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:50:02',
                'updated_at' => '2025-01-07 11:50:02',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'گوشی شیائومی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:50:30',
                'updated_at' => '2025-01-07 11:50:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'هدفون',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:50:40',
                'updated_at' => '2025-01-07 11:50:40',
            ),
        ));
        
        
    }
}