<x-app-layout>
    <x-header />

    @section('title', $title)
    
    {{-- HERO --}}
    <section class="bg-center bg-no-repeat bg-[url('https://www.celebes.co/wp-content/uploads/2020/02/Perahu-Pinisi-Bulukumba.jpg')] bg-gray-700 bg-blend-multiply bg-cover">
        <div class="px-4 mx-auto max-w-full text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang di Dannuang</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kelurahan Dannuang Kecamatan Ujung Loe Kabupaten Bulukumba</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                {{-- <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-900">
                    Get started
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Login as Admin
                </a>   --}}
            </div>
        </div>
    </section>
    
    <section>
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-900 lg:text-4xl pb-2">Potensi Ekonomi</h1>
            <div class="flex justify-center">
                <div class="w-52 h-1 bg-blue-800 rounded"></div>
            </div>
            
            <p class="mt-4 text-center text-gray-700">Potensi Ekonomi yang ada di Dannuang</p>
    
            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-1 lg:grid-cols-3 xl:mt-12 xl:grid-cols-3 xl:gap-12">
                <div>
                    <img class="h-96 w-full rounded-lg object-cover" src="https://www.mongabay.co.id/wp-content/uploads/2014/09/laut1-Petani-Rumput-Laut-Memilih.jpg" alt="" />
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-white">Rumput Laut</h2>
                    {{-- <p class="mt-2 text-lg uppercase tracking-wider text-blue-400">Website</p> --}}
                </div>
        
                <div>
                    <img class="h-96 w-full rounded-lg object-cover" src="https://www.mosintuwu.com/wp-content/uploads/2022/01/Usaha-Tani-M.jpeg" alt="" />
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-white">Padi</h2>
                    {{-- <p class="mt-2 text-lg uppercase tracking-wider text-blue-400">Ui kit</p> --}}
                </div>
        
                <div>
                    <img class="h-96 w-full rounded-lg object-cover" src="https://setkab.go.id/wp-content/uploads/2021/09/pedagang-kaki-lima-pkl-bantuan-umkm.jpg" alt="" />
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-white">Pedagang Kaki Lima</h2>
                    {{-- <p class="mt-2 text-lg uppercase tracking-wider text-blue-400">Mockups</p> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Wilayah --}}
    <section>
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-900 lg:text-4xl pb-2">Wilayah Dannuang</h1>
            <div class="flex justify-center">
                <div class="w-60 h-1 bg-blue-800 rounded"></div>
            </div>

            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <img class="h-96 w-full rounded-lg" src="https://3.bp.blogspot.com/-huOgwD9PAYU/Uf6xe7MHocI/AAAAAAAAACk/GqRenSYsV_I/s1600/bulukumba.jpg" alt="">
                </div>

                <div class="carousel w-full">
                    <div id="slide1" class="carousel-item relative w-full">
                      <img src="https://www.nationsonline.org/gallery/Indonesia/Piaynemo-West-Papua.jpg" class="w-full h-52 md:h-96 rounded-t-lg md:rounded-lg" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 md:left-5 left-2 right-2 md:right-5 md:top-1/2 top-28">
                        <a href="#slide4" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❮</a> 
                        <a href="#slide2" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❯</a>
                      </div>
                      <div class="absolute bottom-0 md:bottom-4 bg-gray-900 bg-opacity-70 w-full p-2 rounded-b-md md:rounded-md">
                        <span class="text-white flex justify-center text-xl font-semibold">Babana</span>
                      </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                      <img src="https://www.indonesia.travel/content/dam/indtravelrevamp/home-revamp/bali-jack.jpg" class="w-full h-52 md:h-96 rounded-t-lg md:rounded-lg" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 md:left-5 left-2 right-2 md:right-5 md:top-1/2 top-28">
                        <a href="#slide1" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❮</a> 
                        <a href="#slide3" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❯</a>
                      </div>
                      <div class="absolute bottom-0 md:bottom-4 bg-gray-900 bg-opacity-70 w-full p-2 rounded-b-md md:rounded-md">
                        <span class="text-white flex justify-center text-xl font-semibold">Paranyelling</span>
                      </div>
                    </div> 
                    <div id="slide3" class="carousel-item relative w-full">
                      <img src="https://www.ttrweekly.com/site/wp-content/uploads/2022/03/Indonesia.jpg" class="w-full h-52 md:h-96 rounded-t-lg md:rounded-lg" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 md:left-5 left-2 right-2 md:right-5 md:top-1/2 top-28">
                        <a href="#slide2" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❮</a> 
                        <a href="#slide4" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❯</a>
                      </div>
                      <div class="absolute bottom-0 md:bottom-4 bg-gray-900 bg-opacity-70 w-full p-2 rounded-b-md md:rounded-md">
                        <span class="text-white flex justify-center text-xl font-semibold">Appasarange</span>
                      </div>
                    </div> 
                    <div id="slide4" class="carousel-item relative w-full">
                      <img src="https://www.indonesia.travel/content/dam/indtravelrevamp/home-revamp/bali-jack.jpg" class="w-full h-52 md:h-96 rounded-t-lg rounded-lg" />
                      <div class="absolute flex justify-between transform -translate-y-1/2 md:left-5 left-2 right-2 md:right-5 md:top-1/2 top-28">
                        <a href="#slide3" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❮</a> 
                        <a href="#slide1" class="btn btn-circle text-white text-lg bg-gray-700 bg-opacity-70 border-0">❯</a>
                      </div>
                      <div class="absolute bottom-0 md:bottom-4 bg-gray-900 bg-opacity-70 w-full p-2 rounded-b-md md:rounded-md">
                        <span class="text-white flex justify-center text-xl font-semibold">Batuloe</span>
                      </div>
                    </div>
                  </div>
            </div>
                
        </div>

    </section>

    {{-- BERITA --}}
    <section>
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-900 lg:text-4xl pb-2">Informasi</h1>
            <div class="flex justify-center">
                <div class=" w-32 h-1 bg-blue-800 rounded"></div>
            </div>
            
            <div class="mt-8 grid grid-flow-row grid-cols-1 lg:grid-cols-2 gap-12 place-items-center">
                @foreach ($posts as $post)
                    <div class="relative group w-full">
                        <img class="shadow-xl w-full md:h-96 rounded-lg" src="{{ asset('postfoto/'.$post->foto) }}" alt="{{ $post->foto }}"/>
                        <a href="{{ url('/info/' . $post->id) }}">
                            <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                {{ Str::limit($post->judul, 200) }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            

            <div class="flex justify-center mt-8">
                <a href="{{ url('/info') }}" class="p-2 font-sans font-normal text-gray-400 hover:text-blue-500 hover:underline">Tampilkan Lebih Banyak</a>
            </div>
            
        </div>
    </section>

    {{-- TEAM --}}
    <section>
        <div class="container px-6 py-10 mx-auto w-full">
            <h1 class="text-center text-2xl md:text-3xl font-semibold capitalize text-gray-900 lg:text-4xl pb-2">Pegawai Kelurahan Dannuang</h1>
            <div class="flex justify-center">
                <div class="w-36 md:w-96 h-1 bg-blue-800 rounded"></div>
            </div>

            <div class="flex flex-col md:items-center md:justify-center lg:flex-row justify-center pt-20 gap-4 md:gap-28">
                <div class="w-full shadow-md md:w-96 flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-900 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-blue-700" src="/assets/img/pak amal_edit.png" alt="">
                    
                    <h1 class="mt-4 text-lg md:text-xl font-semibold capitalize text-gray-900 group-hover:text-white">Nur Amal, S.H.</h1>
                    
                    <p class="mt-2 capitalize text-gray-500 group-hover:text-gray-100">Lurah</p>
                    
                </div>
                <div class="w-full shadow-md md:w-96 flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-900 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-blue-700" src="/assets/img/seklur.png" alt="">
                    
                    <h1 class="mt-4 text-lg md:text-xl font-semibold capitalize text-gray-900 group-hover:text-white">Jusriani, S.A.P.</h1>
                    
                    <p class="mt-2 capitalize text-gray-500 group-hover:text-gray-100">Sekretaris Lurah</p>
                    
                </div>
                <div class="w-full shadow-md md:w-96 flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-900 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-blue-700" src="/assets/img/pak nasin.png" alt="">
                    
                    <h1 class="mt-4 text-lg md:text-xl font-semibold capitalize text-gray-900 group-hover:text-white">H. Muhammad Nasin, S.A.P.</h1>
                    
                    <p class="mt-2 capitalize text-gray-500 group-hover:text-gray-100">Kasi Pemerintahan & Trantibum</p>
                    
                </div>
            
            </div>

            <div class="flex flex-col md:flex-row justify-center md:pt-20 gap-4 md:gap-28">
                <div class="w-full shadow-md md:w-96 flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-900 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-blue-700" src="/assets/img/pak rizal.png" alt="">
                    
                    <h1 class="mt-4 text-lg md:text-xl font-semibold capitalize text-gray-900 group-hover:text-white">Muhammad Rizal</h1>
                    
                    <p class="mt-2 capitalize text-gray-500 group-hover:text-gray-100">Staff Pengelola Keuangan</p>
                    
                </div>
                <div class="w-full shadow-md md:w-96 flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-900 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-blue-700" src="/assets/img/mustainah.png" alt="">
                    
                    <h1 class="mt-4 text-lg md:text-xl font-semibold capitalize text-gray-900 group-hover:text-white">Mustainah, S.Sos.</h1>
                    
                    <p class="mt-2 capitalize text-gray-500 group-hover:text-gray-100">Staff Pengelola Data</p>
                    
                </div>
            </div>

            <div class="flex justify-center mt-8 mb-20">
                <a href="{{ route('profil') }}" class="p-2 font-sans font-normal text-gray-400 hover:text-blue-500 hover:underline">Tampilkan Lebih Banyak</a>
            </div>

        </div>

    </section>

    @section('scripts')
        <script src="{{ asset('js/script.js') }}"></script>
    @endsection
    
</x-app-layout>