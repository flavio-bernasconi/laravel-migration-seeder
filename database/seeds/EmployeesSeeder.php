<?php

use Illuminate\Database\Seeder;
use App\Azienda;


class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Azienda::class, 10)->create();
    }
}
