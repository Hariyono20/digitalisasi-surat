<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth | Desa Digital</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- LEFT CONTENT (FORM AREA) --}}
        <div class="w-full md:w-1/2 bg-white flex items-center justify-center px-10 py-12">
            <div class="w-full max-w-md animate-fadeIn">
                @yield('content')
            </div>
        </div>

        {{-- RIGHT SIDE (ILLUSTRATION AREA) --}}
        <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-blue-600 to-indigo-700
                    text-white items-center justify-center p-12 relative overflow-hidden">

            <div class="absolute inset-0 opacity-20 bg-[url('/images/pattern.svg')] bg-cover bg-center"></div>

            <div class="relative z-10 text-center space-y-4">
                <img src="/logo.png" class="mx-auto w-24 drop-shadow-xl">
                <h1 class="text-4xl font-bold">Desa Digital</h1>
                <p class="text-lg opacity-90">
                    Sistem Informasi Pelayanan Surat<br>modern, cepat, dan transparan.
                </p>
            </div>

        </div>

    </div>

</body>
</html>
