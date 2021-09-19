<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
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
        \App\Models\Attendance::factory(1)->create([
            'user_id' => \App\Models\User::all()->random(),
            'doctor_id' => \App\Models\Doctor::all()->random(),
            'patient_id' => \App\Models\Patient::all()->random()
            ]);
        }
    }
}
