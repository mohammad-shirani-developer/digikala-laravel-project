<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeoItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seo_items')->delete();
        
        \DB::table('seo_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'لپ-تاپ-156-اینچی-ایسوس-مدل-vivobook-15-f1504va-nj823-i5-1335u-12gb-ddr4-512gb-ssd-tn-fingerprint-backlit',
                'meta_title' => 'قیمت و خرید لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 F1504VA-NJ823-i5 1335U-12GB DDR4-512GB SSD-TN-Fingerprint-Backlit',
                'meta_description' => 'خرید اینترنتی لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 F1504VA-NJ823-i5 1335U-12GB DDR4-512GB SSD-TN-Fingerprint-Backlit با رنگبندی نقره ای به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'هندزفری-بلوتوثی-وونک-مدل-sh20-به-همراه-کاور-سیلیکونی',
                'meta_title' => 'قیمت و خرید هندزفری بلوتوثی وونک مدل SH20 به همراه کاور سیلیکونی',
                'meta_description' => 'خرید اینترنتی هندزفری بلوتوثی وونک مدل SH20 به همراه کاور سیلیکونی با رنگبندی مشکی، سفید به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'گوشی-موبایل-اپل-مدل-iphone-13-ch-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت-نات-اکتیو',
                'meta_title' => 'قیمت و خرید گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'meta_description' => 'خرید اینترنتی گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو با رنگبندی سفید، مشکی، سبز تیره به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'گوشی-موبایل-سامسونگ-مدل-galaxy-a55-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-8-گیگابایت-ویتنام',
                'meta_title' => 'قیمت و خرید گوشی موبایل سامسونگ مدل Galaxy A55 دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت - ویتنام',
                'meta_description' => 'مشخصات و خرید گوشی سامسونگ A55؛ برای مشاهده قیمت گوشی a55 از برند Samsung با حافظه 256 گیگ و ساخت ویتنام روی لینک بالا بزنید.
',
                'type' => 'product',
                'ref_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'گوشی-موبایل-شیائومی-مدل-14-5g-دو-سیم-کارت-ظرفیت-512-گیگابایت-و-رم-12-گیگابایت-گلوبال',
                'meta_title' => 'قیمت و خرید گوشی موبایل شیائومی مدل 14 5G دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت - گلوبال',
                'meta_description' => 'خرید اینترنتی گوشی موبایل شیائومی مدل 14 5G دو سیم کارت ظرفیت 512 گیگابایت و رم 12 گیگابایت - گلوبال با رنگبندی سفید، مشکی به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
        ));
        
        
    }
}