<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SeoItemsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
        $this->call(CategoryFeaturesTableSeeder::class);
        $this->call(CategoryFeatureValuesTableSeeder::class);
        $this->call(ProductFeatureValuesTableSeeder::class);
    }
}
