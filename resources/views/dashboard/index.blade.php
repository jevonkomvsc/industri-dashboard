@extends('layouts.industry')

@section('title', 'Dashboard - Pt Garuda Telekomunikasi Indonesia')

@section('content')
<div style="max-width: 1100px; margin: 0 auto; display: flex; flex-direction: column; gap: 2.25rem;">

    <!-- ==================== 1. WELCOME TITLE ==================== -->
    <div style="display: flex; flex-direction: column; gap: 0.25rem;">
        <h1 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 0; letter-spacing: -0.025em; line-height: 1.2;">
            Selamat Datang Kembali, 
            <span style="display: inline-block; border-bottom: 2.5px solid #0f172a; padding-bottom: 2px; font-weight: 900;">
                Pt Garuda Telekomunikasi Indonesia
            </span>
        </h1>
        <p style="font-size: 0.85rem; color: #64748b; margin: 0; font-weight: 500;">
            Kamu bisa kelola dashboard perkerjaan disini.
        </p>
    </div>

    <!-- ==================== 2. TIGA KARTU METRIK STATISTIK (DIPAKSA 3 KOLOM SEJAJAR) ==================== -->
    <div style="display: flex; flex-direction: row; gap: 1.5rem; width: 100%; justify-content: space-between;">
        
        <!-- KARTU 1: Cari Talent Aktif -->
        <div style="flex: 1; background: #ffffff; border-radius: 1.5rem; padding: 1.75rem; border: 1px solid #e2e8f0; display: flex; flex-direction: column; justify-content: space-between; height: 180px; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 42px; height: 42px; border-radius: 0.75rem; background: #fee2e2; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg style="width: 22px; height: 22px; color: #C8102E;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                    </svg>
                </div>
                <span style="font-size: 0.9rem; font-weight: 700; color: #1e293b;">Cari Talent Aktif</span>
            </div>
            <div>
                <span style="font-size: 4rem; font-weight: 900; color: #0f172a; line-height: 1; letter-spacing: -0.05em; display: block;">
                    1
                </span>
            </div>
        </div>

        <!-- KARTU 2: Talent Diterima (Minggu ini) -->
        <div style="flex: 1; background: #ffffff; border-radius: 1.5rem; padding: 1.75rem; border: 1px solid #e2e8f0; display: flex; flex-direction: column; justify-content: space-between; height: 180px; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 42px; height: 42px; border-radius: 0.75rem; background: #fee2e2; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg style="width: 22px; height: 22px; color: #C8102E;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/>
                    </svg>
                </div>
                <div style="display: flex; flex-direction: column; line-height: 1.2;">
                    <span style="font-size: 0.9rem; font-weight: 700; color: #1e293b;">Talent Diterima</span>
                    <span style="font-size: 0.72rem; color: #94a3b8; font-weight: 500;">(Minggu ini)</span>
                </div>
            </div>
            <div>
                <span style="font-size: 4rem; font-weight: 900; color: #0f172a; line-height: 1; letter-spacing: -0.05em; display: block;">
                    0
                </span>
            </div>
        </div>

        <!-- KARTU 3: Talent Database -->
        <div style="flex: 1; background: #ffffff; border-radius: 1.5rem; padding: 1.75rem; border: 1px solid #e2e8f0; display: flex; flex-direction: column; justify-content: space-between; height: 180px; box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div style="width: 42px; height: 42px; border-radius: 0.75rem; background: #fee2e2; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg style="width: 22px; height: 22px; color: #C8102E;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                </div>
                <span style="font-size: 0.9rem; font-weight: 700; color: #1e293b;">Talent Database</span>
            </div>
            <div>
                <span style="font-size: 4rem; font-weight: 900; color: #0f172a; line-height: 1; letter-spacing: -0.05em; display: block;">
                    230
                </span>
            </div>
        </div>

    </div>

    <!-- ==================== 3. SECTION LAMARAN KERJA AKTIF ==================== -->
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 0.5rem;">
        <h2 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0; letter-spacing: -0.01em;">
            Lamaran Kerja Aktif
        </h2>

        <!-- Card Baris Lowongan Aktif -->
        <div style="background: rgba(255, 255, 255, 0.85); border-radius: 1.25rem; padding: 1.25rem 1.75rem; border: 1px solid #cbd5e1; display: flex; flex-direction: row; align-items: center; justify-content: space-between; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">
            
            <!-- Kiri: Ikon Koper & Posisi -->
            <div style="display: flex; align-items: center; gap: 1.25rem;">
                <div style="width: 48px; height: 48px; border-radius: 0.85rem; border: 1px solid #cbd5e1; background: #ffffff; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg style="width: 22px; height: 22px; color: #1e293b;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.3;">
                        Junior DevOPS
                    </h3>
                    <p style="font-size: 0.75rem; color: #94a3b8; margin: 0.25rem 0 0 0; font-weight: 500;">
                        1 Hari Yang Lalu
                    </p>
                </div>
            </div>

            <!-- Kanan: Ditemukan & Status Buka -->
            <div style="display: flex; align-items: center; gap: 3.5rem;">
                <div style="text-align: center;">
                    <span style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; display: block;">Ditemukan</span>
                    <span style="font-size: 1.1rem; font-weight: 900; color: #0f172a; display: block; margin-top: 0.15rem;">
                        2
                    </span>
                </div>

                <div style="text-align: center;">
                    <span style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; display: block;">Status</span>
                    <!-- Badge Hijau Buka (#99E5A8) -->
                    <span style="display: inline-block; margin-top: 0.15rem; padding: 0.25rem 1rem; border-radius: 0.5rem; background: #99E5A8; color: #1e293b; font-size: 0.75rem; font-weight: 700;">
                        Buka
                    </span>
                </div>
            </div>

        </div>
    </div>

    <!-- ==================== 4. SECTION LAMARAN KERJA TIDAK AKTIF ==================== -->
    <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 0.5rem;">
        <h2 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0; letter-spacing: -0.01em;">
            Lamaran Kerja Tidak Aktif
        </h2>

        <!-- Card Baris Lowongan Tidak Aktif -->
        <div style="background: rgba(255, 255, 255, 0.85); border-radius: 1.25rem; padding: 1.25rem 1.75rem; border: 1px solid #cbd5e1; display: flex; flex-direction: row; align-items: center; justify-content: space-between; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">
            
            <!-- Kiri: Ikon Koper & Posisi -->
            <div style="display: flex; align-items: center; gap: 1.25rem;">
                <div style="width: 48px; height: 48px; border-radius: 0.85rem; border: 1px solid #cbd5e1; background: #ffffff; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg style="width: 22px; height: 22px; color: #1e293b;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.3;">
                        Junior DevsecOps
                    </h3>
                    <p style="font-size: 0.75rem; color: #94a3b8; margin: 0.25rem 0 0 0; font-weight: 500;">
                        1 Hari Yang Lalu
                    </p>
                </div>
            </div>

            <!-- Kanan: Ditemukan & Status Tutup -->
            <div style="display: flex; align-items: center; gap: 3.5rem;">
                <div style="text-align: center;">
                    <span style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; display: block;">Ditemukan</span>
                    <span style="font-size: 1.1rem; font-weight: 900; color: #0f172a; display: block; margin-top: 0.15rem;">
                        0
                    </span>
                </div>

                <div style="text-align: center;">
                    <span style="font-size: 0.75rem; color: #94a3b8; font-weight: 600; display: block;">Status</span>
                    <!-- Badge Merah Tutup (#D9534F) -->
                    <span style="display: inline-block; margin-top: 0.15rem; padding: 0.25rem 1rem; border-radius: 0.5rem; background: #D9534F; color: #ffffff; font-size: 0.75rem; font-weight: 700;">
                        Tutup
                    </span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection