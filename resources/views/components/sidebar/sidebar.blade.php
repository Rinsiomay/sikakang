<!-- Sidebar Toggle Button (opens sidebar) -->
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-[#FFE05E] rounded-lg sm:hidden   ">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" />
    </svg>
</button>

<!-- SIDEBAR -->
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transform -translate-x-full sm:translate-x-0 transition-transform duration-300"
    aria-label="Sidebar">

    <div class="h-full px-3 py-4 overflow-y-auto bg-white border-2 border-[#FFE05E] relative">
        <div class="flex justify-between">
            <a href="" class="mt-2">
                <img src="{{ url('images/Vector.svg') }}" alt="" width="13">
            </a>
            <button data-drawer-hide="logo-sidebar" aria-controls="logo-sidebar" type="button"
                class="absolute top-3 right-3 inline-flex items-center p-2 text-[#FFE05E] rounded-lg  sm:hidden">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" />
                </svg>
            </button>

        </div>
        <!-- Close button (inside sidebar, top right) -->

        <a href="#" class="flex items-center justify-center ps-2.5 mb-5 mx-auto mt-2">
            <img src="{{ url('images/untirta.png') }}" class="h-10 me-3" alt="Flowbite Logo" />
            <span class="self-center font-bold text-xl  whitespace-nowrap text-[#FFE05E]">Sikakang</span>
        </a>

        <p class="text-center text-[#FFE05E] my-5 font-semibold text-lg">Main Menu</p>

        @php
            $role = Auth::user()->role ?? 'mahasiswa';
        @endphp

        @if ($role === 'admin')
            <ul class="space-y-2 font-medium">
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Group.svg') }}" alt="">
                    <a href="{{ route('dashboard.admin') }}"
                        class="ms-7 text-slate-500 text-left {{ request()->routeIs('dashboard.admin') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Dashboard Admin
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Frame.svg') }}" alt="">
                    <a href="/dashboard-admin/dosen"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dashboard-admin/dosen*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Kelola Dosen
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/profile.svg') }}" alt="">
                    <a href="/dashboard-admin/mahasiswa"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dashboard-admin/mahasiswa*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Kelola Mahasiswa
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Group.svg') }}" alt="">
                    <a href="/dashboard-admin/fakultas"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dashboard-admin/fakultas*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Data Fakultas
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/tugas.svg') }}" alt="" width="20">
                    <a href="/dashboard-admin/mk"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dashboard-admin/mk*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Mata Kuliah
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Frame.svg') }}" alt="">
                    <a href="/dashboard-admin/prodi"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dashboard-admin/prodi*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Program Studi
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/logout.svg') }}" alt="">
                    <form method="POST" action="{{ route('logout') }}" class="w-full ms-7">
                        @csrf
                        <button type="submit" class="text-left text-slate-500 hover:text-red-500 w-full">
                            Sign-Out
                        </button>
                    </form>
                </li>
            </ul>
        @elseif ($role === 'dosen')
            <ul class="space-y-2 font-medium">
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Group.svg') }}" alt="">
                    <a href="{{ route('dosen.dashboard') }}"
                        class="ms-7 text-slate-500 text-left {{ request()->routeIs('dosen.dashboard') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Dashboard Dosen
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/tugas.svg') }}" alt="" width="20">
                    <a href="/jadwal"
                        class="ms-7 text-slate-500 text-left {{ Request::is('jadwal*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Jadwal Mengajar
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/Group.svg') }}" alt="">
                    <a href="/pengumuman"
                        class="ms-7 text-slate-500 text-left {{ Request::is('pengumuman') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Pengumuman
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/profile.svg') }}" alt="">
                    <a href="/dosen"
                        class="ms-7 text-slate-500 text-left {{ Request::is('dosen') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Profil Dosen
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/logout.svg') }}" alt="">
                    <form method="POST" action="{{ route('logout') }}" class="w-full ms-7">
                        @csrf
                        <button type="submit" class="text-left text-slate-500 hover:text-red-500 w-full">
                            Sign-Out
                        </button>
                    </form>
                </li>
            </ul>
        @else
            @php
                $perkuliahanOpen =
                    Request::is('dashboard') ||
                    Request::is('krs*') ||
                    Request::is('hasil*') ||
                    Request::is('registrasi*') ||
                    Request::routeIs('tagihan.*') ||
                    Request::is('jadwal*');
            @endphp
            <ul class="space-y-2 font-medium" x-data="{ openMenu: {{ $perkuliahanOpen ? 1 : 0 }} }">
                <!-- Dashboard -->
                <li class="text-slate-500">
                    <button @click="openMenu === 1 ? openMenu = null : openMenu = 1"
                        class="flex items-center w-full p-2 rounded-lg hover:text-[#FFE05E] transition">
                        <img src="{{ url('images/Group.svg') }}" alt="">
                        <span class="ms-7 flex-1 text-left">Perkuliahan</span>
                        <svg class="w-4 h-4 transition" :class="{ 'rotate-180': openMenu === 1 }" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 1" x-collapse class="pl-14 space-y-1 text-sm mt-1">
                        <li><a href="{{ route('dashboard.mahasiswa') }}"
                                class="block py-1 {{ request()->routeIs('dashboard.mahasiswa') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Dashboard</a>
                        </li>
                        <li><a href="/krs"
                                class="block py-1 {{ Request::is('krs*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Rencana
                                Studi</a></li>
                        <li><a href="/jadwal"
                                class="block py-1 {{ Request::is('jadwal*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Jadwal
                                Kuliah</a></li>
                        <li><a href="/hasil"
                                class="block py-1 {{ Request::is('hasil') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Hasil
                                Studi</a></li>
                        <li><a href="#"
                                class="block py-1 {{ Request::is('tugasAkhir') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Tugas
                                Akhir</a></li>
                        <li><a href="{{ route('registration.registrasi') }}"
                                class="block py-1 {{ Request::is('registration*') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Registrasi</a>
                        </li>
                    </ul>
                </li>

                <!-- Tugas -->
                <li class="text-slate-500">
                    <button @click="openMenu === 2 ? openMenu = null : openMenu = 2"
                        class="flex items-center w-full p-2 rounded-lg hover:text-[#FFE05E] transition">
                        <img src="{{ url('images/tugas.svg') }}" alt="" width="20">
                        <span class="ms-7 flex-1 text-left">Tugas</span>
                        <svg class="w-4 h-4 transition" :class="{ 'rotate-180': openMenu === 2 }" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 2" x-collapse class="pl-14 space-y-1 text-sm mt-1">
                        <li><a href="/mycourse"
                                class="block py-1 {{ Request::is('mycourse') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Tugas
                                Kuliah</a></li>
                        <li><a href="/incourse"
                                class="block py-1 {{ Request::is('incourse') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">Detail
                                Course</a></li>
                    </ul>
                </li>

                <!-- Pengajuan Surat -->
                <li class="text-slate-500">
                    <button @click="openMenu === 3 ? openMenu = null : openMenu = 3"
                        class="flex items-center w-full p-2 rounded-lg hover:text-[#FFE05E] transition">
                        <img src="{{ url('images/Frame.svg') }}" alt="">
                        <span class="ms-7 flex-1 text-left">Pengajuan Surat</span>
                        <svg class="w-4 h-4 transition" :class="{ 'rotate-180': openMenu === 3 }" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 3" x-collapse class="pl-14 space-y-1 text-sm mt-1">
                        <li><a href="#" class="block py-1 hover:text-[#FFE05E]">Buat Surat</a></li>
                        <li><a href="#" class="block py-1 hover:text-[#FFE05E]">Riwayat Surat</a></li>
                    </ul>
                </li>

                <hr class="text-slate-500 mt-5 mb-5">
                <li class="flex items-center p-2">
                    <img src="{{ url('images/profile.svg') }}" alt="">
                    <a href="/profile/mahasiswa"
                        class="ms-7 text-slate-500 text-left {{ Request::is('profile/mahasiswa') ? 'text-[#FFE05E] font-semibold' : 'hover:text-[#FFE05E]' }}">
                        Profil Mahasiswa
                    </a>
                </li>
                <li class="flex items-center p-2">
                    <img src="{{ url('images/logout.svg') }}" alt="">
                    <form method="POST" action="{{ route('logout') }}" class="w-full ms-7">
                        @csrf
                        <button type="submit" class="text-left text-slate-500 hover:text-red-500 w-full">
                            Sign-Out
                        </button>
                    </form>
                </li>
            </ul>
        @endif

    </div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
