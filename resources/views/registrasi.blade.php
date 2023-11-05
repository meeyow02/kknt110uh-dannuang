<x-app-layout>
    @section('title', $title)
    <section>
        <div class="flex flex-col items-center justify-center py-6">            
            <div class="flex">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                    <img class="w-14 h-15 mr-2" src="{{ asset('assets/img/Logo-Resmi-Unhas-1.png') }}" alt="logo Unhas">  
                </a>
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                    <img class="w-13 h-14 mr-2" src="{{ asset('assets/img/Logo Bulukumba.png') }}" alt="logo Bulukumba">  
                </a>
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                    <img class="w-15 h-16 mr-2" src="{{ asset('assets/img/posko 8.png') }}" alt="logo KKNT Unhas Gel.110 Posko 8 Dannuang">  
                </a>
            </div>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">Registrasi</h1>
                    <form action="/registrasi" method="POST" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required autofocus>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>