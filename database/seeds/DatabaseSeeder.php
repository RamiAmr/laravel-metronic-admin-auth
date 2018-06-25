<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('admins')->truncate();
        $this->call(AdminsTableSeeder::class);

        //TODO populate default admin
        ///factory(App\User::class, 10)->create();

    }
}
