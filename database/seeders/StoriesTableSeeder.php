<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stories')->delete();
        
        \DB::table('stories')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'کتری سفری',
                'thumbnail' => 'yDdA9sa9JEBMuzbQO7I1Py044BvdSlPCpUxBbTVy.jpg',
                'story' => 'SEZiPPzOSurggjsJAyrtsVxdXKKRSm45PJfrJT3h.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2025-01-20 05:55:22',
                'updated_at' => '2025-01-20 05:55:22',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'کوله کوه نوردی',
                'thumbnail' => 'D8GoM8aGru4J99VEvqWpIhSoHfjVJH9SsV1fZ2Yb.jpg',
                'story' => '4SZxRKkSUnVgY2Kuzjiqb1dBiKrJp2yue240PoDR.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2025-01-20 05:57:47',
                'updated_at' => '2025-01-20 05:57:47',
            ),
            2 => 
            array (
                'id' => 6,
                'title' => 'باتری ',
                'thumbnail' => '91E10CvSizKi5fp5xYPL1arXkkH68n3iag6jZwj5.jpg',
                'story' => 'yo7ZGom8lzoSvZdP0Q975cbzW1FcZc6q5orygCaU.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2025-01-20 06:24:58',
                'updated_at' => '2025-01-20 06:24:58',
            ),
            3 => 
            array (
                'id' => 7,
                'title' => 'پایه نگهدارنده',
                'thumbnail' => 'x4xPPOhdnwb20AGC0NcSvoJQesdsSfRo6CbvufVl.jpg',
                'story' => 'jcQt88QkEdCkBbktfpTifWaIMxosoXDtwUXOFF0g.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2025-01-20 06:35:40',
                'updated_at' => '2025-01-20 06:35:40',
            ),
        ));
        
        
    }
}