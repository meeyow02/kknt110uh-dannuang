<x-app-layout>
    <x-header_dua />
    @section('title', $title)
    
    <section>
        <div class="container mx-auto px-6 py-32 w-full">
            <h1 class="text-2xl lg:text-3xl font-semibold capitalize text-gray-900 text-center pb-2">Struktur Organisasi Kelurahan Dannuang</h1>
            <div class="flex justify-center">
                <div class="w-[12rem] md:w-[26rem] lg:w-[32rem] h-1 bg-blue-800 rounded"></div>
            </div>

            {{-- PEGAWAI --}}
            <div class="pt-12 flex flex-col items-center">
                <div class="flex flex-col items-center">
                    <span class="font-bold text-xl lg:text-2xl text-gray-900">Lurah Dannuang</span>
                    <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                        <img class="mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                    </div>
                    <span class="font-semibold text-xl text-gray-900">Nur Amal, S.H.</span>
                    <span class="font-light text-base text-gray-700">NIP. 19701121 200604 1 010</span>
                </div>

                <div class="flex flex-col items-center py-12">
                    <span class="font-bold text-xl lg:text-2xl text-gray-900">Sekretaris Lurah Dannuang</span>
                    <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                        <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/seklur.png" alt="">
                    </div>
                    <span class="font-semibold text-xl text-gray-900">Jusriani, S.A.P.</span>
                    <span class="font-light text-base text-gray-700">NIP. 19870330 200904 2 003</span>
                </div>

                <div class="flex flex-col lg:flex-row items-center lg:gap-48">
                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Kasi Pemerintahan & Trantibum</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak nasin.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">H. Muhammad Nasin, S.A.P.</span>
                        <span class="font-light text-base text-gray-700">NIP. 19651130 200701 1 016</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Staff Pengelola Keuangan</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak rizal.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Muhammad Rizal</span>
                        <span class="font-light text-base text-gray-700">NIP. 19671110 198903 1 020</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Staff Pengelola Data</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/mustainah.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Mustainah, S.Sos.</span>
                        <span class="font-light text-base text-gray-700">NIP. 19760916 200801 2 008</span>
                    </div>
                </div>
                {{-- END OF PEGAWAI --}}

                {{-- HONOR --}}
                <div class="grid grid-cols-1 md:grid-flow-row md:grid-cols-2 md:gap-x-28 lg:grid-cols-4 items-center lg:gap-28">
                    <div class="flex flex-col items-center py-12 md:py-8">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Honor</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/ibu mini.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Rosmini</span>
                    </div>

                    <div class="flex flex-col items-center py-12 md:py-8">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Honor</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak isra.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Israil</span>
                    </div>

                    <div class="flex flex-col items-center py-12 md:py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Honor</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/sulfiana.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Sulfiana</span>
                    </div>

                    <div class="flex flex-col items-center py-12 md:py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900">Honor</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/ainul.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Ainul Bayani Asdar</span>
                    </div>
                    
                </div>
                {{-- END OF HONOR --}}
                
                {{-- KEPALA LINGKUNGAN --}}
                <h1 class="text-2xl lg:text-3xl font-semibold capitalize text-gray-900 text-center pb-2 pt-24">Kepala Lingkungan</h1>
                <div class="flex justify-center">
                    <div class="w-40 lg:w-64 h-1 bg-blue-800 rounded"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-flow-row md:grid-cols-2 lg:grid-cols-4 md:gap-x-28 lg:flex-row items-center lg:gap-28">
                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Kepala Lingkungan <br>Babana</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Lukman L</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Kepala Lingkungan <br>Batuloe</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Nasruddin</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Kepala Lingkungan <br>Appasarange</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Suherman</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Kepala Lingkungan <br>Paranyelling</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Kisman</span>
                    </div>
                    
                </div>
                {{-- END OF KEPALA LINGKUNGAN --}}
                
                {{-- PUSKESLU --}}
                <h1 class="text-2xl lg:text-3xl font-semibold capitalize text-gray-900 text-center pb-2 pt-24">Puskeslu Kel. Dannuang</h1>
                <div class="flex justify-center">
                    <div class="w-56 lg:w-80 h-1 bg-blue-800 rounded"></div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:gap-28">
                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Bidan</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Mispaeni, A.Md.Keb.</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Perawat</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Asmarini, A.Md.Kep.</span>
                    </div>
                    
                </div>
                {{-- END OF PUSKESLU --}}

                {{-- BHABINKAMTIBMAS --}}
                <h1 class="text-2xl lg:text-3xl font-semibold capitalize text-gray-900 text-center pb-2 pt-24">Bhabinkamtibmas & Babinsa Kel. Dannuang</h1>
                <div class="flex justify-center">
                    <div class="w-64 md:w-[27rem] lg:w-[35rem] h-1 bg-blue-800 rounded"></div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:gap-28">
                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Bhabinkamtibmas</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Aiptu Arman</span>
                    </div>

                    <div class="flex flex-col items-center py-12">
                        <span class="font-bold text-xl lg:text-2xl text-gray-900 text-center">Babinsa</span>
                        <div class="w-64 h-64 rounded bg-blue-900 shadow-md">
                            <img class=" mx-auto object-contain rounded-xl w-full h-full lg:w-64 lg:h-64" src="assets/img/pak amal_edit.png" alt="">
                        </div>
                        <span class="font-semibold text-xl text-gray-900">Serka Muh. Yunus</span>
                    </div>
                    
                </div>
                {{-- END OF BHABINTAMTIBMAS --}}

            </div>
            
        </div>
    </section>
    
</x-app-layout>