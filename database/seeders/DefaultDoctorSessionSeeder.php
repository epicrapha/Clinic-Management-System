<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSession;
use App\Models\WeekDay;
use Illuminate\Database\Seeder;

class DefaultDoctorSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($doctors as $doctor) {
            $doctorSession = DoctorSession::updateOrCreate(
                ['doctor_id' => $doctor->id],
                [
                    'session_meeting_time' => 30, // 30 minutes
                    'session_gap' => '10', // 10 minutes gap
                ]
            );

            foreach ($days as $day) {
                WeekDay::updateOrCreate(
                    [
                        'doctor_id' => $doctor->id,
                        'doctor_session_id' => $doctorSession->id,
                        'day_of_week' => $day,
                    ],
                    [
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'start_time_type' => 'AM',
                        'end_time_type' => 'PM',
                    ]
                );
            }
        }
    }
}
