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

        \DB::table('products')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 F1504VA-NJ823-i5 1335U-12GB DDR4-512GB SSD-TN-Fingerprint-Backlit',
                'price' => 39890000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 0,
                'discount_duration' => '2025-01-15 00:00:00',
                'seller_id' => null,
                'category_id' => 3,
                'p_code' => 'dkp-77215054',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:46',
                'updated_at' => '2025-01-07 11:57:46',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'هندزفری بلوتوثی وونک مدل SH20 به همراه کاور سیلیکونی',
                'price' => 1008000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-01-29 00:00:00',
                'seller_id' => null,
                'category_id' => 7,
                'p_code' => 'dkp-77215045',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'price' => 42650000,
                'discount' => 1,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-01-22 00:00:00',
                'seller_id' => null,
                'category_id' => 4,
                'p_code' => 'dkp-77215059',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'گوشی موبایل سامسونگ مدل Galaxy A55 دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت - ویتنام',
                'price' => 24699000,
                'discount' => 2,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-01-23 00:00:00',
                'seller_id' => null,
                'category_id' => 5,
                'p_code' => 'dkp-77215051',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'گوشی موبایل شیائومی مدل 14 5G دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت - گلوبال',
                'price' => 52999000,
                'discount' => 10,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 1,
                'discount_duration' => '2025-01-24 00:00:00',
                'seller_id' => null,
                'category_id' => 6,
                'p_code' => 'dkp-77215080',
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
        ));
    }
}
