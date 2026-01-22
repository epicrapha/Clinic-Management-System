<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialization;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'contact' => '1234567890',
                'gender' => User::MALE,
                'type' => User::ADMIN,
                'email' => 'admin@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
                'region_code' => '91',
            ],
            [
                'first_name' => 'Adam',
                'last_name' => 'Diaz',
                'contact' => '1234567890',
                'gender' => User::MALE,
                'type' => User::DOCTOR,
                'email' => 'doctor@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Sarah',
                'last_name' => 'Johnson',
                'contact' => '1234567891',
                'gender' => User::FEMALE,
                'type' => User::DOCTOR,
                'email' => 'sarah.j@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Chen',
                'contact' => '1234567892',
                'gender' => User::MALE,
                'type' => User::DOCTOR,
                'email' => 'michael.c@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'contact' => '1234567893',
                'gender' => User::FEMALE,
                'type' => User::DOCTOR,
                'email' => 'emily.d@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Wilson',
                'contact' => '1234567894',
                'gender' => User::MALE,
                'type' => User::DOCTOR,
                'email' => 'james.w@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Aiko',
                'last_name' => 'Walsh',
                'contact' => '1234567895',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'patient@infycare.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'contact' => '1234567801',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'john.doe@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'contact' => '1234567802',
                'gender' => User::FEMALE,
                'type' => User::PATIENT,
                'email' => 'jane.smith@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Brown',
                'contact' => '1234567803',
                'gender' => User::FEMALE,
                'type' => User::PATIENT,
                'email' => 'alice.brown@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'White',
                'contact' => '1234567804',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'bob.white@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Charlie',
                'last_name' => 'Green',
                'contact' => '1234567805',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'charlie.green@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Diana',
                'last_name' => 'Black',
                'contact' => '1234567806',
                'gender' => User::FEMALE,
                'type' => User::PATIENT,
                'email' => 'diana.black@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Edward',
                'last_name' => 'Grey',
                'contact' => '1234567807',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'edward.grey@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Fiona',
                'last_name' => 'Rose',
                'contact' => '1234567808',
                'gender' => User::FEMALE,
                'type' => User::PATIENT,
                'email' => 'fiona.rose@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'George',
                'last_name' => 'King',
                'contact' => '1234567809',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'george.king@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Hannah',
                'last_name' => 'Hill',
                'contact' => '1234567810',
                'gender' => User::FEMALE,
                'type' => User::PATIENT,
                'email' => 'hannah.hill@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
            [
                'first_name' => 'Ian',
                'last_name' => 'Stone',
                'contact' => '1234567811',
                'gender' => User::MALE,
                'type' => User::PATIENT,
                'email' => 'ian.stone@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('123456'),
            ],
        ];

        $specializationIds = Specialization::pluck('id');

        foreach ($users as $key => $userData) {
            $user = User::updateOrCreate(['email' => $userData['email']], $userData);
            if ($userData['type'] == User::DOCTOR) {
                $doctor = Doctor::updateOrCreate(['user_id' => $user->id]);
                $user->address()->updateOrCreate(['owner_id' => $user->id]);
                $doctor->specializations()->sync($specializationIds);

                // Assign avatars manually for now
                if (!$user->hasMedia(User::PROFILE)) {
                    if ($userData['first_name'] == 'Adam') {
                        $user->addMedia(public_path('assets/front/images/doctors/doctor-1.png'))->toMediaCollection(User::PROFILE, config('app.media_disc'));
                    } elseif ($userData['first_name'] == 'Sarah') {
                        $user->addMedia(public_path('assets/front/images/doctors/doctor-2.png'))->toMediaCollection(User::PROFILE, config('app.media_disc'));
                    } elseif ($userData['first_name'] == 'Michael') {
                        $user->addMedia(public_path('assets/front/images/doctors/doctor-3.png'))->toMediaCollection(User::PROFILE, config('app.media_disc'));
                    } elseif ($userData['first_name'] == 'Emily') {
                        $user->addMedia(public_path('assets/front/images/doctors/doctor-4.png'))->toMediaCollection(User::PROFILE, config('app.media_disc'));
                    } elseif ($userData['first_name'] == 'James') {
                        $user->addMedia(public_path('assets/front/images/doctors/doctor-5.png'))->toMediaCollection(User::PROFILE, config('app.media_disc'));
                    }
                }
            }
            if ($userData['type'] == User::PATIENT) {
                $patient = Patient::updateOrCreate(['user_id' => $user->id], ['patient_unique_id' => 'UNIQUE' . $key]);
                $patient->address()->updateOrCreate(['owner_id' => $patient['user_id']]);
            }
        }
    }
}
