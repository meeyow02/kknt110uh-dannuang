<x-app-layout>
    <x-header_dua />
    @section('title', $title)
    <section>
        <div class="container mx-auto p-6">
            <div class="mt-20">
                <a href="/post" class="underline text-blue-500" title="kembali ke halaman post">kembali ke halaman sebelumnya</a>
            </div>
            <h1 class="mt-8 text-3xl font-semibold capitalize lg:text-4xl text-gray-900">{{ $post->judul }}</h1>
            <span class="text-gray-600 text-base font-medium">{{ $post->created_at->format('m/d/Y') }}</span>

            <div class="px-4 flex justify-center py-8">
                <img class="object-scale-down w-full lg:mx-6 lg:w-1/2 rounded-md h-72 lg:h-96" src="{{ asset('postfoto/'.$post->foto) }}"alt="{{ $post->foto }}">
            </div>

            <div class="px-4 mb-32 text-gray-800 text-justify">{!! $post->isi !!}</div>
            
            
        </div>
    </section>

</x-app-layout>