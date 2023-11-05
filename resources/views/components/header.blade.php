<header class="px-12 py-2 absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4 flex gap-4">
                <a  href="https://bulukumbakab.go.id/sejarah-kabupaten-bulukumba">
                    <img class="h-12" src="/assets/img/Logo Bulukumba.png" alt="Bulukumba Logo">
                </a>
                <a href="{{ route('beranda') }}">
                    <img class="w-32" src="/assets/img/dannuang.png" alt="Dannuang Logo">
                </a>
            </div>

            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-4 md:px-8 md:py-5 bg-gray-800 shadow-lg rounded-lg max-w-[300px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'text-blue-500 text-lg py-2 mx-8' : 'text-lg text-gray-400 py-2 mx-8 group-hover:text-blue-700'}}">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('info.index') }}" class="{{ request()->routeIs('info') ? 'text-blue-500 text-lg py-2 mx-8' : 'text-lg text-gray-400 py-2 mx-8 group-hover:text-blue-700'}}">Informasi</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'text-blue-500 text-lg py-2 mx-8' : 'text-lg text-gray-400 py-2 mx-8 group-hover:text-blue-700'}}">Struktur Organisasi</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-blue-500 text-lg py-2 mx-8' : 'text-lg text-gray-400 py-2 mx-8 group-hover:text-blue-700'}}">Tentang</a>
                        </li>

                        @auth
                        <li class="group">
                            <a href="{{ route('post.index') }}" class="{{ request()->routeIs('post.index') ? 'text-blue-500 text-lg py-2 mx-8' : 'text-lg text-gray-400 py-2 mx-8 group-hover:text-blue-700'}}">Post</a>
                        </li>
                        <li class="group">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="ease-in-out text-gray-400 hover:text-red-600">Logout</button>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    {{-- script --}}
    <script src="{{ asset('/js/script.js') }}"></script>
</header>