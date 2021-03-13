<?php
use App\User;
use App\Empleado;
use App\Empresa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        factory(Empresa::class,10)->create();
        factory(Empleado::class,50)->create();
    }
}
