<?php

use Illuminate\Database\Seeder;

class adminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $data= [
            'name' => 'admin',
            // 'username' => 'admin',
            'email' => 'sagar@domain.com',
            'password' => bcrypt('sagar'),
        ];

        DB::table('admins')->insert($data);
    }
}
