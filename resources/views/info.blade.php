<x-app-layout>
    <x-header_dua />
    @section('title', $title)
    
    <section>
        <div class="container mx-auto px-8 md:px-20 py-32">
            <h1 class="text-3xl font-semibold capitalize lg:text-4xl text-gray-900">Informasi</h1>

            {{-- CARD --}}
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full shadow-xl rounded-sm py-4 md:py-0">
                        <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded h-72 lg:h-96" src="{{ asset('postfoto/'.$post->foto) }}"alt="{{ $post->foto }}">

                        <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 px-4 md:px-0">
                            <a href="{{ url('/info/' . $post->id) }}" class="block mt-4 text-2xl font-semibold hover:underline text-gray-900 md:text-3xl">
                                {{ $post->judul }}
                            </a>

                            <span class="mt-3 text-sm text-gray-500 md:text-sm capitalize">
                                {!! Str::limit($post->isi, 200) !!}
                                <br>
                            </span>

                            <a href="{{ url('/info/' . $post->id) }}" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                            <div class="flex items-center mt-2 md:mt-6">
                                <span class="text-sm text-gray-400">{{ $post->created_at->format('m/d/Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="p-2 mt-4 bg-gray-200 rounded">
                    <span class="flex justify-center text-center uppercase text-gray-400 text-sm">Tidak ada postingan</span>
                </div>
            @endif
        </div>
        
        <div class="flex justify-center">
            {{ $posts->links() }}
        </div>
    </section>
</x-app-layout>