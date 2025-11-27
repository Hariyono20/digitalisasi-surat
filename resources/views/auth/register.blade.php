@extends('layouts.auth')

@section('content')

<h2 class="text-3xl font-bold text-gray-800 text-center mb-2">
    Daftar Akun Baru
</h2>
<p class="text-gray-500 text-center mb-8">
    Lengkapi data Anda untuk membuat akun
</p>

{{-- POPUP SUKSES --}}
@if(session('success'))
<div x-data="{ open: true }" x-show="open"
     class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-xl p-8 text-center w-[90%] max-w-md animate-fade-in">
        <h3 class="text-xl font-bold text-green-600 mb-2">Berhasil!</h3>
        <p class="text-gray-600 mb-5">{{ session('success') }}</p>

        <button @click="open = false"
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
            Tutup
        </button>
    </div>
</div>
@endif

<form action="#" method="POST" class="space-y-6">
    @csrf

    {{-- NAMA LENGKAP & NIK --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
            <label class="font-semibold text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required
                   placeholder="Masukkan nama lengkap"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>

        <div>
            <label class="font-semibold text-gray-700">NIK</label>
            <input type="text" name="nik" required
                   placeholder="Nomor Induk Kependudukan"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>
    </div>

    {{-- USERNAME --}}
    <div>
        <label class="font-semibold text-gray-700">Username</label>
        <input type="text" name="username" required placeholder="Buat username"
               class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                      focus:ring-2 focus:ring-blue-400 transition outline-none">
    </div>

    {{-- EMAIL & NOMOR HP --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
            <label class="font-semibold text-gray-700">Email</label>
            <input type="email" name="email" required placeholder="email@gmail.com"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>

        <div>
            <label class="font-semibold text-gray-700">Nomor HP</label>
            <input type="text" name="nomor_hp" required placeholder="08xxxx"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>
    </div>

    {{-- ALAMAT --}}
    <div>
        <label class="font-semibold text-gray-700">Alamat</label>
        <textarea name="alamat" rows="3" required placeholder="Tulis alamat lengkap"
                  class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                         focus:ring-2 focus:ring-blue-400 transition outline-none"></textarea>
    </div>

    {{-- PASSWORD & KONFIRMASI --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
            <label class="font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required placeholder="Buat password"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>

        <div>
            <label class="font-semibold text-gray-700">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required placeholder="Ulangi password"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 mt-1
                          focus:ring-2 focus:ring-blue-400 transition outline-none">
        </div>
    </div>

    {{-- BUTTON --}}
    <button
        class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold
               hover:bg-green-700 active:bg-green-800 transition shadow-md">
        Buat Akun
    </button>
</form>

{{-- LINK LOGIN --}}
<p class="text-center text-gray-600 mt-6">
    Sudah punya akun?
    <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">
        Masuk sekarang
    </a>
</p>

@endsection
