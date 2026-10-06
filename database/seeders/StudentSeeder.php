<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Andi Saputra',
            'group' => 'Informatika',
            'homeworks' => 85,
            'attendance' => 48,
            'projects' => 7,
            'grade' => 85,
        ]);

        Student::create([
            'name' => 'Siti Aisyah',
            'group' => 'Sistem Informasi',
            'homeworks' => 92,
            'attendance' => 50,
            'projects' => 8,
            'grade' => 92,
        ]);

        Student::create([
            'name' => 'Budi Santoso',
            'group' => 'Informatika',
            'homeworks' => 78,
            'attendance' => 45,
            'projects' => 6,
            'grade' => 80,
        ]);

        Student::create([
            'name' => 'Rina Marlina',
            'group' => 'Teknik Komputer',
            'homeworks' => 88,
            'attendance' => 51,
            'projects' => 8,
            'grade' => 90,
        ]);

        Student::create([
            'name' => 'Badratul Nafis',
            'group' => 'Informatika',
            'homeworks' => 95,
            'attendance' => 52,
            'projects' => 8,
            'grade' => 95,
        ]);

        Student::create([
            'name' => 'Dina Putri',
            'group' => 'Sistem Informasi',
            'homeworks' => 82,
            'attendance' => 47,
            'projects' => 7,
            'grade' => 84,
        ]);

        Student::create([
            'name' => 'Fajar Ramadhan',
            'group' => 'Informatika',
            'homeworks' => 76,
            'attendance' => 43,
            'projects' => 6,
            'grade' => 78,
        ]);
    }
}