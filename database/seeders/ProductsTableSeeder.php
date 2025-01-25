<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 F1504VA-NJ823-i5 1335U-12GB DDR4-512GB SSD-TN-Fingerprint-Backlit',
                'price' => 39890000,
                'discount' => 8,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-05-15',
                'seller_id' => NULL,
                'category_id' => 3,
                'p_code' => 'dkp-21437149',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:46',
                'updated_at' => '2025-01-21 05:25:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'هندزفری بلوتوثی وونک مدل SH20 به همراه کاور سیلیکونی',
                'price' => 1008000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-03-29',
                'seller_id' => NULL,
                'category_id' => 7,
                'p_code' => 'dkp-77215045',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'price' => 42650000,
                'discount' => 15,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-07-22',
                'seller_id' => NULL,
                'category_id' => 4,
                'p_code' => 'dkp-9029566',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-21 05:25:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'گوشی موبایل سامسونگ مدل Galaxy A55 دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت - ویتنام',
                'price' => 24699000,
                'discount' => 2,
                'short_description' => 'خوب',
                'long_description' => '<h4>سلام</h4>',
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-10-23',
                'seller_id' => NULL,
                'category_id' => 5,
                'p_code' => 'dkp-55653538',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-21 05:24:36',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'گوشی موبایل شیائومی مدل 14 5G دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت - گلوبال',
                'price' => 52999000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-09-24',
                'seller_id' => NULL,
                'category_id' => 6,
                'p_code' => 'dkp-55308755',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'گوشی موبایل اپل مدل iPhone 11 A2223 ZAA دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'price' => 39999000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2026-02-19',
                'seller_id' => NULL,
                'category_id' => 4,
                'p_code' => 'dkp-48609793',
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:48',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'گوشی موبایل سامسونگ مدل Galaxy Z Fold5 دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت - ویتنام',
                'price' => 81999000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2026-03-18',
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'dkp-77218688',
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'گوشی موبایل شیائومی مدل Poco M6 Pro دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت',
                'price' => 15099000,
                'discount' => 15,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 12,
                'featured' => 1,
                'discount_duration' => '2026-06-15',
                'seller_id' => NULL,
                'category_id' => 5,
                'p_code' => 'dkp-26853650',
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:13',
            ),
        ));
        
        
    }
}