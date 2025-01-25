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
                'updated_at' => '2025-01-21 05:25:16',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'dh0Uny4WGeSXLqUY5nYWb0FytgdQgnJVFgV6GGQR.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-21 05:25:16',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => '73G6e7PED1DLswQBWMq0qTsPiYEeenCiZEYkj72E.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-21 05:25:16',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => 'juYlSB6XIXJIh5fPzpnhzmY2UqryxXGRdSWaR4hB.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-21 05:25:16',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => '83bBbPCy5kcoiFM4hn9f5Knsj6MttLQED9MLyGnM.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 11:57:47',
                'updated_at' => '2025-01-21 05:25:16',
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
                'updated_at' => '2025-01-21 05:26:01',
            ),
            9 => 
            array (
                'id' => 10,
                'path' => 'V1HwVaMycPWXubel1bQDz45eHzv3foxJGYIpN0as.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-21 05:26:01',
            ),
            10 => 
            array (
                'id' => 11,
                'path' => 'MpMhqGA1tYjakdBSRZvrXOWiTmaEBHHj8rZoZzAQ.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-21 05:26:01',
            ),
            11 => 
            array (
                'id' => 12,
                'path' => 'hZnuWQxZOUbP3Thdk937qTMZGjbgB3bqRsiCs6SI.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-21 05:26:01',
            ),
            12 => 
            array (
                'id' => 13,
                'path' => 'jQdN4qGTxtrekzmhpqOfxmfE6Gh9aMiarzwRGKtm.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:05:52',
                'updated_at' => '2025-01-21 05:26:01',
            ),
            13 => 
            array (
                'id' => 14,
                'path' => 'XXjcWedz4T72CwjeLUArAmYJbJA6AHPXZIhclg2b.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-21 05:24:45',
            ),
            14 => 
            array (
                'id' => 15,
                'path' => 'Yh30jElOmUKKomP1VpySApz95ehjyXVvBWmKs60P.webp',
                'is_cover' => 1,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-21 05:24:45',
            ),
            15 => 
            array (
                'id' => 16,
                'path' => 'HtDx2OVn97gDaeVwCCBcVyQ9Ke2MDTDMSHVTvJmz.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-21 05:24:45',
            ),
            16 => 
            array (
                'id' => 17,
                'path' => 'yHTNLTrbqhVFMNBbMHyZnIE1y5ZC8cZAYbVdOsNW.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:08:50',
                'updated_at' => '2025-01-21 05:24:45',
            ),
            17 => 
            array (
                'id' => 18,
                'path' => 'fLqHb0nnCxh7OONTH5uXrYGXk3LNjxlVQgvuOaxG.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:17',
            ),
            18 => 
            array (
                'id' => 19,
                'path' => 'sSGDCLQ0ztaGm9izNvPAB1xhz1MH7Fo8btLaMQCL.webp',
                'is_cover' => 1,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:17',
            ),
            19 => 
            array (
                'id' => 20,
                'path' => 'wl1hMgms4CN0ARo5zPcaaSEvmTQVSUs07X6dNBYz.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:17',
            ),
            20 => 
            array (
                'id' => 21,
                'path' => 'i71kFX2i8JGrQJyszCg7hdGAJKY1CHonNyqaxSl2.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:17',
            ),
            21 => 
            array (
                'id' => 22,
                'path' => '4mduQiseDUaJYU92TugEEwSbDxdN3WpsyrMGEtsL.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-07 12:11:13',
                'updated_at' => '2025-01-21 05:24:17',
            ),
            22 => 
            array (
                'id' => 23,
                'path' => 'qni4WD5IAEw3xm4YrPoou1HIpUfiZn7PY3rePewd.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:56',
            ),
            23 => 
            array (
                'id' => 24,
                'path' => 'T36214pufrd9we7x99u1Pu0pbxi648UXhysPJG7A.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:56',
            ),
            24 => 
            array (
                'id' => 25,
                'path' => 'pT7n0RT0oUk2Ffsvq8S5IJuohGbygv075ktMjJPP.webp',
                'is_cover' => 1,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:56',
            ),
            25 => 
            array (
                'id' => 26,
                'path' => 'Z84pW85MB8QHr53fxtYE8vqoLOvkOwSGziK7UWc0.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:56',
            ),
            26 => 
            array (
                'id' => 27,
                'path' => 'CAXHSUQxH3z8LGvjR1QOySfjCnTNYv2bOHFf2O9Q.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:18:50',
                'updated_at' => '2025-01-23 06:25:56',
            ),
            27 => 
            array (
                'id' => 28,
                'path' => 'XxjUtvZ3HEcC2OtsYShAbAREuQQdFpLfr9ddtj8Y.webp',
                'is_cover' => 1,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            28 => 
            array (
                'id' => 29,
                'path' => '7e2qojjDTLIjAaX1OPdZXmwqjE16lrdbDDepjbrG.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            29 => 
            array (
                'id' => 30,
                'path' => 'xOq88TmnVJdSkgkjumVkDJ6S8ruR8PBdwt6NRBit.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            30 => 
            array (
                'id' => 31,
                'path' => 'gsDzf9REfXwIeJWWSrfcquR6f0NX2Q2hy0Dld5xH.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            31 => 
            array (
                'id' => 32,
                'path' => 'J52cHoY2lKjCzcpmOi4qgLzzYItSIyFjNSSbK3Jt.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:21:16',
                'updated_at' => '2025-01-21 05:21:16',
            ),
            32 => 
            array (
                'id' => 33,
                'path' => '7yfVwMo3c04ba9naEsWK8OPTcLmcS4PVeZ6CBLI3.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
            33 => 
            array (
                'id' => 34,
                'path' => 'Y585a16D1uHnwGT3jrEpxe75TPGqbAC6hzrB7meH.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
            34 => 
            array (
                'id' => 35,
                'path' => 'rJa0pRzSkg2sFOmKjesICUkdzAlrNDnAcHV2qB6t.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
            35 => 
            array (
                'id' => 36,
                'path' => '20lmo8OFy53X0o7izv5Ds5J0YFjHtYClRMdeP8dd.webp',
                'is_cover' => 1,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
            36 => 
            array (
                'id' => 37,
                'path' => 't3B3J3cLWUKo15ZAKsORv9ecLelgPM5xGUD0FfD0.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
            37 => 
            array (
                'id' => 38,
                'path' => 'oLgCk1isbV7PL42BTNn7XtUzulvazoZ127zU1SJ3.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-01-21 05:23:26',
                'updated_at' => '2025-01-23 06:24:23',
            ),
        ));
        
        
    }
}