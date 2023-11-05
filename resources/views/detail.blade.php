<x-app-layout>
    <x-header_dua />
    @section('title', $title)
    
    <section>
        <div class="container mx-auto px-24 py-32">
            <div class="mb-8">
                <a href="/post" class="underline text-blue-500" title="kembali ke halaman post">kembali ke halaman sebelumnya</a>
            </div>
            <h1 class="text-3xl font-semibold capitalize lg:text-4xl text-gray-900">{{ $posts->judul }}</h1>
            <span class="text-gray-500 text-base font-medium">{{ $posts->created_at->format('m/d/Y') }}</span>

            <div class="px-4 flex justify-center py-8">
                <img class="object-scale-down w-full lg:mx-6 lg:w-1/2 rounded-md h-72 lg:h-96" src="{{ asset('postfoto/'.$posts->foto) }}"alt="{{ $posts->foto }}">
            </div>

            <div class="px-4 text-gray-800 text-justify">{!! $posts->isi !!}</div>

        </div>
        
    </section>
</x-app-layout>