<x-app-layout>
    <section class="bg-white">
        <div class="max-w-2xl px-12 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Buat Post</h2>
            <form action="{{ url('post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-8">
                    <div class="sm:col-span-2">
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                        <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                    </div>
                    
                    <div class="flex flex-col justify-center w-full">
                        <label class="block text-sm font-medium text-gray-900" for="foto">Upload file</label>
                        <input id="foto" type="file" name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    </div> 

                    <div class="sm:col-span-2">
                        <label for="isi" class="block mb-2 text-sm font-medium text-gray-900">Isi</label>
                        <textarea id="text-area" name="isi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"></textarea>
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <button type="submit" class="text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
      </section>

    @section('scripts')
        <script>
            ClassicEditor
                .create( document.querySelector( '#text-area' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>    
    @endsection
     
</x-app-layout>