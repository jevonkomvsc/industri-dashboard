<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Industry Dashboard')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.546.0/dist/umd/lucide.min.js"></script>
</head>
<body class="bg-[#ECEEF2] text-slate-900 font-sans antialiased min-h-screen overflow-x-hidden selection:bg-red-700 selection:text-white">

<div class="min-h-screen w-full flex flex-row">
    
    <!-- ==================== SIDEBAR KIRI (PRESISI FIGMA 280px) ==================== -->
    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col justify-between shrink-0 min-h-screen sticky top-0 h-screen z-30">
        
        <div>
            <!-- Header Logo Garuda Telekomunikasi -->
            <div class="h-32 flex items-center justify-center p-6 border-b border-gray-100">
                <img src="{{ asset('images/logo/garuda-telekomunikasi.png') }}" 
                     alt="Garuda Telekomunikasi Indonesia" 
                     class="max-h-16 w-auto object-contain select-none"
                     onerror="this.onerror=null; this.src='https://placehold.co/200x60?text=GARUDA+TELEKOMUNIKASI';">
            </div>

            <!-- Navigasi Menu Vertikal -->
            <nav class="flex flex-col w-full">
                <!-- Menu 1: Dashboard (Status Aktif Merah Solid #C8102E) -->
                <a href="{{ route('dashboard') }}" 
                   class="px-6 py-4 flex items-center gap-3.5 text-white font-bold text-sm tracking-tight transition"
                   style="background-color: #C8102E !important; color: #ffffff !important;">
                    <!-- Ikon 4 Grid Kotak Putih Sesuai Figma -->
                    <svg class="w-5 h-5 text-white shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <!-- Menu 2: Pekerjaan (Inaktif) -->
                <a href="{{ route('jobs.index') }}" 
                   class="px-6 py-4 flex items-center gap-3.5 text-gray-700 hover:bg-gray-50 border-b border-gray-200 font-medium text-sm tracking-tight transition">
                    <svg class="w-5 h-5 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Pekerjaan</span>
                </a>

                <!-- Menu 3: Company Profile (Inaktif) -->
                <a href="{{ route('profile.index') }}" 
                   class="px-6 py-4 flex items-center gap-3.5 text-gray-700 hover:bg-gray-50 border-b border-gray-200 font-medium text-sm tracking-tight transition">
                    <svg class="w-5 h-5 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <span>Company Profile</span>
                </a>
            </nav>
        </div>

        <!-- Widget Akun Pengguna Bawah (Josh Maximilian) -->
        <div class="p-6 border-t border-gray-200 bg-white flex items-center justify-between mt-auto">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-full bg-gray-300 flex-shrink-0 flex items-center justify-center text-gray-600 font-bold text-xs">
                    JM
                </div>
                <div class="leading-tight">
                    <h4 class="font-bold text-gray-900 text-xs sm:text-sm">Josh Maximilian</h4>
                    <p class="text-[11px] text-gray-400 font-medium mt-0.5">Hiring Manager</p>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" title="Logout" class="text-gray-400 hover:text-red-700 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </button>
            </form>
        </div>

    </aside>

    <!-- ==================== KONTEN UTAMA KANAN (ABU-ABU TERANG #ECEEF2) ==================== -->
    <main class="flex-1 min-h-screen bg-[#ECEEF2] p-8 sm:p-12 lg:p-14 overflow-y-auto">
        @yield('content')
    </main>

</div>

</body>
</html>