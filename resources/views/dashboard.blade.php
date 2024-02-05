<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="relative w-full mt-6 bg-[url('https://tyes.live/telma/images/wave-blue.svg')] bg-no-repeat bg-cover h-[50vh] overflow-hidden" x-data="{ banner: false, search: false }">
        <span class="inline-block w-full mt-[1.55rem] text-2xl text-center sm:text-4xl font-bold selection:bg-white selection:text-premier text-orange">
            DAFTAR SEKARANG
        </span>
        <div class="mt-8">
            <form class="mx-auto w-fit flex flex-col gap-6">
                <div class=" grid grid-cols-4 gap-x-[1.6rem] gap-y-[1.4rem]">
                    <div>
                        <input type="text" class="w-[280px] rounded border-2 border-orange text-sm py-2.5" name="npsm" placeholder="Masukkan NPSM Sekolah">
                        <p class="mt-1 ml-1 text-sm underline text-orange">Cari Kampus</p>
                    </div>
                    <div>
                        <select class="w-[280px] rounded border-2 border-orange text-sm py-2">
                            <option value="" selected>Pilih Semester</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" class="w-[280px] rounded border-2 border-orange text-sm py-2.5" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div>
                        <input type="email" class="w-[280px] rounded border-2 border-orange text-sm py-2.5" name="email" placeholder="Alamat Email">
                    </div>
                    <div>
                        <input type="number" class="w-[280px] rounded border-2 border-orange text-sm py-2.5" name="nomorhp" placeholder="Nomor telepon">
                    </div>
                    <div>
                        <input type="number" class="w-[280px] rounded border-2 border-orange text-sm py-2.5" name="nomorwa" placeholder="Nomor WhatsApp">
                    </div>
                    <div>
                        <select class="w-[280px] rounded border-2 border-orange text-sm py-2">
                            <option value="" selected>Pilih Semester</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <button type="" class="w-full bg-orange p-2.5 rounded uppercase font-bold text-white hover:bg-white hover:text-orange hover:border-2 hover:border-orange transition-all">Daftar</button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>