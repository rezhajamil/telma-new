<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TELMA') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Include Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        @font-face {
            font-family: 'Telkomsel Batik';
            src: url("{{ asset('fonts/TelkomselBatikSans-Bold.otf') }}");
        }

        .font-batik {
            font-family: 'Telkomsel Batik';
        }
    </style>
</head>

<body class="font-sans antialiased">
    <nav x-data="{ open: false }" class="bg-orange border-b-2 border-shadow border-green">
        <!-- Primary Navigation Menu -->
        <div class="container max-w-9xl mx-auto bg-orange px-4 sm:px-6 lg:px-8">
            <div class="flex h-16">
                <div class="flex w-full justify-center">
                    <!-- Logo -->
                    <div class="shrink-0 flex justify-between w-full items-center">
                        <a href="">
                            <x-telkomsel-logo />
                        </a>
                        <span class="text-2xl text-white font-batik font-bold">
                            <span class="hidden lg:block">Telkomsel Lifestylepreneur Academy</span>
                            <span class="lg:hidden flex w-48 pl-12 mr-6 text-xl sm:w-full md:text-3xl ">TELMA</span>
                        </span>
                        <a href="">
                            <x-byu-logo/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @include('layouts.hero')
    <div class="relative w-full mt-6 md:h-[50vh] sm:h-lvw overflow-hidden" x-data="{ banner: false, search: false }">
        <span
            class="inline-block w-full mt-[1.55rem] text-2xl text-center sm:text-4xl font-batik font-bold selection:bg-white selection:text-premier text-orange">
            DAFTAR SEKARANG
        </span>
        <div class="relative w-full bg-[url('/images/wave4.svg')] bg-no-repeat bg-cover md:h-[50vh] sm:h-lvw overflow-hidden"
            x-data="{ banner: false, search: false }">
            <form class="mx-auto w-fit flex flex-col gap-6 mt-12 ">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <input type="text"
                            class="form-input w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="npsm" placeholder="Masukkan NPSM Sekolah">
                        <div>
                            <button type="" class="mt-1 ml-1 text-sm underline text-orange showModal">
                                Cari Kampus
                            </button>
                            {{-- modal --}}
                            <div
                                class="modal relative flex justify-center items-center w-full h-screen fixed bg-transparent hidden">
                                <button class="absolute top-3 right-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-blue">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="bg-white w-3/5 h-96 border rounded my-16 ">
                                    <div
                                        class="flex bg-blue justify-center items-center h-14 font-batik text-white text-lg">
                                        <span>Cari Kampus</span>
                                    </div>
                                    <div class="flex justify-center pt-2 px-3">
                                        <input type="text" class="form-input w-full h-10 rounded border text-sm"
                                            placeholder="Ketik Nama Kampus">
                                        <button
                                            class="rounded w-10 h-10 bg-white ml-3 flex justify-center items-center border">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-blue">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="h-64 m-3">
                                        <div value="#" npsm="" class="border h-10 p-2 rounded">
                                            <span>Nama sekolah</span>
                                            <span>NPSM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end Modal --}}
                        </div>
                    </div>
                    <div>
                        <select class="form-multiselect w-[280px] gap-2 rounded border-2 border-orange text-sm py-2">
                            <option value="" selected>Pilih Semester</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" class="w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div>
                        <input type="email" class="w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="email" placeholder="Alamat Email">
                    </div>
                    <div>
                        <input type="text" class="w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="nomorhp" placeholder="Nomor telepon">
                    </div>
                    <div>
                        <input type="text" class="w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="nomorwa" placeholder="Nomor WhatsApp">
                    </div>
                    <div>
                        <select class="form-multiselect w-[280px] gap-2 rounded border-2 border-orange text-sm py-2">
                            <option value="" selected>Hobi</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mb-5">
                    <button type=""
                        class="w-full bg-orange p-2.5 rounded uppercase font-bold text-white hover:bg-white hover:text-orange hover:border-2 hover:border-orange transition-all">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex justify-center justify-between h-auto bg-green font-bold text-white items-center w-full">
        <img src="https://tyes.live/telma/images/byu-white.svg" alt="Telkomsel" class="w-6 h-6 ml-4">
        <span class="text-sm m-auto">Telma 2023</span>
        <img src="https://tyes.live/telma/images/telkomsel-white.png" alt="Telkomsel" class="w-16 h-3 mr-4">
    </div>
    <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('.showModal');
        showModa.addEventListener('click', function() {
            modal.classList.remove('hidden')
        });
    </script>
</body>

</html>
