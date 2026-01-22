<?php

namespace Database\Seeders;

use App\Models\FrontPatientTestimonial;
use Illuminate\Database\Seeder;

class DefaultFrontPatientTestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inputs = [
            [
                'name' => 'John Doe',
                'designation' => 'CEO, Tech Solutions',
                'short_description' => 'The medical care I received at this clinic was exceptional. The doctors are highly professional and truly care about their patients.',
                'profile' => asset('assets/front/images/testimonials/testimonial-1.png'),
                'is_default' => true,
            ],
            [
                'name' => 'Sarah Smith',
                'designation' => 'Marketing Manager',
                'short_description' => 'I highly recommend this clinic for anyone looking for quality healthcare. The staff is friendly and the facilities are top-notch.',
                'profile' => 'https://i.pravatar.cc/150?u=sarah_smith',
                'is_default' => true,
            ],
            [
                'name' => 'Michael Brown',
                'designation' => 'Software Engineer',
                'short_description' => 'Excellent service and state-of-the-art equipment. The doctors here are the best in their field.',
                'profile' => 'https://i.pravatar.cc/150?u=michael_brown',
                'is_default' => true,
            ],
            [
                'name' => 'Emily White',
                'designation' => 'Teacher',
                'short_description' => 'I feel very safe and well-cared for at this clinic. The attention to detail and patient comfort is remarkable.',
                'profile' => 'https://i.pravatar.cc/150?u=emily_white',
                'is_default' => true,
            ],
            [
                'name' => 'David Wilson',
                'designation' => 'Architect',
                'short_description' => 'The scheduling process is very efficient, and the doctors are punctual. A very professional environment.',
                'profile' => 'https://i.pravatar.cc/150?u=david_wilson',
                'is_default' => true,
            ],
            [
                'name' => 'Jessica Taylor',
                'designation' => 'Lawyer',
                'short_description' => 'Comprehensive care and clear communication! I always leave the clinic feeling well-informed and confident in my treatment plan.',
                'profile' => 'https://i.pravatar.cc/150?u=jessica_taylor',
                'is_default' => true,
            ],
            [
                'name' => 'Robert Moore',
                'designation' => 'Entrepreneur',
                'short_description' => 'This clinic sets the standard for patient-centered care. The integration of technology in diagnostics is impressive.',
                'profile' => 'https://i.pravatar.cc/150?u=robert_moore',
                'is_default' => true,
            ],
            [
                'name' => 'Linda Anderson',
                'designation' => 'Retired',
                'short_description' => 'The compassionate care I received here made a significant difference in my recovery. Truly grateful to the entire team.',
                'profile' => 'https://i.pravatar.cc/150?u=linda_anderson',
                'is_default' => true,
            ],
            [
                'name' => 'William Thomas',
                'designation' => 'Chef',
                'short_description' => 'Fast, reliable, and expert medical advice. This is the only place I trust for my family\'s health needs.',
                'profile' => 'https://i.pravatar.cc/150?u=william_thomas',
                'is_default' => true,
            ],
            [
                'name' => 'Karen Jackson',
                'designation' => 'Artist',
                'short_description' => 'The atmosphere at the clinic is very calming, which helps reduce anxiety before appointments. Excellent bedside manner.',
                'profile' => 'https://i.pravatar.cc/150?u=karen_jackson',
                'is_default' => true,
            ],
            [
                'name' => 'Charles White',
                'designation' => 'Consultant',
                'short_description' => 'A world-class facility with world-class doctors. I appreciate the holistic approach to health and wellness.',
                'profile' => 'https://i.pravatar.cc/150?u=charles_white',
                'is_default' => true,
            ],
            [
                'name' => 'Patricia Garcia',
                'designation' => 'Nurse',
                'short_description' => 'As a healthcare professional myself, I am very impressed by the clinical standards maintained here. Highly recommended.',
                'profile' => 'https://i.pravatar.cc/150?u=patricia_garcia',
                'is_default' => true,
            ],
        ];

        foreach ($inputs as $input) {
            $profile = $input['profile'];
            unset($input['profile']);
            $slider = FrontPatientTestimonial::updateOrCreate(['name' => $input['name']], $input);
            if (!$slider->hasMedia(FrontPatientTestimonial::FRONT_PATIENT_PROFILE)) {
                if (str_starts_with($profile, 'http')) {
                    $slider->addMediaFromUrl($profile)->toMediaCollection(FrontPatientTestimonial::FRONT_PATIENT_PROFILE, config('app.media_disc'));
                } else {
                    $slider->addMedia(public_path('assets/front/images/testimonials/testimonial-1.png'))->toMediaCollection(FrontPatientTestimonial::FRONT_PATIENT_PROFILE, config('app.media_disc'));
                }
            }
        }
    }
}
