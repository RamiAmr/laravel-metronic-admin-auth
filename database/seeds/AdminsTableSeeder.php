<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add default Admin after refreshing database
        //php artisan db:seed OR php artisan migrate:refresh --seed
        DB::table('admins')->insert([
            'name' => "Zoorest Admin",
            'email' => 'admin@zoorest.com',
            'password' => bcrypt('123abc987e'),
        ]);
    }
}
