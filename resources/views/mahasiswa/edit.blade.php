<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- Tombol Kembali --}}
                    <a href="{{ route('mahasiswa.index') }}" 
                       class="inline-block mb-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        ← Kembali
                    </a>

                    {{-- Tampilkan Error --}}
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <strong>Oops!</strong> Ada kesalahan:<br><br>
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Form Edit --}}
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
                                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">NIM</label>
                            <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
                                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">Jurusan</label>
                            <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm 
                                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <button type="submit" 
                                class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                            💾 Update
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
