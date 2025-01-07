<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => 'tm19hPqk95idxXbCTigtOvbahZBSL9Pv4bzFIn8d.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'dh0Uny4WGeSXLqUY5nYWb0FytgdQgnJVFgV6GGQR.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => '73G6e7PED1DLswQBWMq0qTsPiYEeenCiZEYkj72E.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => 'juYlSB6XIXJIh5fPzpnhzmY2UqryxXGRdSWaR4hB.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => '83bBbPCy5kcoiFM4hn9f5Knsj6MttLQED9MLyGnM.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-07 11:57:47',
            ),
            5 => 
            array (
                'id' => 6,
                'path' => 'WkWPQ8J4DSPQp2dS4sFtkhkMF7I2dblw4Q4D9L16.webp',
                'is_cover' => 1,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            6 => 
            array (
                'id' => 7,
                'path' => '0oYR2TzZHj3MaJO9Y5wjljKDPuqvoKvbIX0G9icD.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            7 => 
            array (
                'id' => 8,
                'path' => '2oneTBVlAwuCTUqlNrp0R0UN5fGEivRHpvemLK9f.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:00:38',
                'updated_at' => '2025-01-07 12:00:38',
            ),
            8 => 
            array (
                'id' => 9,
                'path' => 'uzgjAfb8SpohYwCxStji7qzSAGwiMB0FhcenCIeN.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            9 => 
            array (
                'id' => 10,
                'path' => 'V1HwVaMycPWXubel1bQDz45eHzv3foxJGYIpN0as.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            10 => 
            array (
                'id' => 11,
                'path' => 'MpMhqGA1tYjakdBSRZvrXOWiTmaEBHHj8rZoZzAQ.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            11 => 
            array (
                'id' => 12,
                'path' => 'hZnuWQxZOUbP3Thdk937qTMZGjbgB3bqRsiCs6SI.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            12 => 
            array (
                'id' => 13,
                'path' => 'jQdN4qGTxtrekzmhpqOfxmfE6Gh9aMiarzwRGKtm.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-07 12:05:52',
            ),
            13 => 
            array (
                'id' => 14,
                'path' => 'XXjcWedz4T72CwjeLUArAmYJbJA6AHPXZIhclg2b.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            14 => 
            array (
                'id' => 15,
                'path' => 'Yh30jElOmUKKomP1VpySApz95ehjyXVvBWmKs60P.webp',
                'is_cover' => 1,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            15 => 
            array (
                'id' => 16,
                'path' => 'HtDx2OVn97gDaeVwCCBcVyQ9Ke2MDTDMSHVTvJmz.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            16 => 
            array (
                'id' => 17,
                'path' => 'yHTNLTrbqhVFMNBbMHyZnIE1y5ZC8cZAYbVdOsNW.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-07 12:08:50',
            ),
            17 => 
            array (
                'id' => 18,
                'path' => 'fLqHb0nnCxh7OONTH5uXrYGXk3LNjxlVQgvuOaxG.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
            18 => 
            array (
                'id' => 19,
                'path' => 'sSGDCLQ0ztaGm9izNvPAB1xhz1MH7Fo8btLaMQCL.webp',
                'is_cover' => 1,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
            19 => 
            array (
                'id' => 20,
                'path' => 'wl1hMgms4CN0ARo5zPcaaSEvmTQVSUs07X6dNBYz.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
            20 => 
            array (
                'id' => 21,
                'path' => 'i71kFX2i8JGrQJyszCg7hdGAJKY1CHonNyqaxSl2.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
            21 => 
            array (
                'id' => 22,
                'path' => '4mduQiseDUaJYU92TugEEwSbDxdN3WpsyrMGEtsL.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-07 12:11:13',
            ),
        ));
        
        
    }
}