<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'fullname' => 'Administrator', 
                'password'=>bcrypt("123456"), 
                'email' => 'admin@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 1
            ],
            [
                'fullname' => 'Vietpro Academy', 
                'password'=>bcrypt("123456"), 
                'email' => 'vietpro.edu.vn@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 1
            ],
            [
                'fullname' => 'Nguyễn Văn A', 
                'password'=>bcrypt("123456"), 
                'email' => 'nguyenvana@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn B', 
                'password'=>bcrypt("123456"), 
                'email' => 'nguyenvanb@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn C', 
                'password'=>bcrypt("123456"), 
                'email' => 'nguyenvanc@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn D', 
                'password'=>bcrypt("123456"), 
                'email' => 'nguyenvand@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
        ];
        DB::table('users')->delete();
        DB::table('users')->insert($users);
    }
}
