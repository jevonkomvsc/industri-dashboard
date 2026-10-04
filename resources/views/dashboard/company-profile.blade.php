@extends('layouts.industry')

@section('title', 'Company Profile - ' . $profile->name)

@section('content')
<div class="max-w-5xl mx-auto space-y-8 pb-16">

    @if(session('success'))
        <div class="p-4 rounded-2xl bg-green-50 border border-green-200 text-xs font-bold text-green-700">
            ✓ {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('industry.profile.update') }}" method="POST" class="space-y-6">
        @csrf

        <!-- CARD 1: LOGO, COMPANY NAME & COMPANY WEBSITE -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-300/80 shadow-xs relative">
            
            <!-- Box Logo Perusahaan dengan Ikon Edit Pensil Merah Sesuai Figma -->
            <div class="relative w-28 h-28 rounded-2xl border border-gray-300 p-3 flex items-center justify-center bg-white mb-6">
                <img src="{{ $profile->logo }}" alt="Logo" class="max-h-20 w-auto object-contain">
                
                <!-- Ikon Pensil Edit Merah -->
                <button type="button" class="absolute -right-3 top-10 w-7 h-7 rounded-lg bg-[#C8102E] text-white flex items-center justify-center shadow-md hover:bg-red-800 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="name" value="{{ $profile->name }}" 
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Company website</label>
                    <input type="text" name="website" value="{{ $profile->website }}" 
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium">
                </div>
            </div>

        </div>

        <!-- CARD 2: TENTANG PERUSAHAAN (COMPANY DESCRIPTION) -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-300/80 shadow-xs space-y-4">
            <div class="flex items-center gap-2 text-red-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span class="text-xs font-bold">Tentang Perusahaan</span>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-2">Company Description</label>
                <textarea name="description" rows="4" 
                          class="w-full p-4 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium leading-relaxed">{{ $profile->description }}</textarea>
            </div>
        </div>

        <!-- CARD 3: LOKASI KANTOR -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-300/80 shadow-xs space-y-4">
            <div class="flex items-center gap-2 text-red-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span class="text-xs font-bold">Lokasi Kantor</span>
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Headquarters Address</label>
                    <input type="text" name="address" value="{{ $profile->address }}" 
                           class="w-full px-4 py-3 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-2">City</label>
                        <input type="text" name="city" value="{{ $profile->city }}" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-2">Province</label>
                        <input type="text" name="province" value="{{ $profile->province }}" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 text-xs sm:text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white shadow-inner font-medium">
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD 4: DOKUMENTASI (UPLOAD FOTO DOKUMENTASI) -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-300/80 shadow-xs space-y-4">
            <div class="flex items-center gap-2 text-red-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span class="text-xs font-bold">Dokumentasi</span>
            </div>

            <div>
                <p class="text-xs font-bold text-gray-700 mb-3">Upload Foto Dokumentasi:</p>
                
                <div class="flex flex-wrap items-center gap-4">
                    @foreach($profile->photos as $photo)
                        <div class="w-24 h-24 rounded-2xl overflow-hidden border border-gray-200 bg-gray-100 shadow-xs relative">
                            <img src="{{ $photo }}" alt="Foto PKL" class="w-full h-full object-cover">
                        </div>
                    @endforeach

                    <!-- Tombol Tambah Foto (+) Sesuai Figma -->
                    <label class="w-24 h-24 rounded-2xl border-2 border-dashed border-gray-400 hover:border-red-600 flex items-center justify-center text-gray-500 cursor-pointer bg-white transition hover:text-red-700">
                        <input type="file" class="hidden" accept="image/*">
                        <span class="text-3xl font-light leading-none">+</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- CARD 5: SOCIAL MEDIA SESUAI FIGMA -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-300/80 shadow-xs space-y-4">
            <div class="flex items-center gap-2 text-red-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                </svg>
                <span class="text-xs font-bold">Social Media</span>
            </div>

            <div class="space-y-3">
                <!-- LinkedIn Row -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl border border-gray-300 bg-white flex items-center justify-center text-gray-700 shrink-0">
                        <span class="text-xs font-bold">in</span>
                    </div>
                    <input type="text" name="linkedin" value="{{ $profile->linkedin }}" class="flex-1 px-4 py-2.5 rounded-xl border border-gray-300 text-xs font-medium text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white">
                </div>

                <!-- Instagram Row -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl border border-gray-300 bg-white flex items-center justify-center text-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </div>
                    <input type="text" name="instagram" value="{{ $profile->instagram }}" class="flex-1 px-4 py-2.5 rounded-xl border border-gray-300 text-xs font-medium text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white">
                </div>

                <!-- Other Social Row -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl border border-gray-300 bg-white flex items-center justify-center text-gray-700 shrink-0">
                        <span class="text-xs font-bold">🌐</span>
                    </div>
                    <input type="text" name="other_social" value="{{ $profile->other_social }}" class="flex-1 px-4 py-2.5 rounded-xl border border-gray-300 text-xs font-medium text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-600 bg-white">
                </div>
            </div>
        </div>

        <!-- TOMBOL SAVE DI POJOK KANAN BAWAH SESUAI FIGMA -->
        <div class="flex justify-end pt-2">
            <button type="submit" 
                    class="px-8 py-2.5 rounded-xl border border-red-500 text-red-700 hover:bg-red-50 font-bold text-xs transition active:scale-95 shadow-xs cursor-pointer">
                Save
            </button>
        </div>

    </form>

</div>
@endsection