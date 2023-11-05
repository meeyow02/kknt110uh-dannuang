<x-app-layout>
    <x-header_dua />
    @section('title', $title)
    
    <section>
        <div class="container mx-auto px-8 md:px-20 py-32">
            
            <div class="flex flex-col lg:flex-row justify-between gap-8">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 pb-4">Tentang Website</h1>
                    <span class="font-normal text-base leading-6 text-gray-600 text-justify">
                        Website ini dibuat oleh mahasiswa KKNT Pengembangan Produk Lokal dan UMKM Posko 8 Kelurahan Dannuang, Kec. Ujung Loe, Kab. Bulukumba Universitas Hasanuddin 
                        atas inisiatif sendiri setelah melakukan observasi. Kami bertujuan meningkatkan konektivitas, transparansi, dan partisipasi 
                        dalam pemerintahan lokal. Website ini merupakan bentuk komitmen kami untuk memberikan akses informasi yang lebih 
                        luas dan efisien kepada warga lokal, masyarakat umum, serta pemerintah setempat. Terima kasih kepada Bapak Lurah Dannuang, 
                        Staf Kelurahan, Kepala Lingkungan, dan masyarakat yang turut berpartisipasi dalam pembuatan website ini.
                        <br><br>
                        Website ini dibangun menggunakan framework Laravel dan JavaScript, dengan tampilan menggunakan Tailwind sebagai gaya desainnya, serta menggunakan database MySQL.
                        
                        
                        
                    </span>
                </div>
                <div class="w-full lg:w-8/12 flex justify-end">
                    <img class="lg:h-[30rem] rounded-lg shadow-md" src="{{ asset('assets/img/foto bersama.jpg') }}" alt="Foto Bersama" />
                </div>
            </div>
    
            <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 pb-4">Tentang Mahasiswa KKN Unhas</h1>
                    <span class="font-normal text-base leading-6 text-gray-600 text-justify">
                        Mahasiswa Posko 8 KKNT Pengembangan Produk Lokal dan UMKM yang ditempatkan di Kelurahan Dannuang 
                        adalah pihak yang bertanggung jawab atas pembuatan website ini. Posko 8 KKNT Pengembangan Produk Lokal dan UMKM dipimpin 
                        oleh Erwin dan terdiri dari 5 anggota yang berasal dari berbagai jurusan di Universitas Hasanuddin. 
                        Kami memiliki harapan bahwa keberadaan Posko 8 akan memberikan dampak positif bagi Kelurahan Dannuang dan masyarakat sekitar, 
                        melalui program-program yang sesuai dengan situasi saat ini.
                    </span>
                </div>
                <div class="w-full lg:w-8/12 lg:pt-8 mt-8 shadow-lg rounded-md">
                    <div class="grid grid-cols-1 lg:gap-4 ">
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block h-40" src="{{ asset('assets/img/posko 8.png') }}" alt="Logo Posko 8" />
                            <span class="font-medium text-base leading-5 text-gray-800 mt-4 text-center">Logo Posko 8 <br>KKNT Unhas Gel.110</span>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/miqa.png') }}" alt="Amiqatun Nasyati Yusri" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Teknik Informatika</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Amiqatun Nasyati Yusri</span>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/erwin.png') }}" alt="Erwin" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Peternakan</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Erwin</span>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/kiki.png') }}" alt="Kiki Wahyuni" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Agrobisnis Perikanan</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Kiki Wahyuni</span>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/pute.png') }}" alt="Putri Alfitri Rizky Pratiwi" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Pemanfaatan Sumber Daya Perikanan</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Putri Alfitri Rizky Pratiwi</span>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/erlang.png') }}" alt="Erlangga Sakti Pratama" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Ilmu Hukum</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Erlangga Sakti Pratama</span>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <div class="relative group w-full">
                                <img class="md:block" src="{{ asset('assets/img/ica.png') }}" alt="Sayidah Nafisah Lukman" />
                                <div class="rounded-lg h-full opacity-0 group-hover:opacity-90 duration-300 absolute inset-x-0 bottom-0 flex justify-center items-center text-xl bg-blue-900 text-white font-semibold">
                                    <span class="text-center">Ilmu Kelautan</span>
                                </div>
                            </div>
                            <span class="font-medium text-xl leading-5 text-gray-800 mt-4">Sayidah Nafisah Lukman</span>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
    
</x-app-layout>