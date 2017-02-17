<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('tbl_personas')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}