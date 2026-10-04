<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        $industry = Auth::guard('industry')->user();

        $applicants = Applicant::where('industry_id', $industry->id ?? 1)
            ->with('jobPosting')
            ->orderByDesc('ai_match_score')
            ->get();

        return view('pages.dashboard.applicants', compact('industry', 'applicants'));
    }

    public function show($id)
    {
        $industry = Auth::guard('industry')->user();
        $applicant = Applicant::where('industry_id', $industry->id ?? 1)->find($id);

        // Fallback Data Adelio Alvaro Sesuai Gambar Figma
        if (!$applicant) {
            $applicant = (object)[
                'id' => $id,
                'full_name' => 'Adelio Alvaro Putra L.',
                'email' => 'Adelio@gmail.com',
                'phone' => '085174214845',
                'foto' => asset('images/avatars/adelio.png'),
                'portfolio_name' => 'Adelio_Portfolio.pdf',
                'cv_name' => 'Adelio_CV.pdf',
                'status' => 'listed',
            ];
        }

        return view('pages.dashboard.applicant-detail', compact('industry', 'applicant'));
    }

    public function updateStatus(Request $request, $id)
    {
        $industry = Auth::guard('industry')->user();
        $applicant = Applicant::where('industry_id', $industry->id ?? 1)->findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,interview,rejected',
        ]);

        $applicant->update(['status' => $request->status]);

        return back()->with('success', 'Status pelamar berhasil diperbarui!');
    }
}