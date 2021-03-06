<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name' => 'Du lịch trong nước'
            ],
            [
                'name' => 'Du lịch nước ngoài'
            ],
            [
                'name' => 'Nhật Bản'
            ],
            [
                'name' => 'Mỹ'
            ],
            [
                'name' => 'Ukraina'
            ],
        ];
        foreach($categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
