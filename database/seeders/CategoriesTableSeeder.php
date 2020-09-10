<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::table('categories')->insert([
            [ 'user_id' => '1',
                'name' => 'John',
                'slug' => 'Johnny',
                'is_published' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [ 'user_id' => '1',
            'name' => 'Doe',
            'slug' => 'Donny',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [ 'user_id' => '1',
            'name' => 'Ban',
            'slug' => 'Banny',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [ 'user_id' => '1',
            'name' => 'Gan',
            'slug' => 'Ganny',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [ 'user_id' => '1',
            'name' => 'Lo',
            'slug' => 'Lonny',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
