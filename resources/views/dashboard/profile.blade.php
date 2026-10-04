@extends('layouts.industry')

@section('title', 'Company Profile')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Company Profile</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-1">Informasi kemitraan industri resmi SMK Telkom Sidoarjo.</p>
    </div>

    <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 space-y-4">
        <div>
            <span class="text-xs font-bold text-gray-400 uppercase">Nama Perusahaan</span>
            <p class="text-base font-bold text-gray-900">{{ $company->name }}</p>
        </div>
        <div>
            <span class="text-xs font-bold text-gray-400 uppercase">Alamat Kantor</span>
            <p class="text-sm text-gray-600">{{ $industry->address ?? 'Jl. Muria Jl. Pepelegi Indah No.47, Waru, Sidoarjo' }}</p>
        </div>
        <div>
            <span class="text-xs font-bold text-gray-400 uppercase">Kontak HRD</span>
            <p class="text-sm text-gray-600">{{ $industry->email ?? 'hrd@ptgaruda-telkomind.com' }}</p>
        </div>
    </div>
</div>
@endsection