<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_feature_values')->delete();
        
        \DB::table('product_feature_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 4,
                'category_feature_id' => 1,
                'category_feature_value_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 4,
                'category_feature_id' => 2,
                'category_feature_value_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 4,
                'category_feature_id' => 3,
                'category_feature_value_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 4,
                'category_feature_id' => 4,
                'category_feature_value_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 4,
                'category_feature_id' => 5,
                'category_feature_value_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 4,
                'category_feature_id' => 6,
                'category_feature_value_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 4,
                'category_feature_id' => 7,
                'category_feature_value_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 4,
                'category_feature_id' => 8,
                'category_feature_value_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 4,
                'category_feature_id' => 10,
                'category_feature_value_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 4,
                'category_feature_id' => 11,
                'category_feature_value_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 4,
                'category_feature_id' => 12,
                'category_feature_value_id' => 29,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:23:27',
                'updated_at' => '2025-01-23 06:23:27',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 8,
                'category_feature_id' => 1,
                'category_feature_value_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 8,
                'category_feature_id' => 2,
                'category_feature_value_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 8,
                'category_feature_id' => 3,
                'category_feature_value_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 8,
                'category_feature_id' => 4,
                'category_feature_value_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 8,
                'category_feature_id' => 5,
                'category_feature_value_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 8,
                'category_feature_id' => 6,
                'category_feature_value_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 8,
                'category_feature_id' => 7,
                'category_feature_value_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 8,
                'category_feature_id' => 8,
                'category_feature_value_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 8,
                'category_feature_id' => 10,
                'category_feature_value_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 8,
                'category_feature_id' => 11,
                'category_feature_value_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 8,
                'category_feature_id' => 12,
                'category_feature_value_id' => 29,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:25:34',
                'updated_at' => '2025-01-23 06:25:34',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 6,
                'category_feature_id' => 1,
                'category_feature_value_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 6,
                'category_feature_id' => 2,
                'category_feature_value_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 6,
                'category_feature_id' => 3,
                'category_feature_value_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 6,
                'category_feature_id' => 4,
                'category_feature_value_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 6,
                'category_feature_id' => 5,
                'category_feature_value_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 6,
                'category_feature_id' => 6,
                'category_feature_value_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 6,
                'category_feature_id' => 7,
                'category_feature_value_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 6,
                'category_feature_id' => 8,
                'category_feature_value_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 6,
                'category_feature_id' => 10,
                'category_feature_value_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 6,
                'category_feature_id' => 11,
                'category_feature_value_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 6,
                'category_feature_id' => 12,
                'category_feature_value_id' => 30,
                'deleted_at' => NULL,
                'created_at' => '2025-01-23 06:26:30',
                'updated_at' => '2025-01-23 06:26:30',
            ),
        ));
        
        
    }
}