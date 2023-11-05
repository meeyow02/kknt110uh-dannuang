<x-app-layout>
    @section('title', $title)
    <x-header_dua />
    <section class="bg-gray-50 p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-2xl px-4 lg:px-12 mt-20">
            <div class="relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="flex-1 flex items-center space-x-2">
                        <h5>CRUD</h5>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t">
                    
                    <div class="bg-green-700 rounded-md w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="{{ url('/post/create') }}" title="Tambah Post" class="flex items-center justify-center text-white text-sm px-4 py-2">
                            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" /></svg>
                            <span class="text-white">Tambah Post</span>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">Judul</th>
                                <th scope="col" class="p-4">Isi</th>
                                <th scope="col" class="p-4">Gambar</th>
                                <th scope="col" class="p-4">Waktu Upload</th>
                                <th scope="col" class="p-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts->count() > 0)
                                @foreach ($posts as $post)
                                    <tr class="border-b hover:bg-gray-100 text-gray-900">
                                        <td class="px-4 py-3">
                                            <span class="bg-primary-100 text-primary-800 text-base font-medium px-2 py-0.5 rounded">{{ $post->judul }}</span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <span class="bg-primary-100 text-primary-800 text-base font-medium px-2 py-0.5 rounded">{!! Str::limit($post->isi, 50) !!}</span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <span class="bg-primary-100 text-primary-800 text-base font-medium px-2 py-0.5 rounded">
                                                <img src="{{ asset('postfoto/'.$post->foto) }}" class="object-scale-down h-48 w-96" alt="{{ $post->foto }}">
                                            </span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <span class="bg-primary-100 text-gray-600 text-base font-medium px-2 py-0.5 rounded">{{ $post->created_at->format('m/d/Y') }}</span>
                                        </td>
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            <div class="flex flex-col gap-4 items-center space-x-4">
                                                <a href="{{ url('/post/' . $post->id) }}" title="Preview Post">
                                                    <button type="button" data-drawer-target="drawer-read-product-advanced" data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="py-2 px-3 flex items-center text-sm font-medium text-center text-sky-700 focus:outline-none bg-white rounded-lg border border-sky-700 hover:bg-sky-700 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 -ml-0.5">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                                        </svg>
                                                        Preview
                                                    </button>
                                                </a>

                                                <a href="{{ url('/post/' . $post->id . '/edit') }}" title="Edit Post">
                                                    <button type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="py-2 px-3 flex items-center text-sm font-medium text-center text-blue-600 bg-white rounded-lg border border-blue-600 hover:bg-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        Edit
                                                    </button>
                                                </a>
                                                
                                                <form action="{{ url('/post' . '/' . $post->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="Hapus Post" onclick="return confirm('Hapus?')" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center uppercase p-4" colspan="14">Tidak ada postingan</td>
                                </tr>
                            @endif
                            
                            
                        </tbody>
                    </table>
                </div>


                <div class="flex justify-center items-start md:items-center space-y-3 md:space-y-0 p-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>