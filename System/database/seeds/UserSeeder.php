<?php

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
        DB::table('users')->insert([
            'name' => 'Tecnologi',
            'email' => 'tecnologia@participacionbogota.gov.co',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Grajales',
            'email' => 'jgrajales@participacionbogota.gov.co',
            'password' => bcrypt('secret2')
        ]);

        DB::table('users')->insert([
            'name' => 'Andres',
            'email' => 'ingandresgrajales@gmail.com',
            'password' => bcrypt('secret3')
        ]);
    }
}
