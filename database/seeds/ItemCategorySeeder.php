<?php

use Illuminate\Database\Seeder;
use App\ItemCategory;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            ['name' => 'makanan'],
            ['name' =>'minuman'],
            ['name' => 'alat tulis'],
            ['name' => 'alat dapur'],
            ['name' => 'pembersih'],
        ];

        foreach ($categories as $category) {
            ItemCategory::create($category);
        }
    }
}
