<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;
use App\Models\JobPosting;
use App\Models\Applicant;
use Illuminate\Support\Facades\Hash;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        // Akun Mitra Demo: PT Garuda
        $garuda = Industry::create([
            'industry_id' => 'IND-GARUDA-01',
            'company_name' => 'PT Garuda Telekomunikasi Indonesia',
            'password' => Hash::make('password123'),
            'email' => 'hrd@ptgaruda-telkomind.com',
            'address' => 'Jl. Muria Jl. Pepelegi Indah No.47, Waru, Sidoarjo',
        ]);

        $job = JobPosting::create([
            'industry_id' => $garuda->id,
            'title' => 'Junior DevOps',
            'category' => 'Full Time',
            'location' => 'Surabaya, Indonesia',
        ]);

        // Pelamar Alumni HireLink (Kandidat yang akan di-ACC)
        Applicant::create([
            'industry_id' => $garuda->id,
            'job_posting_id' => $job->id,
            'sso_number' => '541211001',
            'full_name' => 'Ahmad Dwi Santoso',
            'major' => 'Sistem Informasi Jaringan & Aplikasi (SIJA)',
            'dtp' => '2023/2024',
            'email' => 'ahmaddwi@student.telkomsda.sch.id',
            'phone' => '081234567890',
            'linkedin_url' => 'https://linkedin.com/in/ahmaddwi',
            'skills' => ['Web Development', 'Docker', 'Linux', 'Laravel'],
            'ai_match_score' => 96,
            'work_preference' => 'On-Site',
            'status' => 'pending',
        ]);

        Applicant::create([
            'industry_id' => $garuda->id,
            'job_posting_id' => $job->id,
            'sso_number' => '541211022',
            'full_name' => 'Bintang Wahyu Pratama',
            'major' => 'Teknik Jaringan Akses Telekomunikasi (TJAT)',
            'dtp' => '2023/2024',
            'email' => 'bintang@student.telkomsda.sch.id',
            'phone' => '085678901234',
            'linkedin_url' => 'https://linkedin.com/in/bintang',
            'skills' => ['Fiber Optic', 'Cisco', 'MikroTik'],
            'ai_match_score' => 89,
            'work_preference' => 'Hybrid',
            'status' => 'interview',
            'interview_details' => 'Senin, 10:00 WIB via Google Meet',
        ]);
    }
}