<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $industry = Auth::guard('industry')->user();

        $profile = (object)[
            'name' => $industry->company_name ?? 'PT. Garuda Telekomunikasi Indonesia',
            'website' => 'www.ptgarudatelkom.com',
            'description' => 'PT Garuda Telekomunikasi Indonesia merupakan perusahaan penyedia infrastruktur telekomunikasi dan solusi teknologi informasi terintegrasi.',
            'address' => 'Jl. Muria Jl. Pepelegi Indah No.47, Pepe, Pepelegi, Kec. Waru',
            'city' => 'Kabupaten Sidoarjo',
            'province' => 'Jawa Timur',
            'linkedin' => 'www.linkedin.com/company/ptgarudatelkom',
            'instagram' => 'www/instagram:ptgarudaid',
            'other_social' => 'https://twitter.com/ptgarudaid',
            'logo' => asset('images/logo/garuda-telekomunikasi.png'),
            'photos' => [
                asset('images/home/berita.png'),
                asset('images/home/berita.png'),
                asset('images/home/berita.png'),
            ]
        ];

        return view('dashboard.company-profile', compact('industry', 'profile'));
    }

    public function update(Request $request)
    {
        return back()->with('success', 'Profil perusahaan berhasil disimpan!');
    }
}