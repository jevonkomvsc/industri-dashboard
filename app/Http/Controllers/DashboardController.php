<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;

class DashboardController extends Controller
{
    /**
     * Menampilkan Halaman Utama Industry Dashboard (Desktop - 8.png)
     */
    public function index()
    {
        $industry = Auth::guard('industry')->user();

        // Data Profil Mitra Industri & Hiring Manager
        $company = (object) [
            'name' => $industry->company_name ?? 'Pt Garuda Telekomunikasi Indonesia',
            'hiring_manager' => 'Josh Maximilian',
            'role' => 'Hiring Manager',
            'logo' => $industry->logo ?? 'images/logo/garuda-telekomunikasi.png',
        ];

        // 3 Kartu Metrik Statistik Sesuai Figma Desktop - 8
        $metrics = [
            'talent_aktif' => 1,
            'talent_diterima_minggu_ini' => 0,
            'talent_database' => 230,
        ];

        // Section: Lamaran Kerja Aktif
        $activeJobs = [
            [
                'id' => 1,
                'title' => 'Junior DevOPS',
                'posted_at' => '1 Hari Yang Lalu',
                'applicants_count' => 2,
                'status' => 'Buka',
            ]
        ];

        // Section: Lamaran Kerja Tidak Aktif
        $inactiveJobs = [
            [
                'id' => 2,
                'title' => 'Junior DevsecOps',
                'posted_at' => '1 Hari Yang Lalu',
                'applicants_count' => 0,
                'status' => 'Tutup',
            ]
        ];

        return view('dashboard.index', compact('company', 'metrics', 'activeJobs', 'inactiveJobs'));
    }

    /**
     * Menu Navigasi: Pekerjaan
     */
    public function jobs()
    {
        $industry = Auth::guard('industry')->user();
        $applicants = Applicant::where('industry_id', $industry->id)->orderByDesc('ai_match_score')->get();

        $company = (object) [
            'name' => $industry->company_name ?? 'Pt Garuda Telekomunikasi Indonesia',
            'hiring_manager' => 'Josh Maximilian',
            'role' => 'Hiring Manager',
            'logo' => $industry->logo ?? 'images/logo/garuda-telekomunikasi.png',
        ];

        return view('dashboard.jobs', compact('company', 'applicants'));
    }

    /**
     * Menu Navigasi: Company Profile
     */
    public function profile()
    {
        $industry = Auth::guard('industry')->user();

        $company = (object) [
            'name' => $industry->company_name ?? 'Pt Garuda Telekomunikasi Indonesia',
            'hiring_manager' => 'Josh Maximilian',
            'role' => 'Hiring Manager',
            'logo' => $industry->logo ?? 'images/logo/garuda-telekomunikasi.png',
        ];

        return view('dashboard.profile', compact('company', 'industry'));
    }

    /**
     * Update Status Pelamar Alumni
     */
    public function updateStatus(Request $request, $id)
    {
        $industry = Auth::guard('industry')->user();
        $applicant = Applicant::where('industry_id', $industry->id)->findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,interview,rejected',
        ]);

        $applicant->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status pelamar berhasil diperbarui!');
    }
}