<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobPosting;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $industry = Auth::guard('industry')->user();

        $query = JobPosting::where('industry_id', $industry->id ?? 1)->withCount('applicants');

        if ($request->filled('skill')) {
            $skill = $request->input('skill');
            $query->where('title', 'like', "%{$skill}%");
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $isActive = $request->status === 'buka';
            $query->where('is_active', $isActive);
        }

        $jobs = $query->latest()->get();

        if ($jobs->isEmpty()) {
            $jobs = collect([
                (object)[
                    'id' => 1,
                    'title' => 'Junior DevOPS',
                    'posted_at' => '1 Hari Yang Lalu',
                    'applicants_count' => 2,
                    'is_active' => true,
                ],
                (object)[
                    'id' => 2,
                    'title' => 'Junior DevOPS',
                    'posted_at' => '1 Hari Yang Lalu',
                    'applicants_count' => 0,
                    'is_active' => false,
                ]
            ]);
        }

        return view('dashboard.jobs', compact('industry', 'jobs'));
    }

    public function store(Request $request)
    {
        $industry = Auth::guard('industry')->user();

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'location' => 'required|string',
        ]);

        JobPosting::create([
            'industry_id' => $industry->id ?? 1,
            'title' => $request->title,
            'category' => $request->category,
            'location' => $request->location,
            'is_active' => true,
        ]);

        return back()->with('success', 'Lowongan pekerjaan baru berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $industry = Auth::guard('industry')->user();
        $job = JobPosting::where('industry_id', $industry->id ?? 1)->findOrFail($id);
        $job->delete();

        return back()->with('success', 'Lowongan berhasil dihapus!');
    }
}