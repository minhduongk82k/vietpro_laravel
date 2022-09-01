<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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

            ['id' => 1, 'name' => 'Nam', 'slug' => 'nam', 'parent' => 0],
            ['id' => 2, 'name' => 'Áo Nam', 'slug' => 'ao-nam', 'parent' => 1],
            ['id' => 3, 'name' => 'Quần Nam', 'slug' => 'quan-nam', 'parent' => 1],
            ['id' => 4, 'name' => 'Nữ', 'slug' => 'nu', 'parent' => 0],
            ['id' => 5, 'name' => 'Áo Nữ', 'slug' => 'ao-nu', 'parent' => 4],
            ['id' => 6, 'name' => 'Quần Nữ', 'slug' => 'quan-nu', 'parent' => 4]
        
        ];
        DB::table('categories')->delete();
        DB::table('categories')->insert($categories);
    }
	/**
	 */
	function __construct() {
	}
}
