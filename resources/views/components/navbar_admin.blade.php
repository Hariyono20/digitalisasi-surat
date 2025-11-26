<header class="bg-white shadow px-4 md:px-6 py-4 
                flex flex-col md:flex-row md:justify-between md:items-center gap-4">

    {{-- Judul --}}
    <div>
        <h1 class="text-xl font-bold text-gray-900">
            {{ $title ?? 'Dashboard Admin' }}
        </h1>
        <p class="text-gray-500 text-sm">
            Selamat datang kembali, kelola semua aktivitas desa
        </p>
    </div>

    {{-- Right area --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end 
                gap-4 md:gap-6 w-full md:w-auto">

        {{-- Notifikasi --}}
        <button class="relative text-gray-700 hover:text-gray-900 
                       w-full sm:w-auto flex justify-center items-center">
            <div class="relative inline-block">
                <i class="fa fa-bell text-lg text-[#4B5563]"></i>

                <span class="absolute -top-1 -right-1 w-2.5 h-2.5 
                             bg-red-500 rounded-full border border-white"></span>
            </div>
        </button>

        {{-- Profil Admin --}}
        <div class="flex items-center gap-3 
                    w-full sm:w-auto justify-center sm:justify-start">
                    
            <img src="/images/pp.png" 
                 class="w-10 h-10 rounded-full object-cover">

            {{-- Info user muncul di layar > sm --}}
            <div class="hidden sm:flex flex-col leading-tight">
                <span class="font-medium text-gray-900">
                    {{ $admin->nama ?? 'Ahmad Hidayat' }}
                </span>
                <span class="text-sm text-gray-500">
                    Administrator
                </span>
            </div>
        </div>

    </div>
</header>
