@extends('layouts.industry')

@section('title', 'Review Pelamar - ' . ($applicant->full_name ?? 'Adelio Alvaro Putra L.'))

@section('content')
<div class="max-w-4xl mx-auto py-8">

    <!-- CONTAINER UTAMA DENGAN BINGKAI MERAH PUTUS-PUTUS SESUAI FIGMA -->
    <div class="relative bg-white rounded-[2.5rem] p-8 sm:p-12 border-4 border-dashed border-[#C8102E] shadow-xl overflow-hidden min-h-[520px] flex flex-col justify-between select-none">
        
        <!-- Watermark Monogram TS Transparan Khas Desain Figma -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-15">
            <svg class="w-full h-full max-w-[500px]" viewBox="0 0 200 200" fill="none" stroke="#6B7280" stroke-width="1.5" stroke-dasharray="4 4">
                <path d="M40 40 h120 v40 h-40 v80 h-40 v-80 h-40 z"/>
            </svg>
        </div>

        <div class="relative z-10 space-y-8">
            
            <!-- HEADER PROFIL PELAMAR ALUMNI -->
            <div class="flex items-start justify-between gap-6">
                <div class="flex items-center gap-6">
                    <!-- Foto Siswa Bulat -->
                    <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden bg-gray-200 border-2 border-white shadow-md shrink-0">
                        <img src="{{ $applicant->foto ?? asset('images/avatars/adelio.png') }}" 
                             alt="{{ $applicant->full_name ?? 'Adelio Alvaro' }}" 
                             class="w-full h-full object-cover"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=300&q=80';">
                    </div>

                    <!-- Nama, Email, No. HP -->
                    <div class="space-y-1">
                        <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">
                            {{ $applicant->full_name ?? 'Adelio Alvaro Putra L.' }}
                        </h2>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium">
                            {{ $applicant->email ?? 'Adelio@gmail.com' }}
                        </p>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium">
                            {{ $applicant->phone ?? '085174214845' }}
                        </p>
                    </div>
                </div>

                <!-- Badge Kanan Atas: Listed dengan Ikon Bookmark Hitam Sesuai Figma -->
                <div class="flex items-center gap-2 pt-2">
                    <span class="text-sm font-bold text-slate-900">Listed</span>
                    <svg class="w-5 h-5 text-slate-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 3a2 2 0 00-2 2v16l9-4 9 4V5a2 2 0 00-2-2H5z"/>
                    </svg>
                </div>
            </div>

            <!-- ROW UNDUH BERKAS (PORTOFOLIO & CV) SESUAI FIGMA -->
            <div class="space-y-4 pt-4 max-w-lg">
                
                <!-- Baris Portofolio -->
                <div class="flex items-center gap-6">
                    <span class="w-24 text-sm font-semibold text-slate-900">Portofolio:</span>
                    <a href="#" class="px-5 py-2.5 rounded-xl border border-gray-400 bg-white flex items-center justify-between gap-6 hover:border-red-600 transition shadow-xs group">
                        <span class="text-xs font-semibold text-slate-800">Adelio..</span>
                        <svg class="w-4 h-4 text-gray-600 group-hover:text-red-700 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

                <!-- Baris CV / Resume -->
                <div class="flex items-center gap-6">
                    <span class="w-24 text-sm font-semibold text-slate-900">CV:</span>
                    <a href="#" class="px-5 py-2.5 rounded-xl border border-gray-400 bg-white flex items-center justify-between gap-6 hover:border-red-600 transition shadow-xs group">
                        <span class="text-xs font-semibold text-slate-800">Adelio..</span>
                        <svg class="w-4 h-4 text-gray-600 group-hover:text-red-700 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>

        <!-- FOOTER BARIS AKSI: TOMBOL KEMBALI KIRI & TOMBOL CONTACT KANAN -->
        <div class="relative z-10 flex items-center justify-between pt-8 border-t border-gray-100 mt-8">
            
            <!-- Tombol Kembali Kotak di Kiri Sesuai Figma -->
            <a href="{{ route('industry.jobs.index') }}" 
               class="w-12 h-12 rounded-2xl border border-red-300 hover:border-red-600 text-slate-800 flex items-center justify-center transition active:scale-95 shadow-xs">
                <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>

            <!-- Tombol Merah Outline: Contact ➔ Sesuai Figma -->
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $applicant->phone ?? '085174214845') }}" 
               target="_blank"
               class="px-8 py-3.5 rounded-2xl border border-red-300 hover:border-red-600 hover:bg-red-50 text-slate-900 font-bold text-sm flex items-center gap-4 transition active:scale-95 shadow-xs">
                <span>Contact</span>
                <span class="text-sm leading-none">&gt;</span>
            </a>

        </div>

    </div>

</div>
@endsection