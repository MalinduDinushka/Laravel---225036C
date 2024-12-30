<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'Dr. John Smith',
                'email' => 'john.smith@medicareplus.com',
                'phone' => '1234567890',
                'specialization' => 'Cardiologist',
                'qualification' => 'MD, FACC',
                'experience' => '15 years',
                'image' => 'd1.jpg',
                'consultation_fee' => 150
            ],
            [
                'name' => 'Dr. Sarah Johnson',
                'email' => 'sarah.johnson@medicareplus.com',
                'phone' => '2345678901',
                'specialization' => 'Neurologist',
                'qualification' => 'MD, PhD',
                'experience' => '12 years',
                'image' => 'd2.jpg',
                'consultation_fee' => 180
            ],
            [
                'name' => 'Dr. Michael Chen',
                'email' => 'michael.chen@medicareplus.com',
                'phone' => '3456789012',
                'specialization' => 'Pediatrician',
                'qualification' => 'MD, FAAP',
                'experience' => '10 years',
                'image' => 'd3.jpg',
                'consultation_fee' => 120
            ],
            [
                'name' => 'Dr. Emily Davis',
                'email' => 'emily.davis@medicareplus.com',
                'phone' => '4567890123',
                'specialization' => 'Dermatologist',
                'qualification' => 'MD, FAAD',
                'experience' => '8 years',
                'image' => 'd4.jpg',
                'consultation_fee' => 160
            ],
            [
                'name' => 'Dr. David Wilson',
                'email' => 'david.wilson@medicareplus.com',
                'phone' => '5678901234',
                'specialization' => 'Orthopedic Surgeon',
                'qualification' => 'MD, FAAOS',
                'experience' => '18 years',
                'image' => 'd5.jpg',
                'consultation_fee' => 200
            ],
            [
                'name' => 'Dr. Lisa Anderson',
                'email' => 'lisa.anderson@medicareplus.com',
                'phone' => '6789012345',
                'specialization' => 'Ophthalmologist',
                'qualification' => 'MD, FAAO',
                'experience' => '14 years',
                'image' => 'd6.jpg',
                'consultation_fee' => 170
            ],
            [
                'name' => 'Dr. Robert Taylor',
                'email' => 'robert.taylor@medicareplus.com',
                'phone' => '7890123456',
                'specialization' => 'Dentist',
                'qualification' => 'DDS, FAGD',
                'experience' => '11 years',
                'image' => 'd7.jpg',
                'consultation_fee' => 130
            ],
            [
                'name' => 'Dr. Jennifer White',
                'email' => 'jennifer.white@medicareplus.com',
                'phone' => '8901234567',
                'specialization' => 'Psychiatrist',
                'qualification' => 'MD, FAPA',
                'experience' => '13 years',
                'image' => 'd8.jpg',
                'consultation_fee' => 190
            ],
            [
                'name' => 'Dr. Carlos Rodriguez',
                'email' => 'carlos.rodriguez@medicareplus.com',
                'phone' => '9012345678',
                'specialization' => 'Gynecologist',
                'qualification' => 'MD, FACOG',
                'experience' => '16 years',
                'image' => 'd9.jpg',
                'consultation_fee' => 175
            ],
            [
                'name' => 'Dr. Priya Patel',
                'email' => 'priya.patel@medicareplus.com',
                'phone' => '0123456789',
                'specialization' => 'ENT Specialist',
                'qualification' => 'MD, FACS',
                'experience' => '9 years',
                'image' => 'd10.jpg',
                'consultation_fee' => 145
            ],
            [
                'name' => 'Dr. Kevin O\'Brien',
                'email' => 'kevin.obrien@medicareplus.com',
                'phone' => '1122334455',
                'specialization' => 'Urologist',
                'qualification' => 'MD, FACS',
                'experience' => '17 years',
                'image' => 'd11.jpg',
                'consultation_fee' => 185
            ],
            [
                'name' => 'Dr. Rachel Kim',
                'email' => 'rachel.kim@medicareplus.com',
                'phone' => '2233445566',
                'specialization' => 'Oncologist',
                'qualification' => 'MD, PhD',
                'experience' => '15 years',
                'image' => 'd12.jpg',
                'consultation_fee' => 195
            ],
            [
                'name' => 'Dr. Aisha Hassan',
                'email' => 'aisha.hassan@medicareplus.com',
                'phone' => '3344556677',
                'specialization' => 'Endocrinologist',
                'qualification' => 'MD, FACE',
                'experience' => '12 years',
                'image' => 'd13.jpg',
                'consultation_fee' => 165
            ],
            [
                'name' => 'Dr. Sofia Nguyen',
                'email' => 'sofia.nguyen@medicareplus.com',
                'phone' => '4455667788',
                'specialization' => 'Pulmonologist',
                'qualification' => 'MD, FCCP',
                'experience' => '11 years',
                'image' => 'd14.jpg',
                'consultation_fee' => 155
            ],
            [
                'name' => 'Dr. Marcus Thompson',
                'email' => 'marcus.thompson@medicareplus.com',
                'phone' => '5566778899',
                'specialization' => 'Rheumatologist',
                'qualification' => 'MD, FACR',
                'experience' => '14 years',
                'image' => 'd15.jpg',
                'consultation_fee' => 175
            ],
            [
                'name' => 'Dr. Elena Petrova',
                'email' => 'elena.petrova@medicareplus.com',
                'phone' => '6677889900',
                'specialization' => 'Gastroenterologist',
                'qualification' => 'MD, FACG',
                'experience' => '13 years',
                'image' => 'd16.jpg',
                'consultation_fee' => 170
            ]
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}
