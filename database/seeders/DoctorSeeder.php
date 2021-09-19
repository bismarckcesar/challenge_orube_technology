<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i <5;$i++){
            \App\Models\Doctor::factory(1)->create();
        }
    }
}
