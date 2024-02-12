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
    <nav class="bg-orange border-b-2 border-shadow border-green">
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
                            <x-byu-logo />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    @include('layouts.hero')
    <div class="relative w-full mt-6 md:h-[50vh] sm:h-lvw overflow-hidden">
        <span
            class="inline-block w-full mt-[1.55rem] text-2xl text-center sm:text-4xl font-batik font-bold selection:bg-white selection:text-premier text-orange">
            DAFTAR SEKARANG
        </span>
        <div
            class="relative w-full bg-[url('/images/wave4.svg')] bg-no-repeat bg-cover md:h-[50vh] sm:h-lvw overflow-hidden">
            <form class="mx-auto w-fit flex flex-col gap-6 mt-12 ">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <input type="text" id="kampus_id"
                            class="form-input w-[280px] gap-2 rounded border-2 border-orange text-sm py-2.5"
                            name="kampus_id" placeholder="Masukkan NPSM Sekolah">
                        <div>
                            <button class="mt-1 ml-1 text-sm underline text-orange show-modal">
                                Cari Kampus
                            </button>
                            <div id="myModal"
                                class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-orange bg-opacity-50 hidden">
                                <button class="absolute top-3 right-3 close-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-blue">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="bg-white rounded shadow-lg w-3/4 h-4/5">
                                    <div
                                        class="px-4 py-2 flex bg-blue justify-center items-center h-14 font-batik text-white text-lg rounded">
                                        <h3>Cari Kampus</h3>
                                    </div>
                                    <div class="flex justify-center py-2 px-3">
                                        <input id="searchInput" type="text"
                                            class="form-input w-full h-10 rounded border text-sm"
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
                                    <div class="m-3 text-truncate" id="kampusList">
                                        @foreach ($kampusList as $index => $kampus)
                                            <div class="h-10 p-3 rounded flex flex-col @if ($index >= 10) hidden @endif"
                                                >
                                                {{-- <p class="text-lg border-b">
                                                    Nama sekolah: {{ $kampus->nama_sekolah }}
                                                </p> --}}
                                                <p class="text-sm">
                                                    NPSN: {{ $kampus->npsn }}
                                                </p>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
    @include('layouts.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('.modal'); // Menggunakan querySelector untuk mengambil modal
            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelector('.close-modal');

            showModal.addEventListener('click', function(event) {
                event.preventDefault();
                modal.classList.remove('hidden');
            });

            closeModal.addEventListener('click', function(event) {
                event.preventDefault();
                modal.classList.add('hidden');
            });

            function selectKampus(npsn) {
                document.getElementById("kampus_id").value = npsn;
                modal.classList.add('hidden');
            }

            document.getElementById("searchInput").addEventListener("input", function() {
                var input, filter, kampusList, divs, i, txtValue;
                input = document.getElementById('searchInput');
                filter = input.value.toUpperCase();
                kampusList = document.getElementById('kampusList');
                divs = kampusList.getElementsByTagName('div');

                for (i = 0; i < divs.length; i++) {
                    txtValue = divs[i].textContent || divs[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        divs[i].style.display = "";
                    } else {
                        divs[i].style.display = "none";
                    }
                }
            });
        });
    </script>

</body>

</html>
