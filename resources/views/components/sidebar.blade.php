<aside class="w-72 xl:w-80 bg-white border-r border-gray-200 flex flex-col justify-between shrink-0 min-h-screen sticky top-0 h-screen z-30">
    
    <div>
        <!-- 1. Header Logo Garuda Telekomunikasi -->
        <div class="h-32 flex items-center justify-center p-6 border-b border-gray-200">
            <a href="{{ route('industry.dashboard') }}" class="block">
                <img src="{{ asset('images/logo/garuda-telekomunikasi.png') }}" 
                     alt="Garuda Telekomunikasi Indonesia" 
                     class="max-h-16 w-auto object-contain select-none"
                     onerror="this.onerror=null; this.src='https://placehold.co/200x60?text=GARUDA+TELEKOMUNIKASI';">
            </a>
        </div>

        <!-- 2. Navigasi Menu Vertikal -->
        <nav class="flex flex-col w-full">
            
            <!-- Menu 1: Dashboard -->
            <a href="{{ route('industry.dashboard') }}" 
               class="px-8 py-5 flex items-center gap-4 transition-colors duration-200 {{ request()->routeIs('industry.dashboard*') ? 'text-white' : 'text-gray-700 hover:bg-gray-50 border-b border-gray-200' }}"
               style="{{ request()->routeIs('industry.dashboard*') ? 'background-color: #C8102E !important; color: #ffffff !important;' : '' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('industry.dashboard*') ? 'text-white' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z"/>
                </svg>
                <span class="text-base font-bold tracking-tight">Dashboard</span>
            </a>

            <!-- Menu 2: Pekerjaan (Aktif jika di rute jobs atau applicants) -->
            <a href="{{ route('industry.jobs.index') }}" 
               class="px-8 py-5 flex items-center gap-4 transition-colors duration-200 border-b border-gray-200 {{ (request()->routeIs('industry.jobs.*') || request()->routeIs('industry.applicants.*')) ? 'text-white' : 'text-gray-700 hover:bg-gray-50' }}"
               style="{{ (request()->routeIs('industry.jobs.*') || request()->routeIs('industry.applicants.*')) ? 'background-color: #C8102E !important; color: #ffffff !important;' : '' }}">
                <svg class="w-5 h-5 {{ (request()->routeIs('industry.jobs.*') || request()->routeIs('industry.applicants.*')) ? 'text-white' : 'text-gray-700' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-base font-medium tracking-tight">Pekerjaan</span>
            </a>

            <!-- Menu 3: Company Profile -->
            <a href="{{ route('industry.profile.index') }}" 
               class="px-8 py-5 flex items-center gap-4 transition-colors duration-200 border-b border-gray-200 {{ request()->routeIs('industry.profile.*') ? 'text-white' : 'text-gray-700 hover:bg-gray-50' }}"
               style="{{ request()->routeIs('industry.profile.*') ? 'background-color: #C8102E !important; color: #ffffff !important;' : '' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('industry.profile.*') ? 'text-white' : 'text-gray-700' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span class="text-base font-medium tracking-tight">Company Profile</span>
            </a>

        </nav>
    </div>

    <!-- 3. Bagian Bawah: Profile User (Josh Maximilian) -->
    <div class="p-6 border-t border-gray-200 bg-white flex items-center justify-between mt-auto">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0 flex items-center justify-center text-gray-500 font-bold">
                JM
            </div>
            <div>
                <h4 class="font-bold text-gray-900 text-sm leading-tight">Josh Maximilian</h4>
                <p class="text-xs text-gray-500 font-normal mt-0.5">Hiring Manager</p>
            </div>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" title="Keluar / Logout" class="text-gray-400 hover:text-red-700 transition p-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
            </button>
        </form>
    </div>

</aside>