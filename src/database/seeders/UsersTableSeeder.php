<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '的野',
            'email' => 'golf19830228@ymobile.ne.jp',
            'password' => '00000000'
        ];
        DB::table('users')->insert($param);
    }
}
