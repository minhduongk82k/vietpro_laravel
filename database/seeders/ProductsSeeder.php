<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            ['id' => 1, 'name' => 'Áo khoác xanh', 'code' => 'AK0011', 'slug' => 'ao-khoac-xanh', 'price' => 100000, 'featured' => 1, 'state' => 1, 'info' => 'Áo khoác nam xanh', 'describer' => 'Áo khoác thu đông nam xanh', 'image' => 'ao-khoac.jpg', 'categories_id' => 2],
            ['id' => 2, 'name' => 'Áo nữ phối viễn xanh', 'code' => 'AN0011', 'slug' => 'ao-nu-phoi-vien-xanh', 'price' => 150000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ phối viền xanh', 'describer' => 'Áo nữ phối viền xanh', 'image' => 'ao-nu-phoi-vien.jpg', 'categories_id' => 5],
            ['id' => 3, 'name' => 'Áo nữ sơ mi cổ đúc xanh', 'code' => 'AN0021', 'slug' => 'ao-nu-so-mi-co-duc-xanh', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi có cổ đúc xanh', 'describer' => 'Áo nữ sơ mi có cổ đúc xanh', 'image' => 'ao-nu-so-mi-co-co-duc.jpg', 'categories_id' => 5],
            ['id' => 4, 'name' => 'Quần kaki đỏ mận xanh', 'code' => 'KAKI1', 'slug' => 'quan-kaki-do-man-xanh', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Quần kaki đỏ mận xanh', 'describer' => 'Quần kaki đỏ mận xanh', 'image' => 'quan-kaki-do-man-qk162-8273.jpg', 'categories_id' => 3],
            ['id' => 5, 'name' => 'Áo nữ sơ mi chấm bi xanh', 'code' => 'AN0031', 'slug' => 'ao-nu-so-mi-cham-bi-xanh', 'price' => 350000, 'featured' => 1, 'state' => 0, 'info' => 'Áo nữ sơ mi chấm bi xanh', 'describer' => 'Áo nữ sơ mi chấm bi xanh', 'image' => 'ao-nu-so-mi-cham-bi.jpg', 'categories_id' => 3],
        
            ['id' => 6, 'name' => 'Áo khoác đỏ', 'code' => 'AK0012', 'slug' => 'ao-khoac-do', 'price' => 100000, 'featured' => 1, 'state' => 1, 'info' => 'Áo khoác nam đỏ', 'describer' => 'Áo khoác thu đông nam đỏ', 'image' => 'ao-khoac.jpg', 'categories_id' => 2],
            ['id' => 7, 'name' => 'Áo nữ phối viễn đỏ', 'code' => 'AN0012', 'slug' => 'ao-nu-phoi-vien-do', 'price' => 150000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ phối viền đỏ', 'describer' => 'Áo nữ phối viền đỏ', 'image' => 'ao-nu-phoi-vien.jpg', 'categories_id' => 5],
            ['id' => 8, 'name' => 'Áo nữ sơ mi cổ đúc đỏ', 'code' => 'AN0022', 'slug' => 'ao-nu-so-mi-co-duc-do', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi có cổ đúc đỏ', 'describer' => 'Áo nữ sơ mi có cổ đúc đỏ', 'image' => 'ao-nu-so-mi-co-co-duc.jpg', 'categories_id' => 5],
            ['id' => 9, 'name' => 'Quần kaki đỏ mận đỏ', 'code' => 'KAKI2', 'slug' => 'quan-kaki-do-man-do', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Quần kaki đỏ mận', 'describer' => 'Quần kaki đỏ mận', 'image' => 'quan-kaki-do-man-qk162-8273.jpg', 'categories_id' => 3],
            ['id' => 10, 'name' => 'Áo nữ sơ mi chấm bi đỏ', 'code' => 'AN0032', 'slug' => 'ao-nu-so-mi-cham-bi-do', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi chấm bi đỏ', 'describer' => 'Áo nữ sơ mi chấm bi đỏ', 'image' => 'ao-nu-so-mi-cham-bi.jpg', 'categories_id' => 3],
            
            ['id' => 11, 'name' => 'Áo khoác vàng', 'code' => 'AK0013', 'slug' => 'ao-khoac-vang', 'price' => 100000, 'featured' => 1, 'state' => 1, 'info' => 'Áo khoác nam vàng', 'describer' => 'Áo khoác thu đông nam vàng', 'image' => 'ao-khoac.jpg', 'categories_id' => 2],
            ['id' => 12, 'name' => 'Áo nữ phối viễn vàng', 'code' => 'AN0013', 'slug' => 'ao-nu-phoi-vien-vang', 'price' => 150000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ phối viền vàng', 'describer' => 'Áo nữ phối viền vàng', 'image' => 'ao-nu-phoi-vien.jpg', 'categories_id' => 5],
            ['id' => 13, 'name' => 'Áo nữ sơ mi cổ đúc vàng', 'code' => 'AN0023', 'slug' => 'ao-nu-so-mi-co-duc-vang', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi có cổ đúc vàng', 'describer' => 'Áo nữ sơ mi có cổ đúc vàng', 'image' => 'ao-nu-so-mi-co-co-duc.jpg', 'categories_id' => 5],
            ['id' => 14, 'name' => 'Quần kaki vàng mận vàng', 'code' => 'KAKI3', 'slug' => 'quan-kaki-do-man-vang', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Quần kaki vàng mận', 'describer' => 'Quần kaki vàng mận', 'image' => 'quan-kaki-do-man-qk162-8273.jpg', 'categories_id' => 3],
            ['id' => 15, 'name' => 'Áo nữ sơ mi chấm bi vàng', 'code' => 'AN0033', 'slug' => 'ao-nu-so-mi-cham-bi-vang', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi chấm bi vàng', 'describer' => 'Áo nữ sơ mi chấm bi vàng', 'image' => 'ao-nu-so-mi-cham-bi.jpg', 'categories_id' => 3],
            
            ['id' => 16, 'name' => 'Áo khoác trắng', 'code' => 'AK0014', 'slug' => 'ao-khoac-trang', 'price' => 100000, 'featured' => 1, 'state' => 1, 'info' => 'Áo khoác nam trắng', 'describer' => 'Áo khoác thu đông nam trắng', 'image' => 'ao-khoac.jpg', 'categories_id' => 2],
            ['id' => 17, 'name' => 'Áo nữ phối viễn trắng', 'code' => 'AN0014', 'slug' => 'ao-nu-phoi-vien-trang', 'price' => 150000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ phối viền trắng', 'describer' => 'Áo nữ phối viền trắng', 'image' => 'ao-nu-phoi-vien.jpg', 'categories_id' => 5],
            ['id' => 18, 'name' => 'Áo nữ sơ mi cổ đúc trắng', 'code' => 'AN0024', 'slug' => 'ao-nu-so-mi-co-duc-trang', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Áo nữ sơ mi có cổ đúc trắng', 'describer' => 'Áo nữ sơ mi có cổ đúc trắng', 'image' => 'ao-nu-so-mi-co-co-duc.jpg', 'categories_id' => 5],
            ['id' => 19, 'name' => 'Quần kaki trắng mận trắng', 'code' => 'KAKI4', 'slug' => 'quan-kaki-do-man-trang', 'price' => 350000, 'featured' => 1, 'state' => 1, 'info' => 'Quần kaki trắng mận', 'describer' => 'Quần kaki trắng mận', 'image' => 'quan-kaki-do-man-qk162-8273.jpg', 'categories_id' => 3],
            ['id' => 20, 'name' => 'Áo nữ sơ mi chấm bi trắng', 'code' => 'AN0034', 'slug' => 'ao-nu-so-mi-cham-bi-trang', 'price' => 350000, 'featured' => 1, 'state' => 0, 'info' => 'Áo nữ sơ mi chấm bi trắng', 'describer' => 'Áo nữ sơ mi chấm bi trắng', 'image' => 'ao-nu-so-mi-cham-bi.jpg', 'categories_id' => 3],
        ];
        DB::table('products')->delete();
        DB::table('products')->insert($products);
    }
}
